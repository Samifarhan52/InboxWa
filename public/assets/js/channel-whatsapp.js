(function(){
  var body=document.getElementById('cw-wa-body'),typing=document.getElementById('cw-typing');
  if(!body)return;
  var seq=[
    {t:'user',m:'Hi, I want to know about your product.'},
    {t:'bot',m:' Sure! How can we help you today?'},
    {t:'bot',m:'Product Details · Book Demo · Talk to Sales'},
    {t:'user',m:'Book Demo'},
    {t:'bot',m:'Great! Please share your name.'},
    {t:'user',m:'Rahul Sharma'},
    {t:'bot',m:'Thanks Rahul! Your request has been received. ✓'},
    {t:'bot',m:'Lead Created ✓ · Team Notified ✓ · Follow-up Ready ✓'}
  ];
  var i=0,timer=null;
  function add(m,t){var el=document.createElement('div');el.className='cw-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
  function next(){
    if(i>=seq.length)return;
    var x=seq[i++];
    typing.classList.add('on');
    timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,650)},x.t==='bot'?450:300);
  }
  next();
})();
