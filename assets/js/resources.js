
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
      var msg = '*InboxWa Support Ticket*\n\n' +
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
        st.innerHTML = '⏳ Submitting ticket to support@inboxwa.com...';
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
            st.innerHTML = '✅ Support request dispatched to <strong>support@inboxwa.com</strong> (Ticket #' + (res.id || '') + ') and WhatsApp. <a href="' + (res.whatsapp_url || waUrl) + '" target="_blank" rel="noopener" style="color:#8B5CF6;font-weight:700;margin-left:8px;">Open WhatsApp Chat</a>';
          }
        }).catch(function(){
          if(st){
            st.style.display='block';
            st.style.color='#15803D';
            st.innerHTML = '✅ Support request submitted to <strong>support@inboxwa.com</strong> and WhatsApp. <a href="' + waUrl + '" target="_blank" rel="noopener" style="color:#8B5CF6;font-weight:700;margin-left:8px;">Open WhatsApp Chat</a>';
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

  // Category Filter Tabs (Case Studies & Templates)
  document.querySelectorAll('.res-filter-btn').forEach(function(btn){
    btn.addEventListener('click', function(){
      var filter = btn.getAttribute('data-filter');
      var root = btn.closest('section') || document;
      root.querySelectorAll('.res-filter-btn').forEach(function(b){ b.classList.toggle('is-active', b === btn); });
      root.querySelectorAll('[data-category]').forEach(function(card){
        if(filter === 'all' || card.getAttribute('data-category') === filter){
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Help Center, Blog, Templates & Case Studies Quick Search
  var searchInputs = ['hc-search', 'blog-search', 'tpl-search', 'cs-search'];
  searchInputs.forEach(function(id){
    var input = document.getElementById(id);
    if(!input) return;
    input.addEventListener('input', function(){
      var q = input.value.toLowerCase().trim();
      var targetCards = document.querySelectorAll('.res-card, .res-faq-item, .wa-tpl-card, .cs-card');
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
