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
  <title>Project Showcases · Engaging UX Design</title>
  <meta name="description" content="Live projects designed and developed by Engaging UX Design. From personal brand websites to digital products — see the work in action."/>
  <meta name="robots" content="index, follow"/>
  <meta name="author" content="Engaging UX Design"/>
  <link rel="canonical" href="https://articles.engaginguxdesign.com/projects/"/>

  <!-- Open Graph -->
  <meta property="og:type" content="website"/>
  <meta property="og:title" content="Project Showcases · Engaging UX Design"/>
  <meta property="og:description" content="Live projects designed and developed by Engaging UX Design. See the work in action."/>
  <meta property="og:url" content="https://articles.engaginguxdesign.com/projects/"/>
  <meta property="og:image" content="https://engaginguxdesign.com/image-assets/Logo-for-darkbg.png"/>
  <meta property="og:site_name" content="Engaging UX Design — Articles"/>
  <meta property="og:locale" content="en_GB"/>

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="Project Showcases · Engaging UX Design"/>
  <meta name="twitter:description" content="Live projects designed and developed by Engaging UX Design. See the work in action."/>
  <meta name="twitter:image" content="https://engaginguxdesign.com/image-assets/Logo-for-darkbg.png"/>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@400;600;700;800;900&family=Gabarito:wght@400;500;600;700&display=swap" rel="stylesheet"/>

  <link rel="stylesheet" href="/assets/css/style.css"/>
</head>
<body>

<?php include __DIR__ . '/../includes/back-banner.php'; ?>
<?php $navActive = 'projects'; include __DIR__ . '/../includes/nav.php'; ?>

<!-- HERO -->
<div class="hero">
  <span class="hero-label">Project Showcases</span>
  <h1>Built, shipped, <em>live</em></h1>
  <p>Real projects designed and developed by Engaging UX Design. From personal brand websites to digital products — see the work in action.</p>
</div>

<!-- PROJECTS -->
<div class="section">
  <div class="section-title">Live Projects</div>

  <div class="showcase-grid">

    <!-- Joey de Laat -->
    <a class="showcase-card" href="https://joeydelaat.nl/" target="_blank" rel="noopener noreferrer">
      <div class="showcase-preview" style="background: linear-gradient(135deg, #0a0a12 0%, #1a1a2e 50%, #2a2a4a 100%);">
        <span class="live-badge live">Live</span>
      </div>
      <div class="showcase-body">
        <span class="tag">Personal Brand · Portfolio</span>
        <h3>joeydelaat.nl</h3>
        <p>Personal brand website for Joey de Laat — a Global Experience &amp; Insights Leader with 15+ years designing analytics capabilities and experience frameworks across global organisations. Clean, professional one-pager with consultation booking.</p>
        <div class="showcase-meta">
          <span class="meta-pill">UX Design</span>
          <span class="meta-pill">Development</span>
          <span class="meta-pill">Responsive</span>
          <span class="meta-pill">Personal Brand</span>
        </div>
      </div>
      <div class="showcase-footer">
        <span>Designed &amp; developed by Engaging UX Design</span>
        <span class="visit-link">Visit site →</span>
      </div>
    </a>

    <!-- MyChildhoodBook -->
    <a class="showcase-card" href="https://mychildhoodbook.com/en/" target="_blank" rel="noopener noreferrer">
      <div class="showcase-preview" style="background: linear-gradient(135deg, #1a0e08 0%, #3a2218 50%, #6b4030 100%);">
        <span class="live-badge pre-launch">Pre-Launch</span>
      </div>
      <div class="showcase-body">
        <span class="tag">Digital Product · Web App</span>
        <h3>mychildhoodbook.com</h3>
        <p>A permanent digital archive where parents preserve memories, milestones, and wisdom for their children. Currently in pre-launch with early access signups and a parent survey shaping the product.</p>
        <div class="showcase-meta">
          <span class="meta-pill">Product Design</span>
          <span class="meta-pill">Development</span>
          <span class="meta-pill">EN / NL</span>
          <span class="meta-pill">Pre-Launch</span>
        </div>
      </div>
      <div class="showcase-footer">
        <span>Developed by Engaging UX Design</span>
        <span class="visit-link">Visit site →</span>
      </div>
    </a>

  </div>

  <p class="coming-soon-banner">More projects coming soon. Every project here is a real, live product.</p>
</div>

<?php include __DIR__ . '/../includes/newsletter.php'; ?>
<?php include __DIR__ . '/../includes/footer.php'; ?>
<?php include __DIR__ . '/../includes/cookie-consent.php'; ?>

</body>
</html>
