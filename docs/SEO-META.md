# SEO Meta Tag System

Every page can set (before including header.php):

```php
$pageTitle = 'AI WhatsApp Chatbot';
$pageDescription = '150–160 char summary with primary keyword.';
$pageKeywords = 'optional, comma, keywords';
$canonicalUrl = 'https://hellobotz.com/Products/Chatbot/';
$ogImage = 'https://hellobotz.com/assets/images/og/chatbot.png';
$ogType = 'website'; // or article
$robots = 'index, follow'; // or noindex, nofollow
```

Header auto-builds:
- `<title>` with brand
- description, keywords, robots
- canonical
- Open Graph (title, description, url, image 1200×630)
- Twitter summary_large_image
- Organization + SoftwareApplication JSON-LD (home)

Auth pages use `noindex, nofollow`.

Domain constant: `https://hellobotz.com` in header SEO engine.
