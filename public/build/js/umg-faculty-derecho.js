(function () {
  const root = document.querySelector(".umg-faculty--derecho");
  if (!root) return;

  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)");

  function reveal() {
    const nodes = root.querySelectorAll(".umg-reveal");
    if (!nodes.length) return;

    if (reduceMotion.matches || !("IntersectionObserver" in window)) {
      nodes.forEach(function (el) {
        el.classList.add("is-visible");
      });
      return;
    }

    const io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          entry.target.classList.add("is-visible");
          io.unobserve(entry.target);
        });
      },
      { threshold: 0.16, rootMargin: "0px 0px -8% 0px" }
    );

    nodes.forEach(function (el) {
      io.observe(el);
    });
  }

  function animateCount(el) {
    const target = parseInt(el.getAttribute("data-count"), 10);
    if (!Number.isFinite(target)) return;

    if (reduceMotion.matches) {
      el.textContent = String(target);
      return;
    }

    const duration = 1100;
    const start = performance.now();

    function frame(now) {
      const t = Math.min(1, (now - start) / duration);
      const eased = 1 - Math.pow(1 - t, 3);
      el.textContent = String(Math.round(target * eased));
      if (t < 1) requestAnimationFrame(frame);
    }

    requestAnimationFrame(frame);
  }

  function counters() {
    const nodes = root.querySelectorAll(".umg-count");
    if (!nodes.length) return;

    if (!("IntersectionObserver" in window)) {
      nodes.forEach(animateCount);
      return;
    }

    const io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          animateCount(entry.target);
          io.unobserve(entry.target);
        });
      },
      { threshold: 0.4 }
    );

    nodes.forEach(function (el) {
      io.observe(el);
    });
  }

  reveal();
  counters();
})();
