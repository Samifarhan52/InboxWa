(function(){
  var body=document.getElementById('ig-body'),typing=document.getElementById('ig-typing');
  var tabs=document.querySelectorAll('#ig-tabs button');
  if(!body)return;
  var flows={
    dm:[{t:'user',m:'Hi  I’m interested in this product'},{t:'bot',m:'Here’s a product card with options'},{t:'user',m:'What’s the price?'},{t:'bot',m:'Details shared. What’s your requirement?'},{t:'user',m:'Need it for my store'},{t:'bot',m:'Lead Captured ✓ · CRM Updated · Agent Assigned'}],
    lead:[{t:'user',m:'Can someone contact me?'},{t:'bot',m:'Sure — share your name and WhatsApp number'},{t:'user',m:'Priya · +91 XXXXX'},{t:'bot',m:'Lead Created ✓'}],
    product:[{t:'user',m:'Do you have this in other colors?'},{t:'bot',m:'Yes — here are available options'},{t:'bot',m:'View details · Talk to team'}],
    comment:[{t:'bot',m:'Thanks for your comment!'},{t:'bot',m:'We sent you a DM with more info ✓'}],
    story:[{t:'user',m:'Loved your story!'},{t:'bot',m:'Glad you liked it — want product details?'},{t:'user',m:'Yes'},{t:'bot',m:'Details sent in DM ✓'}],
    support:[{t:'user',m:'My order status?'},{t:'bot',m:'Share order ID or talk to support'},{t:'bot',m:'Handoff available ✓'}]
  };
  var timer=null;
  function clear(){body.querySelectorAll('.ig-msg').forEach(function(e){e.remove()});typing.classList.remove('on')}
  function add(m,t){var el=document.createElement('div');el.className='ig-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
  function run(n){if(timer)clearTimeout(timer);clear();var s=flows[n]||flows.dm,i=0;function next(){if(i>=s.length)return;var x=s[i++];typing.classList.add('on');timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,600)},x.t==='bot'?420:280)}next()}
  tabs.forEach(function(b){b.addEventListener('click',function(){tabs.forEach(function(x){x.classList.remove('is-active')});b.classList.add('is-active');run(b.getAttribute('data-flow'))})});
  var replay=document.getElementById('ig-replay');
  if(replay)replay.addEventListener('click',function(){var active=document.querySelector('#ig-tabs button.is-active');run(active?active.getAttribute('data-flow'):'dm')});
  run('dm');
})();
