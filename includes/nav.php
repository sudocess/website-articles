<!-- Site Navigation -->
<nav class="site-nav" role="navigation" aria-label="Main navigation">
  <a class="nav-brand" href="/">
    <span class="site-parent">engaginguxdesign.com /</span>
    <span class="site-name">articles <span>·</span></span>
  </a>

  <div class="nav-right">
    <ul class="nav-links" id="navLinks">
      <li><a href="/"<?php if (!isset($navActive) || $navActive === 'all') echo ' class="active"'; ?>>All</a></li>
      <li><a href="/?cat=ux-design"<?php if (isset($navActive) && $navActive === 'ux-design') echo ' class="active"'; ?>>UX Design</a></li>
      <li><a href="/projects/"<?php if (isset($navActive) && $navActive === 'projects') echo ' class="active"'; ?>>Projects</a></li>
      <li><a href="/research/"<?php if (isset($navActive) && $navActive === 'research') echo ' class="active"'; ?>>Research</a></li>
    </ul>

    <div class="nav-search" id="navSearchToggle">
      <span>🔍</span>
      <input type="text" id="searchInput" placeholder="Search articles" />
    </div>

    <div class="lang-switch">
      <a href="/" class="<?php echo (!isset($pageLang) || $pageLang === 'en') ? 'active' : ''; ?>">EN</a>
      <span class="sep">|</span>
      <a href="/nl/" class="<?php echo (isset($pageLang) && $pageLang === 'nl') ? 'active' : ''; ?>">NL</a>
    </div>
  </div>

  <button class="nav-hamburger" id="navHamburger" aria-label="Toggle menu" aria-expanded="false">
    <span></span>
    <span></span>
    <span></span>
  </button>
</nav>

<script>
(function() {
  var btn = document.getElementById('navHamburger');
  var links = document.getElementById('navLinks');
  if (btn && links) {
    btn.addEventListener('click', function() {
      var navRight = btn.previousElementSibling;
      while (navRight && !navRight.classList.contains('nav-right')) navRight = navRight.previousElementSibling;
      if (navRight) navRight.classList.toggle('open');
      btn.setAttribute('aria-expanded', navRight && navRight.classList.contains('open'));
    });
  }
})();
</script>
