<div class="addon-modal" id="addon-modal" hidden aria-hidden="true">
  <div class="addon-modal-backdrop" data-addon-close></div>
  <div class="addon-modal-dialog" role="dialog" aria-labelledby="addon-modal-title">
    <button type="button" class="addon-modal-x" data-addon-close aria-label="Close">&times;</button>
    <div id="addon-modal-title" class="modal-title">Request add-on</div>
    <p class="addon-modal-sub">Tell us about your account. We will confirm suitability and next steps.</p>
    <form id="addon-form" novalidate>
      <input type="hidden" name="addon_id" id="af-addon-id">
      <input type="hidden" name="addon_name" id="af-addon-name">
      <div class="af-grid">
        <div><label>Full name *</label><input name="name" id="af-name" required></div>
        <div><label>Business name *</label><input name="business" id="af-business" required></div>
        <div><label>Email *</label><input type="email" name="email" id="af-email" required></div>
        <div><label>Mobile number *</label><input type="tel" name="mobile" id="af-mobile" required placeholder="+91 ..."></div>
        <div class="af-full"><label>WhatsApp registered number *</label>
          <input type="tel" name="whatsapp_number" id="af-wa" required placeholder="+91 ...">
          <small>Enter the WhatsApp number currently connected or intended for HelloBotz.</small>
        </div>
        <div><label>Country *</label><input name="country" id="af-country" required value="India"></div>
        <div><label>Current plan</label>
          <select name="current_plan" id="af-plan">
            <option value="Growth">Growth</option>
            <option value="Pro" selected>Pro</option>
            <option value="Business">Business</option>
            <option value="Trial / Not sure">Trial / Not sure</option>
          </select>
        </div>
        <div><label>Selected add-on</label><input name="selected_addon" id="af-addon-display" readonly></div>
        <div><label>Billing cycle</label>
          <select name="billing" id="af-billing">
            <option value="Monthly">Monthly</option>
            <option value="Yearly">Yearly</option>
          </select>
        </div>
        <div class="af-full"><label>Message</label><textarea name="message" id="af-message" rows="3" placeholder="Any context for our team"></textarea></div>
      </div>
      <button type="submit" class="btn btn-primary btn-lg" id="af-submit" style="width:100%;margin-top:1rem">Submit request</button>
      <p class="af-status" id="af-status" hidden></p>
    </form>
  </div>
</div>
