(() => {
  const countdownRoot = document.querySelector('.umg-sistemas-landing [data-countdown]');
  if (!countdownRoot) return;

  const deadlineAttr = countdownRoot.getAttribute('data-deadline');
  let target = Date.now() + 48 * 60 * 60 * 1000;

  if (deadlineAttr) {
    const parsed = Date.parse(deadlineAttr);
    if (!Number.isNaN(parsed)) {
      target = parsed;
    }
  }

  const parts = {
    days: countdownRoot.querySelector('[data-days]'),
    hours: countdownRoot.querySelector('[data-hours]'),
    minutes: countdownRoot.querySelector('[data-minutes]'),
    seconds: countdownRoot.querySelector('[data-seconds]'),
  };

  if (!parts.days || !parts.hours || !parts.minutes || !parts.seconds) return;

  const format = (value) => String(value).padStart(2, '0');

  const tick = () => {
    const diff = Math.max(0, target - Date.now());
    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((diff / (1000 * 60)) % 60);
    const seconds = Math.floor((diff / 1000) % 60);

    parts.days.textContent = format(days);
    parts.hours.textContent = format(hours);
    parts.minutes.textContent = format(minutes);
    parts.seconds.textContent = format(seconds);
  };

  tick();
  if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    countdownRoot.classList.add('is-ticking');
  }
  setInterval(tick, 1000);
})();
