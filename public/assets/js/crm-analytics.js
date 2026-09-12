(function(){
  var log=document.getElementById('ca-sim-log');
  var tabs=document.querySelectorAll('#ca-tabs button');
  var m={contacts:document.getElementById('ca-m-contacts'),leads:document.getElementById('ca-m-leads'),conv:document.getElementById('ca-m-conv'),fu:document.getElementById('ca-m-fu')};
  var steps={
    lead:{t:'New WhatsApp Lead → Contact Created', leads:'+1', conv:'+1', fu:'—', contacts:'+1'},
    qualify:{t:'Lead Qualified · Status updated in CRM', leads:'+1', conv:'+1', fu:'—', contacts:'+1'},
    assign:{t:'Assigned to Sales · Team notified', leads:'+1', conv:'+1', fu:'—', contacts:'+1'},
    follow:{t:'Follow-up scheduled · Analytics updated', leads:'+1', conv:'+1', fu:'+1', contacts:'+1'},
    convert:{t:'Converted / Closed · Pipeline Won', leads:'+1', conv:'+1', fu:'+1', contacts:'+1'}
  };
  function apply(n){
    var s=steps[n]||steps.lead;
    if(log)log.textContent=s.t+' (Demo Data)';
    if(m.leads)m.leads.textContent=s.leads;
    if(m.conv)m.conv.textContent=s.conv;
    if(m.fu)m.fu.textContent=s.fu;
    if(m.contacts)m.contacts.textContent=s.contacts;
  }
  tabs.forEach(function(b){b.addEventListener('click',function(){tabs.forEach(function(x){x.classList.remove('is-active')});b.classList.add('is-active');apply(b.getAttribute('data-flow'))})});
  apply('lead');

  var labels={today:'Today · Demo', '7d':'7 Days · Demo', '30d':'30 Days · Demo', campaign:'Campaign · Demo', agent:'Agent · Demo', source:'Lead Source · Demo'};
  document.querySelectorAll('#ca-filters button').forEach(function(b){
    b.addEventListener('click',function(){
      document.querySelectorAll('#ca-filters button').forEach(function(x){x.classList.remove('is-active')});
      b.classList.add('is-active');
      var lab=labels[b.getAttribute('data-range')]||'Demo Data';
      ['ca-a1','ca-a2','ca-a3','ca-a4','ca-a5','ca-a6'].forEach(function(id){var el=document.getElementById(id);if(el)el.textContent=lab;});
    });
  });
})();
