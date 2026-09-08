(function(){
  var modal = document.getElementById('addon-modal');
  var form = document.getElementById('addon-form');
  if(!modal||!form) return;
  var wa = (window.INBOXWA_CONFIG && window.INBOXWA_CONFIG.whatsapp) || (window.HB_PRICING && window.HB_PRICING.wa) || '918050854445';

  function openModal(card){
    var id = card.getAttribute('data-addon-id')||'';
    var name = card.getAttribute('data-addon-name')||'Add-on';
    document.getElementById('af-addon-id').value = id;
    document.getElementById('af-addon-name').value = name;
    document.getElementById('af-addon-display').value = name;
    document.getElementById('af-status').hidden = true;
    modal.hidden = false;
    modal.setAttribute('aria-hidden','false');
    document.body.style.overflow = 'hidden';
  }
  function closeModal(){
    modal.hidden = true;
    modal.setAttribute('aria-hidden','true');
    document.body.style.overflow = '';
  }
  document.querySelectorAll('.js-addon-open').forEach(function(btn){
    btn.addEventListener('click', function(){
      var card = btn.closest('[data-addon-id]') || btn.closest('.addon-card') || btn.parentElement;
      openModal(card);
    });
  });
  modal.querySelectorAll('[data-addon-close]').forEach(function(el){ el.addEventListener('click', closeModal); });
  document.addEventListener('keydown', function(e){ if(e.key==='Escape'&&!modal.hidden) closeModal(); });

  form.addEventListener('submit', function(e){
    e.preventDefault();
    if(!form.checkValidity()){ form.reportValidity(); return; }
    var btn = document.getElementById('af-submit');
    var status = document.getElementById('af-status');
    btn.disabled = true; btn.textContent = 'Submitting...';
    var fd = new FormData(form);
    var msg = '*InboxWa Add-on Request*\n\n'+
      'Name: '+fd.get('name')+'\n'+
      'Business: '+fd.get('business')+'\n'+
      'Email: '+fd.get('email')+'\n'+
      'Mobile: '+fd.get('mobile')+'\n'+
      'WhatsApp registered: '+fd.get('whatsapp_number')+'\n'+
      'Country: '+fd.get('country')+'\n'+
      'Plan: '+fd.get('current_plan')+'\n'+
      'Add-on: '+fd.get('selected_addon')+'\n'+
      'Billing: '+fd.get('billing')+'\n'+
      'Message: '+(fd.get('message')||'—');
    try{
      fetch('/api/lead.php',{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({
        type:'addon', name:fd.get('name'), email:fd.get('email'), phone:fd.get('mobile'),
        product: fd.get('selected_addon'), message: msg, source_page:'/pricing/'
      }),credentials:'same-origin'}).catch(function(){});
    }catch(err){}
    setTimeout(function(){
      status.hidden = false;
      status.innerHTML = 'Thank you — your add-on request has been received. Our team will contact you shortly.<br><a class="btn btn-sm btn-primary" style="margin-top:.75rem" target="_blank" rel="noopener" href="https://wa.me/'+wa+'?text='+encodeURIComponent(msg)+'">Continue on WhatsApp</a>';
      btn.disabled = false; btn.textContent = 'Submit request';
      form.reset();
    }, 600);
  });
})();
