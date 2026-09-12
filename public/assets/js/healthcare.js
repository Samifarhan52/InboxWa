(function(){
  var body=document.getElementById('hc-body'),typing=document.getElementById('hc-typing');
  var tabs=document.querySelectorAll('#hc-tabs button');
  if(!body)return;
  var flows={
    mr:[
      {t:'user',m:'Hello Doctor, I would like to share information about our new product.'},
      {t:'bot',m:'Sure, send me the details.'},
      {t:'user',m:'Here is the approved product information.'},
      {t:'bot',m:'Product Information Sent ✓'},
      {t:'bot',m:'Doctor Interaction Recorded ✓ · Follow-up Created ✓'}
    ],
    rep:[
      {t:'bot',m:'MR Dashboard: Today\'s doctors · Pending follow-ups'},
      {t:'user',m:'Sharing approved brochure for Product X'},
      {t:'bot',m:'Interaction logged · Follow-up tomorrow ✓'}
    ],
    doc:[
      {t:'user',m:'I want to book an appointment.'},
      {t:'bot',m:'Please select a preferred date.'},
      {t:'user',m:'Thursday morning'},
      {t:'bot',m:'Request captured · Clinic team notified ✓'}
    ]
  };
  var timer=null;
  function clear(){body.querySelectorAll('.hc-msg').forEach(function(e){e.remove()});typing.classList.remove('on')}
  function add(m,t){var el=document.createElement('div');el.className='hc-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
  function run(n){if(timer)clearTimeout(timer);clear();var s=flows[n]||flows.mr,i=0;function next(){if(i>=s.length)return;var x=s[i++];typing.classList.add('on');timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,600)},x.t==='bot'?400:280)}next()}
  tabs.forEach(function(b){b.addEventListener('click',function(){tabs.forEach(function(x){x.classList.remove('is-active')});b.classList.add('is-active');run(b.getAttribute('data-flow'))})});
  run('mr');
})();
