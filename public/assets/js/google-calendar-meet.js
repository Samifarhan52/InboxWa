(function(){
  'use strict';
  var body=document.getElementById('gcm-wa-body');
  var typing=document.getElementById('gcm-typing');
  var tabs=document.querySelectorAll('#gcm-tabs button');
  if(!body) return;
  var flows={
    sales:[
      {type:'user',text:'Hi, I want to book a demo.'},
      {type:'bot',text:'Sure! Please choose a convenient time.'},
      {type:'bot',text:'10:00 AM · 12:00 PM · 4:00 PM'},
      {type:'user',text:'4:00 PM'},
      {type:'bot',text:'✓ Demo confirmed\n 22 August · 4:00 PM\n Google Meet link will be shared.'}
    ],
    consult:[
      {type:'user',text:'I need a consultation slot.'},
      {type:'bot',text:'Please pick a preferred time.'},
      {type:'user',text:'Tomorrow 11:00 AM'},
      {type:'bot',text:'Consultation booked ✓\nCalendar event + Meet link created.\nWhatsApp confirmation sent.'}
    ],
    edu:[
      {type:'user',text:'Book counselling for admissions.'},
      {type:'bot',text:'Available slots: 2 PM, 4 PM, 6 PM'},
      {type:'user',text:'4 PM'},
      {type:'bot',text:'Counselling slot confirmed.\nReminder will be sent before the meeting.'}
    ],
    re:[
      {type:'user',text:'I want a property consultation.'},
      {type:'bot',text:'Choose a time for site/online meeting.'},
      {type:'user',text:'Saturday 3 PM'},
      {type:'bot',text:'Property consultation booked ✓\nAgent notified · Calendar updated.'}
    ],
    support:[
      {type:'user',text:'Schedule a support session.'},
      {type:'bot',text:'Available: Today 5 PM or Tomorrow 11 AM'},
      {type:'user',text:'Today 5 PM'},
      {type:'bot',text:'Support appointment confirmed.\nMeet link in confirmation message.'}
    ],
    onboard:[
      {type:'user',text:'Schedule onboarding call.'},
      {type:'bot',text:'Pick a slot for onboarding.'},
      {type:'user',text:'Friday 12 PM'},
      {type:'bot',text:'Onboarding scheduled ✓\nCalendar + Meet + WhatsApp reminder set.'}
    ]
  };
  var timer=null;
  function clear(){body.querySelectorAll('.gcm-msg').forEach(function(e){e.remove()});typing.classList.remove('on')}
  function add(text,who){
    var el=document.createElement('div');
    el.className='gcm-msg '+who;
    el.textContent=text;
    body.insertBefore(el,typing);
    requestAnimationFrame(function(){el.classList.add('show')});
  }
  function run(name){
    if(timer) clearTimeout(timer);
    clear();
    var steps=flows[name]||flows.sales;
    var i=0;
    function next(){
      if(i>=steps.length) return;
      var s=steps[i++];
      typing.classList.add('on');
      timer=setTimeout(function(){
        typing.classList.remove('on');
        add(s.text,s.type);
        timer=setTimeout(next,700);
      },s.type==='bot'?550:350);
    }
    next();
  }
  tabs.forEach(function(btn){
    btn.addEventListener('click',function(){
      tabs.forEach(function(b){b.classList.remove('is-active')});
      btn.classList.add('is-active');
      run(btn.getAttribute('data-flow'));
    });
  });
  run('sales');
})();
