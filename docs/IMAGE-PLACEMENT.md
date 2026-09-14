# HelloBotz — Image placement list

Place real assets under `/assets/images/`. Use WebP/PNG. Always set width/height and alt.

## Global / Header / Footer
| Path | Where used | Suggested size |
|------|------------|----------------|
| `assets/images/logo.png` | Header logo | 240×64 (display ~120×32) |
| `assets/images/logo-footer.png` | Footer logo | 280×72 |
| `assets/images/favicon-32x32.png` | Browser tab | 32×32 |
| `assets/images/apple-touch-icon.png` | iOS home screen | 180×180 |
| `assets/images/og-image.png` | Default Open Graph | 1200×630 |

## Homepage
| Path | Section |
|------|---------|
| `assets/images/home/hero.webp` | Hero visual / product UI |
| `assets/images/home/omnichannel.webp` | Omnichannel section |
| `assets/images/home/inbox.webp` | Shared inbox preview |
| `assets/images/home/flow-builder.webp` | Flow builder preview |
| `assets/images/home/analytics.webp` | Analytics preview |

## Products (`assets/images/products/{slug}/`)
| Folder | Files |
|--------|-------|
| `whatsapp-api/` | hero.webp, phone-ui.webp |
| `chatbot/` | hero.webp, chat-sim.webp |
| `shared-inbox/` | hero.webp, inbox.webp |
| `broadcast/` | hero.webp, campaign.webp |
| `flow-builder/` | hero.webp, canvas.webp |
| `crm/` | hero.webp, pipeline.webp |
| `automation/` | hero.webp, timeline.webp |
| `analytics/` | hero.webp, dashboard.webp |

## Solutions
| Path | Page |
|------|------|
| `assets/images/solutions/appointment.webp` | Appointments |
| `assets/images/solutions/payments.webp` | Invoice & Payments |
| `assets/images/solutions/data-marketplace.webp` | Data Marketplace hero |
| `assets/images/solutions/{slug}.webp` | Other solution heroes |

## Industries (`assets/images/industries/{slug}/`)
For each: `ecommerce`, `education`, `healthcare`, `real-estate`, `finance-bfsi`, `travel-tourism`, `hotel-restaurant`, `automotive`, `logistics`, `retail`, `communication-it`, `government-ngo`

| File | Use |
|------|-----|
| `hero.webp` | Industry hero (1200×630) |
| `workflow.webp` | Workflow / simulation area |
| `use-case.webp` | Use-case strip |

## Locations
| Path | Use |
|------|-----|
| `assets/images/locations/default.webp` | Fallback for all location pages |
| `assets/images/locations/{city-slug}.webp` | Optional per-city hero |

## Pricing
| Path | Use |
|------|-----|
| `assets/images/pricing/pricing-hero.webp` | Optional hero |
| `assets/images/pricing/growth.webp` | Optional plan visual |
| `assets/images/pricing/pro.webp` | Optional |
| `assets/images/pricing/business.webp` | Optional |

## Resources / Blog
| Path | Use |
|------|-----|
| `assets/images/blog/whatsapp-api-guide.webp` | Blog: WhatsApp API guide |
| `assets/images/blog/ai-chatbot.webp` | Blog: chatbot |
| `assets/images/blog/whatsapp-broadcast.webp` | Blog: broadcast |
| `assets/images/blog/{slug}.webp` | Match each blog slug |
| `assets/images/resources/help-center.webp` | Help center hero (optional) |
| `assets/images/resources/download/app-android.webp` | Download page |
| `assets/images/resources/download/app-ios.webp` | iOS page |
| `assets/images/case-studies/{industry}.webp` | Case study cards |

## Rules
1. Missing image must not break layout — use CSS gradient placeholder (already in blog cards).
2. Prefer WebP; PNG fallback OK.
3. Always provide `alt` text.
4. Do not hotlink random stock URLs in production.
