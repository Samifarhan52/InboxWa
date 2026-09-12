(function(){
  'use strict';
  var flows={
    capture:{left:'Google Form\nName / Mobile / Email / Requirement\n[Submit]\n\n↓\nGoogle Sheet\nNew Lead Added ✓',right:'WhatsApp\n\nThank you for contacting us. Our team will get back to you shortly.'},
    welcome:{left:'Google Sheet\nName: {{name}}\nStatus: New',right:'WhatsApp\n\nHello {{name}} \nWelcome! Thanks for reaching out.'},
    demo:{left:'Google Form\nBook a Demo\n\n↓\nGoogle Sheet\nDemo Date / Time saved',right:'WhatsApp\n\nYour demo request has been received. We will confirm your demo shortly.'},
    followup:{left:'Google Sheet\nLead Status: Follow-up\nName: {{name}}',right:'WhatsApp\n\nHi {{name}}, just following up regarding your earlier enquiry.'},
    payment:{left:'Google Sheet\nPayment Status: Pending\nName: {{name}}',right:'WhatsApp\n\nHi {{name}}, your payment is pending. Please contact our team for assistance.'},
    expiry:{left:'Google Sheet\nExpiry Date: {{date}}\nPlan: {{plan}}',right:'WhatsApp\n\nHi {{name}}, your plan is expiring soon. Contact us to continue your service.'}
  };
  var left=document.getElementById('gfs-sim-left');
  var right=document.getElementById('gfs-sim-right');
  var tabs=document.querySelectorAll('#gfs-tabs button');
  function show(name){
    var f=flows[name]||flows.capture;
    if(left) left.textContent=f.left;
    if(right) right.textContent=f.right;
  }
  tabs.forEach(function(btn){
    btn.addEventListener('click',function(){
      tabs.forEach(function(b){b.classList.remove('is-active')});
      btn.classList.add('is-active');
      show(btn.getAttribute('data-flow'));
    });
  });
  show('capture');

  var examples={
    re:'Form: Property Requirement\n↓\nSheet: Lead + Budget + Location\n↓\nWhatsApp: Property enquiry response',
    edu:'Form: Course Enquiry\n↓\nSheet: Student + Course + Phone\n↓\nWhatsApp: Counsellor follow-up',
    ecom:'Form: Product / Order Enquiry\n↓\nSheet: Customer + Order\n↓\nWhatsApp: Customer notification',
    b2b:'Form: Business Enquiry\n↓\nSheet: Company + Requirement\n↓\nWhatsApp: Sales team follow-up'
  };
  var exFlow=document.getElementById('gfs-ex-flow');
  var exTabs=document.querySelectorAll('#gfs-ex-tabs button');
  function showEx(k){if(exFlow) exFlow.textContent=examples[k]||examples.re}
  exTabs.forEach(function(btn){
    btn.addEventListener('click',function(){
      exTabs.forEach(function(b){b.classList.remove('is-active')});
      btn.classList.add('is-active');
      showEx(btn.getAttribute('data-ex'));
    });
  });
  showEx('re');
})();
