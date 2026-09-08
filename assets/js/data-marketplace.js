(function () {
  'use strict';
  var wa = window.DM_WA || '918884058241';
  var formModal = document.getElementById('dm-form-modal');
  var detailModal = document.getElementById('dm-modal');
  var form = document.getElementById('dm-request-form');
  var success = document.getElementById('dm-form-success');

  function openForm(prefill) {
    if (!formModal) return;
    formModal.hidden = false;
    document.body.style.overflow = 'hidden';
    if (prefill && prefill.industry) {
      var sel = document.getElementById('dm-industry');
      if (sel) sel.value = prefill.industry;
    }
    if (prefill && prefill.dataset) {
      var req = document.getElementById('dm-req');
      if (req && !req.value) req.value = 'Interested in: ' + prefill.dataset;
    }
  }
  function closeForm() {
    if (formModal) formModal.hidden = true;
    document.body.style.overflow = '';
  }
  function openDetails(name, industry) {
    if (!detailModal) return;
    var title = document.getElementById('dm-modal-title');
    var desc = document.getElementById('dm-modal-desc');
    if (title) title.textContent = name || 'Dataset Overview';
    if (desc) desc.textContent = (name || 'This dataset') + ' — structured business information for the selected category. Exact coverage and fields are confirmed on request.';
    var btn = document.getElementById('dm-modal-request');
    if (btn) {
      btn.onclick = function () {
        detailModal.hidden = true;
        openForm({ industry: industry, dataset: name });
      };
    }
    detailModal.hidden = false;
    document.body.style.overflow = 'hidden';
  }
  function closeDetails() {
    if (detailModal) detailModal.hidden = true;
    document.body.style.overflow = '';
  }

  document.querySelectorAll('.dm-open-form').forEach(function (btn) {
    btn.addEventListener('click', function () {
      openForm({
        industry: btn.getAttribute('data-industry') || '',
        dataset: btn.getAttribute('data-dataset') || ''
      });
    });
  });
  document.querySelectorAll('.dm-view-details').forEach(function (btn) {
    btn.addEventListener('click', function () {
      openDetails(btn.getAttribute('data-name'), btn.getAttribute('data-industry'));
    });
  });
  document.querySelectorAll('[data-close]').forEach(function (el) {
    el.addEventListener('click', closeDetails);
  });
  document.querySelectorAll('[data-close-form]').forEach(function (el) {
    el.addEventListener('click', closeForm);
  });

  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var required = ['dm-name', 'dm-company', 'dm-wa', 'dm-email', 'dm-industry', 'dm-req'];
      var valid = true;
      required.forEach(function (id) {
        var el = document.getElementById(id);
        if (!el || !el.value.trim()) {
          valid = false;
          if (el) el.style.borderColor = '#EF4444';
        } else if (el) el.style.borderColor = '';
      });
      var email = document.getElementById('dm-email');
      if (email && email.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
        valid = false;
        email.style.borderColor = '#EF4444';
      }
      if (!valid) return;

      var name = document.getElementById('dm-name').value.trim();
      var company = document.getElementById('dm-company').value.trim();
      var phone = document.getElementById('dm-wa').value.trim();
      var em = email.value.trim();
      var industry = document.getElementById('dm-industry').value;
      var location = (document.getElementById('dm-location') || {}).value || '';
      var req = document.getElementById('dm-req').value.trim();
      var size = (document.getElementById('dm-size') || {}).value || 'Not Sure';
      var format = (document.getElementById('dm-format') || {}).value || 'Not Sure';
      var purpose = (document.getElementById('dm-purpose') || {}).value || '';

      var msg =
        'Data Marketplace Request%0A%0A' +
        'Name: ' + encodeURIComponent(name) + '%0A' +
        'Business: ' + encodeURIComponent(company) + '%0A' +
        'WhatsApp: ' + encodeURIComponent(phone) + '%0A' +
        'Email: ' + encodeURIComponent(em) + '%0A' +
        'Industry: ' + encodeURIComponent(industry) + '%0A' +
        'Location: ' + encodeURIComponent(location) + '%0A' +
        'Data Requirement: ' + encodeURIComponent(req) + '%0A' +
        'Expected Size: ' + encodeURIComponent(size) + '%0A' +
        'Format: ' + encodeURIComponent(format) + '%0A' +
        'Purpose: ' + encodeURIComponent(purpose);

      form.style.display = 'none';
      if (success) success.hidden = false;

      setTimeout(function () {
        window.open('https://wa.me/' + wa + '?text=' + msg, '_blank');
      }, 600);
    });
  }

  // Simple client-side search filter
  var search = document.getElementById('dm-search');
  if (search) {
    search.addEventListener('input', function () {
      var q = search.value.toLowerCase();
      document.querySelectorAll('.dm-product-card').forEach(function (card) {
        var text = card.textContent.toLowerCase();
        card.style.display = !q || text.indexOf(q) !== -1 ? '' : 'none';
      });
    });
  }

  // Get Verified Leads — submit current filter values to WhatsApp
  var gvl = document.getElementById('dm-get-verified-leads');
  if (gvl) {
    gvl.addEventListener('click', function () {
      var industry = (document.getElementById('dm-f-industry') || {}).value || '';
      var state = (document.getElementById('dm-f-state') || {}).value || '';
      var city = (document.getElementById('dm-f-city') || {}).value || '';
      var btype = (document.getElementById('dm-f-type') || {}).value || '';
      var fresh = (document.getElementById('dm-f-fresh') || {}).value || '';
      var search = (document.getElementById('dm-search') || {}).value || '';
      var msg =
        'Data Marketplace — Get Verified Leads%0A%0A' +
        'Industry: ' + encodeURIComponent(industry || 'Any') + '%0A' +
        'State: ' + encodeURIComponent(state || 'Any') + '%0A' +
        'City: ' + encodeURIComponent(city || 'Any') + '%0A' +
        'Business Type: ' + encodeURIComponent(btype || 'Any') + '%0A' +
        'Data Freshness: ' + encodeURIComponent(fresh || 'Any') + '%0A' +
        'Search: ' + encodeURIComponent(search || '—');
      window.open('https://wa.me/' + wa + '?text=' + msg, '_blank');
    });
  }

  // Handle URL ?industry= parameter from mega menu navigation
  try {
    var params = new URLSearchParams(window.location.search);
    var targetIndustry = params.get('industry');
    if (targetIndustry) {
      var indSelect = document.getElementById('dm-f-industry');
      if (indSelect) {
        indSelect.value = targetIndustry;
        indSelect.dispatchEvent(new Event('change'));
      }
      var targetCard = document.querySelector('[data-cat="' + targetIndustry + '"]');
      if (targetCard) {
        setTimeout(function () {
          targetCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
          targetCard.style.outline = '2px solid #2563eb';
          targetCard.style.boxShadow = '0 0 20px rgba(37,99,235,0.25)';
          setTimeout(function () {
            targetCard.style.outline = '';
            targetCard.style.boxShadow = '';
          }, 2500);
        }, 300);
      }
    }
  } catch (e) {}

})();
