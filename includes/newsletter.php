<!-- Newsletter Section -->
<div class="newsletter">
  <h2>Stay sharp on UX</h2>
  <p>New articles, project breakdowns, and research findings. No noise, no spam.</p>
  <form class="newsletter-form" id="newsletterForm" method="post">
    <input type="email" name="email" placeholder="your@email.com" required aria-label="Email address"/>
    <button type="submit">Subscribe</button>
  </form>
  <p class="newsletter-feedback" id="newsletterFeedback" style="display:none;"></p>
</div>
<script>
document.getElementById('newsletterForm').addEventListener('submit', async function(e) {
  e.preventDefault();
  const form = this;
  const btn = form.querySelector('button');
  const feedback = document.getElementById('newsletterFeedback');
  const email = form.querySelector('input[name="email"]').value.trim();

  btn.disabled = true;
  btn.textContent = 'Subscribing…';
  feedback.style.display = 'none';

  try {
    const res = await fetch('/subscribe.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ email })
    });
    const data = await res.json();

    feedback.style.display = 'block';
    if (res.ok) {
      feedback.textContent = data.message || 'You\'re subscribed!';
      feedback.style.color = '#4ade80';
      form.reset();
    } else {
      feedback.textContent = data.error || 'Something went wrong.';
      feedback.style.color = '#f87171';
    }
  } catch (err) {
    feedback.style.display = 'block';
    feedback.textContent = 'Network error. Please try again.';
    feedback.style.color = '#f87171';
  }

  btn.disabled = false;
  btn.textContent = 'Subscribe';
});
</script>
