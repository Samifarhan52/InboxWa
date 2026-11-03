<div class="popup-overlay" id="callback-popup" role="dialog" aria-modal="true" aria-labelledby="callback-title" hidden>
  <div class="popup-backdrop" data-close-callback></div>
  <div class="popup-card popup-card-compact">
    <button type="button" class="popup-close" data-close-callback aria-label="Close">&times;</button>
    <span class="badge badge-primary">Request Callback</span>
    <div id="callback-title" class="modal-title">We'll call you back</div>
    <p class="popup-lead">Message goes to our WhatsApp team.</p>
    <form id="callback-form" action="javascript:void(0)" method="post" novalidate>
      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="cb-name">Full Name</label>
          <input type="text" class="form-input" id="cb-name" name="name" required autocomplete="name" placeholder="Your name">
        </div>
        <div class="form-group">
          <label class="form-label" for="cb-mobile">Mobile</label>
          <input type="tel" class="form-input" id="cb-mobile" name="mobile" required autocomplete="tel" inputmode="tel" pattern="[0-9+]*" oninput="this.value = (this.value.startsWith('+') ? '+' : '') + this.value.replace(/\D/g, '')" placeholder="+91 98765 43210">
        </div>
      </div>
      <div class="form-group">
        <label class="form-label" for="cb-company">Company (optional)</label>
        <input type="text" class="form-input" id="cb-company" name="company" autocomplete="organization" placeholder="Company name">
      </div>
      <div class="form-group">
        <label class="form-label" for="cb-req">Requirement</label>
        <textarea class="form-input" id="cb-req" name="requirement" rows="2" placeholder="How can we help?"></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
  </div>
</div>
