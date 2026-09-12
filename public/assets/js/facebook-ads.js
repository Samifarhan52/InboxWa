(function(){
  var body=document.getElementById('fa-body'),typing=document.getElementById('fa-typing');
  if(body){
    var seq=[
      {t:'user',m:'Hi, I’m interested in this offer.'},
      {t:'bot',m:'Great! How can we help you?'},
      {t:'bot',m:'Get Details · Talk to Sales · Book Demo'},
      {t:'bot',m:'Lead Captured ✓ · WhatsApp Connected ✓ · Sales Notified ✓'}
    ];
    var i=0,timer=null;
    function add(m,t){var el=document.createElement('div');el.className='fa-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
    function next(){if(i>=seq.length)return;var x=seq[i++];typing.classList.add('on');timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,650)},x.t==='bot'?400:280)}
    next();
  }
  var status=document.getElementById('fa-ad-status');
  var btn=document.getElementById('fa-ad-click');
  if(btn&&status){
    var steps=['Ad Click…','Lead Form open…','Lead Submitted ✓','WhatsApp Started ✓'];
    btn.addEventListener('click',function(){
      var n=0;status.textContent=steps[0];
      var t=setInterval(function(){n++;if(n>=steps.length){clearInterval(t);return}status.textContent=steps[n]},700);
    });
  }
  var play=document.getElementById('fa-play'),out=document.getElementById('fa-play-out');
  if(play&&out){
    var funnel=['Facebook Ad','Customer Click','Lead Form','Lead Captured','WhatsApp','Bot Qualification','CRM','Sales Agent','Follow-up'];
    play.addEventListener('click',function(){
      var i=0;out.textContent='Playing…';
      var t=setInterval(function(){out.textContent=funnel.slice(0,i+1).join(' → ');i++;if(i>=funnel.length)clearInterval(t)},450);
    });
  }
})();
