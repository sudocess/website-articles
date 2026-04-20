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
  <title>Research · Engaging UX Design</title>
  <meta name="description" content="Original research, surveys, and user studies by Engaging UX Design. Help shape better digital products by sharing your experience."/>
  <meta name="robots" content="index, follow"/>
  <meta name="author" content="Engaging UX Design"/>
  <link rel="canonical" href="https://articles.engaginguxdesign.com/research/"/>

  <!-- Open Graph -->
  <meta property="og:type" content="website"/>
  <meta property="og:title" content="Research · Engaging UX Design"/>
  <meta property="og:description" content="Original research, surveys, and user studies by Engaging UX Design. Help shape better digital products."/>
  <meta property="og:url" content="https://articles.engaginguxdesign.com/research/"/>
  <meta property="og:image" content="https://engaginguxdesign.com/image-assets/Logo-for-darkbg.png"/>
  <meta property="og:site_name" content="Engaging UX Design — Articles"/>
  <meta property="og:locale" content="en_GB"/>

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="Research · Engaging UX Design"/>
  <meta name="twitter:description" content="Original research, surveys, and user studies by Engaging UX Design. Help shape better digital products."/>
  <meta name="twitter:image" content="https://engaginguxdesign.com/image-assets/Logo-for-darkbg.png"/>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@400;600;700;800;900&family=Gabarito:wght@400;500;600;700&display=swap" rel="stylesheet"/>

  <link rel="stylesheet" href="/assets/css/style.css"/>
</head>
<body>

<?php include __DIR__ . '/../includes/back-banner.php'; ?>
<?php $navActive = 'research'; include __DIR__ . '/../includes/nav.php'; ?>

<!-- HERO -->
<div class="hero">
  <span class="hero-label">Research &amp; Surveys</span>
  <h1>Help shape what <em>gets built</em></h1>
  <p>Original research, active surveys, and user studies. Your responses directly influence the products and insights we create.</p>
</div>

<!-- ACTIVE SURVEYS -->
<div class="section">
  <div class="section-title">Active Surveys</div>

  <div class="showcase-grid">

    <!-- MyChildhoodBook Survey -->
    <div class="research-card">
      <div class="showcase-preview" style="background: linear-gradient(135deg, #1a0e08 0%, #3a2218 50%, #6b4030 100%);">
        <span class="live-badge pre-launch">Survey Open</span>
      </div>
      <div class="research-card-header">
        <span class="tag">Product Research · Parent Survey</span>
        <h3>MyChildhoodBook — Parent Experience Survey</h3>
        <p>MyChildhoodBook is a permanent digital archive where parents preserve memories, milestones, and wisdom for their children. The product is currently in pre-launch, and your responses will directly shape what gets built.</p>
      </div>
      <div class="research-card-body">
        <ul class="survey-details">
          <li>Takes approximately 8 minutes to complete</li>
          <li>Anonymous — no personal data collected beyond what you choose to share</li>
          <li>Open to parents, expecting parents, and anyone who cares about preserving childhood memories</li>
          <li>Available in English and Dutch</li>
          <li>Your answers directly influence product features and priorities</li>
        </ul>
        <a class="survey-cta" href="https://mychildhoodbook.com/en/survey/" target="_blank" rel="noopener noreferrer">Take the survey →</a>
      </div>
    </div>

  </div>
</div>

<!-- COMING SOON RESEARCH -->
<div class="section" style="padding-top:0">
  <div class="section-title">Coming Soon</div>

  <div class="showcase-grid">

    <div class="research-card">
      <div class="research-card-header">
        <span class="tag">Original Research</span>
        <h3>UX Benchmarks for Dutch SME Websites</h3>
        <p>Original research on user expectations, conversion patterns, and design quality across small business websites in the Netherlands. Results will be published as an open article on this site.</p>
      </div>
      <div class="research-card-body">
        <ul class="survey-details">
          <li>Benchmarking real Dutch SME websites against established UX standards</li>
          <li>Focus on conversion, mobile experience, and accessibility</li>
          <li>Findings will be shared publicly as a free resource</li>
        </ul>
      </div>
    </div>

  </div>

  <p class="coming-soon-banner">More research projects and surveys will appear here as they launch.</p>
</div>

<?php include __DIR__ . '/../includes/newsletter.php'; ?>
<?php include __DIR__ . '/../includes/footer.php'; ?>
<?php include __DIR__ . '/../includes/cookie-consent.php'; ?>

</body>
</html>
