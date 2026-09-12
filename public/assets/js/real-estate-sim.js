(function () {
  'use strict';
  var body = document.getElementById('re-wa-body');
  var typing = document.getElementById('re-typing');
  var chips = document.getElementById('re-chips');
  var tabs = document.querySelectorAll('#re-tabs button');
  if (!body) return;

  var flows = {
    search: [
      { type: 'user', text: 'Hi, I am looking for a 3 BHK in Bangalore.' },
      { type: 'bot', text: 'Sure!  What is your preferred budget?' },
      { type: 'chips', options: ['₹50L–₹75L', '₹75L–₹1Cr', '₹1Cr+'] },
      { type: 'user', text: '₹75L–₹1Cr' },
      { type: 'bot', text: 'Great! I found properties matching your requirements.' },
      { type: 'prop', title: '3 BHK Premium Apartment', meta: 'Whitefield · Possession 2027' },
      { type: 'prop', title: '3 BHK Resale', meta: 'Selected location · Ready' },
      { type: 'chips', options: ['View Property', 'Book Site Visit'] }
    ],
    qualify: [
      { type: 'user', text: 'I want to buy a property.' },
      { type: 'bot', text: 'Which type of property are you looking for?' },
      { type: 'chips', options: ['Apartment', 'Villa', 'Plot'] },
      { type: 'user', text: 'Apartment' },
      { type: 'bot', text: 'Preferred location?' },
      { type: 'chips', options: ['Whitefield', 'Sarjapur', 'Electronic City'] },
      { type: 'user', text: 'Whitefield' },
      { type: 'bot', text: 'Budget range?' },
      { type: 'chips', options: ['₹50–75L', '₹75L–1Cr', '₹1Cr+'] },
      { type: 'user', text: '₹75L–1Cr' },
      { type: 'bot', text: 'When are you planning to buy?' },
      { type: 'chips', options: ['This month', '1–3 months', '3–6 months'] },
      { type: 'user', text: '1–3 months' },
      { type: 'bot', text: '✓ Your requirement has been shared with our property consultant.\n Hot Lead Qualified' }
    ],
    visit: [
      { type: 'user', text: 'I want to visit this property.' },
      { type: 'bot', text: 'Sure! Choose your preferred visit date.' },
      { type: 'chips', options: ['Today', 'Tomorrow', 'Weekend'] },
      { type: 'user', text: 'Weekend' },
      { type: 'bot', text: 'Pick a time slot.' },
      { type: 'chips', options: ['11:00 AM', '2:00 PM', '5:00 PM'] },
      { type: 'user', text: '2:00 PM' },
      { type: 'bot', text: 'Site Visit Confirmed ✓\nSaturday, 2:00 PM\n We will send a reminder.' }
    ],
    followup: [
      { type: 'bot', text: 'Property Enquiry Received' },
      { type: 'bot', text: 'AI Follow-up: Sharing matching options…' },
      { type: 'bot', text: 'Property Details Sent' },
      { type: 'bot', text: 'Site Visit Reminder scheduled' },
      { type: 'bot', text: 'Counsellor Follow-up assigned' },
      { type: 'bot', text: 'Lead stage updated in CRM' }
    ],
    project: [
      { type: 'bot', text: ' New Project Launch\nPremium 3 & 4 BHK residences now open for booking.\nStarting from price on request.' },
      { type: 'chips', options: ['View Project', 'Book Site Visit'] }
    ],
    support: [
      { type: 'user', text: 'Is this property RERA approved?' },
      { type: 'bot', text: 'I can help you with project information from our configured data.' },
      { type: 'chips', options: ['Project Details', 'RERA Information', 'Talk to Consultant'] }
    ]
  };

  var timer = null;
  var currentFlow = 'search';

  function clearBody() {
    body.querySelectorAll('.re-msg, .re-prop').forEach(function (el) { el.remove(); });
    chips.classList.remove('on');
    chips.innerHTML = '';
    typing.classList.remove('on');
  }

  function addMsg(text, who) {
    var el = document.createElement('div');
    el.className = 're-msg ' + who;
    el.textContent = text;
    body.insertBefore(el, typing);
    requestAnimationFrame(function () { el.classList.add('show'); });
  }

  function addProp(title, meta) {
    var el = document.createElement('div');
    el.className = 're-prop';
    el.innerHTML = '<div class="ph"></div><div class="meta"><b>' + title + '</b><span>' + meta + '</span></div>';
    body.insertBefore(el, typing);
    requestAnimationFrame(function () { el.classList.add('show'); });
  }

  function showChips(options) {
    chips.innerHTML = '';
    options.forEach(function (o) {
      var b = document.createElement('button');
      b.type = 'button';
      b.textContent = o;
      chips.appendChild(b);
    });
    chips.classList.add('on');
  }

  function runFlow(name) {
    if (timer) clearTimeout(timer);
    clearBody();
    currentFlow = name;
    var steps = flows[name] || flows.search;
    var i = 0;

    function next() {
      if (i >= steps.length) return;
      var step = steps[i++];
      if (step.type === 'bot' || step.type === 'user') {
        typing.classList.add('on');
        timer = setTimeout(function () {
          typing.classList.remove('on');
          addMsg(step.text, step.type);
          timer = setTimeout(next, 700);
        }, step.type === 'bot' ? 600 : 400);
      } else if (step.type === 'prop') {
        addProp(step.title, step.meta);
        timer = setTimeout(next, 500);
      } else if (step.type === 'chips') {
        showChips(step.options);
        // auto-advance after brief pause for demo feel
        timer = setTimeout(function () {
          chips.classList.remove('on');
          next();
        }, 1800);
      }
    }
    next();
  }

  tabs.forEach(function (btn) {
    btn.addEventListener('click', function () {
      tabs.forEach(function (b) { b.classList.remove('is-active'); });
      btn.classList.add('is-active');
      runFlow(btn.getAttribute('data-flow'));
    });
  });

  runFlow('search');
})();

(function(){
  var steps=document.querySelectorAll('#re-journey-steps .re-j-step');
  var text=document.getElementById('re-journey-text');
  if(!steps.length||!text) return;
  var map={
    enquiry:'Customer: Hi, I am looking for a 3 BHK in Bangalore.\nAI: Sure! What is your preferred budget?',
    qualify:'AI collects: Property type → Location → Budget → Timeline\n✓ Hot Lead Qualified',
    recommend:'Here are properties matching your requirements:\n• 3 BHK Premium — Whitefield\n• 3 BHK Resale — Selected location',
    visit:'Customer: I want to visit this property.\nAI: Choose date — Today / Tomorrow / Weekend\n✓ Site Visit Confirmed',
    followup:'Property details sent → Site visit reminder → Counsellor follow-up',
    deal:'Negotiation → Booking stage updated in CRM'
  };
  steps.forEach(function(btn){
    btn.addEventListener('click',function(){
      steps.forEach(function(s){s.classList.remove('is-active')});
      btn.classList.add('is-active');
      text.textContent=map[btn.getAttribute('data-j')]||map.enquiry;
    });
  });
})();
