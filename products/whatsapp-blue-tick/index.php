<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Official WhatsApp Green/Blue Tick Verification | HelloBots';
$pageDescription = 'Get the verified green badge on your WhatsApp Business Profile. Build brand authority and customer trust with HelloBots.';
$canonicalUrl = 'https://hellobotz.com/products/whatsapp-blue-tick/';
$ogImage = 'https://hellobotz.com/assets/images/hellobots/whatsapp-blue-tick/WhatsApp-Blue-Tick.png';
$ogTitle = 'Official WhatsApp Green/Blue Tick Verification | HelloBots';
$ogDescription = 'Get the verified green badge on your WhatsApp Business Profile. Build brand authority and customer trust with HelloBots.';

include __DIR__ . '/../../includes/header.php';
?>

<!-- Dependencies: Bootstrap Grid, FontAwesome, Swiper -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/getgabs-variables.css">
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/getgabs-same-style.css">
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/getgabs-template-industry.css">
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/getgabs-g2reviews.css">
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/getgabs-whatsapp-blue-tick.css">

<style>
  /* Container Centering & Layout Enforced (1240px max-width) */
  .cloned-hellobots-page {
    width: 100%;
    overflow-x: hidden;
    background: #ffffff;
  }
  .cloned-hellobots-page .container {
    width: 100% !important;
    max-width: 1240px !important;
    margin-left: auto !important;
    margin-right: auto !important;
    padding-left: 1.25rem !important;
    padding-right: 1.25rem !important;
    box-sizing: border-box !important;
  }
  .cloned-hellobots-page section {
    width: 100%;
    position: relative;
  }
  .cloned-hellobots-page img {
    max-width: 100%;
    height: auto;
  }
  /* Protect Header and Footer from Bootstrap resets */
  .site-header {
    font-family: inherit;
  }
  .site-header a, .site-header button {
    text-decoration: none !important;
  }
  .site-header .nav-link {
    display: inline-flex !important;
    color: #1e293b !important;
    font-size: 0.95rem !important;
    font-weight: 500 !important;
    padding: 0.5rem 0.85rem !important;
  }
  .site-footer {
    font-family: inherit;
  }
  .site-footer a {
    text-decoration: none !important;
  }
  /* Custom FAQ accordion interaction styles */
  .faq-itemm {
    background: #fff;
    border-radius: 8px;
    margin-bottom: 15px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.06);
    overflow: hidden;
    border: 1px solid #e2e8f0;
  }
  .faq-questionn {
    width: 100%;
    text-align: left;
    background: #fff;
    padding: 18px 20px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .faq-text {
    flex: 1;
    color: #0f172a;
    font-size: 16px !important;
    margin-bottom: 0px;
    font-weight: 600;
  }
  .faq-arrow {
    display: inline-block;
    width: 9px;
    height: 9px;
    border-right: 2px solid #047857;
    border-bottom: 2px solid #047857;
    transform: rotate(45deg);
    transition: transform 0.3s ease;
  }
  .faq-questionn.open .faq-arrow {
    transform: rotate(-135deg);
  }
  .faq-answerr {
    display: none;
    padding: 0 20px 18px;
    background: #fff;
    color: #475569;
    font-size: 15px;
    line-height: 1.6;
  }
  .faq-answerr.open {
    display: block;
  }
  .cta-button, .btn-primary {
    background: #4f46e5 !important;
    border-color: #4f46e5 !important;
  }
  .cta-button:hover, .btn-primary:hover {
    background: #4338ca !important;
  }
</style>


<div class="cloned-hellobots-page">


  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<style>
.country-code {
    /* margin-top: 16px; */
    background: #fff;
    text-align: center;
    border-radius: 12px;
}
.wv-modal-container * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
body.wv-modal-open {
    overflow: hidden !important;
    padding-right: var(--wv-scrollbar-width, 0) !important;
}

/* Prevent background content from shifting when scrollbar disappears */
body.wv-modal-open .wv-modal-overlay {
    padding-right: 0 !important;
}
        .wv-modal-container {
           
            min-height: 100vh;
            background: linear-gradient(135deg, #f8fafc 0%, #d1fae5 50%, #ccfbf1 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .wv-modal-trigger-btn {
            background: #034737;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 0.75rem;
            font-size: 1.125rem;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            box-shadow: 0 4px 12px rgba(3, 71, 55, 0.3);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            animation: wv-scale-in 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .wv-modal-trigger-btn:hover {
            background: #045a46;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(3, 71, 55, 0.4);
        }

        .wv-modal-overlay {
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(8px);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            animation: wv-fade-in 0.5s ease-out;
        }

        .wv-modal-overlay.wv-active {
            display: flex;
        }

        .wv-modal-card {
            background: rgba(252, 252, 252, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 1rem;
            max-width: 42rem;
            width: 100%;
            max-height: 90vh;
            display: flex;
            flex-direction: column;
            box-shadow: 0 8px 32px rgba(3, 71, 55, 0.15), 0 2px 8px rgba(0, 0, 0, 0.02);
            animation: wv-scale-in 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .wv-modal-header {
            padding: 1rem 1rem 1rem 1rem;
                background: rgb(27 204 145 / 10%);
    
        }

        .wv-modal-header-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .wv-modal-title {
            font-size: 1.25rem!important;
            font-weight: 700;
            color: #0f172a!important;
        }

        .wv-modal-close-btn {
            background: transparent;
            border: none;
            padding: 0.5rem;
            cursor: pointer;
            border-radius: 9999px;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wv-modal-close-btn:hover {
            background: rgba(255, 255, 255, 0.8);
            transform: rotate(90deg);
        }

        .wv-modal-steps {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

      .wv-modal-step-indicator {
    width: 1.5rem!important;
    height: 1.5rem!important;
    border-radius: 9999px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 0.75rem;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    background: #cbd5e1;
    color: #64748b;
}
        .wv-modal-step-indicator.wv-active {
            background: #034737;
            color: white;
            transform: scale(1.1);
        }

        .wv-modal-step-indicator.wv-completed {
            background: #059669;
            color: white;
        }

        .wv-modal-step-line {
            height: 4px;
            flex: 1;
            border-radius: 9999px;
            background: #cbd5e1;
            transition: all 0.5s;
        }

        .wv-modal-step-line.wv-completed {
            background: #10b981;
        }

        .wv-modal-content {
            padding: 1rem;
            overflow-y: auto;
            flex: 1;
        }

        .wv-modal-step {
            display: none;
            animation: wv-slide-in 0.4s ease-out;
        }

        .wv-modal-step.wv-active {
            display: block;
        }

        .wv-modal-info-banner {
            background: linear-gradient(135deg, #0f1a2b, #102133, #0c1524);
            border-radius: 0.75rem;
            padding: 1rem;
            color: white;
            margin-bottom: 1rem;
            display: flex;
            gap: 0.75rem;
        }
       
        .wv-modal-info-icon {
            background: #ffffff;
            padding: 0.5rem;
            border-radius: 0.5rem;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 1rem;
            height: 1rem;
        }

        .wv-modal-info-text h3 {
            font-size: 1rem;
            color:#ffffff!important;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .wv-modal-info-text p {
            font-size: 0.75rem;
            color:#ffffff!important;
            line-height: 1.5;
            color: #d1fae5;
        }

        .wv-modal-form-group {
            margin-bottom: 1rem;
        }

        .wv-modal-label {
            display: block;
            font-size: 1rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 0.5rem;
        }

        .wv-modal-label-required {
            color: #ef4444;
        }

        .wv-modal-helper-text {
            font-size: 0.75rem!important;
            color: #64748b;
            margin-bottom: 0.5rem;
        }

        .wv-modal-input,
        .wv-modal-select {
            width: 100%;
            padding: 0.625rem 0.875rem;
            border: 1.5px solid #e2e8f0;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-family: inherit;
            background: white;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .wv-modal-input:focus,
        .wv-modal-select:focus {
            outline: none;
            border-color: #034737;
            box-shadow: 0 0 0 4px rgba(3, 71, 55, 0.1);
            transform: translateY(-1px);
        }

        .wv-modal-input:hover:not(:focus),
        .wv-modal-select:hover:not(:focus) {
            border-color: #cbd5e1;
        }

        .wv-modal-input.wv-error {
            border-color: #ef4444;
        }

        .wv-modal-input.wv-error:focus {
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1);
        }

        .wv-modal-error-message {
            color: #ef4444;
            font-size: 0.75rem;
            margin-top: 0.25rem;
            animation: wv-slide-in 0.2s ease-out;
        }

        .wv-modal-phone-group {
            display: flex;
            gap: 0.5rem;
        }

        .wv-modal-phone-select {
            width: 5rem;
            flex-shrink: 0;
        }

        .wv-modal-radio-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .wv-modal-radio-option {
            border: 2px solid #e2e8f0;
            border-radius: 0.5rem;
            padding: 0.75rem;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .wv-modal-radio-option:hover {
            border-color: #034737;
            background: rgba(3, 71, 55, 0.02);
        }

        .wv-modal-radio-option.wv-selected {
            border-color: #034737;
            background: rgba(3, 71, 55, 0.05);
        }

        .wv-modal-radio-circle {
            width: 1.25rem;
            height: 1.25rem;
            border: 2px solid #cbd5e1;
            border-radius: 9999px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .wv-modal-radio-option.wv-selected .wv-modal-radio-circle {
            border-color: #034737;
            background: #034737;
        }

        .wv-modal-radio-circle-inner {
            width: 0.5rem;
            height: 0.5rem;
            background: white;
            border-radius: 9999px;
            display: none;
        }

        .wv-modal-radio-option.wv-selected .wv-modal-radio-circle-inner {
            display: block;
        }

        .wv-modal-radio-label {
            font-weight: 500;
            color: #334155;
            font-size: 0.875rem;
        }

        .wv-modal-conditional-content {
            margin-top: 1rem;
            animation: wv-slide-in 0.4s ease-out;
        }

        .wv-modal-warning-box {
            background: #fef3c7;
            border: 1px solid #fbbf24;
            border-radius: 0.75rem;
            padding: 0.875rem;
            margin-bottom: 1rem;
        }

        .wv-modal-warning-box p {
            font-size: 0.75rem;
            color: #334155;
            line-height: 1.5;
        }

        .wv-modal-info-list {
            list-style: none;
            margin-bottom: 0.75rem;
        }

        .wv-modal-info-list li {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
            font-size: 0.75rem;
            color: #475569;
            line-height: 1.5;
        }

        .wv-modal-bullet {
            width: 0.375rem;
            height: 0.375rem;
            background: #475569;
            border-radius: 9999px;
            flex-shrink: 0;
            margin-top: 0.5rem;
        }

        .wv-modal-bullet-small {
            width: 0.25rem;
            height: 0.25rem;
            background: #94a3b8;
        }

        .wv-modal-success-screen {
            text-align: center;
            padding: 2rem 1rem;
        }

        .wv-modal-success-icon {
            width: 4rem;
            height: 4rem;
            background: linear-gradient(135deg, #10b981, #0f766e);
            border-radius: 9999px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
        }

        .wv-modal-success-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 1rem;
        }

        .wv-modal-success-text {
            font-size: 0.875rem;
            color: #64748b;
            margin-bottom: 2rem;
            max-width: 28rem;
            margin-left: auto;
            margin-right: auto;
        }

       .wv-modal-footer {
    padding: 1rem;
    border-top: 1px solid #e2e8f0;
    background: #f8fafc;
    display: flex;
    justify-content: center;
    gap: 1.75rem;
    border-radius: 0px 0px 22px 22px;
    /* gap: 12px; */
}

        .wv-modal-btn {
            padding: 0.625rem 1.5rem;
            border: none;
            border-radius: 0.75rem;
            font-size: 0.875rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-family: inherit;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .wv-modal-btn-back {
            background: transparent;
            color: #334155;
        }

        .wv-modal-btn-back:hover {
            background: #e2e8f0;
        }

        .wv-modal-btn-primary {
            background: #034737;
            color: white;
            box-shadow: 0 4px 12px rgba(3, 71, 55, 0.3);
        }

        .wv-modal-btn-primary:hover:not(:disabled) {
            background: #045a46;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(3, 71, 55, 0.4);
        }

        .wv-modal-btn-primary:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        /* Animations */
        @keyframes wv-fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes wv-slide-in {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes wv-scale-in {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Responsive Design */
        @media (min-width: 640px) {
            .wv-modal-card {
                border-radius: 1.5rem;
            }

            .wv-modal-header {
                padding: 1.5rem;
            }

          
           

           
            .wv-modal-steps {
                gap: 0.75rem;
            }

            .wv-modal-content {
                padding: 1.5rem;
            }

            .wv-modal-form-group {
                margin-bottom: 1.5rem;
            }

           
            .wv-modal-input,
            .wv-modal-select {
                padding: 0.75rem 1rem;
                border-radius: 0.75rem;
                font-size: 1rem;
            }

            .wv-modal-info-banner {
                border-radius: 1rem;
                padding: 1.5rem;
                gap: 1rem;
            }

            .wv-modal-info-icon {
                padding: 0.75rem;
                border-radius: 0.75rem;
            }

            .wv-modal-info-text h3 {
                font-size: 1.125rem;
            }

            .wv-modal-info-text p {
                font-size: 0.875rem;
            }

            .wv-modal-phone-select {
                width: 6rem;
            }

            .wv-modal-radio-option {
                border-radius: 0.75rem;
                padding: 1rem;
            }

            .wv-modal-radio-label {
                font-size: 1rem;
            }

            .wv-modal-warning-box {
                border-radius: 0.75rem;
                padding: 1rem;
            }

            .wv-modal-warning-box p,
            .wv-modal-info-list li {
                font-size: 0.875rem;
            }

            .wv-modal-bullet {
                width: 0.375rem;
                height: 0.375rem;
            }

            .wv-modal-success-icon {
                width: 5rem;
                height: 5rem;
            }

            .wv-modal-success-title {
                font-size: 1.875rem;
            }

            .wv-modal-success-text {
                font-size: 1rem;
            }

            .wv-modal-btn {
                padding: 0.75rem 2rem;
                border-radius: 0.75rem;
                font-size: 1rem;
            }
        }

        @media (min-width: 1024px) {
            .wv-modal-header {
                padding: 1rem;
            }

            .wv-modal-content {
                padding: 1rem;
            }
        }

        /* Hidden helper class */
        .wv-hidden {
            display: none !important;
        }
.btn-square{
    display:flex;
    gap:12px;
}
    .custom-faq-accordion { margin-top:30px; }

.faq-itemm {
    background: #fff;
    border-radius: 8px;
    margin-bottom: 15px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    overflow: hidden;
}

.faq-questionn {
    width: 100%;
    text-align: left;
    background: #fff;
    padding: 20px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.faq-text {
    flex: 1;
    color: #333;
    font-size: 16px!important;
    margin-bottom:0px;
}

.faq-arrow {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-right: 2px solid #000901;
    border-bottom: 2px solid #024815;
    transform: rotate(45deg);
    transition: transform 0.3s ease;
}
.faq-question.open .faq-arrow {
    transform: rotate(-135deg);
}

.faq-answerr {
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: max-height 0.4s ease, opacity 0.4s ease, padding 0.3s ease;
    padding: 0 20px;
    background: #fff;
}

.faq-itemm p {
    font-size: 16px!important;
}

.faq-answerr.open {
    opacity: 1;
    padding: 15px 20px;
    border-top: 1px solid #eee;
}

/*Byyuvi*/
/* Success Popup Overlay */
.success-popup-overlay {
    position: fixed;
    inset: 0;
    z-index: 10000;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(10px);
    display: none;
    align-items: center;
    justify-content: center;
    animation: wv-fade-in 0.3s ease-out;
}

.success-popup-overlay.active {
    display: flex !important;
}

.success-popup-card {
    background: white;
    border-radius: 1.5rem;
    max-width: 500px;
    width: 90%;
    padding: 2.5rem 2rem;
    text-align: center;
    box-shadow: 0 20px 60px rgba(3, 71, 55, 0.3);
    animation: wv-scale-in 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    position: relative;
}

/* Close Button */
.success-popup-close {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: transparent;
    border: none;
    padding: 0.5rem;
    cursor: pointer;
    border-radius: 50%;
    transition: all 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #64748b;
}

.success-popup-close:hover {
    background: #f1f5f9;
    color: #0f172a;
    transform: rotate(90deg);
}

.success-popup-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #10b981, #059669);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    animation: successPulse 2s infinite;
}

@keyframes successPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

.success-popup-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 1rem;
}

.success-popup-message {
    font-size: 1rem;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.success-popup-highlight {
    background: #f0fdf4;
    border-left: 4px solid #10b981;
    padding: 1rem;
    border-radius: 0.5rem;
    margin-bottom: 1.5rem;
}

.success-popup-highlight p {
    font-size: 0.875rem;
    color: #059669;
    font-weight: 600;
    margin: 0;
}

.success-popup-btn {
    background: #034737;
    color: white;
    padding: 0.875rem 2rem;
    border: none;
    border-radius: 0.75rem;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    box-shadow: 0 4px 12px rgba(3, 71, 55, 0.3);
}

.success-popup-btn:hover {
    background: #045a46;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(3, 71, 55, 0.4);
}

.success-confetti {
    position: absolute;
    width: 10px;
    height: 10px;
    background: #10b981;
    opacity: 0;
    animation: confettiFall 3s ease-out;
}

@keyframes confettiFall {
    0% { 
        opacity: 1; 
        transform: translateY(-100px) rotate(0deg);
    }
    100% { 
        opacity: 0; 
        transform: translateY(400px) rotate(720deg);
    }
}


</style>
<section class="breadcrumbs">
  <div class="container">
    <div aria-label="breadcrumb" class="custom-breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo $bp; ?>">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          WhatsApp Blue Tick        </li>
      </ol>
    </div>
  </div>
</section>

<section class="hero-section">
  <div class="container">
 
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-lg-6 mb-4 mb-lg-0">
                         <span class="d-flex align-items-center gap-1 meta-partner" style="font-size: 11px !important;
    color: #111827;
    border: 1px solid #bcbcbc;
    max-width: fit-content;
    padding: 9px;
    border-radius: 8px;
    background: #fdfffe;
    font-weight: 600;
    margin-bottom:40px;

    ">
        <i class="fa-brands fa-meta meta-icon"></i> Official Meta Partner
    </span>
        <!-- Breadcrumbs -->
        <!-- End Breadcrumbs -->
        <h1 class="hero-title"> Get a Verified Blue Tick Badge on Your WhatsApp Next Button Handler</h1>
        <p class="hero-text">Get more trust and authority for your brand! Easily get your WhatsApp blue tick verified badge.
          Apply for free and be more productive with customers!</p>
          <div class="btn-square">
        <a id="whatsapp-enquiry"
          href="<?php echo $bp; ?>#contact-section"
          target="_blank" rel="noopener noreferrer" class="btn text-white cta-button m-0">
          Enquiry Now
        </a>
        <button class="cta-button m-0" id="wvOpenModal">Apply for blue tick</button>
        <!--</div>-->
      </div>
              </div>
      <!-- Image Content with background -->
      <div class="col-lg-6">
        <div class="api-image-box " style="padding: 20px; border-radius: 10px;">
          <img width="100%" src="/assets/images/hellobots/whatsapp-blue-tick/WhatsApp-Blue-Tick.png" loading="lazy"
            alt="WhatsApp Blue Tick
">

      </div>
    </div>
  </div>
</section>

<section class="what-is-api" style="padding: 60px 0px; background-color: #f9f9f9;;">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-4 whatsapp-heading">
          What is WhatsApp Blue Tick?
        </h2>
      </div>
      <div class="col-12">
        <p class="text-center">
          WhatsApp blue tick (earlier as green tick) is an official verified badge issued by Meta, shown next to the
          business name in WhatsApp. It's a Key feature of <a href="<?php echo $bp; ?>products/whatsapp-business-platform/" target="_blank" rel="noopener noreferrer">WhatsApp API</a>, and assures the customers that they’re engaging with a verified business and
          not an impostor.
      </div>
    </div>
  </div>
</section>
<section class="trust-section py-5">
  <div class="container">
    <h2 class="text-center mb-4">Why Verified Badge on WhatsApp Matters for Your Brand</h2>
    <div class="row align-items-center">
      <!-- Left Text Section -->
      <div class="col-lg-6">
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3> Brand Credibility Boost</h3>
            <p>The blue tick badge is given by Meta, guaranteeing the business is verified and trustworthy.</p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3> Protection Against Impersonation</h3>
            <p>Authentication support to prevent impostors or fake accounts from misusing the business name or identity.
            </p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3></span> Reduce Ban Risk</h3>
            <p>A verified WhatsApp Business Account lowers ban risk and confirms a secure conversation.</p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3></span> Stronger Customer Confidence</h3>
            <p>Users are more likely to interact with a company official trusted by WhatsApp.</p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3>Higher Conversion Rates</h3>
            <p>A blue-tick verified account experience increases up to 40% in customer conversion rates.</p>
          </div>
        </div>
      </div>
      <!-- Right Image Section -->
      <div class="col-lg-6 text-center mt-4 mt-lg-0">
        <img src="/assets/images/hellobots/whatsapp-blue-tick/Why-WhatsApp-Blue-Tick-Matters.png"
          alt="Why WhatsApp Blue Tick" class="img-fluid" />
      </div>
    </div>
  </div>
</section>
<!-- Font Awesome -->

<section class="benefits-section">
  <div class="container">
    <div class="section-header">
      <h2>Requirements to Apply for WhatsApp Blue Tick</h2>
      <p>Get verified by Meta and gain trust, security, and results for your business.</p>
    </div>
    <div class="cards-container mb-5">
      <div class="benefit-card">
        <div class="card-icon purple">
          <span class="material-icons">workspace_premium</span>
        </div>
        <h3>Reputable Business</h3>
        <p>The company should be well-known, highly regarded, and respected</p>
      </div>
      <div class="benefit-card">
        <div class="card-icon purple">
          <span class="material-icons">chat_bubble_outline</span>
        </div>
        <h3>WhatsApp API Setup</h3>
        <p>Create a WhatsApp Business API account with the help of a partner like HelloBots.</p>
      </div>
      <div class="benefit-card">
        <div class="card-icon purple">
          <span class="material-icons">verified_user</span>
        </div>
        <h3>Meta Verification</h3>
        <p>Complete the business verification process in your Meta Business Manager.</p>
      </div>
      <div class="benefit-card">
        <div class="card-icon purple">
          <span class="material-icons">public</span>
        </div>
        <h3>Authentic PR Articles</h3>
        <p>At least five genuine PR or news articles should be posted about your business.</p>
      </div>
    </div>
    <a id="whatsapp-enquiry"
      href="<?php echo $bp; ?>#contact-section"
      target="_blank" rel="noopener noreferrer" class="btn text-white cta-button m-0" style="margin: 0 auto!important;">
      Contact Us
    </a>
    
  </div>
</section>

<!--tarvel-->
<section class="whatsapp-usecase py-5" style="background:#f4f7fd;">
  <div class="container">
    <h2 class="whatsapp-heading mb-5">How to Apply for WhatsApp Blue Tick with HelloBots

    </h2>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="step">
          <div class="step-number">#1</div>
          <div class="step-text">
            <h3>Go to the HelloBots Dashboard</h3>
            <p>Create or login HelloBots account and <a href="<?php echo $bp; ?>products/whatsapp-business-platform/" target="_blank" rel="noopener noreferrer">get a WhatsApp Business API account</a>. An approved WhatsApp number is necessary to get a verified badge.
            </p>
          </div>
        </div>

      </div>

      <!-- Image -->
      <div class="col-lg-6 order-2 order-lg-1 text-center">
        <div class="api-image-box mt-3">
          <img src="/assets/images/hellobots/whatsapp-blue-tick/Go-to-the-HelloBots-Dashboard.png"
            alt="HelloBots Dashboard" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-1">
        <div class="step">
          <div class="step-number">#2</div>
          <div class="step-text">
            <h3>Click on the Apply Button</h3>
            <p>Now, go to your <b>“Dashboard”</b> and find the <b>“Apply for  Blue Tick”</b> and click on the <b>“Apply”</b>button.
            </p>
          </div>
        </div>

      </div>

      <!-- Image -->
      <div class="col-lg-6 order-2 order-lg-2 text-center">
        <div class="api-image-box mt-3">
          <img src="/assets/images/hellobots/whatsapp-blue-tick/Click-on-the-Apply-Button.png"
            alt="Click on Apply Button" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="step">
          <div class="step-number">#3</div>
          <div class="step-text">
            <h3>Fill the Full Form</h3>
            <p>In the pop-up box, fill in the needed details and click <b>“Submit”</b>.
            </p>
          </div>
        </div>
      </div>


      <!-- Image -->
      <div class="col-lg-6 order-2 order-lg-1 text-center">
        <div class="api-image-box mt-3">
          <img src="/assets/images/hellobots/whatsapp-blue-tick/Fill-the-Full-Form.png"
            alt="Fill the Full Form" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    <a id="whatsapp-enquiry"
      href="<?php echo $bp; ?>#contact-section"
      target="_blank" rel="noopener noreferrer" class="btn text-white cta-button m-0" style="margin: 0 auto!important;">
      Apply for Free Now
    </a>

  </div>
</section>



<section class="what-is-api" style="padding: 60px 0px;">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-4 whatsapp-heading">
          WhatsApp Green Tick is Now the Blue Tick
        </h2>
      </div>
      <div class="col-12">
        <p class="text-center">
          WhatsApp has changed the Green Tick to a Blue Tick to clarify verified business accounts, allowing for greater
          trust and recognition by customers.
        </p>
        <div class="mid-img">
          <img width="100%" src="/assets/images/hellobots/whatsapp-blue-tick/WhatsApp-Green-Tick-Now-Blue-Tick.png"
            loading="lazy" alt="Green Tick Now Blue Tick">
        </div>
      </div>
    </div>
  </div>
</section>
<style>
    .usecase-section {
    background: #fffaeb;
    padding: 60px 20px;

}
.api-subtext{
    text-align:center;
}
  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
  }

  .grid-item {
    display: none;
    flex-direction: column;
    justify-content: space-between;
    border-radius: 8px;
    padding: 20px;
    background: #fff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
    height: 100%;
  }


  .grid-item h3 {
    font-size: 18px;
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
    color: #034737;
  }

  .grid-item p {
    font-size: 14px;
    line-height: 1.5;
    color: #555;
    flex-grow: 1;
  }

  .grid-item a {
    display: inline-block;
    margin-top: 20px;
    font-size: 14px;
    color: #034737;
    text-decoration: none;
  }

.grid-item a {
  display: inline-block;       /* ensures the link is visible */
  margin-top: 20px;
  font-size: 14px;
  color: #034737;
  text-decoration: none;
}
.learn-more {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-weight: 600;
    color: #034737;
    text-decoration: none;
    font-size: 15px;
    margin-top: 10px;
}
.learn-more:hover i {
    transform: translateX(3px);
}
</style>

<section class="usecase-section">
  <div class="container">
    <h2 class="whatsapp-heading">Explore More WhatsApp Business API Features</h2>
    <p class="mb-4 api-subtext">
      Discover powerful WhatsApp features that help you engage customers, boost sales, and simplify communication — all in
      one platform.
    </p>

   
  <div class="grid">
      <div class="grid-item">
        <h3><i class="fas fa-bullhorn"></i> WhatsApp Broadcasting</h3>
        <p>Send bulk tailored messages to unlimited contacts instantly with guaranteed better reach and improved
          customer engagement without spamming. </p>

      <a class="learn-more" href="<?php echo $bp; ?>products/broadcast/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>

      <div class="grid-item">
        <h3><i class="fas fa-robot"></i> WhatsApp AI Chatbot</h3>
        <p>Use a Chatbot to automate customer queries, manage FAQs, and offer 24/7 instant support to increase
          efficiency and reduce manual workload.</p>
        
        <a class="learn-more" href="<?php echo $bp; ?>products/chatbot/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-file-alt"></i> WhatsApp Forms</h3>
        <p>Collect leads, customer data, and ask for feedback, all within WhatsApp chats using interactive and
          easy-to-fill forms.
        </p>
        
        <a class="learn-more" href="<?php echo $bp; ?>products/whatsapp-form/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-check-circle"></i> WhatsApp Blue Tick</h3>
        <p>Verified your brand with the official blue tick to improve credibility, trust, and customer confidence.
        </p>

        <a class="learn-more" href="<?php echo $bp; ?>products/whatsapp-blue-tick/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-mouse-pointer"></i> Click-to-WhatsApp Ads</h3>
        <p>Convert your ads into a quick WhatsApp chat to enhance lead generation, customer engagement, and sales
          conversion.</p>
      
        <a class="learn-more" href="<?php echo $bp; ?>products/ctwa/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-money-bill-wave"></i> WhatsApp Payments</h3>
        <p>Make it easier for customers to purchase, pay, and check out without leaving WhatsApp with secure in-chat
          payments.
        </p>
      
        <a class="learn-more" href="<?php echo $bp; ?>products/whatsapp-payments/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-sync-alt"></i> WhatsApp Drip Campaign</h3>
        <p>Automate sequential messages to nurture leads, increase conversions, and keep your audience engaged over
          time.
        </p>
        <a href="<?php echo $bp; ?>#contact-section" target="_blank">Contact Us ➜ </a>
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-users"></i> WhatsApp Team Inbox</h3>
        <p>Collaborate with your team by handling all customer conversations in a single dashboard using WhatsApp
          shared-team inbox.
        </p>
        <a class="learn-more" href="<?php echo $bp; ?>products/shared-inbox/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>

      </div>
    <div class="grid-item">
        <h3><i class="fas fa-database"></i> WhatsApp Interactive</h3>
        <p>Engage customers with interactive buttons, lists and reply options that make conversations faster, easier, and actionable.</p>
               
<a class="learn-more" href="<?php echo $bp; ?>products/whatsapp-interactive-messages/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="grid-item">
        <h3><i class="fas fa-lock"></i> WhatsApp Authentication</h3>
        <p>Send OTPs with 99% reliability and secure logins using WhatsApp’s end-to-end encrypted, one-tap authentication.</p>
               
<a class="learn-more" href="<?php echo $bp; ?>products/whatsapp-business-platform/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="grid-item">
        <h3><i class="fas fa-th-list"></i> WhatsApp Catalog</h3>
        <p>Display your products or services in the WhatsApp catalog for customers to effortlessly browse and place
          orders.
        </p>
               
                <a class="learn-more" href="<?php echo $bp; ?>products/catalog/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>

      </div>

    <div class="grid-item">
        <h3><i class="fas fa-th-list"></i>WhatsApp Voice Calling</h3>
        <p>
Enable real-time voice calls for instant customer connection.
Boost trust, support, and conversions with faster interactions.</p>
               
                <a class="learn-more" href="<?php echo $bp; ?>channels/whatsapp/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>

      </div>
    </div>
  </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
  let currentURL = window.location.href.replace(/\/$/, '');

  document.querySelectorAll('.grid-item').forEach(function(item) {
    const link = item.querySelector('a');
    if (!link) return;

    let linkHref = link.href.replace(/\/$/, '');
    if (currentURL !== linkHref) {
      // show only non-matching boxes
      item.style.display = 'flex';
    } else {
      // remove the current feature box
      item.remove();
    }
  });
});
</script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="usecase-section py-5" id="usecases-explore" style="background:#fff;">
    <div class="container text-center">
        <h2 class="fw-bold mb-3 fw-bold">Explore Industry-wise WhatsApp Use Cases</h2>
        <p class="text-muted mb-5">See how businesses across industries use WhatsApp Business Platform(API) to engage
            customers, increase sales, and simplify communication.
        </p>
        <div class="usecase-grid">

            <a href="<?php echo $bp; ?>industry/education-and-social-impacts/" 
                class="use-case-card">
                <div class="icon-circle" style="background:#fff4d6;color:#c98a02;"><i
                        class="bi bi-mortarboard-fill"></i></div>
                <h3>Education & EdTech</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/bfsi/" 
                class="use-case-card">
                <div class="icon-circle" style="background: #e5f2ff; color: #0288d1;"><i class="bi bi-bank"></i></div>
                <h3>Banking & Fintech</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/healthcare/" 
                class="use-case-card">
                <div class="icon-circle" style="background: #ffe5e9; color: #e91e63;"><i
                        class="bi bi-heart-pulse-fill"></i></div>
                <h3>Healthcare</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/travel-and-hospitality/" 
                class="use-case-card">
                <div class="icon-circle" style="background: #f0e6ff; color: #7b1fa2;"><i
                        class="bi bi-airplane-fill"></i></div>
                <h3>Travel & Tourism</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/automobiles-and-transport/" 
                class="use-case-card">
                <div class="icon-circle" style="background: #e5f4ff; color: #1565c0;"><i
                        class="bi bi-car-front-fill"></i></div>
                <h3>Automotive</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/retail-and-ecommerce/" 
                class="use-case-card">
                <div class="icon-circle" style="background: #e6f8ee; color: #2e7d32;"><i class="bi bi-bag-fill"></i>
                </div>
                <h3>Retail & E-commerce</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/construction-and-real-estate/" 
                class="use-case-card">
                <div class="icon-circle" style="color:#23398f; background: #c6cde9"><i class="fas fa-building"></i>
                </div>
                <h3>Real Estate</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/food-and-beverages/"  class="use-case-card">
                <div class="icon-circle" style="background: #e9dec9; color: #6f5627;"><i class="fas fa-utensils"></i>
                </div>
                <h3>Restaurant & Food Business</h3>
            </a>

            <a href="<?php echo $bp; ?>business-leads/beauty-wellness/" 
                class="use-case-card">
                <div class="icon-circle" style="color: #a55a67; background: #f7e2e6;"><i class="fas fa-spa"></i></div>
                <h3>Spas & Salons</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/advertising-and-events/" 
                class="use-case-card">
                <div class="icon-circle" style="background:#fdeaea;color:#d9534f;"><i class="fas fa-microphone-alt"></i>
                </div>
                <h3>Events & Webinars</h3>
            </a>

            <a href="<?php echo $bp; ?>business-leads/b2b-suppliers/" 
                class="use-case-card">
                <div class="icon-circle" style="background:#ffe7d9;color:#d35f16;"><i class="fas fa-store"></i></div>
                <h3>Small & Medium Business</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/communication-and-it/" 
                class="use-case-card">
                <div class="icon-circle" style="background: linear-gradient(135deg, #e0e7ff, #c7d2fe); color: #1e3a8a;">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Enterprises</h3>
            </a>

            <a href="<?php echo $bp; ?>business-leads/retail/" 
                class="use-case-card">
                <div class="icon-circle" style="background:#fdf0d5;color:#b8860b;"><i class="fas fa-gem"></i></div>
                <h3>Jewellers</h3>
            </a>

        </div>
    </div>
</section>

<style>
    #usecases-explore .usecase-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 24px;
        margin-top: 10px;
    }

    #usecases-explore .use-case-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 16px;
        background: #fff;
        border: 1px solid #edf0f3;
        border-radius: 16px;
        padding: 34px 16px;
        text-decoration: none;
        color: #1f2430;
        transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
    }

    #usecases-explore .use-case-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(0, 0, 0, .08);
        border-color: #dbe0e6;
        color: #1f2430;
    }

    #usecases-explore .icon-circle {
        width: 68px;
        height: 68px;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        flex-shrink: 0;
    }

    #usecases-explore .use-case-card h3 {
        font-size: 15px;
        font-weight: 600;
        line-height: 1.35;
        margin: 0;
    }

    @media (max-width: 1200px) {
        #usecases-explore .usecase-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 900px) {
        #usecases-explore .usecase-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 600px) {
        #usecases-explore .usecase-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .usecase-section h2 {
        font-size: 32px;
    }

    .usecase-item {
        text-align: start;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        padding: 20px 18px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border-radius: 8px;
        background: #fff;
    }



    .icon-circle {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 24px;
        flex-shrink: 0;
    }

    .usecase-item h3 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .usecase-item p {
        color: #555;
        font-size: 0.95rem;
        flex-grow: 1;
        margin-bottom: 15px;
    }



    .row.g-4>div {
        display: flex;
    }

    @media (max-width: 767px) {
        .usecase-item {
            height: auto;
        }

        .usecase-item p {
            min-height: auto;
        }
    }
</style>

<style>
    .section {
        padding: 60px 0px;
    }



    .cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }


    .card {
        background: #ffffff;
        border-radius: 20px !important;
        padding: 35px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: 0.2s ease;
    }


    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 35px rgba(0, 0, 0, 0.12);
    }


    .iconn {
        font-size: 45px;
        margin-bottom: 20px;
        color: #22c55e;
    }


    .card h3 {
        margin: 0 0 10px;
        font-size: 22px;
        color: #0f172a;
    }


    .card p {
        margin: 0 0 20px;
        font-size: 16px;
        color: #475569;
        line-height: 1.45;
    }

    .grid-item a {
        display: inline-block;
        margin-top: 20px;
        font-size: 15px;
        color: #034737;
        text-decoration: none;
    }

    .grid-item a:hover {
        text-decoration: none;
    }

    Learn More Link .learn-more {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-weight: 600;
        color: #034737;
        text-decoration: none;
        font-size: 15px;
        margin-top: 10px;
    }


    .learn-more i {
        transition: 0.2s ease;
    }


    .learn-more:hover i {
        transform: translateX(4px);
    }


    @media(max-width: 900px) {
        .cards {
            grid-template-columns: 1fr 1fr;
        }
    }


    @media(max-width: 600px) {

        .cards {
            grid-template-columns: 1fr;
        }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />



<section class="section">
    <div class="container">
        <h2 class="whatsapp-heading fw-bold mb-2">Department Wise Uses of WhatsApp Official API</h2>
        <p class="text-center mb-5">See how WhatsApp Business Platform helps businesses boost marketing, streamline
            sales, and improve customer support.</p>


        <div class="cards">
            <div class="card">
                <div class="iconn"><i class="fas fa-bullhorn"></i></div>
                <h3>WhatsApp for Marketing</h3>
                <p>Reach customers instantly with high-engagement broadcasts and personalized offers.</p>
                <a class="learn-more" href="<?php echo $bp; ?>solutions/bulk-messaging/" target="_blank"
                    rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>


            <div class="card">
                <div class="iconn"><i class="fas fa-handshake"></i></div>
                <h3>WhatsApp for Sales</h3>
                <p>Convert chats into sales with automated workflows, lead management, and fast follow-ups.</p>
                <a class="learn-more" href="<?php echo $bp; ?>products/shared-inbox/" target="_blank"
                    rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>


            <div class="card">
                <div class="iconn"><i class="fas fa-headset"></i></div>
                <h3>WhatsApp for Support</h3>
                <p class="">Provide fast, reliable customer support with instant replies and automated ticket
                    management.</p>
                <a class="learn-more" href="<?php echo $bp; ?>solutions/customer-support/" target="_blank"
                    rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section><section class="faq-section">
  <div class="container">
        <div class="custom-faq-accordion" aria-label="Frequently Asked Questions"><h2>Frequently Asked Questions</h2><div class="faq-item"><button class="faq-question open" type="button" aria-expanded="true" aria-controls="faq-answer-0"><span class="faq-title"><h3>Is the Verified Badge on WhatsApp free?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-0" class="faq-answer open" role="region" aria-hidden="false" style="max-height:none;">If you are using the WhatsApp Business API, getting the verified badge is completely free. You do not have to get a subscription to apply for the Meta Verified badge.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-1"><span class="faq-title"><h3>What to do if my WhatsApp blue tick application is rejected?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-1" class="faq-answer" role="region" aria-hidden="true">If your WhatsApp Blue Tick (verification) application is denied, then you can apply again after fixing the problems. To get verified, just ensure your business meets the requirements. The important requirements are: a verified Facebook Business Manager account, an active WhatsApp Business API account, and an active online presence.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-2"><span class="faq-title"><h3>How long does the verification process take?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-2" class="faq-answer" role="region" aria-hidden="true">If your account is set up correctly and fulfills all the needed requirements, approval through the API usually takes less than a week. If your application was denied, do not worry, since you can apply again after 30 days.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-3"><span class="faq-title"><h3>Can I use the WhatsApp Business API without a Blue Tick?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-3" class="faq-answer" role="region" aria-hidden="true">Yes, the Blue Tick is optional. You can operate the WhatsApp Business API without having the Blue Tick. However, having the Blue Tick shows trust and credibility and can improve customer engagement.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-4"><span class="faq-title"><h3>Can any business apply for the Blue Tick?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-4" class="faq-answer" role="region" aria-hidden="true">Not every business can apply for the Blue Tick. WhatsApp only approves verification for established businesses/brands that have an established, active online presence and a verified business profile. Although any business can attempt to apply, your chances of getting verification are greatly improved if you meet WhatsApp's criteria.</div></div></div><script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Is the Verified Badge on WhatsApp free?","acceptedAnswer":{"@type":"Answer","text":"If you are using the WhatsApp Business API, getting the verified badge is completely free. You do not have to get a subscription to apply for the Meta Verified badge."}},{"@type":"Question","name":"What to do if my WhatsApp blue tick application is rejected?","acceptedAnswer":{"@type":"Answer","text":"If your WhatsApp Blue Tick (verification) application is denied, then you can apply again after fixing the problems. To get verified, just ensure your business meets the requirements. The important requirements are: a verified Facebook Business Manager account, an active WhatsApp Business API account, and an active online presence."}},{"@type":"Question","name":"How long does the verification process take?","acceptedAnswer":{"@type":"Answer","text":"If your account is set up correctly and fulfills all the needed requirements, approval through the API usually takes less than a week. If your application was denied, do not worry, since you can apply again after 30 days."}},{"@type":"Question","name":"Can I use the WhatsApp Business API without a Blue Tick?","acceptedAnswer":{"@type":"Answer","text":"Yes, the Blue Tick is optional. You can operate the WhatsApp Business API without having the Blue Tick. However, having the Blue Tick shows trust and credibility and can improve customer engagement."}},{"@type":"Question","name":"Can any business apply for the Blue Tick?","acceptedAnswer":{"@type":"Answer","text":"Not every business can apply for the Blue Tick. WhatsApp only approves verification for established businesses/brands that have an established, active online presence and a verified business profile. Although any business can attempt to apply, your chances of getting verification are greatly improved if you meet WhatsApp's criteria."}}]}</script>
    <script>
    (function(){
        if (window.__customFaqAccordionInit) return;
        window.__customFaqAccordionInit = true;

        function closeAnswer(answer, btn) {
            if (!answer) return;
            // if maxHeight is "none", set to current px value to animate to 0
            if (answer.style.maxHeight === "none" || answer.style.maxHeight === "") {
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
            // force reflow
            void answer.offsetHeight;
            answer.style.maxHeight = "0px";
            answer.classList.remove("open");
            if (btn) {
                btn.classList.remove("open");
                btn.setAttribute("aria-expanded", "false");
            }
            answer.setAttribute("aria-hidden", "true");
        }

        function openAnswer(answer, btn) {
            if (!answer) return;
            // set to exact height so transition works
            answer.style.maxHeight = answer.scrollHeight + "px";
            answer.classList.add("open");
            if (btn) {
                btn.classList.add("open");
                btn.setAttribute("aria-expanded", "true");
            }
            answer.setAttribute("aria-hidden", "false");

            // once transition finishes, set to none to allow internal content changes (images) without clipping
            var onTransEnd = function(e){
                if (answer.classList.contains("open")) {
                    answer.style.maxHeight = "none";
                }
                answer.removeEventListener("transitionend", onTransEnd);
            };
            answer.addEventListener("transitionend", onTransEnd);
        }

        document.addEventListener("click", function(e){
            var btn = e.target.closest ? e.target.closest(".custom-faq-accordion .faq-question") : null;
            if (!btn) return;

            var item = btn.closest(".faq-item");
            if (!item) return;
            var answer = item.querySelector(".faq-answer");
            if (!answer) return;

            // if already open, close it
            if (answer.classList.contains("open")) {
                closeAnswer(answer, btn);
            } else {
                // optionally close other open items (uncomment to allow only-one-open)
                var openItems = document.querySelectorAll(".custom-faq-accordion .faq-answer.open");
                openItems.forEach(function(o){
                    var parentBtn = o.closest(".faq-item") ? o.closest(".faq-item").querySelector(".faq-question") : null;
                    if (o !== answer) closeAnswer(o, parentBtn);
                });

                openAnswer(answer, btn);
            }
        });

        // Make sure open answers recalc height on window resize (useful if images load or layout changes)
        window.addEventListener("resize", function(){
            var openAnswers = document.querySelectorAll(".custom-faq-accordion .faq-answer.open");
            openAnswers.forEach(function(a){
                // if maxHeight is "none", set it to scrollHeight to keep it visible after resize
                if (a.style.maxHeight === "none") {
                    a.style.maxHeight = a.scrollHeight + "px";
                    // then release to none after a tick
                    setTimeout(function(){ a.style.maxHeight = "none"; }, 350);
                }
            });
        });
    })();
    </script>
    
    <style>
    // .custom-faq-accordion { margin-top:30px; border-top:1px solid #ddd; }
    // .custom-faq-accordion h2 { margin-bottom:15px; }
    // .faq-item { margin-bottom:10px; }

    // .faq-question {
    //     width: 100%;
    //     text-align: left;
    //     background: #ffffff;
    //     padding: 10px;
    //     font-size: 16px;
    //     cursor: pointer;
    //     border: 0;
    //     border-bottom: 1px solid;
    //     display: flex;
    //     justify-content: space-between;
    //     align-items: center;
    // }
    // /* Reset heading margin inside button to avoid extra spacing */
    // .faq-question h3 { margin: 0; font-size: 16px; font-weight: 600; }
    // .faq-title { display:inline-block; flex:1; text-align:left; }

    // .faq-arrow {
    //     display: inline-block;
    //     width: 10px;
    //     height: 10px;
    //     border-right: 2px solid #333;
    //     border-bottom: 2px solid #333;
    //     transform: rotate(45deg);
    //     transition: transform 0.25s ease;
    //     margin-left: 8px;
    // }
    // .faq-question.open .faq-arrow {
    //     transform: rotate(-135deg);
    // }

    // .faq-answer {
    //     max-height: 0;
    //     opacity: 0;
    //     overflow: hidden;
    //     transition: max-height 0.35s ease, opacity 0.25s ease, padding 0.25s ease;
    //     padding: 0 10px;
    //     border-bottom: 0;
    //     background: #fff;
    // }
    // .faq-answer.open {
    //     opacity: 1;
    //     padding: 10px;
       
    // }

    // .faq-question.open { border-bottom: 0; }
    
    
    
    
    .custom-faq-accordion { margin-top:30px; }
    .custom-faq-accordion h2 { font-size: 26px; margin-bottom: 15px; }

.faq-item {
    background: #fff;
    border-radius: 8px;
    margin-bottom: 15px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    overflow: hidden;
    box-sizing: border-box;
}

.faq-question {
    width: 100%;
    text-align: left;
    background: #fff;
    padding: 20px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-sizing: border-box;
}

.faq-title h3{
    flex: 1;
    color: #333;
    font-size: 16px!important;
    margin-bottom:0px;
    font-weight:700;
}

.faq-arrow {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-right: 2px solid #000901;
    border-bottom: 2px solid #024815;
    transform: rotate(45deg);
    transition: transform 0.3s ease;
}
.faq-question.open .faq-arrow {
    transform: rotate(-135deg);
}

.faq-answer {
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: max-height 0.4s ease, opacity 0.4s ease, padding 0.3s ease;
    padding: 0 20px;
    background: #fff;
    box-sizing: border-box;
}

.faq-item .faq-answer {
    font-size: 16px!important;
    color:#202123!important;
}

.faq-answer.open {
    opacity: 1;
    padding: 15px 20px;
    border-top: 1px solid #eee;
}

@media (max-width: 600px) {
    .custom-faq-accordion h2 { font-size: 20px; }
    .faq-question { padding: 14px 16px; font-size: 15px; gap: 10px; }
    .faq-title h3 { font-size: 15px!important; }
    .faq-arrow { flex-shrink: 0; }
    .faq-answer { padding: 0 16px; }
    .faq-item .faq-answer { font-size: 14.5px!important; }
    .faq-answer.open { padding: 12px 16px; }
}

    </style>
            
 </div>

</section>

    <div class="wv-modal-overlay" id="wvModalOverlay">
        <div class="wv-modal-card">
            <!-- Header -->
            <div class="wv-modal-header">
                <div class="wv-modal-header-top mb-0">
                
                    
                        <div class="wv-modal-title mb-1 text-center" style="margin:0 auto;">Get WhatsApp Blue Tick Verified</div>
                
                    <button class="wv-modal-close-btn" id="wvCloseModal">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <!-- Step Indicators -->
                <div class="wv-modal-steps">
                    <div class="wv-modal-step-indicator wv-active" id="wvStep1Indicator">1</div>
                    <div class="wv-modal-step-line" id="wvStepLine1"></div>
                    <div class="wv-modal-step-indicator" id="wvStep2Indicator">2</div>
                </div>
            </div>

            <!-- Content -->
            <div class="wv-modal-content">
                <!-- Step 1 -->
                <div class="wv-modal-step wv-active" id="wvStep1">
                    <div class="wv-modal-info-banner">
                
                        <div class="wv-modal-info-text">
                            <h3 class="text-center">Get Your <span style="color: #00BAF2;">Blue Tick Badge</span><span class="verified-badge" title="Verified User">
    <svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true">
        <!-- Scalloped badge -->
        <path d="
            M32 2
            L38 6
            L45 4
            L49 10
            L56 12
            L58 19
            L62 26
            L58 32
            L62 38
            L58 45
            L56 52
            L49 54
            L45 60
            L38 58
            L32 62
            L26 58
            L19 60
            L15 54
            L8 52
            L6 45
            L2 38
            L6 32
            L2 26
            L6 19
            L8 12
            L15 10
            L19 4
            L26 6
            Z"
            fill="#1DA1F2"/>

        <!-- White tick -->
        <polyline
            points="18 34 28 44 46 22"
            fill="none"
            stroke="#fff"
            stroke-width="6"
            stroke-linecap="round"
            stroke-linejoin="round"/>
    </svg>
</span></h3>
                            <p>Establish credibility and enhance customer confidence with the official <strong style="color:#0893f5;">WhatsApp Blue Tick verification</strong>, leading to increased engagement and sales.</p>
                        </div>
                    </div>

                    <div class="wv-modal-form-group">
                        <label class="wv-modal-label">
                            Your Name <span class="wv-modal-label-required">*</span>
                        </label>
                        <input type="text" class="wv-modal-input" id="wvName" placeholder="John Doe">
                        <div class="wv-modal-error-message wv-hidden" id="wvNameError"></div>
                    </div>

                    <div class="wv-modal-form-group">
                        <label class="wv-modal-label">
                            Your Email <span class="wv-modal-label-required">*</span>
                        </label>
                        <p class="wv-modal-helper-text">Please add your work or personal email for blue tick verification</p>
                        <input type="email" class="wv-modal-input" id="wvEmail" placeholder="royal@example.com">
                        <div class="wv-modal-error-message wv-hidden" id="wvEmailError"></div>
                    </div>

                    <div class="wv-modal-form-group">
                        <label class="wv-modal-label">
                            Personal Phone Number <span class="wv-modal-label-required">*</span>
                        </label>
                        <p class="wv-modal-helper-text">Our sales team will reach out on this number via WhatsApp for <strong>blue tick application</strong></p>
                        <div class="wv-modal-phone-group">
    <div class="country-code">
        <span id="js-countrycode-phone"></span> <!-- UNIQUE ID for phone -->
    </div>
    <div style="flex: 1;">
        <input type="tel" class="wv-modal-input" id="wvPhone" placeholder="9876543210">
        <div class="wv-modal-error-message wv-hidden" id="wvPhoneError"></div>
    </div>
</div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="wv-modal-step" id="wvStep2">
                    <div class="wv-modal-info-banner">
                      
                        <div class="wv-modal-info-text">
                            <h3 class="text-center">Blue Tick Requirements  <span class="verified-badge" title="Verified User">
    <svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true">
        <!-- Scalloped badge -->
        <path d="
            M32 2
            L38 6
            L45 4
            L49 10
            L56 12
            L58 19
            L62 26
            L58 32
            L62 38
            L58 45
            L56 52
            L49 54
            L45 60
            L38 58
            L32 62
            L26 58
            L19 60
            L15 54
            L8 52
            L6 45
            L2 38
            L6 32
            L2 26
            L6 19
            L8 12
            L15 10
            L19 4
            L26 6
            Z"
            fill="#1DA1F2"/>

        <!-- White tick -->
        <polyline
            points="18 34 28 44 46 22"
            fill="none"
            stroke="#fff"
            stroke-width="6"
            stroke-linecap="round"
            stroke-linejoin="round"/>
    </svg>
</span></h3>
                            <p>Provide your business details for <strong style="color:#00b7ee;">WhatsApp Blue Tick verification</strong> eligibility check.</p>
                        </div>
                    </div>

                    <div class="wv-modal-form-group">
                        <label class="wv-modal-label">
                            Website <span class="wv-modal-label-required">*</span>
                        </label>
                        <p class="wv-modal-helper-text">We will check if your brand meets Meta's <strong>blue tick criteria</strong> and quote accordingly</p>
                        <input type="url" class="wv-modal-input" id="wvWebsite" placeholder="https://www.example.com/">
                        <div class="wv-modal-error-message wv-hidden" id="wvWebsiteError"></div>
                    </div>

                    <div class="wv-modal-form-group">
                        <label class="wv-modal-label">
                            Display Name for Blue Tick <span class="wv-modal-label-required">*</span>
                        </label>
                        <p class="wv-modal-helper-text">This name will show with <strong>blue tick verification</strong> on your WhatsApp profile</p>
                        <input type="text" class="wv-modal-input" id="wvDisplayName" placeholder="domain">
                        <div class="wv-modal-error-message wv-hidden" id="wvDisplayNameError"></div>
                    </div>

                    <div class="wv-modal-form-group">
                        <label class="wv-modal-label">WhatsApp Number for Blue Tick?</label>
                        <p class="wv-modal-helper-text">Number that will get the official <strong>blue tick verification badge</strong> (leave empty if not ready)</p>
                       <div class="wv-modal-phone-group">
    <div class="country-code">
        <span id="js-countrycode-whatsapp"></span> <!-- UNIQUE ID for WhatsApp -->
    </div>
    <input type="tel" class="wv-modal-input" id="wvWhatsAppNumber" placeholder="9876xxx210">
</div>
                    </div>

                    <div class="wv-modal-form-group">
                        <label class="wv-modal-label">
                            Using WhatsApp Business API? <span class="wv-modal-label-required">*</span>
                        </label>
                        <p class="wv-modal-helper-text"><strong>Required for Blue Tick:</strong> Select No if using WhatsApp Business/Personal App</p>
                        <div class="wv-modal-radio-group">
                            <div class="wv-modal-radio-option" data-value="yes">
                                <div class="wv-modal-radio-circle">
                                    <div class="wv-modal-radio-circle-inner"></div>
                                </div>
                                <span class="wv-modal-radio-label">Yes</span>
                            </div>
                            <div class="wv-modal-radio-option" data-value="no">
                                <div class="wv-modal-radio-circle">
                                    <div class="wv-modal-radio-circle-inner"></div>
                                </div>
                                <span class="wv-modal-radio-label">No</span>
                            </div>
                        </div>
                        <div class="wv-modal-error-message wv-hidden" id="wvApiError"></div>
                    </div>

                    <!-- Conditional Content for YES -->
                    <div class="wv-modal-conditional-content wv-hidden" id="wvApiYesContent">
                        <div style="background: linear-gradient(135deg, #10b981, #059669); border-radius: 0.75rem; padding: 1rem; margin-bottom: 1rem; color: white;">
                            <h4 style="margin: 0 0 0.5rem 0; font-size: 1rem;">Perfect! You're Blue Tick Ready</h4>
                            <p style="margin: 0; font-size: 0.875rem;">WhatsApp Business API users qualify for official Meta Blue Tick verification.</p>
                        </div>

                        <div class="wv-modal-form-group">
                            <label class="wv-modal-label">
                                Your API Provider <span class="wv-modal-label-required">*</span>
                            </label>
                            <div class="wv-modal-radio-group" id="wvProviderGroup">
                                <div class="wv-modal-radio-option" data-value="HelloBots">
                                    <div class="wv-modal-radio-circle"><div class="wv-modal-radio-circle-inner"></div></div>
                                    <span class="wv-modal-radio-label">HelloBots</span>
                                </div>
                                <div class="wv-modal-radio-option" data-value="other">
                                    <div class="wv-modal-radio-circle"><div class="wv-modal-radio-circle-inner"></div></div>
                                    <span class="wv-modal-radio-label">Other Provider</span>

                                </div>
                                <div class="wv-modal-form-group wv-hidden" id="wvOtherProviderGroup">
    <label class="wv-modal-label">
        Enter API Provider Name <span class="wv-modal-label-required">*</span>
    </label>
    <input type="text"
           class="wv-modal-input"
           id="wvOtherProvider"
           placeholder="e.g. Twilio, Gupshup, Wati">
    <div class="wv-modal-error-message wv-hidden" id="wvOtherProviderError"></div>
</div>
                            </div>
                            <div class="wv-modal-error-message wv-hidden" id="wvProviderError"></div>
                        </div>

                        <div class="wv-modal-form-group">
                            <label class="wv-modal-label">
                                Number Age on API <span class="wv-modal-label-required">*</span>
                            </label>
                            <div class="wv-modal-radio-group" id="wvDateGroup">
                                <div class="wv-modal-radio-option" data-value="less-than-1">
                                    <div class="wv-modal-radio-circle"><div class="wv-modal-radio-circle-inner"></div></div>
                                    <span class="wv-modal-radio-label">Less than 1 month</span>
                                </div>
                                <div class="wv-modal-radio-option" data-value="more-than-1">
                                    <div class="wv-modal-radio-circle"><div class="wv-modal-radio-circle-inner"></div></div>
                                    <span class="wv-modal-radio-label">More than 1 month </span>
                                </div>
                            </div>
                            <div class="wv-modal-error-message wv-hidden" id="wvDateError"></div>
                        </div>
                    </div>

                    <!-- Conditional Content for NO -->
                    <div class="wv-modal-conditional-content wv-hidden" id="wvApiNoContent">
                        <div class="wv-modal-warning-box">
                            <p><strong>Blue Tick Limitation:</strong> WhatsApp Business mobile app users <strong>cannot get official blue tick verification</strong> through standard channels.</p>
                        </div>

                        <p style="font-size: 0.75rem; font-weight: 500; color: #334155; margin-bottom: 0.75rem;">
                            <strong>Switch to WhatsApp Business API</strong> to unlock Blue Tick verification + advanced features:
                        </p>

                        <ul class="wv-modal-info-list">
                            <li>
                                <div class="wv-modal-bullet"></div>
                                <span><strong>Blue Tick Support:</strong> Official verification via WhatsApp Business API</span>
                            </li>
                            <li>
                                <div class="wv-modal-bullet"></div>
                                <span><strong>API Features:</strong> Bulk messaging, chatbots, automation for business growth</span>
                            </li>
                            <li>
                                <div class="wv-modal-bullet"></div>
                                <span><strong>Easy Migration:</strong> Transfer your number to HelloBots API in minutes</span>
                            </li>
                        </ul>

                        <p style="font-size: 0.75rem; font-weight: 600; color: #0f172a; text-align: center; padding: 1rem; background: #f0fdf4; border-radius: 0.5rem; border-left: 4px solid #10b981;">
                            <strong>Ready for Blue Tick? Switch to HelloBots WhatsApp Business API today!</strong>
                        </p>
                    </div>
                </div>

                <!-- Success Screen -->
                <div class="wv-modal-step" id="wvStep3">
                    <div class="wv-modal-success-screen">
                        <div class="wv-modal-success-icon" style="background: linear-gradient(135deg, #00BAF2, #1E90FF);">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="white" stroke="white" stroke-width="3">
                                <circle cx="12" cy="12" r="10" stroke-width="2"/>
                                <circle cx="12" cy="12" r="5" fill="white"/>
                                <circle cx="12" cy="8" r="2" fill="#00BAF2"/>
                            </svg>
                        </div>
                        <h3 class="wv-modal-success-title">Blue Tick Application Submitted!</h3>
                        <p class="wv-modal-success-text">Our team will review your details and guide you through the <strong>WhatsApp Blue Tick verification process</strong>.</p>
                        <p style="font-size: 0.875rem; color: #10b981; font-weight: 600; margin-bottom: 1.5rem;">
                            You'll receive WhatsApp message within 24 hours with next steps!
                        </p>
                        <button class="wv-modal-btn wv-modal-btn-primary">
                            Contact via WhatsApp
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="wv-modal-footer" id="wvModalFooter">
                <button class="wv-modal-btn wv-modal-btn-back wv-hidden" style="background: grey;
    color: #fff" id="wvBackBtn">Back</button>
                <div></div>
                <button class="wv-modal-btn wv-modal-btn-primary" id="wvNextBtn">
                    Next
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </div>
    </div>

<!-- Success Popup -->
<div class="success-popup-overlay" id="successPopupOverlay">
    <div class="success-popup-card">
        <!-- Close Button -->
        <button class="success-popup-close" onclick="closeSuccessPopup()" aria-label="Close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
        
        <div class="success-popup-icon">
            <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3">
                <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
        </div>
        
        <h2 class="success-popup-title">🎉 Application Submitted!</h2>
        
        <p class="success-popup-message">
            We have successfully received your <strong>WhatsApp Blue Tick verification</strong> application.
        </p>
        
        <div class="success-popup-highlight">
            <p>✅ Our team will contact you within 24 hours via WhatsApp</p>
        </div>
        
        <button class="success-popup-btn" onclick="closeSuccessPopup()">
            Got it!
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>
    </div>
</div>

<script>
// ✅ Define success popup functions GLOBALLY (before DOMContentLoaded)
function showSuccessPopup() {
    const overlay = document.getElementById('successPopupOverlay');
    if (overlay) {
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
        createConfetti();
    }
}

function closeSuccessPopup() {
    const overlay = document.getElementById('successPopupOverlay');
    if (overlay) {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }
}

function createConfetti() {
    const colors = ['#10b981', '#059669', '#34d399', '#6ee7b7', '#a7f3d0'];
    const popup = document.querySelector('.success-popup-card');
    
    if (!popup) return;
    
    for (let i = 0; i < 30; i++) {
        setTimeout(() => {
            const confetti = document.createElement('div');
            confetti.className = 'success-confetti';
            confetti.style.left = Math.random() * 100 + '%';
            confetti.style.background = colors[Math.floor(Math.random() * colors.length)];
            confetti.style.animationDelay = Math.random() * 0.5 + 's';
            popup.appendChild(confetti);
            
            setTimeout(() => confetti.remove(), 3000);
        }, i * 50);
    }
}

// ✅ Now start DOMContentLoaded
document.addEventListener('DOMContentLoaded', function() {
    
    const allCountries = [
        {"country": "Norway", "code": "+47"},
        {"country": "United Kingdom", "code": "+44"},
        {"country": "Algeria", "code": "+213"},
        {"country": "Andorra", "code": "+376"},
        {"country": "Angola", "code": "+244"},
        {"country": "Anguilla", "code": "+1264"},
        {"country": "Antigua & Barbuda", "code": "+1268"},
        {"country": "Argentina", "code": "+54"},
        {"country": "Armenia", "code": "+374"},
        {"country": "Aruba", "code": "+297"},
        {"country": "Australia", "code": "+61"},
        {"country": "Austria", "code": "+43"},
        {"country": "Azerbaijan", "code": "+994"},
        {"country": "Bahamas", "code": "+1242"},
        {"country": "Bahrain", "code": "+973"},
        {"country": "Bangladesh", "code": "+880"},
        {"country": "Barbados", "code": "+1246"},
        {"country": "Belarus", "code": "+375"},
        {"country": "Belgium", "code": "+32"},
        {"country": "Belize", "code": "+501"},
        {"country": "Benin", "code": "+229"},
        {"country": "Bermuda", "code": "+1441"},
        {"country": "Bhutan", "code": "+975"},
        {"country": "Bolivia", "code": "+591"},
        {"country": "Bosnia Herzegovina", "code": "+387"},
        {"country": "Botswana", "code": "+267"},
        {"country": "Brazil", "code": "+55"},
        {"country": "Brunei", "code": "+673"},
        {"country": "Bulgaria", "code": "+359"},
        {"country": "Burkina Faso", "code": "+226"},
        {"country": "Burundi", "code": "+257"},
        {"country": "Tanzania", "code": "+255"},
        {"country": "Cambodia", "code": "+855"},
        {"country": "Cameroon", "code": "+237"},
        {"country": "Canada", "code": "+1"},
        {"country": "Cape Verde Islands", "code": "+238"},
        {"country": "Cayman Islands", "code": "+1345"},
        {"country": "Central African Republic", "code": "+236"},
        {"country": "Chile", "code": "+56"},
        {"country": "China", "code": "+86"},
        {"country": "Colombia", "code": "+57"},
        {"country": "Comoros", "code": "+269"},
        {"country": "Congo", "code": "+242"},
        {"country": "Cook Islands", "code": "+682"},
        {"country": "Costa Rica", "code": "+506"},
        {"country": "Croatia", "code": "+385"},
        {"country": "Cuba", "code": "+53"},
        {"country": "Cyprus North", "code": "+90392"},
        {"country": "Cyprus South", "code": "+357"},
        {"country": "Czech Republic", "code": "+42"},
        {"country": "Denmark", "code": "+45"},
        {"country": "Djibouti", "code": "+253"},
        {"country": "Dominica", "code": "+1809"},
        {"country": "Dominican Republic", "code": "+1809"},
        {"country": "Ecuador", "code": "+593"},
        {"country": "Egypt", "code": "+20"},
        {"country": "El Salvador", "code": "+503"},
        {"country": "Equatorial Guinea", "code": "+240"},
        {"country": "Eritrea", "code": "+291"},
        {"country": "Estonia", "code": "+372"},
        {"country": "Ethiopia", "code": "+251"},
        {"country": "Falkland Islands", "code": "+500"},
        {"country": "Faroe Islands", "code": "+298"},
        {"country": "Fiji", "code": "+679"},
        {"country": "Finland", "code": "+358"},
        {"country": "France", "code": "+33"},
        {"country": "French Guiana", "code": "+594"},
        {"country": "French Polynesia", "code": "+689"},
        {"country": "Gabon", "code": "+241"},
        {"country": "Gambia", "code": "+220"},
        {"country": "Georgia", "code": "+7880"},
        {"country": "Germany", "code": "+49"},
        {"country": "Ghana", "code": "+233"},
        {"country": "Gibraltar", "code": "+350"},
        {"country": "Greece", "code": "+30"},
        {"country": "Greenland", "code": "+299"},
        {"country": "Grenada", "code": "+1473"},
        {"country": "Guadeloupe", "code": "+590"},
        {"country": "Guam", "code": "+671"},
        {"country": "Guatemala", "code": "+502"},
        {"country": "Guinea", "code": "+224"},
        {"country": "Guinea - Bissau", "code": "+245"},
        {"country": "Guyana", "code": "+592"},
        {"country": "Haiti", "code": "+509"},
        {"country": "Honduras", "code": "+504"},
        {"country": "Hong Kong", "code": "+852"},
        {"country": "Hungary", "code": "+36"},
        {"country": "Iceland", "code": "+354"},
        {"country": "India", "code": "+91"},
        {"country": "Indonesia", "code": "+62"},
        {"country": "Iran", "code": "+98"},
        {"country": "Iraq", "code": "+964"},
        {"country": "Ireland", "code": "+353"},
        {"country": "Israel", "code": "+972"},
        {"country": "Italy", "code": "+39"},
        {"country": "Jamaica", "code": "+1876"},
        {"country": "Japan", "code": "+81"},
        {"country": "Jordan", "code": "+962"},
        {"country": "Kazakhstan", "code": "+7"},
        {"country": "Kenya", "code": "+254"},
        {"country": "Kiribati", "code": "+686"},
        {"country": "Korea North", "code": "+850"},
        {"country": "Korea South", "code": "+82"},
        {"country": "Kuwait", "code": "+965"},
        {"country": "Kyrgyzstan", "code": "+996"},
        {"country": "Laos", "code": "+856"},
        {"country": "Latvia", "code": "+371"},
        {"country": "Lebanon", "code": "+961"},
        {"country": "Lesotho", "code": "+266"},
        {"country": "Liberia", "code": "+231"},
        {"country": "Libya", "code": "+218"},
        {"country": "Liechtenstein", "code": "+417"},
        {"country": "Lithuania", "code": "+370"},
        {"country": "Luxembourg", "code": "+352"},
        {"country": "Macao", "code": "+853"},
        {"country": "Macedonia", "code": "+389"},
        {"country": "Madagascar", "code": "+261"},
        {"country": "Malawi", "code": "+265"},
        {"country": "Malaysia", "code": "+60"},
        {"country": "Maldives", "code": "+960"},
        {"country": "Mali", "code": "+223"},
        {"country": "Malta", "code": "+356"},
        {"country": "Marshall Islands", "code": "+692"},
        {"country": "Martinique", "code": "+596"},
        {"country": "Mauritania", "code": "+222"},
        {"country": "Mayotte", "code": "+269"},
        {"country": "Mexico", "code": "+52"},
        {"country": "Micronesia", "code": "+691"},
        {"country": "Moldova", "code": "+373"},
        {"country": "Monaco", "code": "+377"},
        {"country": "Mongolia", "code": "+976"},
        {"country": "Montserrat", "code": "+1664"},
        {"country": "Morocco", "code": "+212"},
        {"country": "Mozambique", "code": "+258"},
        {"country": "Myanmar", "code": "+95"},
        {"country": "Namibia", "code": "+264"},
        {"country": "Nauru", "code": "+674"},
        {"country": "Nepal", "code": "+977"},
        {"country": "Netherlands", "code": "+31"},
        {"country": "New Caledonia", "code": "+687"},
        {"country": "New Zealand", "code": "+64"},
        {"country": "Nicaragua", "code": "+505"},
        {"country": "Niger", "code": "+227"},
        {"country": "Nigeria", "code": "+234"},
        {"country": "Niue", "code": "+683"},
        {"country": "Norfolk Islands", "code": "+672"},
        {"country": "Northern Marianas", "code": "+670"},
        {"country": "Oman", "code": "+968"},
        {"country": "Palau", "code": "+680"},
        {"country": "Panama", "code": "+507"},
        {"country": "Papua New Guinea", "code": "+675"},
        {"country": "Paraguay", "code": "+595"},
        {"country": "Peru", "code": "+51"},
        {"country": "Philippines", "code": "+63"},
        {"country": "Poland", "code": "+48"},
        {"country": "Portugal", "code": "+351"},
        {"country": "Puerto Rico", "code": "+1787"},
        {"country": "Qatar", "code": "+974"},
        {"country": "Reunion", "code": "+262"},
        {"country": "Romania", "code": "+40"},
        {"country": "Russia", "code": "+7"},
        {"country": "Rwanda", "code": "+250"},
        {"country": "San Marino", "code": "+378"},
        {"country": "Sao Tome & Principe", "code": "+239"},
        {"country": "Saudi Arabia", "code": "+966"},
        {"country": "Senegal", "code": "+221"},
        {"country": "Serbia", "code": "+381"},
        {"country": "Seychelles", "code": "+248"},
        {"country": "Sierra Leone", "code": "+232"},
        {"country": "Singapore", "code": "+65"},
        {"country": "Slovak Republic", "code": "+421"},
        {"country": "Slovenia", "code": "+386"},
        {"country": "Solomon Islands", "code": "+677"},
        {"country": "Somalia", "code": "+252"},
        {"country": "South Africa", "code": "+27"},
        {"country": "Spain", "code": "+34"},
        {"country": "Sri Lanka", "code": "+94"},
        {"country": "St. Helena", "code": "+290"},
        {"country": "St. Kitts", "code": "+1869"},
        {"country": "St. Lucia", "code": "+1758"},
        {"country": "Sudan", "code": "+249"},
        {"country": "Suriname", "code": "+597"},
        {"country": "Swaziland", "code": "+268"},
        {"country": "Sweden", "code": "+46"},
        {"country": "Switzerland", "code": "+41"},
        {"country": "Syria", "code": "+963"},
        {"country": "Taiwan", "code": "+886"},
        {"country": "Tajikstan", "code": "+7"},
        {"country": "Thailand", "code": "+66"},
        {"country": "Togo", "code": "+228"},
        {"country": "Tonga", "code": "+676"},
        {"country": "Trinidad & Tobago", "code": "+1868"},
        {"country": "Tunisia", "code": "+216"},
        {"country": "Turkey", "code": "+90"},
        {"country": "Turkmenistan", "code": "+993"},
        {"country": "Turks & Caicos Islands", "code": "+1649"},
        {"country": "Tuvalu", "code": "+688"},
        {"country": "Uganda", "code": "+256"},
        {"country": "Ukraine", "code": "+380"},
        {"country": "United Arab Emirates", "code": "+971"},
        {"country": "United States", "code": "+1"},
        {"country": "Uruguay", "code": "+598"},
        {"country": "Uzbekistan", "code": "+7"},
        {"country": "Vanuatu", "code": "+678"},
        {"country": "Vatican City", "code": "+379"},
        {"country": "Venezuela", "code": "+58"},
        {"country": "Vietnam", "code": "+84"},
        {"country": "Virgin Islands - British", "code": "+1284"},
        {"country": "Virgin Islands - US", "code": "+1340"},
        {"country": "Wallis & Futuna", "code": "+681"},
        {"country": "Yemen (North)", "code": "+969"},
        {"country": "Yemen (South)", "code": "+967"},
        {"country": "Zambia", "code": "+260"},
        {"country": "Zimbabwe", "code": "+263"}
    ];

    // Modal State
    const modalState = {
        currentStep: 1,
        formData: {
            name: '',
            email: '',
            phone: '',
            phoneCountryCode: '+91',
            website: '',
            displayName: '',
            whatsappNumber: '',
            whatsappCountryCode: '+91',
            usingAPI: null,
            apiProvider: '',
            apiAddedDate: ''
        },
        errors: {}
    };

    // DOM Elements
    const elements = {
        openBtn: document.getElementById('wvOpenModal'),
        closeBtn: document.getElementById('wvCloseModal'),
        overlay: document.getElementById('wvModalOverlay'),
        backBtn: document.getElementById('wvBackBtn'),
        nextBtn: document.getElementById('wvNextBtn'),
        step1: document.getElementById('wvStep1'),
        step2: document.getElementById('wvStep2'),
        step3: document.getElementById('wvStep3'),
        step1Indicator: document.getElementById('wvStep1Indicator'),
        step2Indicator: document.getElementById('wvStep2Indicator'),
        stepLine1: document.getElementById('wvStepLine1'),
        footer: document.getElementById('wvModalFooter'),
        name: document.getElementById('wvName'),
        email: document.getElementById('wvEmail'),
        phone: document.getElementById('wvPhone'),
        website: document.getElementById('wvWebsite'),
        displayName: document.getElementById('wvDisplayName'),
        whatsappNumber: document.getElementById('wvWhatsAppNumber'),
        phoneCountryCode: document.getElementById('js-countrycode-phone'),
        whatsappCountryCode: document.getElementById('js-countrycode-whatsapp'),
        apiYesContent: document.getElementById('wvApiYesContent'),
        apiNoContent: document.getElementById('wvApiNoContent')
    };

    // Load Country Codes
    function loadCountryCodes() {
        const createDropdown = (containerId) => {
            const options = allCountries.map(c => 
                `<option value="${c.code}">${c.country} (${c.code})</option>`
            ).join('');
            
            const selectHTML = `
                <select class="js-countrycode-select wv-modal-select" style="width: 100%; padding: 10px; font-size: 14px; border: 1.5px solid #e2e8f0; border-radius: 8px;">
                    ${options}
                </select>
            `;
            
            const container = document.getElementById(containerId);
            if (container) {
                container.innerHTML = selectHTML;
                const select = container.querySelector('select');
                if (select) {
                    select.value = '+91';
                    select.addEventListener('change', (e) => {
                        if (containerId === 'js-countrycode-phone') {
                            modalState.formData.phoneCountryCode = e.target.value;
                        } else {
                            modalState.formData.whatsappCountryCode = e.target.value;
                        }
                    });
                }
            }
        };
        
        createDropdown('js-countrycode-phone');
        createDropdown('js-countrycode-whatsapp');
        console.log('✅ Country codes loaded:', allCountries.length);
    }

    loadCountryCodes();

    // Open/Close Modal
    if (elements.openBtn) {
        elements.openBtn.addEventListener('click', () => {
            elements.overlay.classList.add('wv-active');
            document.body.classList.add('wv-modal-open');
        });
    }

    if (elements.closeBtn) {
        elements.closeBtn.addEventListener('click', closeModal);
    }
    
    if (elements.overlay) {
        elements.overlay.addEventListener('click', (e) => {
            if (e.target === elements.overlay) closeModal();
        });
    }

    function closeModal() {
        elements.overlay.classList.remove('wv-active');
        document.body.classList.remove('wv-modal-open');
        clearAllErrors();
    }

    // Radio Button Handlers
    function setupRadioGroup(groupSelector, callback) {
        const options = document.querySelectorAll(`${groupSelector} .wv-modal-radio-option`);
        options.forEach((option) => {
            option.style.cursor = 'pointer';
            option.addEventListener('click', function(e) {
                e.stopPropagation();
                options.forEach(opt => opt.classList.remove('wv-selected'));
                this.classList.add('wv-selected');
                callback(this.dataset.value);
            });
        });
    }

    setupRadioGroup('#wvStep2 .wv-modal-form-group:nth-child(5) .wv-modal-radio-group', (value) => {
        modalState.formData.usingAPI = value;
        clearError('wvApiError');
        if (value === 'yes') {
            elements.apiYesContent?.classList.remove('wv-hidden');
            elements.apiNoContent?.classList.add('wv-hidden');
        } else {
            elements.apiYesContent?.classList.add('wv-hidden');
            elements.apiNoContent?.classList.remove('wv-hidden');
        }
    });

    setupRadioGroup('#wvProviderGroup', (value) => {
        modalState.formData.apiProvider = value;
        clearError('wvProviderError');
    });

    setupRadioGroup('#wvDateGroup', (value) => {
        modalState.formData.apiAddedDate = value;
        clearError('wvDateError');
    });

    // Input Handlers
    elements.name?.addEventListener('input', (e) => {
        modalState.formData.name = e.target.value;
        clearError('wvNameError');
    });

    elements.email?.addEventListener('input', (e) => {
        modalState.formData.email = e.target.value;
        clearError('wvEmailError');
    });

    elements.phone?.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/[^0-9\s]/g, '');
        modalState.formData.phone = e.target.value;
        clearError('wvPhoneError');
    });

    elements.website?.addEventListener('input', (e) => {
        modalState.formData.website = e.target.value;
        clearError('wvWebsiteError');
    });

    elements.displayName?.addEventListener('input', (e) => {
        modalState.formData.displayName = e.target.value;
        clearError('wvDisplayNameError');
    });

    elements.whatsappNumber?.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/[^0-9\s]/g, '');
        modalState.formData.whatsappNumber = e.target.value;
    });

    // Validation
    function validateStep1() {
        const errors = {};
        if (!modalState.formData.name.trim()) errors.name = 'Name is required';
        if (!modalState.formData.email.trim()) {
            errors.email = 'Email is required';
        } else if (!/^[\w\.-]+@[\w\.-]+\.\w{2,}$/.test(modalState.formData.email)) {
            errors.email = 'Please enter a valid email address';
        }
        if (!modalState.formData.phone.trim()) {
            errors.phone = 'Phone number is required';
        } else {
            const cleanPhone = modalState.formData.phone.replace(/\s/g, '');
            if (!/^\d{10,15}$/.test(cleanPhone)) {
                errors.phone = 'Enter valid 10-15 digit phone number';
            }
        }
        return displayErrors(errors);
    }

    function validateStep2() {
        const errors = {};
        if (!modalState.formData.website.trim()) {
            errors.website = 'Website is required';
        } else if (!/^https?:\/\/.+\..+/.test(modalState.formData.website)) {
            errors.website = 'Please enter a valid URL';
        }
        if (!modalState.formData.displayName.trim()) {
            errors.displayName = 'Display name is required';
        }
        if (modalState.formData.usingAPI === null) {
            errors.api = 'Please select an option';
        }
        if (modalState.formData.usingAPI === 'yes') {
            if (!modalState.formData.apiProvider) errors.provider = 'API provider is required';
            if (!modalState.formData.apiAddedDate) errors.date = 'Please select date';
        }
        return displayErrors(errors);
    }

    function displayErrors(errors) {
        clearAllErrors();
        Object.keys(errors).forEach(key => {
            const errorMap = {
                name: ['wvNameError', 'wvName'],
                email: ['wvEmailError', 'wvEmail'],
                phone: ['wvPhoneError', 'wvPhone'],
                website: ['wvWebsiteError', 'wvWebsite'],
                displayName: ['wvDisplayNameError', 'wvDisplayName'],
                api: ['wvApiError', null],
                provider: ['wvProviderError', null],
                date: ['wvDateError', null]
            };
            
            const [errorId, inputId] = errorMap[key] || [];
            const errorElement = document.getElementById(errorId);
            if (errorElement) {
                errorElement.textContent = errors[key];
                errorElement.classList.remove('wv-hidden');
            }
            if (inputId) {
                const inputElement = document.getElementById(inputId);
                inputElement?.classList.add('wv-error');
            }
        });
        return Object.keys(errors).length === 0;
    }

    function clearError(errorId) {
        const errorElement = document.getElementById(errorId);
        errorElement?.classList.add('wv-hidden');
        const inputId = errorId.replace('Error', '');
        document.getElementById(inputId)?.classList.remove('wv-error');
    }

    function clearAllErrors() {
        document.querySelectorAll('.wv-modal-error-message').forEach(el => {
            el.classList.add('wv-hidden');
            el.textContent = '';
        });
        document.querySelectorAll('.wv-modal-input.wv-error, .wv-modal-select.wv-error')
            .forEach(el => el.classList.remove('wv-error'));
    }

    function updateStepDisplay() {
        elements.step1?.classList.remove('wv-active');
        elements.step2?.classList.remove('wv-active');
        elements.step3?.classList.remove('wv-active');

        if (modalState.currentStep === 1) {
            elements.step1?.classList.add('wv-active');
            elements.backBtn?.classList.add('wv-hidden');
            if (elements.nextBtn) {
                elements.nextBtn.innerHTML = 'Next <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>';
            }
        } else if (modalState.currentStep === 2) {
            elements.step2?.classList.add('wv-active');
            elements.backBtn?.classList.remove('wv-hidden');
            if (elements.nextBtn) elements.nextBtn.textContent = 'Submit';
        }

        if (modalState.currentStep === 1) {
            elements.step1Indicator?.classList.add('wv-active');
            elements.step1Indicator?.classList.remove('wv-completed');
            elements.step2Indicator?.classList.remove('wv-active', 'wv-completed');
            elements.stepLine1?.classList.remove('wv-completed');
            if (elements.step1Indicator) elements.step1Indicator.innerHTML = '1';
        } else if (modalState.currentStep === 2) {
            elements.step1Indicator?.classList.remove('wv-active');
            elements.step1Indicator?.classList.add('wv-completed');
            elements.step2Indicator?.classList.add('wv-active');
            elements.stepLine1?.classList.add('wv-completed');
            if (elements.step1Indicator) {
                elements.step1Indicator.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>';
            }
        }
    }

    // Submit Handler
    elements.nextBtn?.addEventListener('click', () => {
        if (modalState.currentStep === 1) {
            if (validateStep1()) {
                modalState.currentStep = 2;
                updateStepDisplay();
            }
        } else if (modalState.currentStep === 2) {
            if (validateStep2()) {
                const phoneSelect = document.querySelector('#js-countrycode-phone .js-countrycode-select');
                const whatsappSelect = document.querySelector('#js-countrycode-whatsapp .js-countrycode-select');
                
                // const payload = {
                //     name: modalState.formData.name,
                //     email: modalState.formData.email,
                //     phone: modalState.formData.phone,
                //     phone_country_code: phoneSelect?.value || '+91',
                //     website: modalState.formData.website,
                //     display_name: modalState.formData.displayName,
                //     whatsapp_number: modalState.formData.whatsappNumber,
                //     whatsapp_country_code: whatsappSelect?.value || '+91',
                //     using_api: modalState.formData.usingAPI,
                //     api_provider: modalState.formData.apiProvider,
                //     api_number_age: modalState.formData.apiAddedDate
                // };
                const payload = {
                    name: modalState.formData.name,
                    email: modalState.formData.email,
                    phone: modalState.formData.phone,
                    phone_country_code: phoneSelect?.value || '+91',
                    website: modalState.formData.website,
                    display_name: modalState.formData.displayName,
                    whatsapp_number: modalState.formData.whatsappNumber,
                    whatsapp_country_code: whatsappSelect?.value || '+91',
                    using_api: modalState.formData.usingAPI,
                    api_provider: modalState.formData.apiProvider === 'other' 
                        ? document.getElementById('wvOtherProvider')?.value 
                        : modalState.formData.apiProvider,
                    api_number_age: modalState.formData.apiAddedDate
                };

                const originalBtnText = elements.nextBtn.innerHTML;
                elements.nextBtn.disabled = true;
                elements.nextBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Submitting...';

                fetch('/api/lead.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(payload)
                })
                .then(response => response.json())
                .then(data => {
                    elements.nextBtn.disabled = false;
                    elements.nextBtn.innerHTML = originalBtnText;

                    if (data.success) {
                        closeModal();
                        
                        // Show success popup
                        setTimeout(() => {
                            showSuccessPopup();
                        }, 300);
                        
                        modalState.currentStep = 1;
                        updateStepDisplay();
                    } else {
                        alert('❌ Failed: ' + (data.message || 'Try again'));
                    }
                })
                .catch(error => {
                    elements.nextBtn.disabled = false;
                    elements.nextBtn.innerHTML = originalBtnText;
                    console.error('Error:', error);
                    alert('❌ Network error. Please try again.');
                });
            }
        }
    });

    elements.backBtn?.addEventListener('click', () => {
        if (modalState.currentStep > 1) {
            modalState.currentStep--;
            updateStepDisplay();
        }
    });

    // Close success popup on overlay click
    setTimeout(() => {
        const successOverlay = document.getElementById('successPopupOverlay');
        if (successOverlay) {
            successOverlay.addEventListener('click', (e) => {
                if (e.target === successOverlay) {
                    closeSuccessPopup();
                }
            });
        }
    }, 100);

    updateStepDisplay();
});
</script>



 <script>
