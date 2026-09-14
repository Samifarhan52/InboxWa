# HelloBotz — Image Placement & Size Guide

Use this file when replacing placeholders or adding new visuals.  
**Rule:** Keep existing layout; only swap image files or fill empty slots. Prefer **WebP** (fallback PNG). Always set width/height attributes or use CSS aspect-ratio classes to avoid layout shift.

---

## Global brand assets

| Asset | Path | Size (px) | Notes |
|-------|------|-----------|--------|
| Logo (header) | `assets/images/logo.png` | **280×72** (display ~140–180×36–42) | Transparent PNG, horizontal |
| Logo (footer) | `assets/images/logo-footer.png` | **280×72** | Light version for dark footer |
| Favicon | `assets/images/favicon-32x32.png` | **32×32** | Also provide 16×16 if needed |
| Apple touch | `assets/images/apple-touch-icon.png` | **180×180** | |
| OG / Social share | `assets/images/og-image.png` | **1200×630** | Used in `og:image` / Twitter |
| Meta Tech Partner badge | `assets/images/partners/meta-tech-partner.png` | **240×112** | Footer partner badge |

---

## Homepage (`index.php`)

| Placement | Path (recommended) | Size | CSS class |
|-----------|-------------------|------|-----------|
| Hero optional UI mock (if replacing phone sim) | `assets/images/home/hero-inbox.webp` | **1200×700** | `.img-slot.img-slot-lg` |
| WhatsApp API section | `assets/images/home/whatsapp-api.webp` or `assets/videos/whatsapp-api.mp4` | **1280×800** | `.media-slot` / `.img-slot-ui` |
| Broadcast UI | `assets/images/home/broadcast-ui.webp` | **800×500** | `.img-slot-md` |
| Workflow UI | `assets/images/home/workflow-ui.webp` | **800×500** | `.img-slot-md` |
| Flow Builder | `assets/images/home/flow-builder.webp` | **1200×700** | `.img-slot-lg` |
| Shared Inbox split | `assets/images/home/inbox-ui.webp` | **1000×600** | `.img-slot-ui` |
| CRM split | `assets/images/home/crm-ui.webp` | **1000×600** | `.img-slot-ui` |
| Integration icons | `assets/images/integrations/{name}.svg` | **64×64** | SVG preferred |
| Brand logos (trusted by) | `assets/images/brands/brand-N.png` | **160×48** | Grayscale OK |
| Testimonial avatars | `assets/images/avatars/{name}.jpg` | **80×80** | Circle crop |

**Homepage hero:** Prefer keeping the live WhatsApp phone simulation. Only add a static image if product decides to replace the sim.

---

## Product pages (`products/...`)

| Page / section | Path | Size |
|----------------|------|------|
| WhatsApp API | `assets/images/products/whatsapp-api/` | Hero **1200×700**, feature **800×500** |
| Shared Inbox | `assets/images/products/shared-inbox/` | Same |
| Broadcast | `assets/images/products/broadcast/` | Same |
| Chatbot | `assets/images/products/chatbot/` | Same |
| Flow Builder | `assets/images/products/flow-builder/` | Same |
| CRM | `assets/images/products/crm/` | Same |
| Analytics | `assets/images/products/analytics/` | Same |
| Automation | `assets/images/products/automation/` | Same |

Use `.img-slot-hero` for page heroes, `.img-slot-md` for feature rows.

---

## Solutions & channels

| Area | Path | Size |
|------|------|------|
| Channel WhatsApp | `assets/images/` or page CSS backgrounds | UI shots **1000×600** |
| Instagram / Facebook / Telegram | matching solution folders | **1000×600** |
| Shopify / WooCommerce | `assets/images/` integrations | Logo **64×64**, UI **1000×600** |

---

## Industries

| Industry | Path | Size |
|----------|------|------|
| E-commerce, Education, Healthcare, etc. | `assets/images/industries/{slug}/` | Hero **1200×630**, card **600×400** |

---

## Locations

| Type | Path | Size |
|------|------|------|
| City/country hero | `assets/images/locations/{slug}-whatsapp-api.webp` | **1200×630** |
| Map / office (Contact) | optional photos | **800×500**, use `.img-slot-md` |

---

## About / Contact / Company

| Placement | Path | Size |
|-----------|------|------|
| About hero visual | `assets/images/about/team-or-office.webp` | **1000×700** (`.img-slot-md`) |
| Office experience cards | `assets/images/about/office-{city}.webp` | **800×500** |
| Contact map is SVG — no image required | — | — |

---

## Partners

| Asset | Path | Size |
|-------|------|------|
| Program cards | `assets/images/partners/{program}/` | **600×400** |
| Logos | SVG/PNG **120×48** | |

---

## CSS classes (already in `app.css`)

```text
.img-slot / .media-slot / .img-frame   — container
.img-slot-hero      aspect 16/10
.img-slot-lg        aspect 16/9
.img-slot-md        aspect 4/3
.img-slot-sq        aspect 1/1
.img-slot-wide      aspect 21/9
.img-slot-portrait  aspect 3/4
.img-slot-ui        aspect 10/6
.img-slot--overlay  bottom gradient
```

**Example:**
```html
<div class="img-slot img-slot-ui">
  <img src="/assets/images/home/inbox-ui.webp" alt="Shared inbox UI" width="1000" height="600" loading="lazy">
</div>
```

---

## SEO & performance rules

1. Always provide `alt` text (descriptive, not keyword-stuffed).
2. Use `loading="lazy"` below the fold; hero image can be `fetchpriority="high"`.
3. Prefer WebP; keep PNG for logo if transparency quality needs it.
4. Compress: aim &lt; 200KB for UI shots, &lt; 100KB for cards, &lt; 30KB for icons.
5. Never omit width/height or aspect-ratio — prevents CLS.
6. Do not stretch logos; use `object-fit: contain` for brand marks.
7. Dark-section images: ensure contrast or use light-edge frames.

---

## Where NOT to put large images

- Header / mobile menu (logo only)
- FAQ accordion
- Pure icon feature grids (SVG icons preferred)
- Floating WhatsApp widget

---

## Checklist before go-live

- [ ] `logo.png` + `logo-footer.png` sharp at 2× display size  
- [ ] `og-image.png` 1200×630 with product + brand  
- [ ] Homepage below-fold UI shots lazy-loaded  
- [ ] No broken image paths (check Network tab)  
- [ ] Mobile 320–430px: no horizontal scroll from images  
- [ ] LCP image optimized (hero or logo)

---

*Generated for HelloBotz production UI package. Paths are root-relative from site root.*
