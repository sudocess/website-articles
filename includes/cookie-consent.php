<!-- ============================================================
  Cookie Consent Banner (Articles Subdomain)
============================================================ -->
<style>
.cb-overlay {
  position: fixed; inset: 0; z-index: 99998;
  background: rgba(30,8,4,.55);
  backdrop-filter: blur(3px);
  opacity: 0; transition: opacity .3s ease;
  pointer-events: none;
}
.cb-overlay.cb-show { opacity: 1; pointer-events: auto; }

.cb-banner {
  position: fixed; bottom: 0; left: 0; right: 0; z-index: 99999;
  background: #2e1a0e;
  border-top: 3px solid #a0522d;
  padding: 28px 32px;
  transform: translateY(100%);
  transition: transform .4s cubic-bezier(.4,0,.2,1);
  font-family: 'Gabarito', sans-serif;
  color: #f5ede4;
}
.cb-banner.cb-show { transform: translateY(0); }

.cb-inner {
  max-width: 1200px; margin: 0 auto;
  display: flex; align-items: flex-start; gap: 32px;
  flex-wrap: wrap;
}
.cb-text { flex: 1 1 400px; min-width: 280px; }
.cb-text h3 {
  font-family: 'Alexandria', sans-serif;
  font-size: 18px; font-weight: 700;
  margin-bottom: 8px; color: #fff;
}
.cb-text p {
  font-size: 14px; line-height: 1.6;
  color: #d4c5b5; margin: 0;
}
.cb-text a {
  color: #e8a87c; text-decoration: underline;
  text-underline-offset: 2px;
}
.cb-text a:hover { color: #fff; }

.cb-actions {
  display: flex; gap: 12px; flex-wrap: wrap;
  align-items: center; flex-shrink: 0;
}
.cb-btn {
  font-family: 'Gabarito', sans-serif;
  font-size: 14px; font-weight: 600;
  padding: 11px 22px; border-radius: 8px;
  border: none; cursor: pointer;
  transition: background .2s, color .2s, box-shadow .2s;
  white-space: nowrap;
}
.cb-btn--accept { background: #b5441b; color: #fff; }
.cb-btn--accept:hover { background: #d4561f; box-shadow: 0 2px 12px rgba(181,68,27,.4); }
.cb-btn--reject { background: transparent; color: #d4c5b5; border: 1.5px solid #7a5c4a; }
.cb-btn--reject:hover { border-color: #d4c5b5; color: #fff; }
.cb-btn--prefs { background: transparent; color: #e8a87c; border: 1.5px solid #e8a87c; }
.cb-btn--prefs:hover { background: rgba(232,168,124,.1); color: #fff; border-color: #fff; }

.cb-prefs {
  display: none; margin-top: 20px;
  background: #3d1f10; border-radius: 10px;
  padding: 24px 28px;
}
.cb-prefs.cb-prefs-open { display: block; }
.cb-prefs h4 {
  font-family: 'Alexandria', sans-serif;
  font-size: 15px; font-weight: 600;
  color: #fff; margin-bottom: 16px;
}
.cb-cat {
  display: flex; justify-content: space-between;
  align-items: center; padding: 12px 0;
  border-bottom: 1px solid rgba(255,255,255,.08);
}
.cb-cat:last-child { border-bottom: none; }
.cb-cat-info { flex: 1; }
.cb-cat-name { font-size: 14px; font-weight: 600; color: #f5ede4; }
.cb-cat-desc { font-size: 13px; color: #b8a898; margin-top: 2px; }
.cb-cat-always { font-size: 12px; color: #8a7a6a; font-style: italic; }
.cb-toggle { position: relative; width: 44px; height: 24px; flex-shrink: 0; margin-left: 16px; }
.cb-toggle input { opacity: 0; width: 0; height: 0; }
.cb-toggle-slider {
  position: absolute; inset: 0; cursor: pointer;
  background: #5a3a2a; border-radius: 24px;
  transition: background .25s;
}
.cb-toggle-slider::before {
  content: ''; position: absolute;
  width: 18px; height: 18px; left: 3px; top: 3px;
  background: #d4c5b5; border-radius: 50%;
  transition: transform .25s;
}
.cb-toggle input:checked + .cb-toggle-slider { background: #b5441b; }
.cb-toggle input:checked + .cb-toggle-slider::before { transform: translateX(20px); background: #fff; }
.cb-prefs-save { margin-top: 16px; text-align: right; }

@media (max-width: 600px) {
  .cb-banner { padding: 20px 18px; }
  .cb-inner { flex-direction: column; gap: 18px; }
  .cb-actions { width: 100%; justify-content: stretch; }
  .cb-btn { flex: 1; text-align: center; padding: 12px 14px; }
  .cb-prefs { padding: 18px 16px; }
}
</style>

<div class="cb-overlay" id="cbOverlay"></div>

<div class="cb-banner" id="cbBanner" role="dialog" aria-label="Cookie consent" aria-modal="false">
  <div class="cb-inner">
    <div class="cb-text">
      <h3>🍪 We respect your privacy</h3>
      <p>We use cookies to improve your experience and analyse our website. Strictly necessary cookies are always active. You choose whether to allow functional and analytical cookies. <a href="https://engaginguxdesign.com/cookies-policy/">Read our cookie policy</a></p>

      <div class="cb-prefs" id="cbPrefs">
        <h4>Manage cookie preferences</h4>

        <div class="cb-cat">
          <div class="cb-cat-info">
            <div class="cb-cat-name">Strictly necessary</div>
            <div class="cb-cat-desc">Session, security, and consent storage</div>
            <div class="cb-cat-always">Always active</div>
          </div>
        </div>

        <div class="cb-cat">
          <div class="cb-cat-info">
            <div class="cb-cat-name">Functional</div>
            <div class="cb-cat-desc">Language preference and interface settings</div>
          </div>
          <label class="cb-toggle">
            <input type="checkbox" id="cbFunctional" checked>
            <span class="cb-toggle-slider"></span>
          </label>
        </div>

        <div class="cb-cat">
          <div class="cb-cat-info">
            <div class="cb-cat-name">Analytical</div>
            <div class="cb-cat-desc">Anonymous visitor statistics (privacy-friendly)</div>
          </div>
          <label class="cb-toggle">
            <input type="checkbox" id="cbAnalytics">
            <span class="cb-toggle-slider"></span>
          </label>
        </div>

        <div class="cb-prefs-save">
          <button class="cb-btn cb-btn--accept" id="cbSavePrefs">Save preferences</button>
        </div>
      </div>
    </div>

    <div class="cb-actions" id="cbMainActions">
      <button class="cb-btn cb-btn--accept" id="cbAcceptAll">Accept all</button>
      <button class="cb-btn cb-btn--prefs" id="cbManage">Manage preferences</button>
      <button class="cb-btn cb-btn--reject" id="cbRejectAll">Reject non-essential</button>
    </div>
  </div>
</div>

<script>
(function() {
  var COOKIE_NAME = 'cookie_consent';
  var COOKIE_DAYS = 365;

  var banner  = document.getElementById('cbBanner');
  var overlay = document.getElementById('cbOverlay');
  var prefs   = document.getElementById('cbPrefs');
  var actions = document.getElementById('cbMainActions');

  function setCookie(name, value, days) {
    var d = new Date();
    d.setTime(d.getTime() + days * 86400000);
    document.cookie = name + '=' + encodeURIComponent(value) +
      ';expires=' + d.toUTCString() +
      ';path=/;SameSite=Lax;Secure';
  }

  function getCookie(name) {
    var v = document.cookie.match('(^|;)\\s*' + name + '=([^;]*)');
    return v ? decodeURIComponent(v[2]) : null;
  }

  function saveConsent(functional, analytics) {
    var consent = JSON.stringify({
      necessary: true,
      functional: !!functional,
      analytics: !!analytics,
      timestamp: new Date().toISOString()
    });
    setCookie(COOKIE_NAME, consent, COOKIE_DAYS);
    hideBanner();
    applyConsent(functional, analytics);
  }

  function applyConsent(functional, analytics) {
    window.dispatchEvent(new CustomEvent('cookieConsent', {
      detail: { functional: !!functional, analytics: !!analytics }
    }));
    if (typeof gtag === 'function') {
      gtag('consent', 'update', {
        'analytics_storage': analytics ? 'granted' : 'denied',
        'ad_storage': 'denied',
        'ad_user_data': 'denied',
        'ad_personalization': 'denied'
      });
    }
  }

  function showBanner() {
    banner.classList.add('cb-show');
    overlay.classList.add('cb-show');
  }

  function hideBanner() {
    banner.classList.remove('cb-show');
    overlay.classList.remove('cb-show');
    prefs.classList.remove('cb-prefs-open');
  }

  var existing = getCookie(COOKIE_NAME);
  if (existing) {
    try {
      var c = JSON.parse(existing);
      applyConsent(c.functional, c.analytics);
    } catch(e) { showBanner(); }
  } else {
    showBanner();
  }

  document.getElementById('cbAcceptAll').addEventListener('click', function() {
    saveConsent(true, true);
  });

  document.getElementById('cbRejectAll').addEventListener('click', function() {
    saveConsent(false, false);
  });

  document.getElementById('cbManage').addEventListener('click', function() {
    prefs.classList.toggle('cb-prefs-open');
    actions.style.display = prefs.classList.contains('cb-prefs-open') ? 'none' : '';
  });

  document.getElementById('cbSavePrefs').addEventListener('click', function() {
    var fn = document.getElementById('cbFunctional').checked;
    var an = document.getElementById('cbAnalytics').checked;
    saveConsent(fn, an);
  });

  document.addEventListener('click', function(e) {
    if (e.target.closest('.cb-settings-link')) {
      e.preventDefault();
      var stored = getCookie(COOKIE_NAME);
      if (stored) {
        try {
          var c = JSON.parse(stored);
          document.getElementById('cbFunctional').checked = c.functional;
          document.getElementById('cbAnalytics').checked = c.analytics;
        } catch(e) {}
      }
      prefs.classList.add('cb-prefs-open');
      actions.style.display = 'none';
      showBanner();
    }
  });
})();
</script>
