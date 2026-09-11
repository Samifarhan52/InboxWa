<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'AI Voice Calling & WhatsApp Voice Agents | InboxWa';
$pageDescription = 'Automate voice calls with intelligent AI call agents on WhatsApp. Configure speech recognition, natural voice synthesis, real-time API triggers, and human call transfers.';
$canonicalUrl = 'https://inboxwa.com/products/ai-voice/';
$ogImage = 'assets/images/products/ai-voice/hero.png';

include __DIR__ . '/../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/product-pages.css">

<div class="prod-page">
  <div class="prod-ambient-1"></div>
  <div class="prod-ambient-2"></div>

  <!-- Hero Section -->
  <section class="prod-hero">
    <div class="prod-hero-grid">
      <div class="prod-hero-content">
        <div class="prod-badge">
          <span class="prod-badge-dot"></span>
          WhatsApp Call Agent
        </div>
        <h1 class="prod-hero-title">
          Automate Voice Calls with <span class="prod-gradient-text">AI Call Agents</span>
        </h1>
        <p class="prod-hero-desc">
          Configure custom voice bots to answer customer calls, run automated AI support prompts, trigger live API actions during conversations, and handle call handovers seamlessly.
        </p>
        <div class="prod-hero-ctas">
          <a href="<?php echo $bp; ?>auth/register" class="prod-btn-primary">
            Get Started Free
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="#capabilities" class="prod-btn-secondary">
            Explore Capabilities
          </a>
        </div>
        <div class="prod-bullets">
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            Welcome greetings
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            Prompt instruction training
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            Speech function actions
          </div>
        </div>
      </div>
      <div class="prod-hero-media">
        <div class="prod-hero-media-wrapper">
          <img src="<?php echo $bp; ?>assets/images/products/ai-voice/hero.png" alt="InboxWa AI Voice Agent" class="prod-hero-media-img" width="1080" height="1080">
        </div>
      </div>
    </div>
  </section>

  <!-- Capabilities Section -->
  <section class="prod-section prod-section-alt" id="capabilities">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">PLATFORM FEATURES</span>
        <h2 class="prod-section-title">Voice Agent Capabilities</h2>
        <p class="prod-section-desc">
          Core WhatsApp voice calling features supported in your configuration panel.
        </p>
      </div>
      <div class="prod-grid-3">
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="22"></line></svg>
          </div>
          <h3 class="prod-card-title">AI Knowledge Training</h3>
          <p class="prod-card-desc">
            Train your voice agent with system instructions and custom prompts to answer client inquiries contextually.
          </p>
          <div style="margin-top: 1rem; padding: 0.5rem 0.85rem; background: #f8fafc; border: 1px solid #f1f5f9; border-radius: 8px; font-size: 0.82rem; color: #64748b;">
            💡 <strong>Example:</strong> Restaurant agent answering menu availability and reservations.
          </div>
        </div>

        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
          </div>
          <h3 class="prod-card-title">Voice & Speech Engines</h3>
          <p class="prod-card-desc">
            Integrate ElevenLabs and OpenAI voices to convert client speech to text and read back natural vocal replies.
          </p>
          <div style="margin-top: 1rem; padding: 0.5rem 0.85rem; background: #f8fafc; border: 1px solid #f1f5f9; border-radius: 8px; font-size: 0.82rem; color: #64748b;">
            💡 <strong>Example:</strong> Converting incoming calls to text and speaking responses back.
          </div>
        </div>

        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
          </div>
          <h3 class="prod-card-title">API Function Triggers</h3>
          <p class="prod-card-desc">
            Trigger REST APIs when keywords are spoken, collecting required parameter inputs automatically.
          </p>
          <div style="margin-top: 1rem; padding: 0.5rem 0.85rem; background: #f8fafc; border: 1px solid #f1f5f9; border-radius: 8px; font-size: 0.82rem; color: #64748b;">
            💡 <strong>Example:</strong> Triggering order status check when customer says 'status'.
          </div>
        </div>

        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
          </div>
          <h3 class="prod-card-title">Call Logging & Audio Transcripts</h3>
          <p class="prod-card-desc">
            Access full audio playback and transcripts of all completed calls directly within your analytics dashboard.
          </p>
          <div style="margin-top: 1rem; padding: 0.5rem 0.85rem; background: #f8fafc; border: 1px solid #f1f5f9; border-radius: 8px; font-size: 0.82rem; color: #64748b;">
            💡 <strong>Example:</strong> Reviewing customer tone and AI answers post-call.
          </div>
        </div>

        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="18" y1="8" x2="23" y2="13"></line><line x1="23" y1="8" x2="18" y2="13"></line></svg>
          </div>
          <h3 class="prod-card-title">Human Escalation</h3>
          <p class="prod-card-desc">
            Transfer callers to human phone numbers when the bot encounters unresolvable edge cases.
          </p>
          <div style="margin-top: 1rem; padding: 0.5rem 0.85rem; background: #f8fafc; border: 1px solid #f1f5f9; border-radius: 8px; font-size: 0.82rem; color: #64748b;">
            💡 <strong>Example:</strong> Forwarding to a human specialist when caller requests an agent.
          </div>
        </div>

        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          </div>
          <h3 class="prod-card-title">24/7 Availability</h3>
          <p class="prod-card-desc">
            Never miss an inbound phone call again. AI voice agents answer in under 2 seconds, day or night.
          </p>
          <div style="margin-top: 1rem; padding: 0.5rem 0.85rem; background: #f8fafc; border: 1px solid #f1f5f9; border-radius: 8px; font-size: 0.82rem; color: #64748b;">
            💡 <strong>Example:</strong> Handling nighttime lead inquiries while your sales team sleeps.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs Section -->
  <section class="prod-section" id="faqs">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">FAQs</span>
        <h2 class="prod-section-title">Frequently Asked Questions</h2>
        <p class="prod-section-desc">
          Common queries about AI voice calling setup, speech engines, and phone numbers.
        </p>
      </div>
      <div class="prod-faq-container">
        <div class="prod-faq-list">
          <div class="prod-faq-item active">
            <button type="button" class="prod-faq-question">
              Which AI Models are supported?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              The call agent uses Gemini and OpenAI models configured via your API key inside the backend settings.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              How do speech-triggered functions work?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              You can map triggers to active keyword sets. When client speech matches a keyword, the bot calls the defined API endpoint, passes parameters, and speaks the response context.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              Are call recordings stored?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Yes. All conversations are recorded, and full speech-to-text transcripts are saved inside the call history logs dashboard.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA Box -->
  <section class="prod-section prod-section-alt">
    <div class="prod-container">
      <div class="prod-cta-box">
        <div class="prod-cta-glow"></div>
        <h2 class="prod-cta-title">Upgrade to AI Voice Calling</h2>
        <p class="prod-cta-subtitle">
          Automate customer voice phone calls with natural, context-aware AI agents in minutes.
        </p>
        <div class="prod-cta-actions">
          <a href="<?php echo $bp; ?>auth/register" class="prod-cta-btn-white">
            Get Started Free
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="<?php echo $bp; ?>#contact-section" class="prod-cta-btn-trans">
            Book a Demo
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var faqItems = document.querySelectorAll('.prod-faq-item');
  faqItems.forEach(function(item) {
    var btn = item.querySelector('.prod-faq-question');
    btn.addEventListener('click', function() {
      var isActive = item.classList.contains('active');
      faqItems.forEach(function(fi) { fi.classList.remove('active'); });
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });
});
</script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
