(function(){
  var search=document.getElementById('ic-search');
  var filters=document.querySelectorAll('#ic-filters button');
  var cards=document.querySelectorAll('#ic-grid .ic-card');
  var empty=document.getElementById('ic-empty');
  var cat='all';
  function apply(){
    var q=(search&&search.value||'').toLowerCase().trim();
    var n=0;
    cards.forEach(function(c){
      var name=(c.getAttribute('data-name')||'')+(c.textContent||'');
      name=name.toLowerCase();
      var cats=(c.getAttribute('data-cat')||'');
      var okCat=cat==='all'||cats.indexOf(cat)>=0;
      var okQ=!q||name.indexOf(q)>=0;
      var show=okCat&&okQ;
      c.classList.toggle('hidden',!show);
      if(show)n++;
    });
    if(empty){empty.hidden=n>0}
  }
  if(search)search.addEventListener('input',apply);
  filters.forEach(function(b){
    b.addEventListener('click',function(){
      filters.forEach(function(x){x.classList.remove('is-active')});
      b.classList.add('is-active');
      cat=b.getAttribute('data-cat')||'all';
      apply();
    });
  });

  var sims={
    lead:'Website / Facebook → InboxWa → CRM → WhatsApp → Sales Team',
    order:'Shopify / WooCommerce → InboxWa → WhatsApp → Customer',
    booking:'Google Calendar → InboxWa → WhatsApp → Customer'
  };
  var out=document.getElementById('ic-sim-out');
  document.querySelectorAll('#ic-sim-tabs button').forEach(function(b){
    b.addEventListener('click',function(){
      document.querySelectorAll('#ic-sim-tabs button').forEach(function(x){x.classList.remove('is-active')});
      b.classList.add('is-active');
      var key=b.getAttribute('data-sim');
      var text=sims[key]||sims.lead;
      if(!out)return;
      out.innerHTML='';
      text.split(' → ').forEach(function(part,i,arr){
        var s=document.createElement('span');s.textContent=part;out.appendChild(s);
        if(i<arr.length-1){var a=document.createElement('span');a.className='arr';a.textContent='→';out.appendChild(a)}
      });
    });
  });
})();
