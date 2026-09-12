(function(){
  var body=document.getElementById('ap-body'),typing=document.getElementById('ap-typing');
  if(body){
    var seq=[
      {t:'bot',m:'Hello  What would you like to book?'},
      {t:'bot',m:'Consultation · Demo · Meeting'},
      {t:'user',m:'Consultation'},
      {t:'bot',m:'Choose Date · Choose Time'},
      {t:'bot',m:'10:00 AM · 11:30 AM · 3:00 PM'},
      {t:'user',m:'11:30 AM'},
      {t:'bot',m:'Appointment Confirmed ✓ · Demo Booking'}
    ];
    var i=0;
    function add(m,t){var el=document.createElement('div');el.className='ap-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
    function next(){if(i>=seq.length)return;var x=seq[i++];typing.classList.add('on');setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);setTimeout(next,600)},x.t==='bot'?400:280)}
    next();
  }
  var panels=[
    'Select Service · Consultation · Demo · Meeting',
    'Choose Date · Demo calendar days',
    'Available Time · 10:00 · 11:30 · 3:00 PM',
    'Your Details · Name · Phone · Notes',
    '✓ Booking Confirmed · 24 Aug · 11:30 AM · Consultation · Demo'
  ];
  var panel=document.getElementById('ap-book-panel');
  document.querySelectorAll('#ap-book-steps button').forEach(function(b){
    b.addEventListener('click',function(){
      document.querySelectorAll('#ap-book-steps button').forEach(function(x){x.classList.remove('is-active')});
      b.classList.add('is-active');
      var i=parseInt(b.getAttribute('data-step'),10)||0;
      if(panel)panel.textContent=panels[i]||panels[0];
    });
  });
  var play=document.getElementById('ap-play'),out=document.getElementById('ap-play-out');
  if(play&&out){
    var steps=['Customer Enquiry','Service Selected','Available Slot','Booking','Calendar Updated','WhatsApp Confirmation','Reminder','Appointment','Follow-up'];
    play.addEventListener('click',function(){
      var i=0;out.textContent='Playing…';
      var t=setInterval(function(){out.textContent=steps.slice(0,i+1).join(' → ');i++;if(i>=steps.length)clearInterval(t)},450);
    });
  }
})();
