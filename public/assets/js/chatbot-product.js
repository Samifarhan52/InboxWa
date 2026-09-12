(function(){
  var body=document.getElementById('bot-wa-body'),typing=document.getElementById('bot-typing');
  var tabs=document.querySelectorAll('#bot-tabs button');
  if(!body)return;
  var flows={
    build:[{t:'bot',m:'Bot Name: InboxWa Assistant'},{t:'bot',m:'Welcome: Hi  How can I help you today?'},{t:'bot',m:'Language: Hindi + English · Tone: Professional'},{t:'bot',m:'✓ Chatbot Created'}],
    train:[{t:'bot',m:'Knowledge sources connected'},{t:'bot',m:'Website · PDF · FAQ · Q&A'},{t:'bot',m:'Reading → Processing → Ready ✓'}],
    test:[{t:'user',m:'What does InboxWa do?'},{t:'bot',m:'InboxWa helps businesses automate WhatsApp with AI, CRM and workflows.'},{t:'user',m:'Can I book a demo?'},{t:'bot',m:'Absolutely. Book Demo · Talk to Team'}],
    deploy:[{t:'bot',m:'Build → Train → Test → Approve → Deploy'},{t:'bot',m:'Channels: WhatsApp · Website · API'},{t:'bot',m:'● Chatbot Live'}],
    live:[{t:'user',m:'Hi, what does InboxWa do?'},{t:'bot',m:'Hello!  InboxWa helps businesses automate WhatsApp conversations with AI, CRM and business workflows.'},{t:'user',m:'Can I book a demo?'},{t:'bot',m:'Absolutely. I can help you book a demo.\nBook Demo · Talk to Team'}]
  };
  var timer=null;
  function clear(){body.querySelectorAll('.bot-msg').forEach(function(e){e.remove()});typing.classList.remove('on')}
  function add(m,t){var el=document.createElement('div');el.className='bot-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
  function run(n){if(timer)clearTimeout(timer);clear();var s=flows[n]||flows.live,i=0;function next(){if(i>=s.length)return;var x=s[i++];typing.classList.add('on');timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,650)},x.t==='bot'?450:300)}next()}
  tabs.forEach(function(b){b.addEventListener('click',function(){tabs.forEach(function(x){x.classList.remove('is-active')});b.classList.add('is-active');run(b.getAttribute('data-flow'))})});
  run('live');

  var acts={
    demo:'Bot: Great! I can help you book a demo. Please share a preferred time.',
    pricing:'Bot: I can share plan options. Would you like View Plans or Talk to Sales?',
    product:'Bot: InboxWa provides WhatsApp API, automation, CRM and AI chatbot for business messaging.',
    agent:'Bot: Connecting you with a team member… Human handover initiated ✓',
    order:'Bot: Please share your order ID to check status.',
    support:'Bot: I can help with common questions or connect you to support.'
  };
  var out=document.getElementById('bot-action-out');
  document.querySelectorAll('#bot-action-btns button').forEach(function(b){
    b.addEventListener('click',function(){if(out)out.textContent=acts[b.getAttribute('data-act')]||'';});
  });

  var lives={
    product:'Customer: What is InboxWa?\nAI: InboxWa is a WhatsApp + AI automation platform for business messaging, CRM and workflows.',
    pricing:'Customer: What is the pricing?\nAI: I can help with plans. Would you like me to connect you with sales?',
    demo:'Customer: Book a demo\nAI: Sure! Demo request created. Our team will confirm shortly.',
    agent:'Customer: Talk to a human\nAI: Transferring to an agent… Handover complete ✓'
  };
  var liveOut=document.getElementById('bot-live-out');
  document.querySelectorAll('#bot-live-btns button').forEach(function(b){
    b.addEventListener('click',function(){if(liveOut)liveOut.textContent=lives[b.getAttribute('data-live')]||'';});
  });
})();
