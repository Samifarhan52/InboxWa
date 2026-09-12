(function(){
  var body=document.getElementById('fn-body'),typing=document.getElementById('fn-typing');
  if(body){
    var seq=[
      {t:'user',m:'I want to know about your finance options.'},
      {t:'bot',m:'Sure. What are you interested in?'},
      {t:'bot',m:'Business Finance · Vehicle Finance · Personal Finance · Other'},
      {t:'user',m:'Business Finance'},
      {t:'bot',m:'Requirement Captured ✓ · Lead Created ✓ · Team Notified ✓ · Demo'}
    ];
    var i=0;
    function add(m,t){var el=document.createElement('div');el.className='fn-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
    function next(){if(i>=seq.length)return;var x=seq[i++];typing.classList.add('on');setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);setTimeout(next,600)},x.t==='bot'?400:280)}
    next();
  }
  var play=document.getElementById('fn-play'),out=document.getElementById('fn-play-out');
  if(play&&out){
    var steps=['Customer Sees Ad','Enquiry','WhatsApp','Requirement Captured','Application Started','Info Request','Team Notification','Follow-up'];
    play.addEventListener('click',function(){
      var i=0;out.textContent='Playing…';
      var t=setInterval(function(){out.textContent=steps.slice(0,i+1).join(' → ');i++;if(i>=steps.length)clearInterval(t)},450);
    });
  }
})();
