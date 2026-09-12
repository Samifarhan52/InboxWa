(function(){
  var body=document.getElementById('ecom-wa-body'),typing=document.getElementById('ecom-typing');
  var tabs=document.querySelectorAll('#ecom-tabs button');
  if(!body)return;
  var flows={
    shop:[{t:'user',m:'Hi, I am looking for running shoes.'},{t:'bot',m:'Sure!  Preferred budget?'},{t:'bot',m:'Under ₹2,000 · ₹2,000–₹5,000 · ₹5,000+'},{t:'user',m:'₹2,000–₹5,000'},{t:'bot',m:'Great! Running Shoes — ₹2,999\nView Product · Add to Cart'}],
    recommend:[{t:'user',m:'Which product is best for me?'},{t:'bot',m:'Based on your needs, try these options:'},{t:'bot',m:'1) Running Shoes ₹2,999\n2) Everyday Bag\n3) Smart Watch\n(Demo products)'}],
    cart:[{t:'bot',m:'Hi Rahul  You left something in your cart.'},{t:'bot',m:'Your selected product is still waiting.'},{t:'bot',m:'✓ Cart recovery message sent\n[Complete Order]'}],
    order:[{t:'bot',m:'Thank you for your order, Rahul! '},{t:'bot',m:'Order #HB1024 confirmed\nPremium Running Shoes · ₹2,999'},{t:'bot',m:'[Track Order]'}],
    track:[{t:'bot',m:' Order #HB1024 is out for delivery.'},{t:'bot',m:'Confirmed → Packed → Shipped → Out for Delivery'},{t:'bot',m:'[Track Order]'}],
    support:[{t:'user',m:'I want to exchange my product.'},{t:'bot',m:'Sure. What would you like help with?'},{t:'bot',m:'Exchange · Return · Order Status · Talk to Support'},{t:'bot',m:'✓ Request created'}],
    repeat:[{t:'bot',m:'Hi Rahul  Hope you are enjoying your purchase!'},{t:'bot',m:'Looking for something new? Here are products you may like.'},{t:'bot',m:'(Personalized recommendations — demo)'}]
  };
  var timer=null;
  function clear(){body.querySelectorAll('.ecom-msg').forEach(function(e){e.remove()});typing.classList.remove('on')}
  function add(m,t){var el=document.createElement('div');el.className='ecom-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
  function run(n){if(timer)clearTimeout(timer);clear();var s=flows[n]||flows.shop,i=0;function next(){if(i>=s.length)return;var x=s[i++];typing.classList.add('on');timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,700)},x.t==='bot'?500:350)}next()}
  tabs.forEach(function(b){b.addEventListener('click',function(){tabs.forEach(function(x){x.classList.remove('is-active')});b.classList.add('is-active');run(b.getAttribute('data-flow'))})});
  run('shop');
})();
