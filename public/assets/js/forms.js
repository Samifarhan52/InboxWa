/**
 * InboxWa Forms → WhatsApp
 * Number: 918050854445
 * Later: FORM_MODE = 'api' + FORM_ENDPOINT for Google Sheets
 */
(function () {
  'use strict';

  var WA_NUMBER = (window.INBOXWA_CONFIG && window.INBOXWA_CONFIG.whatsapp) || '918050854445';
  var FORM_MODE = 'both';
  var FORM_ENDPOINT = '/api/lead.php';

  function openWhatsApp(text) {
    var num = (window.INBOXWA_CONFIG && window.INBOXWA_CONFIG.whatsapp) || WA_NUMBER;
    var url = 'https://wa.me/' + num + '?text=' + encodeURIComponent(text);
    window.open(url, '_blank', 'noopener,noreferrer');
  }

  function formatText(type, d) {
    if (type === 'callback') {
      return '*Callback Request - InboxWa*\n\n' +
        'Name: ' + (d.name || '') + '\n' +
        'Mobile: ' + (d.mobile || '') + '\n' +
        'Company: ' + (d.company || '') + '\n' +
        'Requirement: ' + (d.requirement || '');
    }
    if (type === 'demo') {
      return '*Demo Booking - InboxWa*\n\n' +
        'Name: ' + (d.name || '') + '\n' +
        'Mobile: ' + (d.mobile || '') + '\n' +
        'Product: ' + (d.product || '') + '\n' +
        'Date: ' + (d.date || '') + '\n' +
        'Time: ' + (d.time || '') + '\n' +
        'Company: ' + (d.company || '');
    }
    if (type === 'contact') {
      return '*Contact Form - InboxWa*\n\n' +
        'Name: ' + (d.name || '') + '\n' +
        'Mobile: ' + (d.mobile || '') + '\n' +
        'Regarding: ' + (d.regarding || '') + '\n' +
        'Message: ' + (d.message || '');
    }
    return String(JSON.stringify(d));
  }

  function val(form, name) {
    var el = form.querySelector('[name="' + name + '"]');
    return el ? String(el.value || '').trim() : '';
  }

  function bindForm(formId, type, fields, required) {
    var form = document.getElementById(formId);
    if (!form) return;

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      e.stopPropagation();

      var data = {};
      fields.forEach(function (f) {
        data[f] = val(form, f);
      });

      for (var i = 0; i < required.length; i++) {
        if (!data[required[i]]) {
          alert('Please fill all required fields');
          var focusEl = form.querySelector('[name="' + required[i] + '"]');
          if (focusEl) focusEl.focus();
          return;
        }
      }

      // Save to admin DB (non-blocking), then WhatsApp for human follow-up
      var payload = {
        type: type,
        name: data.name || '',
        email: data.email || '',
        phone: data.mobile || data.phone || '',
        whatsapp: data.mobile || data.whatsapp || '',
        business: data.company || data.business || '',
        product: data.product || '',
        requirement: data.requirement || data.regarding || '',
        message: data.message || '',
        preferred_date: data.date || '',
        preferred_time: data.time || '',
        source_page: location.pathname,
        referrer: document.referrer || '',
        utm_source: (new URLSearchParams(location.search)).get('utm_source') || '',
        utm_medium: (new URLSearchParams(location.search)).get('utm_medium') || '',
        utm_campaign: (new URLSearchParams(location.search)).get('utm_campaign') || ''
      };
      if (FORM_MODE === 'api' || FORM_MODE === 'both') {
          fetch(FORM_ENDPOINT, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(payload),
            credentials: 'same-origin'
          }).catch(function () {});
        } catch (errApi) {}
      }
      if (FORM_MODE === 'whatsapp' || FORM_MODE === 'both') {
        openWhatsApp(formatText(type, data));
      }

      try { form.reset(); } catch (err) {}

      // close popups if open
      var demo = document.getElementById('demo-popup');
      var cb = document.getElementById('callback-popup');
      if (demo) {
        demo.classList.remove('open');
        demo.hidden = true;
      }
      if (cb) {
        cb.classList.remove('open');
        cb.hidden = true;
      }
      document.body.classList.remove('menu-open');
    });
  }

  function init() {
    bindForm('callback-form', 'callback',
      ['name', 'mobile', 'company', 'requirement'],
      ['name', 'mobile']
    );
    bindForm('demo-form', 'demo',
      ['name', 'mobile', 'product', 'date', 'time', 'company'],
      ['name', 'mobile', 'product', 'date', 'time']
    );
    bindForm('footer-contact-form', 'contact',
      ['name', 'mobile', 'regarding', 'message'],
      ['name', 'mobile', 'regarding', 'message']
    );
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
