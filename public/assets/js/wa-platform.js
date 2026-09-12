(function(){
  var body=document.getElementById('wbp-wa-body'),typing=document.getElementById('wbp-typing');
  var tabs=document.querySelectorAll('#wbp-tabs button');
  if(!body)return;
  var flows={
    api:[{t:'user',m:'Hi, I need help'},{t:'bot',m:'Message Received ✓'},{t:'bot',m:'Customer → WhatsApp API → InboxWa → Agent'},{t:'bot',m:'Conversation ready in inbox'}],
    inbox:[{t:'bot',m:'New Conversation'},{t:'user',m:'I need product details'},{t:'bot',m:'Assign to: Sales Team · Agent: Rahul'},{t:'bot',m:'Status: In Progress'}],
    broadcast:[{t:'bot',m:'Campaign Created'},{t:'bot',m:'Audience: Demo segment'},{t:'bot',m:'Template: New Offer'},{t:'bot',m:'Status: Ready to send'}]
  };
  var timer=null;
  function clear(){body.querySelectorAll('.wbp-msg').forEach(function(e){e.remove()});typing.classList.remove('on')}
  function add(m,t){var el=document.createElement('div');el.className='wbp-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
  function run(n){if(timer)clearTimeout(timer);clear();var s=flows[n]||flows.api,i=0;function next(){if(i>=s.length)return;var x=s[i++];typing.classList.add('on');timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,600)},x.t==='bot'?400:280)}next()}
  tabs.forEach(function(b){b.addEventListener('click',function(){tabs.forEach(function(x){x.classList.remove('is-active')});b.classList.add('is-active');run(b.getAttribute('data-flow'))})});
  run('api');
})();
