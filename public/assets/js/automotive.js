(function(){
  var body=document.getElementById('au-body'),typing=document.getElementById('au-typing');
  if(body){
    var seq=[
      {t:'user',m:'Hi, I’m interested in the SUV.'},
      {t:'bot',m:'Sure! What would you like to do?'},
      {t:'bot',m:'View Details · Book Test Drive · Talk to Sales'},
      {t:'user',m:'Book Test Drive'},
      {t:'bot',m:'Select Date · Select Time'},
      {t:'bot',m:'Test Drive Confirmed ✓ · Sales Notified ✓ · Demo'}
    ];
    var i=0;
    function add(m,t){var el=document.createElement('div');el.className='au-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
    function next(){if(i>=seq.length)return;var x=seq[i++];typing.classList.add('on');setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);setTimeout(next,600)},x.t==='bot'?400:280)}
    next();
  }
  var play=document.getElementById('au-play'),out=document.getElementById('au-play-out');
  if(play&&out){
    var steps=['Customer Sees Vehicle','WhatsApp Enquiry','Selects Vehicle','Requests Test Drive','Selects Slot','Booking Confirmed','Sales Team Notified','Follow-up'];
    play.addEventListener('click',function(){
      var i=0;out.textContent='Playing…';
      var t=setInterval(function(){out.textContent=steps.slice(0,i+1).join(' → ');i++;if(i>=steps.length)clearInterval(t)},450);
    });
  }
})();
