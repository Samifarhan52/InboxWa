(function(){
  var body=document.getElementById('tg-body'),typing=document.getElementById('tg-typing');
  var tabs=document.querySelectorAll('#tg-tabs button');
  if(!body)return;
  var flows={
    bot:[
      {t:'user',m:'Hi! I want to know more about your service.'},
      {t:'bot',m:' Welcome! How can I help you?'},
      {t:'bot',m:'Products · Pricing · Book Demo'},
      {t:'user',m:'Products'},
      {t:'bot',m:'WhatsApp Automation · CRM · AI Chatbot'},
      {t:'user',m:'I want a demo.'},
      {t:'bot',m:'Book Demo · Talk to Team'},
      {t:'bot',m:'Lead Captured ✓ · Conversation Saved ✓ · Team Notified ✓'}
    ],
    lead:[{t:'user',m:'I want a demo.'},{t:'bot',m:"What's your name?"},{t:'user',m:'Rahul'},{t:'bot',m:'Interest: CRM · WhatsApp API · Automation'},{t:'bot',m:'Lead Created ✓'}],
    support:[{t:'user',m:'I need help'},{t:'bot',m:'Describe your issue or /support'},{t:'bot',m:'Answer sent · Handover available ✓'}],
    notify:[{t:'bot',m:' New Lead notification'},{t:'bot',m:'Order update · Appointment reminder · Team alert'}],
    book:[{t:'user',m:'Book a demo'},{t:'bot',m:'Choose: Today · Tomorrow'},{t:'user',m:'Tomorrow'},{t:'bot',m:'Booking request saved ✓'}]
  };
  var timer=null;
  function clear(){body.querySelectorAll('.tg-msg').forEach(function(e){e.remove()});typing.classList.remove('on')}
  function add(m,t){var el=document.createElement('div');el.className='tg-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
  function run(n){if(timer)clearTimeout(timer);clear();var s=flows[n]||flows.bot,i=0;function next(){if(i>=s.length)return;var x=s[i++];typing.classList.add('on');timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,600)},x.t==='bot'?420:280)}next()}
  tabs.forEach(function(b){b.addEventListener('click',function(){tabs.forEach(function(x){x.classList.remove('is-active')});b.classList.add('is-active');run(b.getAttribute('data-flow'))})});
  run('bot');
})();
