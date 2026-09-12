(function(){
  var body=document.getElementById('wf-wa-body'),typing=document.getElementById('wf-typing');
  var tabs=document.querySelectorAll('#wf-tabs button');
  if(!body)return;
  var flows={
    lead:[
      {t:'user',m:'Hi, I want to know more about your service.'},
      {t:'bot',m:'Sure! Let me collect a few details.'},
      {t:'bot',m:"What's your name?"},{t:'user',m:'Rahul Sharma'},
      {t:'bot',m:"What's your email?"},{t:'user',m:'rahul@example.com'},
      {t:'bot',m:'Requirement? Demo · Pricing · Support'},{t:'user',m:'Demo'},
      {t:'bot',m:'City?'},{t:'user',m:'Delhi'},
      {t:'bot',m:'Thanks Rahul! Request submitted ✓\nLead Created · Sales Notified'}
    ],
    demo:[{t:'bot',m:'Demo Form'},{t:'bot',m:'Name → Email → Preferred time'},{t:'user',m:'Tomorrow 4 PM'},{t:'bot',m:'Demo request saved ✓'}],
    enquiry:[{t:'bot',m:'Enquiry Form'},{t:'bot',m:'What do you need help with?'},{t:'user',m:'Pricing for WhatsApp API'},{t:'bot',m:'Enquiry captured ✓'}],
    booking:[{t:'bot',m:'Booking Form'},{t:'bot',m:'Service → Date → Time'},{t:'user',m:'Consultation · Sat 11 AM'},{t:'bot',m:'Booking recorded ✓'}],
    support:[{t:'bot',m:'Support Form'},{t:'bot',m:'Describe your issue'},{t:'user',m:'Billing question'},{t:'bot',m:'Ticket created · Agent notified ✓'}]
  };
  var timer=null;
  function clear(){body.querySelectorAll('.wf-msg').forEach(function(e){e.remove()});typing.classList.remove('on')}
  function add(m,t){var el=document.createElement('div');el.className='wf-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
  function run(n){if(timer)clearTimeout(timer);clear();var s=flows[n]||flows.lead,i=0;function next(){if(i>=s.length)return;var x=s[i++];typing.classList.add('on');timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,600)},x.t==='bot'?400:280)}next()}
  tabs.forEach(function(b){b.addEventListener('click',function(){tabs.forEach(function(x){x.classList.remove('is-active')});b.classList.add('is-active');run(b.getAttribute('data-flow'))})});
  run('lead');
})();
