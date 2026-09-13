/**
 * INBOXWA PRICING ENGINE WITH LIVE REAL-TIME CURRENCY ADAPTATION
 * - Cloned from waapibox.com/pricing interaction suite
 * - Live Internet-connected Forex Exchange Rates via open.er-api.com
 * - Seamless Currency, Plan Category & Billing Toggles
 * - Interactive Comparison Tables & WhatsApp Activation Modal
 */

(function() {
  'use strict';

  // Base currency info and default fallback rates (INR base)
  const currencyMeta = {
    'INR': { symbol: '₹', label: 'INR (₹) - Indian Rupee', defaultRate: 1, decimals: 0 },
    'USD': { symbol: '$', label: 'USD ($) - US Dollar', defaultRate: 0.012, decimals: 2 },
    'EUR': { symbol: '€', label: 'EUR (€) - Euro', defaultRate: 0.011, decimals: 2 },
    'GBP': { symbol: '£', label: 'GBP (£) - British Pound', defaultRate: 0.0095, decimals: 2 },
    'AED': { symbol: 'د.إ', label: 'AED (د.إ) - UAE Dirham', defaultRate: 0.044, decimals: 2 },
    'SAR': { symbol: '﷼', label: 'SAR (﷼) - Saudi Riyal', defaultRate: 0.045, decimals: 2 },
    'KWD': { symbol: 'د.ك', label: 'KWD (د.ك) - Kuwaiti Dinar', defaultRate: 0.0037, decimals: 3 },
    'BHD': { symbol: '.د.ب', label: 'BHD (.د.ب) - Bahraini Dinar', defaultRate: 0.0045, decimals: 3 },
    'QAR': { symbol: 'ر.ق', label: 'QAR (ر.ق) - Qatari Riyal', defaultRate: 0.0437, decimals: 2 },
    'OMR': { symbol: 'ر.ع.', label: 'OMR (ر.ع.) - Omani Rial', defaultRate: 0.0046, decimals: 3 },
    'SGD': { symbol: 'S$', label: 'SGD (S$) - Singapore Dollar', defaultRate: 0.016, decimals: 2 },
    'AUD': { symbol: 'A$', label: 'AUD (A$) - Australian Dollar', defaultRate: 0.018, decimals: 2 },
    'CAD': { symbol: 'C$', label: 'CAD (C$) - Canadian Dollar', defaultRate: 0.0165, decimals: 2 },
    'JPY': { symbol: '¥', label: 'JPY (¥) - Japanese Yen', defaultRate: 1.80, decimals: 0 },
    'MYR': { symbol: 'RM', label: 'MYR (RM) - Malaysian Ringgit', defaultRate: 0.052, decimals: 2 },
    'PKR': { symbol: 'Rs', label: 'PKR (Rs) - Pakistani Rupee', defaultRate: 3.32, decimals: 0 },
    'BDT': { symbol: '৳', label: 'BDT (৳) - Bangladeshi Taka', defaultRate: 1.42, decimals: 0 }
  };

  // State
  let currentCurrency = 'INR';
  let currentBilling = 'monthly';
  let activeRates = {};

  // Initialize active rates from default
  for (const code in currencyMeta) {
    activeRates[code] = currencyMeta[code].defaultRate;
  }

  // Load cached rates from localStorage if recent (< 1 hour)
  try {
    const cached = localStorage.getItem('inboxwa_fx_rates');
    if (cached) {
      const parsed = JSON.parse(cached);
      if (parsed.timestamp && (Date.now() - parsed.timestamp < 3600000) && parsed.rates) {
        Object.assign(activeRates, parsed.rates);
        updateRateSyncBadge('Live cached: ' + new Date(parsed.timestamp).toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}));
      }
    }
  } catch (e) {
    console.warn('Could not read cached exchange rates', e);
  }

  // Fetch Live Internet Forex Rates
  async function fetchLiveExchangeRates() {
    try {
      const response = await fetch('https://open.er-api.com/v6/latest/INR');
      if (!response.ok) throw new Error('Network response not ok: ' + response.status);
      const data = await response.json();
      if (data && data.rates) {
        for (const code in currencyMeta) {
          if (data.rates[code]) {
            activeRates[code] = data.rates[code];
          }
        }
        activeRates['INR'] = 1;
        try {
          localStorage.setItem('inboxwa_fx_rates', JSON.stringify({
            timestamp: Date.now(),
            rates: activeRates
          }));
        } catch(err) {}

        updateRateSyncBadge('Live market rates active (Synced Today)');
        // Re-render prices with live rates
        applyCurrency(currentCurrency);
      }
    } catch (err) {
      console.log('Live rate fetch fallback active:', err);
      try {
        const fallbackResp = await fetch('https://api.exchangerate-api.com/v4/latest/INR');
        if (fallbackResp.ok) {
          const fallbackData = await fallbackResp.json();
          if (fallbackData && fallbackData.rates) {
            for (const code in currencyMeta) {
              if (fallbackData.rates[code]) {
                activeRates[code] = fallbackData.rates[code];
              }
            }
            applyCurrency(currentCurrency);
            updateRateSyncBadge('Live market rates active (Synced Today)');
          }
        }
      } catch (fallbackErr) {
        console.log('Using default rates');
      }
    }
  }

  function updateRateSyncBadge(text) {
    const syncText = document.querySelector('.currency-sync-text');
    if (syncText) {
      syncText.innerHTML = '🟢 ' + text + '<br>All plans support monthly & yearly billing';
    }
  }

  // Format currency value with symbol, comma separators and decimal precision
  function formatAmount(amountInINR, currencyCode) {
    const meta = currencyMeta[currencyCode] || currencyMeta['INR'];
    const rate = activeRates[currencyCode] || meta.defaultRate;
    const symbol = meta.symbol;

    if (currencyCode === 'INR') {
      if (amountInINR < 1 && amountInINR > 0) {
        return '₹' + amountInINR;
      }
      return '₹' + Math.round(amountInINR).toLocaleString('en-IN');
    }

    const converted = amountInINR * rate;
    let formatted;
    if (meta.decimals === 0) {
      formatted = Math.round(converted).toLocaleString('en-US');
    } else if (meta.decimals === 3) {
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

  // Apply currency across all page components
  function applyCurrency(currency) {
    currentCurrency = currency;
    const currencyText = document.querySelector('.currency-text');
    if (currencyText) currencyText.textContent = currency;

    // 1. Update Plan Cards Prices (Monthly and Yearly)
    document.querySelectorAll('.price').forEach(function(el) {
      const inrVal = parseFloat(el.getAttribute('data-inr-val') || 0);
      const suffix = el.getAttribute('data-suffix') || '';
      if (inrVal > 0) {
        el.innerHTML = formatAmount(inrVal, currency) + '<span>' + suffix + '</span>';
      }
    });

    // 2. Update Plan Savings
    document.querySelectorAll('.savings').forEach(function(el) {
      const inrVal = parseFloat(el.getAttribute('data-inr-val') || 0);
      if (inrVal > 0) {
        el.textContent = formatAmount(inrVal, currency);
      }
    });

    // 3. Update Comparison Table Headers
    document.querySelectorAll('.price-col').forEach(function(el) {
      const inrVal = parseFloat(el.getAttribute('data-inr-val') || 0);
      const suffix = el.getAttribute('data-suffix') || '/mo';
      if (inrVal > 0) {
        el.textContent = formatAmount(inrVal, currency) + suffix;
      }
    });

    // 4. Update Meta Conversation Rates
    document.querySelectorAll('.meta-price-val').forEach(function(el) {
      const inrVal = parseFloat(el.getAttribute('data-inr-val') || 0);
      if (inrVal > 0) {
        el.textContent = formatAmount(inrVal, currency);
      }
    });

    // 5. Update All 15 Add-ons
    document.querySelectorAll('.addon-price-dynamic').forEach(function(el) {
      const inrVal = parseFloat(el.getAttribute('data-inr-val') || 0);
      const suffix = el.getAttribute('data-suffix') || '';
      const prefix = el.getAttribute('data-prefix') || '';
      if (inrVal > 0) {
        el.textContent = (prefix ? prefix + ' ' : '') + formatAmount(inrVal, currency) + (suffix ? ' ' + suffix : '');
      }
    });
  }

  // ========== PLAN CATEGORY TOGGLE (WhatsApp API vs Omnichannel) ==========
  const regularContainer = document.getElementById('regularPlansContainer');
  const omnichannelContainer = document.getElementById('omnichannelPlansContainer');
  const catBtns = document.querySelectorAll('.plan-cat-btn');
  const regCompToggle = document.getElementById('regularComparisonToggle');
  const omniCompToggle = document.getElementById('omnichannelComparisonToggle');
  const regCompTable = document.getElementById('regularComparisonTable');
  const omniCompTable = document.getElementById('omnichannelComparisonTable');
  const toggleRegBtn = document.getElementById('toggleRegularComparison');
  const toggleOmniBtn = document.getElementById('toggleOmnichannelComparison');

  function setPlanCategory(category) {
    if (category === 'regular') {
      if (regularContainer) regularContainer.style.display = 'grid';
      if (omnichannelContainer) omnichannelContainer.style.display = 'none';
      if (regCompToggle) regCompToggle.style.display = 'block';
      if (omniCompToggle) omniCompToggle.style.display = 'none';
      if (regCompTable) regCompTable.style.display = 'none';
      if (omniCompTable) omniCompTable.style.display = 'none';
      if (toggleRegBtn) toggleRegBtn.innerHTML = '📊 Compare WhatsApp API Plans';

      catBtns.forEach(btn => {
        const isTarget = btn.dataset.planCat === 'regular';
        btn.classList.toggle('active', isTarget);
      });
    } else {
      if (regularContainer) regularContainer.style.display = 'none';
      if (omnichannelContainer) omnichannelContainer.style.display = 'grid';
      if (regCompToggle) regCompToggle.style.display = 'none';
      if (omniCompToggle) omniCompToggle.style.display = 'block';
      if (regCompTable) regCompTable.style.display = 'none';
      if (omniCompTable) omniCompTable.style.display = 'none';
      if (toggleOmniBtn) toggleOmniBtn.innerHTML = '📊 Compare Omnichannel Plans';

      catBtns.forEach(btn => {
        const isTarget = btn.dataset.planCat === 'omnichannel';
        btn.classList.toggle('active', isTarget);
      });
    }
  }

  catBtns.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      setPlanCategory(this.dataset.planCat);
    });
  });

  // ========== BILLING TOGGLE (Monthly vs Yearly) ==========
  const monthlyBtn = document.querySelector('.toggle-btn[data-billing="monthly"]');
  const yearlyBtn = document.querySelector('.toggle-btn[data-billing="yearly"]');

  function updateBilling(billing) {
    currentBilling = billing;
    document.querySelectorAll('.price.monthly').forEach(p => {
      p.classList.toggle('active', billing === 'monthly');
    });
    document.querySelectorAll('.price.yearly').forEach(p => {
      p.classList.toggle('active', billing === 'yearly');
    });
    document.querySelectorAll('.billing-mode-text').forEach(span => {
      span.innerText = billing;
    });
    if (monthlyBtn && yearlyBtn) {
      monthlyBtn.classList.toggle('active', billing === 'monthly');
      yearlyBtn.classList.toggle('active', billing === 'yearly');
    }
    applyCurrency(currentCurrency);
  }

  if (monthlyBtn && yearlyBtn) {
    monthlyBtn.addEventListener('click', function(e) {
      e.preventDefault();
      updateBilling('monthly');
    });
    yearlyBtn.addEventListener('click', function(e) {
      e.preventDefault();
      updateBilling('yearly');
    });
  }

  // ========== CURRENCY SELECTOR EVENT ==========
  const currencySelector = document.getElementById('currencySelector');
  if (currencySelector) {
    try {
      const saved = localStorage.getItem('inboxwa_selected_currency');
      if (saved && currencyMeta[saved]) {
        currencySelector.value = saved;
        currentCurrency = saved;
      }
    } catch(e) {}

    currencySelector.addEventListener('change', function() {
      const selected = this.value;
      try {
        localStorage.setItem('inboxwa_selected_currency', selected);
      } catch(e) {}
      applyCurrency(selected);
    });
  }

  // ========== COMPARISON TABLE TOGGLES ==========
  if (toggleRegBtn && regCompTable) {
    toggleRegBtn.addEventListener('click', function() {
      const isHidden = regCompTable.style.display === 'none' || regCompTable.style.display === '';
      if (isHidden) {
        regCompTable.style.display = 'block';
        toggleRegBtn.innerHTML = '▲ Hide Plan Comparison';
        regCompTable.scrollIntoView({ behavior: 'smooth', block: 'start' });
      } else {
        regCompTable.style.display = 'none';
        toggleRegBtn.innerHTML = '📊 Compare WhatsApp API Plans';
      }
    });
  }

  if (toggleOmniBtn && omniCompTable) {
    toggleOmniBtn.addEventListener('click', function() {
      const isHidden = omniCompTable.style.display === 'none' || omniCompTable.style.display === '';
      if (isHidden) {
        omniCompTable.style.display = 'block';
        toggleOmniBtn.innerHTML = '▲ Hide Plan Comparison';
        omniCompTable.scrollIntoView({ behavior: 'smooth', block: 'start' });
      } else {
        omniCompTable.style.display = 'none';
        toggleOmniBtn.innerHTML = '📊 Compare Omnichannel Plans';
      }
    });
  }

  // ========== MODAL & ACTIVATION ==========
  const modalBackdrop = document.getElementById('addonModalBackdrop');
  const addonNameSpan = document.getElementById('addonNameSpan');
  const addonNameField = document.getElementById('addonNameField');
  const closeModalBtn = document.getElementById('addonModalClose');
  const addonForm = document.getElementById('addonForm');
  let currentAddonOrPlan = '';

  function openModal(itemName) {
    currentAddonOrPlan = itemName;
    if (addonNameSpan) addonNameSpan.innerText = itemName;
    if (addonNameField) addonNameField.value = itemName;
    if (modalBackdrop) modalBackdrop.classList.add('active');
  }

  function closeModal() {
    if (modalBackdrop) modalBackdrop.classList.remove('active');
  }

  if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
  if (modalBackdrop) {
    modalBackdrop.addEventListener('click', function(e) {
      if (e.target === modalBackdrop) closeModal();
    });
  }

  document.querySelectorAll('.addon-activate-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      openModal(this.getAttribute('data-addon') || 'Add-on');
    });
  });

  document.querySelectorAll('.activate-plan-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      openModal(this.getAttribute('data-plan-name') || 'Plan');
    });
  });

  if (addonForm) {
    addonForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const name = document.getElementById('adName').value.trim();
      const mobile = document.getElementById('adMobile').value.trim();
      const email = document.getElementById('adEmail').value.trim();
      const regNum = document.getElementById('adReg').value.trim();
      if (!name || !mobile || !email) {
        alert('Please fill all required fields');
        return;
      }
      const msg = encodeURIComponent(
        'Hello InboxWa Team,

I want to activate: ' + currentAddonOrPlan +
        '
Name: ' + name +
        '
Mobile: ' + mobile +
        '
Email: ' + email +
        '
Registered InboxWa No: ' + regNum +
        '
Selected Currency: ' + currentCurrency
      );
      window.open('https://wa.me/919638911838?text=' + msg, '_blank');
      closeModal();
      addonForm.reset();
    });
  }

  // Initial Boot
  setPlanCategory('regular');
  updateBilling('monthly');
  applyCurrency(currentCurrency);

  // Fetch live exchange rates from internet asynchronously
  fetchLiveExchangeRates();

})();
