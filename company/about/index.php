<?php
/**
 * InboxWa — Premium About Us Page
 * URL: /company/about/
 * Does not modify header, footer, mega menu, or global styles.
 */
$basePath = '../../';
$pageTitle = 'About InboxWa | Building Smarter Conversations for Modern Businesses';
$pageDescription = 'InboxWa AI Technologies Pvt Ltd brings WhatsApp, automation, AI, customer communication, campaigns and business workflows together on one powerful platform. Discover our vision, mission, global presence and why businesses choose InboxWa.';
$pageKeywords = 'About InboxWa, InboxWa company, WhatsApp automation platform, AI chatbot company, InboxWa Bangalore, InboxWa vision, business communication platform';
$canonicalUrl = 'https://inboxwa.com/company/about/';
include __DIR__ . '/../../includes/header.php';
?>

<style>
.ab-page{--ab-glass:rgba(255,255,255,.72)}
.ab-page .section{padding:4.5rem 0}
.ab-page .section-alt{background:var(--bg2)}
.ab-page .section-header{text-align:center;max-width:740px;margin:0 auto 2.75rem}
.ab-page .section-header .lead{margin-top:.85rem;font-size:1.08rem;color:var(--t2);line-height:1.65}
.ab-page .badge-ab{display:inline-flex;align-items:center;gap:.4rem;padding:.35rem .9rem;font-size:.7rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;border-radius:999px;background:var(--p-l);color:var(--p2);border:1px solid var(--p-m)}
.ab-hero{position:relative;padding:2rem 0 4rem;overflow:hidden;background:radial-gradient(ellipse 70% 55% at 75% 15%,rgba(139,92,246,.14),transparent 55%),radial-gradient(ellipse 55% 45% at 15% 85%,rgba(6,182,212,.1),transparent 50%),linear-gradient(180deg,#F8FAFC 0%,#FFFFFF 100%)}
.ab-hero-grid{display:grid;grid-template-columns:1.05fr .95fr;gap:2.75rem;align-items:center}
.ab-hero h1{font-size:clamp(2.05rem,4.4vw,3.25rem);letter-spacing:-.035em;line-height:1.12;margin:1rem 0 1.15rem;background:linear-gradient(135deg,#0F172A 0%,#4C1D95 55%,#0E7490 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.ab-hero .lead{font-size:1.12rem;color:var(--t2);max-width:34rem;line-height:1.7;margin-bottom:1.85rem}
.ab-hero-ctas{display:flex;flex-wrap:wrap;gap:.8rem}
.ab-hero-visual{position:relative;height:420px;border-radius:24px;background:radial-gradient(ellipse 80% 70% at 50% 50%,rgba(139,92,246,.18),transparent 60%),linear-gradient(145deg,#0F172A 0%,#1E1B4B 45%,#0F172A 100%);box-shadow:0 30px 60px -18px rgba(15,23,42,.35),inset 0 1px 0 rgba(255,255,255,.06);overflow:hidden}
.ab-hero-visual::before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 28% 30%,rgba(139,92,246,.4),transparent 28%),radial-gradient(circle at 72% 58%,rgba(6,182,212,.28),transparent 24%);animation:ab-pulse 7s ease-in-out infinite}
@keyframes ab-pulse{0%,100%{opacity:.65}50%{opacity:1}}
.ab-net-svg{position:absolute;inset:0;width:100%;height:100%}
.ab-net-center{position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);z-index:4;text-align:center}
.ab-net-logo{font-weight:800;font-size:1.2rem;letter-spacing:.1em;background:linear-gradient(135deg,#A78BFA,#22D3EE);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.ab-net-sub{font-size:.62rem;color:rgba(255,255,255,.45);letter-spacing:.14em;margin-top:.25rem}
.ab-node{position:absolute;z-index:3;display:flex;flex-direction:column;align-items:center;gap:.3rem}
.ab-node-dot{width:11px;height:11px;border-radius:50%;background:#22D3EE;box-shadow:0 0 0 4px rgba(34,211,238,.22),0 0 14px rgba(34,211,238,.55);animation:ab-dot 2.8s ease-in-out infinite}
.ab-node:nth-child(2) .ab-node-dot{animation-delay:.3s;background:#A78BFA;box-shadow:0 0 0 4px rgba(167,139,250,.22),0 0 14px rgba(167,139,250,.55)}
.ab-node:nth-child(3) .ab-node-dot{animation-delay:.6s;background:#34D399;box-shadow:0 0 0 4px rgba(52,211,153,.22),0 0 14px rgba(52,211,153,.55)}
.ab-node:nth-child(4) .ab-node-dot{animation-delay:.9s;background:#F472B6;box-shadow:0 0 0 4px rgba(244,114,182,.22),0 0 14px rgba(244,114,182,.55)}
.ab-node:nth-child(5) .ab-node-dot{animation-delay:1.2s;background:#FBBF24;box-shadow:0 0 0 4px rgba(251,191,36,.22),0 0 14px rgba(251,191,36,.55)}
.ab-node:nth-child(6) .ab-node-dot{animation-delay:1.5s;background:#60A5FA;box-shadow:0 0 0 4px rgba(96,165,250,.22),0 0 14px rgba(96,165,250,.55)}
.ab-node:nth-child(7) .ab-node-dot{animation-delay:1.8s;background:#A78BFA;box-shadow:0 0 0 4px rgba(167,139,250,.22),0 0 14px rgba(167,139,250,.55)}
.ab-node:nth-child(8) .ab-node-dot{animation-delay:2.1s;background:#22D3EE;box-shadow:0 0 0 4px rgba(34,211,238,.22),0 0 14px rgba(34,211,238,.55)}
@keyframes ab-dot{0%,100%{transform:scale(1)}50%{transform:scale(1.3)}}
.ab-node-label{font-size:.65rem;font-weight:700;letter-spacing:.06em;color:rgba(255,255,255,.88);text-transform:uppercase;white-space:nowrap}
.ab-n-whatsapp{top:12%;left:18%}.ab-n-ai{top:10%;right:16%}.ab-n-auto{top:38%;left:6%}.ab-n-crm{top:36%;right:5%}.ab-n-mkt{bottom:28%;left:12%}.ab-n-sales{bottom:26%;right:10%}.ab-n-sup{bottom:8%;left:32%}.ab-n-int{bottom:10%;right:28%}
.ab-story-grid{display:grid;grid-template-columns:1fr 1.1fr;gap:3rem;align-items:center}
.ab-story-visual{position:relative;border-radius:20px;overflow:hidden;aspect-ratio:4/3;background:linear-gradient(145deg,#1E1B4B,#0F172A);box-shadow:var(--sh3)}
.ab-story-placeholder{width:100%;height:100%;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:1rem;color:rgba(255,255,255,.7);padding:2rem;text-align:center}
.ab-story-placeholder svg{width:64px;height:64px;opacity:.7}
.ab-story-content h2{font-size:clamp(1.6rem,3vw,2.1rem);letter-spacing:-.02em;margin-bottom:1.1rem}
.ab-story-content p{color:var(--t2);line-height:1.75;margin-bottom:1rem;font-size:1.02rem}
.ab-build-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem}
.ab-build-card{background:#fff;border:1px solid var(--bd);border-radius:var(--r2);padding:1.6rem 1.4rem;transition:transform .3s var(--ease),box-shadow .3s var(--ease),border-color .3s;position:relative;overflow:hidden}
.ab-build-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:var(--grad-1);transform:scaleX(0);transform-origin:left;transition:transform .35s var(--ease)}
.ab-build-card:hover{transform:translateY(-5px);box-shadow:var(--sh2);border-color:var(--p-m)}
.ab-build-card:hover::before{transform:scaleX(1)}
.ab-build-icon{width:48px;height:48px;border-radius:14px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--p-l),var(--p-m));color:var(--p2);margin-bottom:1rem;transition:transform .3s var(--ease)}
.ab-build-card:hover .ab-build-icon{transform:scale(1.08) rotate(-3deg)}
.ab-build-card h3{font-size:1.05rem;margin-bottom:.45rem}
.ab-build-card p{font-size:.9rem;color:var(--t2);line-height:1.55;margin:0}
.ab-eco{position:relative;background:linear-gradient(180deg,#0F172A 0%,#1E1B4B 50%,#0F172A 100%);color:#fff;overflow:hidden}
.ab-eco .section-header h2{color:#fff}
.ab-eco .section-header .lead{color:rgba(255,255,255,.65)}
.ab-eco-visual{position:relative;max-width:820px;margin:0 auto;height:480px}
.ab-eco-center{position:absolute;left:50%;top:42%;transform:translate(-50%,-50%);z-index:5;text-align:center}
.ab-eco-customer{width:88px;height:88px;border-radius:50%;background:linear-gradient(135deg,#8B5CF6,#06B6D4);display:flex;align-items:center;justify-content:center;font-weight:800;font-size:.75rem;letter-spacing:.06em;box-shadow:0 0 0 8px rgba(139,92,246,.25),0 0 40px rgba(139,92,246,.4);animation:ab-pulse 4s ease-in-out infinite}
.ab-eco-platform{position:absolute;bottom:8%;left:50%;transform:translateX(-50%);z-index:5;text-align:center;background:rgba(255,255,255,.08);backdrop-filter:blur(12px);border:1px solid rgba(255,255,255,.12);border-radius:14px;padding:.65rem 1.4rem}
.ab-eco-platform span{font-weight:800;font-size:.8rem;letter-spacing:.1em;background:linear-gradient(135deg,#A78BFA,#22D3EE);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.ab-eco-node{position:absolute;z-index:3;background:rgba(255,255,255,.07);backdrop-filter:blur(8px);border:1px solid rgba(255,255,255,.12);border-radius:12px;padding:.45rem .85rem;font-size:.72rem;font-weight:600;letter-spacing:.03em;color:rgba(255,255,255,.9);transition:transform .3s,background .3s}
.ab-eco-node:hover{background:rgba(139,92,246,.25);transform:scale(1.06)}
.ab-eco-flow{display:flex;justify-content:center;gap:1.5rem;flex-wrap:wrap;margin-top:2rem;padding-top:1.5rem}
.ab-eco-flow-item{display:flex;align-items:center;gap:.5rem;font-size:.8rem;color:rgba(255,255,255,.7);font-weight:600}
.ab-eco-flow-item span{background:rgba(255,255,255,.1);border-radius:8px;padding:.35rem .7rem}
.ab-eco-arrow{color:var(--a);font-size:1.1rem}
.ab-vision{position:relative;text-align:center;padding:5.5rem 0;background:radial-gradient(ellipse 60% 50% at 50% 50%,rgba(139,92,246,.12),transparent 70%),linear-gradient(180deg,#F8FAFC,#FFFFFF);overflow:hidden}
.ab-vision::before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 30% 40%,rgba(6,182,212,.08),transparent 40%),radial-gradient(circle at 70% 60%,rgba(139,92,246,.1),transparent 40%);animation:ab-pulse 8s ease-in-out infinite}
.ab-vision-inner{position:relative;z-index:2;max-width:820px;margin:0 auto}
.ab-vision h2{font-size:.85rem;letter-spacing:.12em;text-transform:uppercase;color:var(--p2);margin-bottom:1.25rem}
.ab-vision-quote{font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;letter-spacing:-.03em;line-height:1.25;background:linear-gradient(135deg,#0F172A,#6D28D9,#0E7490);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;margin-bottom:1.5rem}
.ab-vision p{font-size:1.1rem;color:var(--t2);max-width:560px;margin:0 auto;line-height:1.7}
.ab-mission-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1.2rem}
.ab-mission-card{background:#fff;border:1px solid var(--bd);border-radius:var(--r2);padding:1.75rem 1.35rem;text-align:center;transition:transform .3s,box-shadow .3s}
.ab-mission-card:hover{transform:translateY(-4px);box-shadow:var(--sh2)}
.ab-mission-num{width:44px;height:44px;border-radius:12px;margin:0 auto 1rem;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:.95rem;background:linear-gradient(135deg,var(--p-l),var(--p-m));color:var(--p2)}
.ab-mission-card h3{font-size:1.05rem;margin-bottom:.4rem}
.ab-mission-card p{font-size:.88rem;color:var(--t2);line-height:1.5;margin:0}
.ab-timeline{position:relative;max-width:640px;margin:0 auto;padding-left:2rem}
.ab-timeline::before{content:'';position:absolute;left:7px;top:8px;bottom:8px;width:2px;background:linear-gradient(180deg,var(--p),var(--a));border-radius:2px}
.ab-tl-item{position:relative;padding:0 0 2.25rem 2rem}
.ab-tl-item:last-child{padding-bottom:0}
.ab-tl-dot{position:absolute;left:-2rem;top:4px;width:16px;height:16px;border-radius:50%;background:var(--p);border:3px solid #fff;box-shadow:0 0 0 3px rgba(139,92,246,.3)}
.ab-tl-item:nth-child(even) .ab-tl-dot{background:var(--a);box-shadow:0 0 0 3px rgba(6,182,212,.3)}
.ab-tl-item h3{font-size:1.05rem;margin-bottom:.3rem}
.ab-tl-item p{font-size:.9rem;color:var(--t2);margin:0;line-height:1.55}
.ab-offices{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem}
.ab-office-card{background:#fff;border:1px solid var(--bd);border-radius:var(--r2);padding:1.75rem 1.5rem;text-align:center;transition:transform .3s,box-shadow .3s}
.ab-office-card:hover{transform:translateY(-4px);box-shadow:var(--sh2)}
.ab-office-icon{width:52px;height:52px;border-radius:14px;margin:0 auto 1rem;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--p-l),#ECFEFF);color:var(--p2)}
.ab-office-card h3{font-size:1.15rem;margin-bottom:.25rem}
.ab-office-type{font-size:.8rem;font-weight:600;color:var(--p2);margin-bottom:.35rem}
.ab-office-card p{font-size:.9rem;color:var(--t2);margin:0}
.ab-map-flow{display:flex;justify-content:center;align-items:center;gap:.75rem;flex-wrap:wrap;margin-top:2.5rem;padding:1.25rem;background:var(--bg2);border-radius:var(--r2)}
.ab-map-flow span{font-size:.85rem;font-weight:700;color:var(--t);background:#fff;border:1px solid var(--bd);border-radius:10px;padding:.4rem .9rem}
.ab-map-flow .arrow{color:var(--p);font-weight:800;border:none;background:none;padding:0}
.ab-ind-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1rem}
.ab-ind-card{background:#fff;border:1px solid var(--bd);border-radius:14px;padding:1.25rem 1rem;text-align:center;text-decoration:none;color:inherit;transition:transform .25s,box-shadow .25s,border-color .25s}
.ab-ind-card:hover{transform:translateY(-3px);box-shadow:var(--sh2);border-color:var(--p-m);color:var(--p2)}
.ab-ind-card svg{width:28px;height:28px;margin-bottom:.5rem;color:var(--p)}
.ab-ind-card span{display:block;font-size:.88rem;font-weight:600}
.ab-steps{display:grid;grid-template-columns:repeat(5,1fr);gap:1rem}
.ab-step{text-align:center;padding:1.5rem 1rem;background:#fff;border:1px solid var(--bd);border-radius:var(--r2);transition:transform .3s,box-shadow .3s}
.ab-step:hover{transform:translateY(-4px);box-shadow:var(--sh2)}
.ab-step-num{font-size:1.5rem;font-weight:800;background:linear-gradient(135deg,var(--p),var(--a));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;margin-bottom:.5rem}
.ab-step h3{font-size:.95rem;margin-bottom:.35rem}
.ab-step p{font-size:.82rem;color:var(--t2);margin:0;line-height:1.45}
.ab-flow-banner{display:flex;justify-content:center;align-items:center;gap:1rem;flex-wrap:wrap;margin-top:2.5rem;padding:1.35rem 2rem;border-radius:16px;background:linear-gradient(135deg,#0F172A,#1E1B4B);color:#fff}
.ab-flow-banner span{font-weight:700;font-size:.9rem;letter-spacing:.04em;padding:.4rem 1rem;border-radius:10px;background:rgba(255,255,255,.1)}
.ab-flow-banner .arrow{color:#22D3EE;background:none;padding:0;font-size:1.2rem}
.ab-why-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.2rem}
.ab-why-card{background:#fff;border:1px solid var(--bd);border-radius:var(--r2);padding:1.5rem;transition:transform .3s,box-shadow .3s}
.ab-why-card:hover{transform:translateY(-4px);box-shadow:var(--sh2)}
.ab-why-card h3{font-size:1.02rem;margin-bottom:.4rem;display:flex;align-items:center;gap:.5rem}
.ab-why-card p{font-size:.9rem;color:var(--t2);margin:0;line-height:1.55}
.ab-tech-grid{display:grid;grid-template-columns:repeat(7,1fr);gap:.85rem}
.ab-tech-item{background:#fff;border:1px solid var(--bd);border-radius:12px;padding:1rem .5rem;text-align:center;font-size:.78rem;font-weight:600;color:var(--t2);transition:border-color .25s,color .25s,transform .25s}
.ab-tech-item:hover{border-color:var(--p-m);color:var(--p2);transform:translateY(-2px)}
.ab-tech-item.custom{background:var(--bg2);border-style:dashed}
.ab-dash{background:linear-gradient(145deg,#0F172A,#1E1B4B);border-radius:20px;overflow:hidden;box-shadow:var(--sh3);display:grid;grid-template-columns:200px 1fr;min-height:380px}
.ab-dash-side{background:rgba(0,0,0,.25);padding:1.5rem 1rem;border-right:1px solid rgba(255,255,255,.08)}
.ab-dash-side .logo{font-weight:800;font-size:.85rem;letter-spacing:.08em;background:linear-gradient(135deg,#A78BFA,#22D3EE);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;margin-bottom:1.5rem;padding:0 .5rem}
.ab-dash-nav{list-style:none;margin:0;padding:0}
.ab-dash-nav li{padding:.55rem .75rem;border-radius:8px;font-size:.8rem;color:rgba(255,255,255,.55);margin-bottom:.2rem}
.ab-dash-nav li.active{background:rgba(139,92,246,.25);color:#fff;font-weight:600}
.ab-dash-main{padding:1.5rem;display:flex;flex-direction:column;gap:1rem}
.ab-dash-row{display:grid;grid-template-columns:1.2fr 1fr;gap:1rem;flex:1}
.ab-dash-card{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:12px;padding:1rem}
.ab-dash-card h4{font-size:.75rem;color:rgba(255,255,255,.5);margin-bottom:.75rem;letter-spacing:.05em;text-transform:uppercase}
.ab-chat-bubble{background:rgba(139,92,246,.2);border-radius:12px 12px 4px 12px;padding:.6rem .85rem;font-size:.8rem;color:rgba(255,255,255,.9);margin-bottom:.5rem;max-width:90%}
.ab-chat-bubble.out{background:rgba(6,182,212,.2);border-radius:12px 12px 12px 4px;margin-left:auto}
.ab-dash-stat{display:flex;justify-content:space-between;align-items:center;padding:.5rem 0;border-bottom:1px solid rgba(255,255,255,.06);font-size:.82rem}
.ab-dash-stat:last-child{border:none}
.ab-dash-stat span:first-child{color:rgba(255,255,255,.55)}
.ab-dash-stat span:last-child{color:#fff;font-weight:600}
.ab-dash-note{text-align:center;font-size:.8rem;color:var(--t3);margin-top:1rem}
.ab-human-grid{display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:center}
.ab-human-visual{border-radius:20px;overflow:hidden;aspect-ratio:4/3;background:linear-gradient(145deg,#1E1B4B,#0F172A);box-shadow:var(--sh3);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.6);flex-direction:column;gap:.75rem}
.ab-human-flow{display:flex;flex-direction:column;gap:1rem;margin-top:1.5rem}
.ab-human-flow-row{display:flex;align-items:center;gap:.75rem;flex-wrap:wrap}
.ab-human-pill{background:var(--p-l);color:var(--p2);font-size:.8rem;font-weight:600;padding:.4rem .85rem;border-radius:999px}
.ab-human-pill.cyan{background:#ECFEFF;color:#0E7490}
.ab-human-pill.green{background:var(--g-l);color:var(--g)}
.ab-human-arrow{color:var(--t3);font-weight:700}
.ab-partner-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:1rem}
.ab-partner-card{background:#fff;border:1px solid var(--bd);border-radius:var(--r2);padding:1.5rem 1rem;text-align:center;transition:transform .3s,box-shadow .3s}
.ab-partner-card:hover{transform:translateY(-3px);box-shadow:var(--sh2)}
.ab-partner-card h3{font-size:.95rem;margin-bottom:.3rem}
.ab-partner-card p{font-size:.8rem;color:var(--t2);margin:0}
.ab-logos-wrap{overflow:hidden;position:relative;mask-image:linear-gradient(90deg,transparent,#000 8%,#000 92%,transparent);-webkit-mask-image:linear-gradient(90deg,transparent,#000 8%,#000 92%,transparent)}
.ab-logos-track{display:flex;gap:2.5rem;animation:ab-scroll 30s linear infinite;width:max-content}
.ab-logo-item{flex-shrink:0;width:140px;height:56px;background:#fff;border:1px solid var(--bd);border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:.75rem;font-weight:600;color:var(--t3)}
@keyframes ab-scroll{0%{transform:translateX(0)}100%{transform:translateX(-50%)}}
.ab-testimonials{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem}
.ab-testi-card{background:#fff;border:1px solid var(--bd);border-radius:var(--r2);padding:1.75rem 1.5rem;transition:transform .3s,box-shadow .3s}
.ab-testi-card:hover{transform:translateY(-3px);box-shadow:var(--sh2)}
.ab-testi-stars{color:#F59E0B;font-size:.9rem;margin-bottom:.75rem;letter-spacing:2px}
.ab-testi-card blockquote{font-size:.95rem;color:var(--t2);line-height:1.65;margin:0 0 1.25rem;font-style:normal}
.ab-testi-author{display:flex;align-items:center;gap:.75rem}
.ab-testi-avatar{width:42px;height:42px;border-radius:50%;background:linear-gradient(135deg,var(--p-l),var(--p-m));display:flex;align-items:center;justify-content:center;font-weight:700;color:var(--p2);font-size:.85rem}
.ab-testi-meta strong{display:block;font-size:.9rem}
.ab-testi-meta span{font-size:.78rem;color:var(--t3)}
.ab-values-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:1rem}
.ab-value-card{background:#fff;border:1px solid var(--bd);border-radius:var(--r2);padding:1.5rem 1.1rem;text-align:center;transition:transform .3s,box-shadow .3s}
.ab-value-card:hover{transform:translateY(-3px);box-shadow:var(--sh2)}
.ab-value-icon{width:44px;height:44px;border-radius:12px;margin:0 auto .85rem;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--p-l),var(--p-m));color:var(--p2);transition:transform .3s}
.ab-value-card:hover .ab-value-icon{transform:scale(1.1)}
.ab-value-card h3{font-size:.95rem;margin-bottom:.3rem}
.ab-value-card p{font-size:.8rem;color:var(--t2);margin:0;line-height:1.45}
.ab-trust-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem}
.ab-trust-card{background:#fff;border:1px solid var(--bd);border-radius:var(--r2);padding:1.75rem 1.5rem;text-align:center}
.ab-trust-card h3{font-size:1.1rem;margin-bottom:.5rem;color:var(--p2)}
.ab-trust-card p{font-size:.92rem;color:var(--t2);margin:0;line-height:1.55}
.ab-sim{background:linear-gradient(145deg,#0F172A 0%,#1E1B4B 100%);border-radius:24px;padding:2.5rem 2rem;color:#fff;text-align:center;box-shadow:var(--sh3);overflow:hidden;position:relative}
.ab-sim h2{color:#fff;margin-bottom:.5rem}
.ab-sim .lead{color:rgba(255,255,255,.6);margin-bottom:1.75rem}
.ab-sim-play{display:inline-flex;align-items:center;gap:.5rem;background:linear-gradient(135deg,#8B5CF6,#06B6D4);color:#fff;border:none;border-radius:999px;padding:.85rem 1.75rem;font-size:1rem;font-weight:700;cursor:pointer;transition:transform .25s,box-shadow .25s;box-shadow:0 8px 24px rgba(139,92,246,.4)}
.ab-sim-play:hover{transform:scale(1.04);box-shadow:0 12px 32px rgba(139,92,246,.5)}
.ab-sim-steps{display:flex;flex-wrap:wrap;justify-content:center;gap:.6rem;margin-top:2rem;min-height:52px}
.ab-sim-step{opacity:0;transform:translateY(12px);background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.12);border-radius:10px;padding:.5rem 1rem;font-size:.82rem;font-weight:600;transition:opacity .4s,transform .4s}
.ab-sim-step.active{opacity:1;transform:translateY(0)}
.ab-sim-step.done{background:rgba(34,211,238,.15);border-color:rgba(34,211,238,.35);color:#22D3EE}
.ab-sim-final{margin-top:1.5rem;font-size:1.1rem;font-weight:700;opacity:0;transition:opacity .5s;background:linear-gradient(135deg,#A78BFA,#22D3EE);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.ab-sim-final.show{opacity:1}
.ab-faq{max-width:720px;margin:0 auto}
.ab-faq-item{border:1px solid var(--bd);border-radius:14px;margin-bottom:.75rem;background:#fff;overflow:hidden}
.ab-faq-q{width:100%;text-align:left;background:none;border:none;padding:1.15rem 1.35rem;font-size:1rem;font-weight:600;color:var(--t);cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:1rem;font-family:inherit}
.ab-faq-q:hover{color:var(--p2)}
.ab-faq-q svg{flex-shrink:0;width:20px;height:20px;transition:transform .3s;color:var(--t3)}
.ab-faq-item.open .ab-faq-q svg{transform:rotate(180deg);color:var(--p)}
.ab-faq-a{max-height:0;overflow:hidden;transition:max-height .35s var(--ease),padding .35s;padding:0 1.35rem;font-size:.95rem;color:var(--t2);line-height:1.65}
.ab-faq-item.open .ab-faq-a{max-height:280px;padding:0 1.35rem 1.25rem}
.ab-final-cta{background:linear-gradient(135deg,#0F172A 0%,#1E1B4B 40%,#4C1D95 100%);padding:4.5rem 0;text-align:center;color:#fff;position:relative;overflow:hidden}
.ab-final-cta::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 50% 60% at 50% 0%,rgba(139,92,246,.3),transparent 60%)}
.ab-final-cta .container{position:relative;z-index:2}
.ab-final-cta h2{font-size:clamp(1.6rem,3.5vw,2.4rem);letter-spacing:-.02em;margin-bottom:.75rem;color:#fff}
.ab-final-cta p{color:rgba(255,255,255,.7);font-size:1.05rem;margin-bottom:1.75rem;max-width:480px;margin-left:auto;margin-right:auto}
.ab-final-ctas{display:flex;flex-wrap:wrap;gap:.8rem;justify-content:center}
.ab-reveal{opacity:0;transform:translateY(24px);transition:opacity .6s var(--ease),transform .6s var(--ease)}
.ab-reveal.visible{opacity:1;transform:translateY(0)}
@media (max-width:1024px){
.ab-hero-grid{grid-template-columns:1fr;gap:2rem}
.ab-hero-visual{height:340px;max-width:520px;margin:0 auto}
.ab-story-grid,.ab-human-grid{grid-template-columns:1fr;gap:2rem}
.ab-build-grid{grid-template-columns:repeat(2,1fr)}
.ab-mission-grid{grid-template-columns:repeat(2,1fr)}
.ab-offices{grid-template-columns:1fr;max-width:360px;margin:0 auto}
.ab-ind-grid{grid-template-columns:repeat(3,1fr)}
.ab-steps{grid-template-columns:repeat(3,1fr)}
.ab-why-grid{grid-template-columns:repeat(2,1fr)}
.ab-tech-grid{grid-template-columns:repeat(4,1fr)}
.ab-dash{grid-template-columns:1fr}
.ab-dash-side{display:none}
.ab-partner-grid{grid-template-columns:repeat(3,1fr)}
.ab-testimonials{grid-template-columns:1fr;max-width:420px;margin:0 auto}
.ab-values-grid{grid-template-columns:repeat(3,1fr)}
.ab-trust-grid{grid-template-columns:1fr;max-width:400px;margin:0 auto}
.ab-eco-visual{height:auto;min-height:420px}
}
@media (max-width:640px){
.ab-page .section{padding:3.25rem 0}
.ab-hero{padding:1.5rem 0 2.5rem}
.ab-hero h1{font-size:1.75rem}
.ab-hero-visual{height:280px}
.ab-node-label{font-size:.55rem}
.ab-build-grid,.ab-mission-grid,.ab-steps,.ab-why-grid{grid-template-columns:1fr}
.ab-ind-grid{grid-template-columns:repeat(2,1fr)}
.ab-tech-grid{grid-template-columns:repeat(3,1fr)}
.ab-partner-grid{grid-template-columns:1fr 1fr}
.ab-values-grid{grid-template-columns:1fr 1fr}
.ab-eco-node{font-size:.65rem;padding:.35rem .55rem}
.ab-dash-row{grid-template-columns:1fr}
.ab-map-flow{flex-direction:column;gap:.4rem}
.ab-map-flow .arrow{transform:rotate(90deg)}
.ab-eco-flow{flex-direction:column;align-items:center;gap:.5rem}
.ab-eco-flow .ab-eco-arrow{transform:rotate(90deg)}
.ab-flow-banner{flex-direction:column;gap:.5rem}
.ab-flow-banner .arrow{transform:rotate(90deg)}
.ab-sim{padding:2rem 1.25rem}
.ab-sim-steps{flex-direction:column;align-items:center}
}
@media (max-width:430px){
.ab-hero-ctas .btn{width:100%;justify-content:center}
.ab-tech-grid{grid-template-columns:repeat(2,1fr)}
.ab-values-grid,.ab-partner-grid{grid-template-columns:1fr}
}
</style>

<div class="ab-page">
<section class="ab-hero">
  <div class="container">
    <div class="ab-hero-grid">
      <div class="ab-reveal">
        <span class="badge-ab">ABOUT INBOXWA</span>
        <h1>Building Smarter Conversations for Modern Businesses</h1>
        <p class="lead">InboxWa brings WhatsApp, automation, AI, customer communication, campaigns and business workflows together on one powerful platform.</p>
        <div class="ab-hero-ctas">
          <a href="/products/" class="btn btn-primary btn-lg">Explore Platform</a>
          <a href="/contact/" class="btn btn-outline btn-lg">Talk to Our Team</a>
        </div>
      </div>
      <div class="ab-hero-visual ab-reveal" aria-hidden="true">
        <svg class="ab-net-svg" viewBox="0 0 400 420" fill="none"><line x1="200" y1="210" x2="80" y2="60" stroke="rgba(139,92,246,.25)" stroke-width="1.5"/><line x1="200" y1="210" x2="320" y2="55" stroke="rgba(6,182,212,.25)" stroke-width="1.5"/><line x1="200" y1="210" x2="40" y2="175" stroke="rgba(52,211,153,.2)" stroke-width="1.5"/><line x1="200" y1="210" x2="360" y2="165" stroke="rgba(244,114,182,.2)" stroke-width="1.5"/><line x1="200" y1="210" x2="70" y2="310" stroke="rgba(251,191,36,.2)" stroke-width="1.5"/><line x1="200" y1="210" x2="340" y2="300" stroke="rgba(96,165,250,.2)" stroke-width="1.5"/><line x1="200" y1="210" x2="140" y2="380" stroke="rgba(167,139,250,.2)" stroke-width="1.5"/><line x1="200" y1="210" x2="270" y2="375" stroke="rgba(34,211,238,.2)" stroke-width="1.5"/></svg>
        <div class="ab-net-center"><div class="ab-net-logo">INBOXWA</div><div class="ab-net-sub">PLATFORM</div></div>
        <div class="ab-node ab-n-whatsapp"><div class="ab-node-dot"></div><span class="ab-node-label">WhatsApp</span></div>
        <div class="ab-node ab-n-ai"><div class="ab-node-dot"></div><span class="ab-node-label">AI</span></div>
        <div class="ab-node ab-n-auto"><div class="ab-node-dot"></div><span class="ab-node-label">Automation</span></div>
        <div class="ab-node ab-n-crm"><div class="ab-node-dot"></div><span class="ab-node-label">CRM</span></div>
        <div class="ab-node ab-n-mkt"><div class="ab-node-dot"></div><span class="ab-node-label">Marketing</span></div>
        <div class="ab-node ab-n-sales"><div class="ab-node-dot"></div><span class="ab-node-label">Sales</span></div>
        <div class="ab-node ab-n-sup"><div class="ab-node-dot"></div><span class="ab-node-label">Support</span></div>
        <div class="ab-node ab-n-int"><div class="ab-node-dot"></div><span class="ab-node-label">Integrations</span></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="ab-story-grid">
      <div class="ab-story-visual ab-reveal" data-editable-image="brand-story">
        <div class="ab-story-placeholder">
          <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="8" y="12" width="48" height="40" rx="4"/><circle cx="24" cy="28" r="6"/><path d="M8 44l12-10 8 6 12-14 16 18"/></svg>
          <span>Platform / Product Visual<br><small style="opacity:.6">Replace with company image</small></span>
        </div>
      </div>
      <div class="ab-story-content ab-reveal">
        <span class="badge-ab">OUR STORY</span>
        <h2 style="margin-top:1rem">Why InboxWa Exists</h2>
        <p>Businesses today communicate across multiple channels, manage different tools and handle repetitive workflows every day. Conversations live in one place, campaigns in another, CRM somewhere else — and teams spend more time switching tools than building relationships.</p>
        <p>InboxWa brings these conversations and automation workflows into one connected platform. From WhatsApp and social channels to AI chatbots, campaigns, CRM and custom integrations — everything works together so teams can focus on customers, not complexity.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header ab-reveal">
      <span class="badge-ab">WHAT WE BUILD</span>
      <h2 style="margin-top:1rem">One Platform. Multiple Business Possibilities.</h2>
      <p class="lead">A unified suite designed around real communication and automation needs.</p>
    </div>
    <div class="ab-build-grid">
      <div class="ab-build-card ab-reveal"><div class="ab-build-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg></div><h3>WhatsApp API</h3><p>Official WhatsApp Business API for messaging, templates, and customer conversations at scale.</p></div>
      <div class="ab-build-card ab-reveal"><div class="ab-build-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/></svg></div><h3>AI Chatbot</h3><p>Intelligent bots that handle FAQs, qualify leads and guide customers through conversations.</p></div>
      <div class="ab-build-card ab-reveal"><div class="ab-build-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div><h3>Marketing Automation</h3><p>Broadcasts, campaigns and sequential messaging to nurture audiences across channels.</p></div>
      <div class="ab-build-card ab-reveal"><div class="ab-build-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3>Sales Automation</h3><p>Lead capture, follow-ups and sales workflows that keep pipelines moving without manual effort.</p></div>
      <div class="ab-build-card ab-reveal"><div class="ab-build-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 01-3.46 0"/></svg></div><h3>Customer Support</h3><p>Shared inbox, assignments and collaboration tools so teams respond faster and better.</p></div>
      <div class="ab-build-card ab-reveal"><div class="ab-build-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Business Integrations</h3><p>Connect CRM, e-commerce, calendars, sheets and custom tools via APIs and webhooks.</p></div>
    </div>
    <div style="text-align:center;margin-top:2.25rem" class="ab-reveal"><a href="/products/" class="btn btn-primary btn-lg">Explore Platform</a></div>
  </div>
</section>

<section class="section ab-eco">
  <div class="container">
    <div class="section-header ab-reveal">
      <span class="badge-ab" style="background:rgba(139,92,246,.2);color:#C4B5FD;border-color:rgba(139,92,246,.3)">ECOSYSTEM</span>
      <h2 style="margin-top:1rem">Everything Connected Around Your Customer</h2>
      <p class="lead">Channels, automation and business systems working as one connected journey.</p>
    </div>
    <div class="ab-eco-visual ab-reveal" aria-hidden="true">
      <div class="ab-eco-center"><div class="ab-eco-customer">CUSTOMER</div></div>
      <div class="ab-eco-node" style="top:8%;left:12%">WhatsApp</div>
      <div class="ab-eco-node" style="top:8%;right:12%">Facebook</div>
      <div class="ab-eco-node" style="top:22%;left:2%">Instagram</div>
      <div class="ab-eco-node" style="top:22%;right:2%">Telegram</div>
      <div class="ab-eco-node" style="top:38%;left:0">Chatbot</div>
      <div class="ab-eco-node" style="top:38%;right:0">CRM</div>
      <div class="ab-eco-node" style="top:55%;left:8%">Campaigns</div>
      <div class="ab-eco-node" style="top:55%;right:8%">API</div>
      <div class="ab-eco-node" style="top:70%;left:18%">Webhooks</div>
      <div class="ab-eco-node" style="top:70%;right:16%">E-commerce</div>
      <div class="ab-eco-node" style="top:72%;left:42%">Automation</div>
      <div class="ab-eco-platform"><span>INBOXWA PLATFORM</span></div>
    </div>
    <div class="ab-eco-flow ab-reveal">
      <div class="ab-eco-flow-item"><span>Customer</span></div><span class="ab-eco-arrow">→</span>
      <div class="ab-eco-flow-item"><span>Conversation</span></div><span class="ab-eco-arrow">→</span>
      <div class="ab-eco-flow-item"><span>Automation</span></div><span class="ab-eco-arrow">→</span>
      <div class="ab-eco-flow-item"><span>Business Action</span></div>
    </div>
  </div>
</section>

<section class="ab-vision">
  <div class="container">
    <div class="ab-vision-inner ab-reveal">
      <h2>Our Vision</h2>
      <p class="ab-vision-quote">Make business communication simpler, smarter and more connected.</p>
      <p>We believe businesses should spend less time managing repetitive communication and more time building meaningful customer relationships.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">OUR MISSION</span><h2 style="margin-top:1rem">Our Mission</h2><p class="lead">Four principles that guide how we build and support businesses.</p></div>
    <div class="ab-mission-grid">
      <div class="ab-mission-card ab-reveal"><div class="ab-mission-num">01</div><h3>Simplify</h3><p>Make complex communication workflows easier to set up and run.</p></div>
      <div class="ab-mission-card ab-reveal"><div class="ab-mission-num">02</div><h3>Automate</h3><p>Reduce repetitive manual work so teams focus on high-value interactions.</p></div>
      <div class="ab-mission-card ab-reveal"><div class="ab-mission-num">03</div><h3>Connect</h3><p>Bring business tools and customer conversations together in one place.</p></div>
      <div class="ab-mission-card ab-reveal"><div class="ab-mission-num">04</div><h3>Scale</h3><p>Help businesses build repeatable communication systems that grow with them.</p></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">OUR JOURNEY</span><h2 style="margin-top:1rem">The InboxWa Journey</h2><p class="lead">How the platform has evolved — from idea to a connected communication system.</p></div>
    <div class="ab-timeline ab-reveal">
      <div class="ab-tl-item"><div class="ab-tl-dot"></div><h3>Idea</h3><p>Recognizing that businesses needed a simpler way to manage WhatsApp and multi-channel conversations without juggling multiple tools.</p></div>
      <div class="ab-tl-item"><div class="ab-tl-dot"></div><h3>Product</h3><p>Building a core platform around Official WhatsApp Business API, shared inbox and campaign tools.</p></div>
      <div class="ab-tl-item"><div class="ab-tl-dot"></div><h3>Automation</h3><p>Adding flow builders, sequences and workflow automation so teams could reduce manual follow-ups.</p></div>
      <div class="ab-tl-item"><div class="ab-tl-dot"></div><h3>Integrations</h3><p>Connecting CRM, e-commerce, calendars, sheets and custom systems via APIs and webhooks.</p></div>
      <div class="ab-tl-item"><div class="ab-tl-dot"></div><h3>AI</h3><p>Introducing AI chatbots and smarter conversation handling to scale support and engagement.</p></div>
      <div class="ab-tl-item"><div class="ab-tl-dot"></div><h3>Global Platform</h3><p>Expanding presence and capabilities so businesses across regions can run connected customer journeys.</p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">GLOBAL PRESENCE</span><h2 style="margin-top:1rem">Growing From India to a Global Presence</h2><p class="lead">InboxWa AI Technologies Pvt Ltd — teams and offices supporting businesses across regions.</p></div>
    <div class="ab-offices">
      <div class="ab-office-card ab-reveal"><div class="ab-office-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Bangalore</h3><div class="ab-office-type">Head Office</div><p>India</p></div>
      <div class="ab-office-card ab-reveal"><div class="ab-office-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Surat</h3><div class="ab-office-type">Branch Office</div><p>India</p></div>
    </div>
    <div class="ab-map-flow ab-reveal"><span>Bangalore</span><span class="arrow">→</span><span>Surat</span><span class="arrow">→</span><span>Global Customers</span></div>
    <div style="text-align:center;margin-top:2rem" class="ab-reveal"><a href="/contact/" class="btn btn-outline btn-lg">View Contact &amp; Locations</a></div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">INDUSTRIES</span><h2 style="margin-top:1rem">Designed for Businesses Across Industries</h2><p class="lead">Flexible workflows that adapt to how different sectors communicate with customers.</p></div>
    <div class="ab-ind-grid">
      <a href="/industries/ecommerce/" class="ab-ind-card ab-reveal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg><span>E-commerce</span></a>
      <a href="/industries/education/" class="ab-ind-card ab-reveal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg><span>Education</span></a>
      <a href="/industries/healthcare/" class="ab-ind-card ab-reveal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><span>Healthcare</span></a>
      <a href="/industries/real-estate/" class="ab-ind-card ab-reveal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg><span>Real Estate</span></a>
      <a href="/industries/finance/" class="ab-ind-card ab-reveal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M12 8v8M8 12h8"/></svg><span>Finance</span></a>
      <a href="/industries/automotive/" class="ab-ind-card ab-reveal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17h14v-5H5v5z"/><path d="M5 12l2-5h10l2 5"/><circle cx="7.5" cy="17" r="1.5"/><circle cx="16.5" cy="17" r="1.5"/></svg><span>Automotive</span></a>
      <a href="/industries/retail/" class="ab-ind-card ab-reveal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg><span>Retail</span></a>
      <a href="/industries/" class="ab-ind-card ab-reveal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg><span>Professional Services</span></a>
      <a href="/industries/" class="ab-ind-card ab-reveal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-4"/></svg><span>Marketing</span></a>
      <a href="/industries/travel-tourism/" class="ab-ind-card ab-reveal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/></svg><span>Travel</span></a>
      <a href="/industries/communication-it/" class="ab-ind-card ab-reveal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg><span>Technology</span></a>
      <a href="/industries/" class="ab-ind-card ab-reveal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg><span>Customer Support</span></a>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">HOW IT WORKS</span><h2 style="margin-top:1rem">From Conversation to Business Action</h2><p class="lead">A clear path from connecting channels to growing customer journeys.</p></div>
    <div class="ab-steps">
      <div class="ab-step ab-reveal"><div class="ab-step-num">01</div><h3>Connect</h3><p>Connect your business channels.</p></div>
      <div class="ab-step ab-reveal"><div class="ab-step-num">02</div><h3>Engage</h3><p>Communicate with customers.</p></div>
      <div class="ab-step ab-reveal"><div class="ab-step-num">03</div><h3>Automate</h3><p>Automate repetitive workflows.</p></div>
      <div class="ab-step ab-reveal"><div class="ab-step-num">04</div><h3>Integrate</h3><p>Connect CRM, tools and systems.</p></div>
      <div class="ab-step ab-reveal"><div class="ab-step-num">05</div><h3>Grow</h3><p>Build scalable customer journeys.</p></div>
    </div>
    <div class="ab-flow-banner ab-reveal"><span>CUSTOMER</span><span class="arrow">→</span><span>INBOXWA</span><span class="arrow">→</span><span>BUSINESS</span></div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">WHY INBOXWA</span><h2 style="margin-top:1rem">Built Around Real Business Workflows</h2><p class="lead">Practical capabilities designed for teams that need results, not complexity.</p></div>
    <div class="ab-why-grid">
      <div class="ab-why-card ab-reveal"><h3>Unified Communication</h3><p>Manage customer conversations from connected channels in one place.</p></div>
      <div class="ab-why-card ab-reveal"><h3>Automation</h3><p>Automate repetitive communication so teams work faster and more consistently.</p></div>
      <div class="ab-why-card ab-reveal"><h3>AI</h3><p>Build smarter customer interactions with AI-assisted conversations and bots.</p></div>
      <div class="ab-why-card ab-reveal"><h3>Integrations</h3><p>Connect your existing tools — CRM, e-commerce, sheets, calendars and more.</p></div>
      <div class="ab-why-card ab-reveal"><h3>Scalable Workflows</h3><p>Create workflows that support growing teams and increasing conversation volume.</p></div>
      <div class="ab-why-card ab-reveal"><h3>Business Focused</h3><p>Designed around practical business use cases, not theoretical features.</p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">TECHNOLOGY</span><h2 style="margin-top:1rem">Connect With the Tools Your Business Already Uses</h2><p class="lead">Channels, platforms and integration options that work with your stack.</p></div>
    <div class="ab-tech-grid ab-reveal">
      <div class="ab-tech-item">WhatsApp</div><div class="ab-tech-item">Facebook</div><div class="ab-tech-item">Instagram</div><div class="ab-tech-item">Telegram</div>
      <div class="ab-tech-item">Shopify</div><div class="ab-tech-item">WooCommerce</div><div class="ab-tech-item">Google Sheets</div>
      <div class="ab-tech-item">Google Forms</div><div class="ab-tech-item">Google Calendar</div><div class="ab-tech-item">Zoho</div>
      <div class="ab-tech-item">HubSpot</div><div class="ab-tech-item">Salesforce</div>
      <div class="ab-tech-item custom">API</div><div class="ab-tech-item custom">Webhooks</div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">PLATFORM</span><h2 style="margin-top:1rem">See the Platform in Action</h2><p class="lead">A unified workspace for conversations, campaigns, automation and insights.</p></div>
    <div class="ab-dash ab-reveal" data-editable-image="dashboard-mockup">
      <div class="ab-dash-side"><div class="logo">INBOXWA</div><ul class="ab-dash-nav"><li class="active">Inbox</li><li>Contacts</li><li>Campaigns</li><li>Chatbot</li><li>Automation</li><li>Analytics</li><li>Integrations</li></ul></div>
      <div class="ab-dash-main"><div class="ab-dash-row">
        <div class="ab-dash-card"><h4>WhatsApp Conversation</h4><div class="ab-chat-bubble">Hi! I'd like to know more about your product.</div><div class="ab-chat-bubble out">Thanks for reaching out! Here's a quick overview…</div><div class="ab-chat-bubble">Can I book a demo?</div><div class="ab-chat-bubble out">Absolutely — pick a slot that works for you.</div></div>
        <div class="ab-dash-card"><h4>Campaign &amp; Automation</h4><div class="ab-dash-stat"><span>Active campaign</span><span>Welcome Series</span></div><div class="ab-dash-stat"><span>Automation</span><span>Lead follow-up</span></div><div class="ab-dash-stat"><span>Status</span><span style="color:#34D399">Running</span></div></div>
      </div></div>
    </div>
    <p class="ab-dash-note ab-reveal">Dashboard mockup — replace with actual InboxWa product screenshots when available.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="ab-human-grid">
      <div class="ab-human-visual ab-reveal" data-editable-image="team-tech">
        <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" opacity=".6"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
        <span style="font-size:.85rem;opacity:.7">Team / Technology Visual<br><small>Replace with company photo</small></span>
      </div>
      <div class="ab-reveal">
        <span class="badge-ab">HUMAN + TECHNOLOGY</span>
        <h2 style="margin-top:1rem;font-size:clamp(1.5rem,3vw,2rem)">Technology Should Empower People, Not Replace Relationships</h2>
        <p style="color:var(--t2);line-height:1.7;margin:1rem 0 0;font-size:1.02rem">Automation handles repetitive work. People handle meaningful conversations. The result is a better experience for every customer.</p>
        <div class="ab-human-flow">
          <div class="ab-human-flow-row"><span class="ab-human-pill">AI / Automation</span><span class="ab-human-arrow">→</span><span class="ab-human-pill cyan">Routine Tasks</span></div>
          <div class="ab-human-flow-row"><span class="ab-human-pill">Human Team</span><span class="ab-human-arrow">→</span><span class="ab-human-pill cyan">Complex Conversations</span></div>
          <div class="ab-human-flow-row"><span class="ab-human-pill">Customer</span><span class="ab-human-arrow">→</span><span class="ab-human-pill green">Better Experience</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">PARTNERS</span><h2 style="margin-top:1rem">Built to Grow With an Ecosystem</h2><p class="lead">Partner programs designed for agencies, affiliates, technology and integration partners.</p></div>
    <div class="ab-partner-grid">
      <div class="ab-partner-card ab-reveal"><h3>Agency Partners</h3><p>Build and manage client communication systems.</p></div>
      <div class="ab-partner-card ab-reveal"><h3>Affiliate Partners</h3><p>Refer businesses and grow with InboxWa.</p></div>
      <div class="ab-partner-card ab-reveal"><h3>Whitelabel Partners</h3><p>Offer the platform under your brand.</p></div>
      <div class="ab-partner-card ab-reveal"><h3>Technology Partners</h3><p>Integrate and co-build solutions.</p></div>
      <div class="ab-partner-card ab-reveal"><h3>Integration Partners</h3><p>Connect tools and expand the ecosystem.</p></div>
    </div>
    <div style="text-align:center;margin-top:2rem" class="ab-reveal"><a href="/partners/" class="btn btn-primary btn-lg">Become a Partner</a></div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">TRUSTED BY</span><h2 style="margin-top:1rem">Trusted by Growing Businesses</h2><p class="lead">Replaceable logo placeholders — add real client logos when available.</p></div>
    <div class="ab-logos-wrap ab-reveal">
      <div class="ab-logos-track">
        <div class="ab-logo-item">Client Logo 1</div><div class="ab-logo-item">Client Logo 2</div><div class="ab-logo-item">Client Logo 3</div>
        <div class="ab-logo-item">Client Logo 4</div><div class="ab-logo-item">Client Logo 5</div><div class="ab-logo-item">Client Logo 6</div>
        <div class="ab-logo-item">Client Logo 1</div><div class="ab-logo-item">Client Logo 2</div><div class="ab-logo-item">Client Logo 3</div>
        <div class="ab-logo-item">Client Logo 4</div><div class="ab-logo-item">Client Logo 5</div><div class="ab-logo-item">Client Logo 6</div>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">TESTIMONIALS</span><h2 style="margin-top:1rem">What Businesses Say About InboxWa</h2><p class="lead">Editable testimonial placeholders — replace with real customer feedback.</p></div>
    <div class="ab-testimonials">
      <div class="ab-testi-card ab-reveal"><div class="ab-testi-stars"><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><blockquote>"InboxWa helped us bring WhatsApp conversations and follow-ups into one place. Our team responds faster and campaigns are easier to run."</blockquote><div class="ab-testi-author"><div class="ab-testi-avatar">A</div><div class="ab-testi-meta"><strong>Customer Name</strong><span>Company · Designation</span></div></div></div>
      <div class="ab-testi-card ab-reveal"><div class="ab-testi-stars"><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><blockquote>"The automation and chatbot features reduced a lot of repetitive work. We can focus more on complex customer conversations."</blockquote><div class="ab-testi-author"><div class="ab-testi-avatar">B</div><div class="ab-testi-meta"><strong>Customer Name</strong><span>Company · Designation</span></div></div></div>
      <div class="ab-testi-card ab-reveal"><div class="ab-testi-stars"><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="#ffc107" stroke="#ffc107" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><blockquote>"Integrations with our CRM and tools made the platform fit into our existing workflow without major changes."</blockquote><div class="ab-testi-author"><div class="ab-testi-avatar">C</div><div class="ab-testi-meta"><strong>Customer Name</strong><span>Company · Designation</span></div></div></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">CULTURE</span><h2 style="margin-top:1rem">What We Believe In</h2><p class="lead">Principles that shape how we build product and work with customers.</p></div>
    <div class="ab-values-grid">
      <div class="ab-value-card ab-reveal"><div class="ab-value-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></div><h3>Customer First</h3><p>Decisions start with what helps the customer succeed.</p></div>
      <div class="ab-value-card ab-reveal"><div class="ab-value-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/></svg></div><h3>Keep It Simple</h3><p>Clarity over complexity in product and communication.</p></div>
      <div class="ab-value-card ab-reveal"><div class="ab-value-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/></svg></div><h3>Build With Purpose</h3><p>Every feature should solve a real business need.</p></div>
      <div class="ab-value-card ab-reveal"><div class="ab-value-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>Move Fast</h3><p>Ship, learn and improve without unnecessary delay.</p></div>
      <div class="ab-value-card ab-reveal"><div class="ab-value-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 4v6h-6"/><path d="M1 20v-6h6"/><path d="M3.51 9a9 9 0 0114.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0020.49 15"/></svg></div><h3>Keep Improving</h3><p>Continuous improvement of platform and experience.</p></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">TRUST</span><h2 style="margin-top:1rem">Built With a Long-Term Mindset</h2><p class="lead">Clear capabilities, practical solutions and continuous evolution.</p></div>
    <div class="ab-trust-grid">
      <div class="ab-trust-card ab-reveal"><h3>Transparent</h3><p>Clear product capabilities and communication so you know what the platform can do.</p></div>
      <div class="ab-trust-card ab-reveal"><h3>Practical</h3><p>Solutions focused on real business workflows, not theoretical feature lists.</p></div>
      <div class="ab-trust-card ab-reveal"><h3>Evolving</h3><p>Continuously improving platform capabilities based on how businesses actually work.</p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="ab-sim ab-reveal">
      <h2>What Happens When a Business Connects With InboxWa?</h2>
      <p class="lead">Play the journey to see how a connected customer experience comes together.</p>
      <button type="button" class="ab-sim-play" id="ab-sim-play" aria-label="Play journey"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg> Play Journey</button>
      <div class="ab-sim-steps" id="ab-sim-steps">
        <div class="ab-sim-step" data-step="0">Business</div>
        <div class="ab-sim-step" data-step="1">Connect WhatsApp</div>
        <div class="ab-sim-step" data-step="2">Capture Customer</div>
        <div class="ab-sim-step" data-step="3">Automate Conversation</div>
        <div class="ab-sim-step" data-step="4">Connect CRM</div>
        <div class="ab-sim-step" data-step="5">Follow Up</div>
        <div class="ab-sim-step" data-step="6">Business Action</div>
      </div>
      <div class="ab-sim-final" id="ab-sim-final">One Connected Customer Journey <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header ab-reveal"><span class="badge-ab">FAQ</span><h2 style="margin-top:1rem">Frequently Asked Questions</h2><p class="lead">Quick answers about InboxWa, capabilities and how to get started.</p></div>
    <div class="ab-faq ab-reveal">
      <div class="ab-faq-item"><button type="button" class="ab-faq-q" aria-expanded="false">What is InboxWa? <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></button><div class="ab-faq-a">InboxWa is a platform that brings WhatsApp, automation, AI, customer communication, campaigns and business workflows together. It helps businesses manage conversations and automate repetitive tasks from one place.</div></div>
      <div class="ab-faq-item"><button type="button" class="ab-faq-q" aria-expanded="false">What businesses can use InboxWa? <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></button><div class="ab-faq-a">InboxWa is designed for businesses across industries — including e-commerce, education, healthcare, real estate, finance, automotive, retail, professional services, marketing, travel, technology and customer support teams.</div></div>
      <div class="ab-faq-item"><button type="button" class="ab-faq-q" aria-expanded="false">What channels can InboxWa connect? <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></button><div class="ab-faq-a">InboxWa supports WhatsApp (via Official WhatsApp Business API), Facebook, Instagram, Telegram and related communication channels so teams can manage conversations in a unified way.</div></div>
      <div class="ab-faq-item"><button type="button" class="ab-faq-q" aria-expanded="false">Can InboxWa integrate with CRM and business tools? <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></button><div class="ab-faq-a">Yes. InboxWa can connect with CRM systems and business tools such as Zoho, HubSpot, Salesforce, Shopify, WooCommerce, Google Sheets, Google Forms, Google Calendar and more. Custom connections are also possible via API and webhooks.</div></div>
      <div class="ab-faq-item"><button type="button" class="ab-faq-q" aria-expanded="false">Can I build custom workflows? <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></button><div class="ab-faq-a">Yes. You can design automation flows, sequences and workflows tailored to your sales, marketing and support processes so repetitive steps run automatically.</div></div>
      <div class="ab-faq-item"><button type="button" class="ab-faq-q" aria-expanded="false">Can I use APIs and Webhooks? <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></button><div class="ab-faq-a">Yes. InboxWa supports APIs and webhooks so you can connect custom systems, trigger actions and build integrations that fit your existing stack.</div></div>
      <div class="ab-faq-item"><button type="button" class="ab-faq-q" aria-expanded="false">Does InboxWa support AI chatbots? <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></button><div class="ab-faq-a">Yes. InboxWa includes AI chatbot capabilities to handle FAQs, qualify leads and guide customers through conversations, while keeping the option for human takeover when needed.</div></div>
      <div class="ab-faq-item"><button type="button" class="ab-faq-q" aria-expanded="false">Where is InboxWa based? <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></button><div class="ab-faq-a">InboxWa has its Head Office in Bangalore (India) and a Branch Office in Surat (India). You can find contact and location details on the Contact page.</div></div>
      <div class="ab-faq-item"><button type="button" class="ab-faq-q" aria-expanded="false">How can I book a demo? <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></button><div class="ab-faq-a">Click “Book a Demo” on this page or the Contact page, or reach out via WhatsApp or email. Our team will schedule a personalized walkthrough of the platform.</div></div>
      <div class="ab-faq-item"><button type="button" class="ab-faq-q" aria-expanded="false">How can I become a InboxWa partner? <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></button><div class="ab-faq-a">Visit the Partners page to explore Agency, Affiliate, Whitelabel, Technology and Integration partner options, and get in touch with the team to apply.</div></div>
    </div>
  </div>
</section>

<section class="ab-final-cta">
  <div class="container ab-reveal">
    <h2>Ready to Build Smarter Customer Journeys?</h2>
    <p>Explore what InboxWa can do for your business.</p>
    <div class="ab-final-ctas">
      <a href="/products/" class="btn btn-white btn-lg">Explore Platform</a>
      <button type="button" class="btn btn-primary btn-lg btn-demo-open">Book a Demo</button>
      <a href="/contact/" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,.35);color:#fff">Contact Us</a>
              <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn-download-data" style="padding:0.78rem 1.5rem;font-size:0.95rem;">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Download Data
          </a>
</div>
  </div>
</section>
</div>

<script>
(function(){
  var reveals=document.querySelectorAll('.ab-reveal');
  if('IntersectionObserver' in window){
    var io=new IntersectionObserver(function(entries){entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('visible');io.unobserve(e.target);}});},{threshold:0.12,rootMargin:'0px 0px -40px 0px'});
    reveals.forEach(function(el){io.observe(el);});
  }else{reveals.forEach(function(el){el.classList.add('visible');});}
  document.querySelectorAll('.ab-faq-q').forEach(function(btn){
    btn.addEventListener('click',function(){
      var item=btn.closest('.ab-faq-item');var open=item.classList.contains('open');
      document.querySelectorAll('.ab-faq-item.open').forEach(function(i){i.classList.remove('open');i.querySelector('.ab-faq-q').setAttribute('aria-expanded','false');});
      if(!open){item.classList.add('open');btn.setAttribute('aria-expanded','true');}
    });
  });
  var playBtn=document.getElementById('ab-sim-play');
  var steps=document.querySelectorAll('#ab-sim-steps .ab-sim-step');
  var finalEl=document.getElementById('ab-sim-final');
  var playing=false;
  if(playBtn){
    playBtn.addEventListener('click',function(){
      if(playing)return;playing=true;playBtn.disabled=true;playBtn.style.opacity='0.6';
      steps.forEach(function(s){s.classList.remove('active','done');});finalEl.classList.remove('show');
      var i=0;
      function next(){
        if(i>0)steps[i-1].classList.add('done');
        if(i<steps.length){steps[i].classList.add('active');i++;setTimeout(next,700);}
        else{finalEl.classList.add('show');playing=false;playBtn.disabled=false;playBtn.style.opacity='1';playBtn.innerHTML='<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg> Replay Journey';}
      }
      next();
    });
  }
})();
</script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
