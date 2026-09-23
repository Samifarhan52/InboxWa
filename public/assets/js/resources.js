
(function(){
  document.querySelectorAll('.copy-btn').forEach(function(btn){
    btn.addEventListener('click', function(){
      var pre = btn.closest('pre');
      var code = pre ? pre.querySelector('code') : null;
      if(!code) return;
      navigator.clipboard.writeText(code.textContent).then(function(){
        btn.textContent = 'Copied';
        setTimeout(function(){ btn.textContent = 'Copy'; }, 1500);
      });
    });
  });
  document.querySelectorAll('.copy-tpl').forEach(function(btn){
    btn.addEventListener('click', function(){
      navigator.clipboard.writeText(btn.getAttribute('data-tpl')||'').then(function(){
        btn.textContent = 'Copied';
        setTimeout(function(){ btn.textContent = 'Copy Template'; }, 1500);
      });
    });
  });
  document.querySelectorAll('.code-tabs button').forEach(function(btn){
    btn.addEventListener('click', function(){
      var tab = btn.getAttribute('data-tab');
      var root = btn.parentElement.parentElement;
      root.querySelectorAll('.code-tabs button').forEach(function(b){ b.classList.toggle('is-active', b===btn); });
      root.querySelectorAll('[data-tab-panel]').forEach(function(p){
        p.hidden = p.getAttribute('data-tab-panel') !== tab;
      });
    });
  });
  var sf = document.getElementById('support-form-el');
  if(sf){
    sf.addEventListener('submit', function(e){
      e.preventDefault();
      var fd = new FormData(sf);
      var payload = {
        type: 'support',
        name: fd.get('name'),
        email: fd.get('email'),
        phone: fd.get('whatsapp'),
        subject: fd.get('subject'),
        category: fd.get('category'),
        message: fd.get('message'),
        source_page: '/resources/help-center/'
      };
      var msg = '*HelloBotz Support Ticket*\n\n' +
        'Name: ' + (payload.name || '') + '\n' +
        'Email: ' + (payload.email || '') + '\n' +
        'WhatsApp: ' + (payload.phone || '') + '\n' +
        'Category: ' + (payload.category || '') + '\n' +
        'Subject: ' + (payload.subject || '') + '\n' +
        'Message: ' + (payload.message || '');
      var waUrl = 'https://wa.me/918050854445?text=' + encodeURIComponent(msg);
      window.open(waUrl, '_blank', 'noopener,noreferrer');

      var st = document.getElementById('support-status');
      if(st){
        st.style.display='block';
        st.innerHTML = '⏳ Submitting ticket to support@hellobotz.com...';
      }

      fetch('/api/lead.php',{
        method:'POST',
        headers:{'Content-Type':'application/json'},
        body:JSON.stringify(payload),
        credentials:'same-origin'
      }).then(function(r){ return r.json(); })
        .then(function(res){
          if(st){
            st.style.display='block';
            st.style.color='#15803D';
            st.innerHTML = '✅ Support request dispatched to <strong>support@hellobotz.com</strong> (Ticket #' + (res.id || '') + ') and WhatsApp. <a href="' + (res.whatsapp_url || waUrl) + '" target="_blank" rel="noopener" style="color:#8B5CF6;font-weight:700;margin-left:8px;">Open WhatsApp Chat</a>';
          }
        }).catch(function(){
          if(st){
            st.style.display='block';
            st.style.color='#15803D';
            st.innerHTML = '✅ Support request submitted to <strong>support@hellobotz.com</strong> and WhatsApp. <a href="' + waUrl + '" target="_blank" rel="noopener" style="color:#8B5CF6;font-weight:700;margin-left:8px;">Open WhatsApp Chat</a>';
          }
        });

      sf.reset();
    });
  }

  // FAQ Accordion
  document.querySelectorAll('.res-faq-question').forEach(function(btn){
    btn.addEventListener('click', function(){
      var item = btn.closest('.res-faq-item');
      var wasOpen = item.classList.contains('is-open');
      var parent = item.parentElement;
      parent.querySelectorAll('.res-faq-item').forEach(function(i){ i.classList.remove('is-open'); });
      if(!wasOpen){ item.classList.add('is-open'); }
    });
  });

  // Category Filter Tabs (Case Studies, Templates & Blog)
  document.querySelectorAll('.res-filter-btn').forEach(function(btn){
    btn.addEventListener('click', function(){
      var filter = btn.getAttribute('data-filter');
      document.querySelectorAll('.res-filter-btn').forEach(function(b){
        b.classList.toggle('is-active', b === btn);
      });
      document.querySelectorAll('[data-category]').forEach(function(card){
        if(filter === 'all' || card.getAttribute('data-category') === filter){
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Help Center Dedicated Autocomplete & Knowledgebase Instant Search
  var hcInput = document.getElementById('hc-search');
  var hcDropdown = document.getElementById('hc-search-dropdown');
  if (hcInput) {
    var HC_INDEX = [
      { title: 'WhatsApp Business API & Cloud Setup', category: 'WhatsApp API', desc: 'Connecting your WABA, Meta Business verification, phone number migration & green tick badge.', url: '/resources/documentation/#cat-waba' },
      { title: 'Meta Business Manager Verification Guide', category: 'WhatsApp API', desc: 'Required documents, business registration details, and step-by-step verification process.', url: '/resources/documentation/#0' },
      { title: 'Green Tick Verification (Official Business Account)', category: 'WhatsApp API', desc: 'Requirements, eligibility criteria, and step-by-step application assistance for verified badge.', url: '/products/whatsapp-blue-tick/' },
      { title: 'Phone Number Migration to WhatsApp Cloud API', category: 'WhatsApp API', desc: 'How to migrate an existing mobile or landline number to HelloBotz with zero downtime.', url: '/resources/documentation/#cat-waba' },
      { title: 'Chatbots & Visual Flow Builder', category: 'Chatbot', desc: 'Design multi-branch conversation funnels, keyword triggers, dynamic responses & AI fallbacks.', url: '/resources/documentation/#cat-flows' },
      { title: 'Building an Automated Lead Qualification Flow', category: 'Automation', desc: 'Capture customer intent, request budget and contact details, and route qualified leads instantly.', url: '/resources/documentation/#3' },
      { title: 'Broadcast Campaigns & Bulk Messaging', category: 'Broadcast', desc: 'Pre-approved message templates, custom attributes, CSV audience uploads & delivery reporting.', url: '/resources/documentation/#cat-broadcasts' },
      { title: 'Meta Template Approval Guidelines & Best Practices', category: 'Templates', desc: 'Avoid template rejections. How to format variables, categories, call-to-action buttons.', url: '/resources/documentation/#5' },
      { title: 'Shared Team Inbox & Multi-Agent Collaboration', category: 'Team Inbox', desc: 'Multi-agent routing, live collision alerts, private internal notes, quick replies & tags.', url: '/resources/documentation/#cat-inbox' },
      { title: 'CRM & Contact Management', category: 'CRM', desc: 'Create segments, configure custom attributes, manage lead stages & automate lifecycle tags.', url: '/resources/documentation/#cat-crm' },
      { title: 'Webhooks & REST API Documentation', category: 'Developer', desc: 'Real-time event subscriptions, HMAC verification, REST endpoints & code examples.', url: '/integrations/api-webhooks/' },
      { title: 'Shopify WhatsApp Integration', category: 'Integrations', desc: 'Automate order confirmations, tracking alerts, and abandoned cart recovery sequences.', url: '/solutions/shopify/' },
      { title: 'Google Sheets Integration for WhatsApp', category: 'Integrations', desc: 'Sync customer responses, append rows automatically, and trigger messages from new rows.', url: '/integrations/google-sheets/' },
      { title: 'Zoho CRM & HubSpot WhatsApp Integration', category: 'Integrations', desc: 'Sync leads, log conversation history, and trigger automated sales workflows directly.', url: '/integrations/zoho/' },
      { title: 'Shiprocket WhatsApp Order Tracking & NDR', category: 'Integrations', desc: 'Automate tracking updates, address re-confirmation, and Non-Delivery Report verification.', url: '/integrations/shiprocket/' },
      { title: 'Billing, Plans & Meta Conversation Charges', category: 'Billing', desc: 'Understand Meta conversation charges, subscription plans, top-up wallet & invoices.', url: '/pricing/' },
      { title: 'Two-Factor Authentication & Account Security', category: 'Security', desc: 'Two-factor authentication, IP restrictions, user permission roles, and GDPR compliance.', url: '/resources/documentation/#cat-security' }
    ];

    function renderHcResults(q) {
      if (!hcDropdown) return;
      if (!q) {
        hcDropdown.innerHTML = '';
        hcDropdown.classList.remove('is-open');
        return;
      }

      var matches = HC_INDEX.filter(function(item) {
        return item.title.toLowerCase().indexOf(q) !== -1 ||
               item.desc.toLowerCase().indexOf(q) !== -1 ||
               item.category.toLowerCase().indexOf(q) !== -1;
      });

      if (matches.length === 0) {
        hcDropdown.innerHTML = '<div class="hc-search-empty">No matching articles found for "<strong>' + escapeHc(q) + '</strong>". <a href="#support-form" style="color:#8B5CF6;font-weight:700;margin-left:4px;">Raise Support Ticket &rarr;</a></div>';
        hcDropdown.classList.add('is-open');
        return;
      }

      var html = '';
      matches.slice(0, 6).forEach(function(item) {
        html += '<a href="' + item.url + '" class="hc-search-item">' +
          '<div class="hc-search-item-info">' +
            '<span class="hc-search-item-title">' + highlightHc(item.title, q) + '</span>' +
            '<span class="hc-search-item-desc">' + highlightHc(item.desc, q) + '</span>' +
          '</div>' +
          '<span class="hc-search-item-badge">' + escapeHc(item.category) + '</span>' +
        '</a>';
      });

      hcDropdown.innerHTML = html;
      hcDropdown.classList.add('is-open');
    }

    function escapeHc(s) {
      return String(s).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
    }

    function highlightHc(text, query) {
      if (!query) return escapeHc(text);
      var reg = new RegExp('(' + query.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, '\\$&') + ')', 'gi');
      return escapeHc(text).replace(reg, '<strong style="color:#8B5CF6;font-weight:700;">$1</strong>');
    }

    hcInput.addEventListener('input', function() {
      var q = hcInput.value.toLowerCase().trim();
      renderHcResults(q);

      // On-page cards filtering
      var cards = document.querySelectorAll('.res-card, .res-faq-item');
      cards.forEach(function(card) {
        var text = (card.textContent || '').toLowerCase();
        if (!q || text.indexOf(q) !== -1) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    });

    hcInput.addEventListener('focus', function() {
      var q = hcInput.value.toLowerCase().trim();
      if (q) renderHcResults(q);
    });

    document.addEventListener('click', function(e) {
      if (hcDropdown && !hcInput.contains(e.target) && !hcDropdown.contains(e.target)) {
        hcDropdown.classList.remove('is-open');
      }
    });

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && hcDropdown) {
        hcDropdown.classList.remove('is-open');
      }
    });
  }

  // Blog, Templates & Case Studies Quick Search
  var otherSearchInputs = ['blog-search', 'tpl-search', 'cs-search'];
  otherSearchInputs.forEach(function(id){
    var input = document.getElementById(id);
    if(!input) return;
    input.addEventListener('input', function(){
      var q = input.value.toLowerCase().trim();
      var targetCards = document.querySelectorAll('.res-card, .res-faq-item, .wa-tpl-card, .cs-card, .download-card');
      targetCards.forEach(function(el){
        var text = (el.textContent || '').toLowerCase();
        if(!q || text.indexOf(q) !== -1){
          el.style.display = '';
        } else {
          el.style.display = 'none';
        }
      });
    });
  });
})();
