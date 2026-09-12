(function(){
  var cfg = window.HB_PRICING || {};
  var rate = Number(cfg.rate)||0.012;
  var gst = Number(cfg.gst)||0.18;
  var billing = 'monthly';
  var currency = 'INR';

  function fmtINR(n){ return '₹' + Number(n).toLocaleString('en-IN'); }
  function fmtUSD(n){ return '$' + Number(n).toLocaleString('en-US',{maximumFractionDigits:0}); }
  function toUSD(inr){ return Math.round(Number(inr)*rate); }
  function display(inr){
    if(currency==='USD') return fmtUSD(toUSD(inr));
    return fmtINR(inr);
  }

  function refreshCards(){
    document.querySelectorAll('.price-main').forEach(function(el){
      var m = Number(el.getAttribute('data-monthly'));
      var y = Number(el.getAttribute('data-yearly'));
      var val = billing==='yearly' ? y : m;
      el.textContent = display(val);
      var card = el.closest('.price-card');
      var period = card.querySelector('.billing-label');
      if(period) period.textContent = billing==='yearly' ? 'year' : 'month';
      var equiv = card.querySelector('.price-equiv');
      if(equiv){
        if(currency==='INR'){
          equiv.textContent = billing==='yearly' ? ('≈ ' + fmtUSD(toUSD(val)) + ' / year') : ('≈ ' + fmtUSD(toUSD(val)) + ' / month');
        } else {
          equiv.textContent = billing==='yearly' ? (fmtINR(val) + ' equivalent / year') : (fmtINR(val) + ' equivalent / month');
        }
      }
      var setupEl = card.querySelector('[data-setup]');
      if(setupEl){
        var sm = Number(el.getAttribute('data-setup-m'))||0;
        var sy = Number(el.getAttribute('data-setup-y'))||0;
        var s = billing==='yearly' ? sy : sm;
        if(s>0) setupEl.textContent = 'Setup fee: ' + display(s) + ' one-time';
        else if(billing==='yearly' && sm>0) setupEl.textContent = 'Setup fee waived on yearly';
        else setupEl.textContent = '';
      }
    });
    document.querySelectorAll('.addon-price[data-inr]').forEach(function(el){
      var inr = Number(el.getAttribute('data-inr'));
      el.textContent = display(inr) + ' / month';
    });
    // save badge
    var plans = cfg.plans||[];
    var maxPct = 0;
    plans.forEach(function(p){
      var save = (p.monthly*12)-p.yearly;
      var pct = p.monthly? Math.round((save/(p.monthly*12))*100):0;
      if(pct>maxPct) maxPct=pct;
    });
    var badge = document.getElementById('save-badge');
    if(badge && maxPct>0) badge.textContent = 'Save up to '+maxPct+'%';
    refreshCalc();
  }

  document.querySelectorAll('[data-billing]').forEach(function(btn){
    btn.addEventListener('click', function(){
      billing = btn.getAttribute('data-billing');
      document.querySelectorAll('[data-billing]').forEach(function(b){b.classList.toggle('is-active', b===btn);});
      refreshCards();
    });
  });
  document.querySelectorAll('[data-currency]').forEach(function(btn){
    btn.addEventListener('click', function(){
      currency = btn.getAttribute('data-currency');
      document.querySelectorAll('[data-currency]').forEach(function(b){b.classList.toggle('is-active', b===btn);});
      refreshCards();
    });
  });

  function buildCalcAddons(){
    var box = document.getElementById('calc-addons');
    if(!box) return;
    var list = (cfg.capacityAddons||[]).concat(cfg.channelAddons||[]);
    box.innerHTML = '<strong style="font-size:.9rem">Add-ons (optional)</strong>' + list.map(function(a){
      return '<label><input type="checkbox" data-addon-price="'+a.price+'" value="'+a.id+'"> '+a.name+' ('+fmtINR(a.price)+'/mo)</label>';
    }).join('');
    box.querySelectorAll('input').forEach(function(i){ i.addEventListener('change', refreshCalc); });
  }

  function refreshCalc(){
    var planId = (document.getElementById('calc-plan')||{}).value || 'pro';
    var bill = (document.getElementById('calc-billing')||{}).value || 'monthly';
    var plan = (cfg.plans||[]).find(function(p){return p.id===planId;}) || {monthly:0,yearly:0};
    var base = bill==='yearly' ? plan.yearly : plan.monthly;
    var add = 0;
    document.querySelectorAll('#calc-addons input:checked').forEach(function(i){
      var p = Number(i.getAttribute('data-addon-price'))||0;
      add += bill==='yearly' ? p*12 : p;
    });
    var sub = base + add;
    var g = Math.round(sub * gst);
    var total = sub + g;
    function set(id,v){ var el=document.getElementById(id); if(el) el.textContent = display(v) + (bill==='yearly'&&id!=='calc-gst'?'':''); }
    var el;
    if(el=document.getElementById('calc-base')) el.textContent = display(base);
    if(el=document.getElementById('calc-addons-total')) el.textContent = display(add);
    if(el=document.getElementById('calc-sub')) el.textContent = display(sub);
    if(el=document.getElementById('calc-gst')) el.textContent = display(g);
    if(el=document.getElementById('calc-total')) el.textContent = display(total);
  }

  document.getElementById('calc-plan') && document.getElementById('calc-plan').addEventListener('change', refreshCalc);
  document.getElementById('calc-billing') && document.getElementById('calc-billing').addEventListener('change', refreshCalc);

  buildCalcAddons();
  refreshCards();
})();
