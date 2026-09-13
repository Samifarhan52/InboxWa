(function() {
  'use strict';

  if (typeof window !== 'undefined') {
    if (window.__inboxwa_pricing_initialized) return;
    window.__inboxwa_pricing_initialized = true;
  }

  var currencyRates = {
    'INR': { rate: 1, symbol: '₹', decimals: 0 },
    'USD': { rate: 0.012, symbol: '$', decimals: 2 },
    'EUR': { rate: 0.011, symbol: '€', decimals: 2 },
    'GBP': { rate: 0.0095, symbol: '£', decimals: 2 },
    'AED': { rate: 0.044, symbol: 'د.إ', decimals: 2 },
    'SAR': { rate: 0.045, symbol: '﷼', decimals: 2 },
    'KWD': { rate: 0.0037, symbol: 'د.ك', decimals: 3 },
    'BHD': { rate: 0.0045, symbol: '.د.ب', decimals: 3 },
    'QAR': { rate: 0.0437, symbol: 'ر.ق', decimals: 2 },
    'OMR': { rate: 0.0046, symbol: 'ر.ع.', decimals: 3 },
    'SGD': { rate: 0.016, symbol: 'S$', decimals: 2 },
    'AUD': { rate: 0.018, symbol: 'A$', decimals: 2 },
    'CAD': { rate: 0.0165, symbol: 'C$', decimals: 2 },
    'JPY': { rate: 1.80, symbol: '¥', decimals: 0 },
    'MYR': { rate: 0.052, symbol: 'RM', decimals: 2 },
    'PKR': { rate: 3.32, symbol: 'Rs', decimals: 0 },
    'BDT': { rate: 1.42, symbol: '৳', decimals: 0 }
  };

  var currentCurrency = 'INR';
  var currentBilling = 'monthly';
  var currentAddonOrPlan = '';

  function formatPrice(inrAmount, cur) {
    var c = currencyRates[cur] || currencyRates['INR'];
    var rate = c.rate;
    var symbol = c.symbol;

    if (cur === 'INR') {
      if (inrAmount < 1 && inrAmount > 0) return '₹' + inrAmount;
      return '₹' + Math.round(inrAmount).toLocaleString('en-IN');
    }

    var converted = inrAmount * rate;
    var formatted;
    if (c.decimals === 0) {
      formatted = Math.round(converted).toLocaleString('en-US');
    } else if (c.decimals === 3) {
      formatted = converted.toFixed(3);
    } else {
      if (converted < 1 && converted > 0) {
        formatted = converted < 0.01 ? converted.toFixed(4) : converted.toFixed(2);
      } else {
        formatted = converted.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
      }
    }
    return symbol + ' ' + formatted;
  }

  function applyCurrency(cur) {
    currentCurrency = cur;
    var curText = document.querySelector('.currency-text');
    if (curText) curText.textContent = cur;

    // Plan prices
    var prices = document.querySelectorAll('.price');
    for (var i = 0; i < prices.length; i++) {
      var el = prices[i];
      var inr = parseFloat(el.getAttribute('data-inr-val') || 0);
      var suffix = el.getAttribute('data-suffix') || '';
      if (inr > 0) {
        el.innerHTML = formatPrice(inr, cur) + '<span>' + suffix + '</span>';
      }
    }

    // Savings
    var savings = document.querySelectorAll('.savings');
    for (var j = 0; j < savings.length; j++) {
      var s = savings[j];
      var sInr = parseFloat(s.getAttribute('data-inr-val') || 0);
      if (sInr > 0) {
        s.textContent = formatPrice(sInr, cur);
      }
    }

    // Comparison columns
    var priceCols = document.querySelectorAll('.price-col');
    for (var k = 0; k < priceCols.length; k++) {
      var col = priceCols[k];
      var cInr = parseFloat(col.getAttribute('data-inr-val') || 0);
      var cSuffix = col.getAttribute('data-suffix') || '/mo';
      if (cInr > 0) {
        col.textContent = formatPrice(cInr, cur) + cSuffix;
      }
    }

    // Meta rates
    var metaPrices = document.querySelectorAll('.meta-price-val');
    for (var m = 0; m < metaPrices.length; m++) {
      var mp = metaPrices[m];
      var mInr = parseFloat(mp.getAttribute('data-inr-val') || 0);
      if (mInr > 0) {
        mp.textContent = formatPrice(mInr, cur);
      }
    }

    // Addons
    var addonPrices = document.querySelectorAll('.addon-price-dynamic');
    for (var n = 0; n < addonPrices.length; n++) {
      var ap = addonPrices[n];
      var aInr = parseFloat(ap.getAttribute('data-inr-val') || 0);
      var aSuffix = ap.getAttribute('data-suffix') || '';
      var aPrefix = ap.getAttribute('data-prefix') || '';
      if (aInr > 0) {
        ap.textContent = (aPrefix ? aPrefix + ' ' : '') + formatPrice(aInr, cur) + (aSuffix ? ' ' + aSuffix : '');
      }
    }
  }

  function setPlanCategory(cat) {
    var regBox = document.getElementById('regularPlansContainer');
    var omniBox = document.getElementById('omnichannelPlansContainer');
    var regToggle = document.getElementById('regularComparisonToggle');
    var omniToggle = document.getElementById('omnichannelComparisonToggle');
    var regTable = document.getElementById('regularComparisonTable');
    var omniTable = document.getElementById('omnichannelComparisonTable');
    var regBtn = document.getElementById('toggleRegularComparison');
    var omniBtn = document.getElementById('toggleOmnichannelComparison');
    var btns = document.querySelectorAll('.plan-cat-btn');

    if (cat === 'regular') {
      if (regBox) regBox.style.display = 'grid';
      if (omniBox) omniBox.style.display = 'none';
      if (regToggle) regToggle.style.display = 'block';
      if (omniToggle) omniToggle.style.display = 'none';
      if (regTable) regTable.style.display = 'none';
      if (omniTable) omniTable.style.display = 'none';
      if (regBtn) regBtn.innerHTML = '📊 Compare WhatsApp API Plans';

      for (var b = 0; b < btns.length; b++) {
        var isReg = btns[b].getAttribute('data-plan-cat') === 'regular';
        btns[b].classList.toggle('active', isReg);
        btns[b].style.background = isReg ? '#0f766e' : 'transparent';
        btns[b].style.color = isReg ? '#ffffff' : '#475569';
        btns[b].style.boxShadow = isReg ? '0 4px 12px rgba(15,118,110,0.3)' : 'none';
      }
    } else {
      if (regBox) regBox.style.display = 'none';
      if (omniBox) omniBox.style.display = 'grid';
      if (regToggle) regToggle.style.display = 'none';
      if (omniToggle) omniToggle.style.display = 'block';
      if (regTable) regTable.style.display = 'none';
      if (omniTable) omniTable.style.display = 'none';
      if (omniBtn) omniBtn.innerHTML = '📊 Compare Omnichannel Plans';

      for (var c = 0; c < btns.length; c++) {
        var isOmni = btns[c].getAttribute('data-plan-cat') === 'omnichannel';
        btns[c].classList.toggle('active', isOmni);
        btns[c].style.background = isOmni ? '#0f766e' : 'transparent';
        btns[c].style.color = isOmni ? '#ffffff' : '#475569';
        btns[c].style.boxShadow = isOmni ? '0 4px 12px rgba(15,118,110,0.3)' : 'none';
      }
    }
  }

  function updateBilling(mode) {
    currentBilling = mode;
    var monthlyPrices = document.querySelectorAll('.price.monthly');
    var yearlyPrices = document.querySelectorAll('.price.yearly');
    var modeTexts = document.querySelectorAll('.billing-mode-text');
    var mBtn = document.querySelector('.toggle-btn[data-billing="monthly"]');
    var yBtn = document.querySelector('.toggle-btn[data-billing="yearly"]');

    for (var i = 0; i < monthlyPrices.length; i++) {
      monthlyPrices[i].classList.toggle('active', mode === 'monthly');
      monthlyPrices[i].style.display = (mode === 'monthly') ? 'block' : 'none';
    }
    for (var j = 0; j < yearlyPrices.length; j++) {
      yearlyPrices[j].classList.toggle('active', mode === 'yearly');
      yearlyPrices[j].style.display = (mode === 'yearly') ? 'block' : 'none';
    }
    for (var k = 0; k < modeTexts.length; k++) {
      modeTexts[k].textContent = mode;
    }
    if (mBtn && yBtn) {
      mBtn.classList.toggle('active', mode === 'monthly');
      yBtn.classList.toggle('active', mode === 'yearly');
    }
    applyCurrency(currentCurrency);
  }

  function openModal(name) {
    currentAddonOrPlan = name;
    var span = document.getElementById('addonNameSpan');
    var field = document.getElementById('addonNameField');
    var backdrop = document.getElementById('addonModalBackdrop');
    if (span) span.textContent = name;
    if (field) field.value = name;
    if (backdrop) {
      backdrop.classList.add('active');
      backdrop.style.display = 'flex';
    }
  }

  function closeModal() {
    var backdrop = document.getElementById('addonModalBackdrop');
    if (backdrop) {
      backdrop.classList.remove('active');
      backdrop.style.display = 'none';
    }
  }

  // GLOBAL DELEGATED CLICK LISTENER
  document.addEventListener('click', function(e) {
    var target = e.target;

    // 1. Plan Category Toggle
    var catBtn = target.closest('.plan-cat-btn');
    if (catBtn) {
      e.preventDefault();
      var cat = catBtn.getAttribute('data-plan-cat');
      if (cat) setPlanCategory(cat);
      return;
    }

    // 2. Billing Toggle
    var billBtn = target.closest('.toggle-btn[data-billing]');
    if (billBtn) {
      e.preventDefault();
      var billing = billBtn.getAttribute('data-billing');
      if (billing) updateBilling(billing);
      return;
    }

    // 3. Plan Activate Button ("Start Now", "Get Started", "Contact Sales", "Talk to Sales")
    var planBtn = target.closest('.activate-plan-btn');
    if (planBtn) {
      e.preventDefault();
      var planName = planBtn.getAttribute('data-plan-name') || 'Plan';
      openModal(planName);
      return;
    }

    // 4. Addon Activate Button ("Activate", "Book Now", "Book Training", "Request Quote")
    var addonBtn = target.closest('.addon-activate-btn');
    if (addonBtn) {
      e.preventDefault();
      var addonName = addonBtn.getAttribute('data-addon') || 'Add-on';
      openModal(addonName);
      return;
    }

    // 5. Compare WhatsApp API Plans Toggle
    var regCompBtn = target.closest('#toggleRegularComparison');
    if (regCompBtn) {
      e.preventDefault();
      var regTable = document.getElementById('regularComparisonTable');
      if (regTable) {
        var isHidden = regTable.style.display === 'none' || regTable.style.display === '';
        regTable.style.display = isHidden ? 'block' : 'none';
        regCompBtn.innerHTML = isHidden ? '📊 Hide Comparison' : '📊 Compare WhatsApp API Plans';
        if (isHidden && typeof regTable.scrollIntoView === 'function') {
          regTable.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
      return;
    }

    // 6. Compare Omnichannel Plans Toggle
    var omniCompBtn = target.closest('#toggleOmnichannelComparison');
    if (omniCompBtn) {
      e.preventDefault();
      var omniTable = document.getElementById('omnichannelComparisonTable');
      if (omniTable) {
        var isHiddenOmni = omniTable.style.display === 'none' || omniTable.style.display === '';
        omniTable.style.display = isHiddenOmni ? 'block' : 'none';
        omniCompBtn.innerHTML = isHiddenOmni ? '📊 Hide Comparison' : '📊 Compare Omnichannel Plans';
        if (isHiddenOmni && typeof omniTable.scrollIntoView === 'function') {
          omniTable.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
      return;
    }

    // 7. Close Modal
    if (target.closest('#addonModalClose') || target.id === 'addonModalBackdrop') {
      e.preventDefault();
      closeModal();
      return;
    }

    // 8. Close Callback Popup
    if (target.closest('#callbackClose')) {
      e.preventDefault();
      var cb = document.getElementById('callbackPopup');
      if (cb) cb.style.display = 'none';
      return;
    }
  });

  // FORM SUBMISSIONS
  document.addEventListener('submit', function(e) {
    if (e.target && e.target.id === 'addonForm') {
      e.preventDefault();
      var name = (document.getElementById('adName') ? document.getElementById('adName').value : '').trim();
      var mobile = (document.getElementById('adMobile') ? document.getElementById('adMobile').value : '').trim();
      var email = (document.getElementById('adEmail') ? document.getElementById('adEmail').value : '').trim();
      var reg = (document.getElementById('adReg') ? document.getElementById('adReg').value : '').trim();

      if (!name || !mobile) {
        alert('Please provide your name and WhatsApp mobile number.');
        return;
      }

      var text = 'Activation Request: ' + (currentAddonOrPlan || 'Plan') + '\n' +
        'Name: ' + name + '\n' +
        'Mobile: ' + mobile + '\n' +
        'Email: ' + email + '\n' +
        'Registered Number: ' + reg + '\n' +
        'Currency: ' + currentCurrency;

      window.open('https://wa.me/918050854445?text=' + encodeURIComponent(text), '_blank');
      alert('Request sent! Our team will contact you on WhatsApp.');
      closeModal();
      e.target.reset();
    }

    if (e.target && e.target.id === 'callbackForm') {
      e.preventDefault();
      var cbName = (document.getElementById('cbName') ? document.getElementById('cbName').value : '').trim();
      var cbMobile = (document.getElementById('cbMobile') ? document.getElementById('cbMobile').value : '').trim();
      if (!cbMobile) {
        alert('Please enter your WhatsApp number');
        return;
      }
      var cbText = 'Callback Request:\nName: ' + cbName + '\nMobile: ' + cbMobile;
      window.open('https://wa.me/918050854445?text=' + encodeURIComponent(cbText), '_blank');
      var cb = document.getElementById('callbackPopup');
      if (cb) cb.style.display = 'none';
    }
  });

  // CURRENCY SELECTION
  document.addEventListener('change', function(e) {
    if (e.target && e.target.id === 'currencySelector') {
      var selected = e.target.value;
      try {
        localStorage.setItem('inboxwa_selected_currency', selected);
      } catch (err) {}
      applyCurrency(selected);
    }
  });

  // FETCH LIVE FOREX RATES
  function fetchLiveRates() {
    if (typeof fetch !== 'function') return;
    fetch('https://open.er-api.com/v6/latest/INR')
      .then(function(r) { return r.json(); })
      .then(function(data) {
        if (data && data.rates) {
          for (var k in currencyRates) {
            if (data.rates[k]) {
              currencyRates[k].rate = data.rates[k];
            }
          }
          applyCurrency(currentCurrency);
          var syncTag = document.getElementById('currencySyncText');
          if (syncTag) {
            syncTag.innerHTML = '🟢 Live market rates active (Synced Today)<br>All plans support monthly & yearly billing';
          }
        }
      })
      .catch(function(err) {
        console.log('Forex API fallback active:', err);
      });
  }

  // INITIAL BOOT
  function init() {
    try {
      var savedCur = localStorage.getItem('inboxwa_selected_currency');
      var sel = document.getElementById('currencySelector');
      if (savedCur && currencyRates[savedCur]) {
        currentCurrency = savedCur;
        if (sel) sel.value = savedCur;
      }
    } catch(e) {}

    setPlanCategory('regular');
    updateBilling('monthly');
    applyCurrency(currentCurrency);
    fetchLiveRates();

    setTimeout(function() {
      var cb = document.getElementById('callbackPopup');
      if (cb && cb.style.display !== 'block') {
        cb.style.display = 'block';
      }
    }, 8000);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
