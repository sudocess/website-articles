<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- Favicons -->
  <link rel="icon" href="/assets/favicon/favicon.svg" type="image/svg+xml">
  <link rel="icon" href="https://engaginguxdesign.com/assets/favicon/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="https://engaginguxdesign.com/assets/favicon/favicon-192x192.png" sizes="192x192" type="image/png">
  <link rel="apple-touch-icon" href="https://engaginguxdesign.com/assets/favicon/apple-touch-icon.png">

  <!-- SEO -->
  <title>Inside the Build: LHR Photography's Bilingual Portfolio + Admin Platform | Engaging UX Design</title>
  <meta name="description" content="A two-part platform for a Dutch wedding photographer: public bilingual portfolio plus a private admin dashboard for bookings, contracts, invoices and reviews. Three real challenges, three real solutions."/>
  <meta name="keywords" content="photography website case study, photographer admin dashboard, Mollie API integration, masonry portfolio layout, Next.js Supabase build, bilingual photography site Netherlands"/>
  <meta name="author" content="Engaging UX Design"/>
  <meta name="robots" content="index, follow"/>
  <link rel="canonical" href="https://articles.engaginguxdesign.com/lhr-photography-platform-case/"/>

  <!-- Open Graph -->
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Inside the Build: LHR Photography's Bilingual Portfolio + Admin Platform | Engaging UX Design"/>
  <meta property="og:description" content="Public bilingual portfolio + private admin dashboard. The three product decisions that mattered most: photo display, booking flow, and Mollie payment integration."/>
  <meta property="og:url" content="https://articles.engaginguxdesign.com/lhr-photography-platform-case/"/>
  <meta property="og:site_name" content="Engaging UX Design · Articles"/>
  <meta property="og:image" content="https://engaginguxdesign.com/image-assets/Logo-for-darkbg.png"/>
  <meta property="og:locale" content="en_GB"/>
  <meta property="article:author" content="Cess Garcia"/>
  <meta property="article:published_time" content="2026-05-09T00:00:00+02:00"/>
  <meta property="article:section" content="Project Showcases"/>

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="Inside the LHR Photography Platform Build"/>
  <meta name="twitter:description" content="Three product decisions that mattered most on a photographer's bilingual site + admin platform."/>
  <meta name="twitter:image" content="https://engaginguxdesign.com/image-assets/Logo-for-darkbg.png"/>

  <!-- Schema JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "Inside the Build: LHR Photography's Bilingual Portfolio + Admin Platform",
    "description": "A bilingual photography portfolio with a private admin dashboard for bookings, contracts, invoices and reviews. Built for a Dutch wedding photographer.",
    "datePublished": "2026-05-09",
    "dateModified": "2026-05-09",
    "author": {
      "@type": "Person",
      "name": "Cess Garcia",
      "url": "https://engaginguxdesign.com/about/"
    },
    "publisher": {
      "@type": "Organization",
      "name": "Engaging UX Design",
      "url": "https://engaginguxdesign.com",
      "logo": {
        "@type": "ImageObject",
        "url": "https://engaginguxdesign.com/image-assets/Logo-for-darkbg.png"
      }
    },
    "about": {
      "@type": "WebSite",
      "name": "lhrphotography.nl",
      "url": "https://www.lhrphotography.nl"
    },
    "mainEntityOfPage": "https://articles.engaginguxdesign.com/lhr-photography-platform-case/"
  }
  </script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@300;400;500;600;700;800;900&family=Gabarito:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>

  <link rel="stylesheet" href="/assets/css/style.css"/>

  <!-- Article-specific styles (project-meta, challenge, detail-list) -->
  <style>
    .project-meta {
      background: var(--card-bg, #fff9f3);
      border: 1px solid var(--border, rgba(46,26,14,.1));
      border-top: 3px solid var(--orange, #c0471a);
      border-radius: 8px;
      padding: 1.4rem 1.6rem;
      margin: 2rem 0 2.5rem;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
      gap: 1.2rem;
    }
    .project-meta dt {
      font-size: .62rem; font-weight: 700; letter-spacing: .15em; text-transform: uppercase;
      color: var(--brown-light, #AA918C); margin-bottom: .35rem;
    }
    .project-meta dd { font-size: .92rem; color: var(--brown-dark, #2b1206); font-weight: 600; margin: 0; }
    .project-meta dd a { color: var(--orange, #c0471a); text-decoration: none; }
    .project-meta dd a:hover { text-decoration: underline; }

    .challenge {
      background: var(--card-bg, #fff9f3);
      border: 1px solid var(--border, rgba(46,26,14,.1));
      border-radius: 10px;
      padding: 1.8rem 1.9rem;
      margin: 1.8rem 0;
    }
    .challenge h3 {
      font-family: 'Alexandria', sans-serif;
      font-size: 1.18rem; font-weight: 800; letter-spacing: -.015em;
      color: var(--brown-dark, #2b1206);
      margin: 0 0 1rem;
      display: flex; align-items: baseline; gap: .7rem;
    }
    .challenge .ch-num {
      background: var(--orange, #c0471a); color: #fff;
      font-size: .68rem; font-weight: 900;
      width: 22px; height: 22px; border-radius: 50%;
      display: inline-flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }
    .challenge .ch-label {
      display: block;
      font-size: .62rem; font-weight: 700; letter-spacing: .15em; text-transform: uppercase;
      color: var(--orange, #c0471a);
      margin: 1.2rem 0 .35rem;
    }
    .challenge p { font-size: .95rem; color: #4a2a18; margin-bottom: .8rem; }
    .challenge p:last-child { margin-bottom: 0; }

    .detail-list { list-style: none; margin: 1.8rem 0 2rem; padding: 0; display: flex; flex-direction: column; gap: 1rem; }
    .detail-list li {
      background: var(--card-bg, #fff9f3);
      border: 1px solid var(--border, rgba(46,26,14,.1));
      border-left: 4px solid var(--orange, #c0471a);
      border-radius: 0 8px 8px 0;
      padding: 1.2rem 1.4rem;
    }
    .detail-list li strong {
      display: block; margin-bottom: .35rem; font-size: .98rem;
      font-family: 'Alexandria', sans-serif; letter-spacing: -.01em;
      color: var(--brown-dark, #2b1206);
    }
    .detail-list li p { font-size: .9rem; color: #4a2a18; margin: 0; }
  </style>
</head>
<body>

<?php include __DIR__ . '/../includes/back-banner.php'; ?>
<?php $navActive = ''; include __DIR__ . '/../includes/nav.php'; ?>

<article>
<div class="article-wrap">
  <div class="art-hero">
    <span class="pill">Project Showcase · Photography Platform</span>
    <h1>A photographer's site, and the <em>private admin app</em> that runs the business</h1>
    <p class="art-deck">A two-part build for a Dutch wedding photographer. A bilingual public portfolio that treats every photo as a deliverable, and a private admin dashboard that handles bookings, contracts, invoices and reviews. The brief: <em>"I want to focus on the photography, not the admin."</em></p>
    <p class="byline">By <strong>Engaging UX Design</strong> &nbsp;·&nbsp; Project Showcases</p>
  </div>

  <div class="art-body">

    <dl class="project-meta">
      <div><dt>Client</dt><dd>Leemar H. Ritual</dd></div>
      <div><dt>Practice</dt><dd>Wedding &amp; editorial photography</dd></div>
      <div><dt>Live at</dt><dd><a href="https://www.lhrphotography.nl" target="_blank" rel="noopener">lhrphotography.nl</a></dd></div>
      <div><dt>Public stack</dt><dd>HTML · CSS · JS · Hostinger</dd></div>
      <div><dt>Admin stack</dt><dd>Next.js 14 · Supabase · Mollie · Resend · Vercel</dd></div>
      <div><dt>Languages</dt><dd>English &amp; Dutch (hreflang)</dd></div>
    </dl>

    <h2>What was built</h2>

    <p>A two-part platform that splits the photographer's workflow cleanly between what visitors see and what the photographer manages.</p>

    <p>The <strong>public site</strong> is a fully static, bilingual portfolio with seven category pages, a discovery-call booking flow, transparent pricing for every package tier, a service contract, and a reviews surface. Performance-optimised, mobile-first, with proper SEO: canonical tags, hreflang, JSON-LD <code>LocalBusiness</code> markup, sitemap, structured author info.</p>

    <p>The <strong>admin app</strong> is a private dashboard that runs every operational side of the business: a calendar that's the source of truth for availability, a clients table with auto-generated client codes, a contract module that produces tokenised click-to-accept signing links, an invoice module with Dutch-format numbering and Mollie-powered payment links, a review request flow that emails clients tokenised submission links and gates publication behind admin approval, a photo manager backed by Supabase Storage, and a settings module for business details.</p>

    <p>Both halves are connected through Supabase RPCs so the public booking form lands directly in the admin's calendar with no manual sync.</p>

    <h2>Three challenges, three solutions</h2>

    <div class="challenge">
      <h3><span class="ch-num">1</span> Photo display: full-frame versus cropped thumbnails</h3>

      <span class="ch-label">The problem</span>
      <p>The first version of the portfolio used a tiled mosaic where every card was forced into a fixed aspect ratio. Landscape and portrait shots got cropped to fit, which meant heads, hands, or context were chopped out of the photographer's actual work. For a photographer, the photo <em>is</em> the product, so any auto-crop was eroding the value of every visit.</p>

      <span class="ch-label">What we considered</span>
      <p>Tightening the crop with <code>object-position</code> per image was the cheapest fix, but it just moved the problem around. The proper fix was to abandon the tiled mosaic and let each photo show at its own natural aspect ratio.</p>

      <span class="ch-label">The solution</span>
      <p>A natural-aspect masonry layout: two columns on mobile, three on tablet, four on desktop. Photos flow into columns at their full composition, never cropped. Tap any photo to open a full-screen lightbox with arrow-key and on-screen navigation through that gallery.</p>

      <span class="ch-label">Why it matters</span>
      <p>Mobile especially: the previous wide-card layout was cutting off portrait shots top-and-bottom on phones, which is where most of the inbound traffic comes from. The masonry preserves every frame, the lightbox treats each photo as a deliverable rather than a swatch, and engagement (time-on-page and scroll-depth) climbed measurably after the change. There's a trade-off. A tiled mosaic of identical card sizes looks "designed", and natural-aspect masonry looks more honest but less curated. For a photographer, honest wins; for a different industry the call could go the other way.</p>
    </div>

    <div class="challenge">
      <h3><span class="ch-num">2</span> Book-a-call: from three steps to two with a popup date picker</h3>

      <span class="ch-label">The problem</span>
      <p>The original book-a-call page was a three-card flow: Step 1 pick a date, Step 2 pick a time slot, Step 3 fill in your details. On desktop the three cards spread across the screen and looked balanced; on mobile they stacked into a long scroll where Step 2's slot grid sat between Step 1's calendar and Step 3's form fields. Tapping a slot didn't feel like a commitment because the actual "Confirm booking" button was hundreds of pixels below, after seven form fields. Drop-off was high.</p>

      <span class="ch-label">The solution</span>
      <p>Consolidated to two steps. A "Pick your date and time" surface with a popup date picker that opens on tap, hands the chosen date to a slot grid, and slides shut once the slot is selected. The form fields drop into the same screen, and the submit button is always reachable without a scroll. The slot pulses once on tap and the page smooth-scrolls to the submit so the visitor sees the next action immediately.</p>

      <span class="ch-label">Why it matters</span>
      <p>The decision to book is emotional. Every extra scroll, every "wait, where's the button" moment, is a chance to lose the visitor. Two screens of focused decision-making converts dramatically better than three loosely-coupled cards. The popup pattern also fixed an iOS-specific issue where the slot grid was being briefly hidden by the keyboard appearing for the form fields.</p>
    </div>

    <div class="challenge">
      <h3><span class="ch-num">3</span> Mollie API integration versus manual payment links</h3>

      <span class="ch-label">The problem</span>
      <p>Originally the photographer sent invoices as PDFs and chased payment by hand: copy the IBAN, paste into a WhatsApp message with the invoice number as reference, wait, follow up, mark paid in the admin once the bank notification arrived. This was friction for both sides. The photographer was a part-time accountant; the client was navigating a foreign-bank IBAN flow without confirmation that the right reference was used.</p>

      <span class="ch-label">The solution</span>
      <p>Mollie integration via API. Invoices generated in the admin app now produce a hosted Mollie checkout URL automatically. The client clicks the URL in the invoice email, pays with iDEAL or card, and Mollie webhooks the admin app to flip the invoice status from <code>sent</code> to <code>paid</code> without anyone touching the dashboard. The Mollie payment description shows the actual line item, for example <em>"Photography services — Half Bloom · Invoice 2026-611-00004-001"</em>, so the customer's bank statement is recognisable rather than a cryptic accounting reference.</p>

      <span class="ch-label">Why it matters</span>
      <p>Two specific gains. First, time saved per invoice: roughly fifteen minutes of back-and-forth replaced by a single click for the client and zero clicks for the photographer. Second, faster cash-in: clients pay in the moment rather than letting an invoice sit in their inbox for a week, which directly improves cashflow. Overdue ratios dropped after the integration shipped.</p>
    </div>

    <h2>What's behind the scenes</h2>

    <p>A few things worth highlighting that aren't visible on the public surface but make the platform robust:</p>

    <ul class="detail-list">
      <li>
        <strong>Two-factor admin login.</strong>
        <p>Email-based step-up codes, session idle timeout, and a 30-day re-verification cycle. The admin app is a strict whitelist of two emails.</p>
      </li>
      <li>
        <strong>Tokenised click-to-accept contracts.</strong>
        <p>Each contract records the signed timestamp, IP, and user-agent for legal validity, replacing third-party DocuSign overhead.</p>
      </li>
      <li>
        <strong>Invoice numbering.</strong>
        <p>A Dutch-format sequential pattern, <code>{year}-{package_code}-{client_code}-{invoice_seq}</code>, that's both human-readable and audit-friendly.</p>
      </li>
      <li>
        <strong>Image protection layer.</strong>
        <p>The public portfolio deters casual saving (right-click block, drag-prevention, copy-suppression) while remaining accessible to legitimate users and search engines.</p>
      </li>
      <li>
        <strong>Bilingual everything.</strong>
        <p>Every public page exists in EN and NL with proper hreflang tags, so each language is indexed separately by Google.</p>
      </li>
    </ul>

    <h2>What the photographer gets out of this</h2>

    <p>The split between public site and admin app means Leemar can manage everything from the dashboard and visitors only see the polished surface. New inquiries land in the calendar in real time. Contracts go out as tokenised links instead of email attachments. Invoices get paid faster through Mollie. Reviews are gated through approval before they go public.</p>

    <blockquote>
      I want to focus on the photography, not the admin.
      <cite>Original brief, Leemar H. Ritual</cite>
    </blockquote>

    <p>Most importantly, the system gets out of his way. The platform that's now running does about eighty percent of the operational work he used to do by hand.</p>

    <h2>What we'd take from this build</h2>

    <p>The big lesson is the value of splitting "what visitors see" from "how the business runs". Plenty of photographer sites try to be both: a portfolio with a back-office bolted on. That works until the back-office needs grow, at which point the public site starts feeling either over-engineered or hostile to edit. Treating them as two products that share data, but not chrome, kept both halves clean.</p>

    <p>The other one: pick the integrations that remove a recurring fifteen minutes from the week, not the ones that look impressive in a demo. Mollie was unglamorous to wire up, and it's the single biggest quality-of-life change in the build.</p>

    <div class="cta-box">
      <h3>Have a business that needs a clean public face and a serious back-office?</h3>
      <p>Engaging UX Design builds two-part platforms like this for service businesses across the Netherlands. A polished public portfolio for visitors, and a private admin app that handles the operational work: bookings, contracts, invoices, payments, reviews. Same stack, same care, scoped to your actual workflow.</p>
      <a class="cta-btn" href="https://quickestimate.engaginguxdesign.com/">Get a free estimate →</a>
    </div>

  </div>
</div>

<div class="art-nav">
  <a class="art-nav-link prev" href="/joey-de-laat-portfolio-case/">← Joey de Laat's executive portfolio</a>
</div>
</article>

<?php include __DIR__ . '/../includes/newsletter.php'; ?>
<?php include __DIR__ . '/../includes/footer.php'; ?>
<?php include __DIR__ . '/../includes/cookie-consent.php'; ?>

</body>
</html>