window.contactSelectOptPromise = new Promise((resolve, reject) => {
    
    const ajaxURL = "#";
    console.log("AJAX URL:", ajaxURL);
    const xhr = new XMLHttpRequest();
   xhr.open('GET', ajaxURL + '?action=get_contactselectopt', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
             console.log("Raw responseText:", xhr.responseText); 
            if (xhr.status === 200) {
                try {
                    const res = JSON.parse(xhr.responseText);
                    if (res.success) {
                        resolve(res.data.contactselectopt);
                    } else {
                        reject("Contact select opt not found");
                    }
                } catch (e) {
                    console.error("JSON parse error", e);
                    reject(e);
                }
            } else {
                reject("AJAX request failed with status " + xhr.status);
            }
        }
    };
    xhr.send();
});
</script>

<script>
        .then(contactSelectOpt => {
            console.log('Country JSON loaded:', contactSelectOpt);
            
            // Phone country code
            const phoneSpan = document.getElementById('js-countrycode-phone');
            if (phoneSpan) phoneSpan.innerHTML = contactSelectOpt;
            
            // WhatsApp country code  
            const whatsappSpan = document.getElementById('js-countrycode-whatsapp');
            if (whatsappSpan) whatsappSpan.innerHTML = contactSelectOpt;
            
            // Trigger change events after loading
            setTimeout(() => {
                modalState.formData.phoneCode = '+91';
                modalState.formData.whatsappCode = '+91';
                console.log('Country codes populated');
            }, 500);
        })
        .catch(err => {
            console.error("Country JSON failed:", err);
            // Fallback static options
            document.getElementById('js-countrycode-phone').innerHTML = '<select><option>+91</option></select>';
            document.getElementById('js-countrycode-whatsapp').innerHTML = '<select><option>+91</option></select>';
        });
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const providerOptions = document.querySelectorAll('#wvProviderGroup .wv-modal-radio-option');
    const otherProviderGroup = document.getElementById('wvOtherProviderGroup');
    const otherProviderInput = document.getElementById('wvOtherProvider');

    providerOptions.forEach(option => {
        option.addEventListener('click', () => {
            const value = option.getAttribute('data-value');

            // Toggle active state
            providerOptions.forEach(o => o.classList.remove('wv-active'));
            option.classList.add('wv-active');

            if (value === 'other') {
                otherProviderGroup.classList.remove('wv-hidden');
            } else {
                otherProviderGroup.classList.add('wv-hidden');
                otherProviderInput.value = '';
            }
        });
    });

});
</script>

