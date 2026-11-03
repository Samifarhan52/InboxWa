<div class="popup-overlay" id="demo-popup" role="dialog" aria-modal="true" aria-labelledby="demo-title" hidden>
  <div class="popup-backdrop" data-close-demo></div>
  <div class="popup-card popup-card-compact">
    <button type="button" class="popup-close" data-close-demo aria-label="Close">&times;</button>
    <span class="badge badge-primary">Book Demo</span>
    <div id="demo-title" class="modal-title">Schedule a demo</div>
    <p class="popup-lead">We will confirm on WhatsApp.</p>
    <form id="demo-form" action="javascript:void(0)" method="post" novalidate>
      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="dm-name">Full Name</label>
          <input type="text" class="form-input" id="dm-name" name="name" required autocomplete="name" placeholder="Your name">
        </div>
        <div class="form-group">
          <label class="form-label" for="dm-mobile">Mobile</label>
          <input type="tel" class="form-input" id="dm-mobile" name="mobile" required autocomplete="tel" inputmode="tel" pattern="[0-9+]*" oninput="this.value = (this.value.startsWith('+') ? '+' : '') + this.value.replace(/\D/g, '')" placeholder="+91 98765 43210">
        </div>
      </div>
      <div class="form-group">
        <label class="form-label" for="dm-product">Demo for</label>
        <select class="form-input" id="dm-product" name="product" required>
          <option value="">Select product</option>
          <option value="WhatsApp Business API">WhatsApp Business API</option>
          <option value="Omnichannel Platform">Omnichannel Platform</option>
          <option value="Shared Team Inbox">Shared Team Inbox</option>
          <option value="Broadcast Campaigns">Broadcast Campaigns</option>
          <option value="Flow Builder & Automation">Flow Builder &amp; Automation</option>
          <option value="Chatbot">Chatbot</option>
          <option value="CRM">CRM</option>
          <option value="Full Platform">Full Platform</option>
        </select>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="dm-date">Date</label>
          <input type="date" class="form-input" id="dm-date" name="date" required>
        </div>
        <div class="form-group">
          <label class="form-label" for="dm-time">Time</label>
          <input type="time" class="form-input" id="dm-time" name="time" required>
        </div>
      </div>
      <div class="form-group">
        <label class="form-label" for="dm-company">Company (optional)</label>
        <input type="text" class="form-input" id="dm-company" name="company" autocomplete="organization" placeholder="Company name">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
  </div>
</div>
