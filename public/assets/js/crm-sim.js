(function(){
  var body=document.getElementById('crm-wa-body'),typing=document.getElementById('crm-typing'),status=document.getElementById('crm-status');
  var tabs=document.querySelectorAll('#crm-tabs button');
  if(!body)return;
  var flows={
    capture:[{t:'bot',m:'New lead received from CRM ✓'},{t:'bot',m:'Hi Rahul  Thanks for your interest. How can we help?'},{t:'bot',m:'Book Demo · View Pricing · Talk to Sales'}],
    wa:[{t:'user',m:'Book Demo'},{t:'bot',m:'Demo request created ✓'},{t:'bot',m:'CRM status → Demo Requested'}],
    qualify:[{t:'user',m:'I want to know more about your product.'},{t:'bot',m:'What are you interested in?'},{t:'bot',m:'Pricing · Demo · Enterprise · Support'},{t:'user',m:'Demo'},{t:'bot',m:'Intent: Demo · Status: Qualified · Assign to Sales'}],
    assign:[{t:'bot',m:'Lead Assigned → Sales Team'},{t:'bot',m:'Sales Agent Notified ✓'}],
    followup:[{t:'bot',m:'Hi Rahul  Just following up regarding your enquiry.'},{t:'bot',m:'Would you like to continue?'}],
    pipeline:[{t:'bot',m:'Pipeline: New → Contacted → Qualified → Demo → Proposal → Converted'}]
  };
  var statusMap={capture:'New',wa:'Demo Requested',qualify:'Qualified',assign:'Assigned',followup:'Follow-up',pipeline:'In Pipeline'};
  var timer=null;
  function clear(){body.querySelectorAll('.crm-msg').forEach(function(e){e.remove()});typing.classList.remove('on')}
  function add(m,t){var el=document.createElement('div');el.className='crm-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
  function run(n){if(timer)clearTimeout(timer);clear();if(status)status.textContent=statusMap[n]||'New';var s=flows[n]||flows.capture,i=0;function next(){if(i>=s.length)return;var x=s[i++];typing.classList.add('on');timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,650)},x.t==='bot'?450:300)}next()}
  tabs.forEach(function(b){b.addEventListener('click',function(){tabs.forEach(function(x){x.classList.remove('is-active')});b.classList.add('is-active');run(b.getAttribute('data-flow'))})});
  run('capture');
})();