<!-- Homepage-style footer. Loaded here (not in <head>) same as header.php - see
        assets/cssnewhome/footer-shared.css for the dedicated, footer-only CSS this uses. -->



</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // FAQ accordion
  document.querySelectorAll('.faq-questionn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      const item = this.closest('.faq-itemm');
      const ans = item ? item.querySelector('.faq-answerr') : null;
      const isOpen = this.classList.contains('open');
      
      // Close all in this section
      const parent = this.closest('.custom-faq-accordion') || document;
      parent.querySelectorAll('.faq-questionn').forEach(b => b.classList.remove('open'));
      parent.querySelectorAll('.faq-answerr').forEach(a => a.classList.remove('open'));

      if (!isOpen && ans) {
        this.classList.add('open');
        ans.classList.add('open');
      }
    });
  });

  // Init Swiper if present
  if (typeof Swiper !== 'undefined') {
    document.querySelector(".partners-slider") && new Swiper(".partners-slider", {
      slidesPerView: 2,
      spaceBetween: 20,
      loop: true,
      autoplay: { delay: 2500, disableOnInteraction: false },
      breakpoints: {
        640: { slidesPerView: 3, spaceBetween: 20 },
        768: { slidesPerView: 4, spaceBetween: 30 },
        1024: { slidesPerView: 5, spaceBetween: 30 }
      }
    });
  }
});
</script>


<?php include __DIR__ . '/../../includes/footer.php'; ?>
