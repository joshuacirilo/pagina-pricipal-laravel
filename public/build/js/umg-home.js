(function () {
  const hero = document.querySelector(".umg-parallax-hero");
  const media = hero && hero.querySelector(".umg-parallax-hero__media");
  if (!hero || !media) return;

  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
  let ticking = false;

  requestAnimationFrame(function () {
    hero.classList.add("is-ready");
  });

  function updateParallax() {
    ticking = false;
    if (reduceMotion.matches) {
      media.style.transform = "";
      return;
    }

    const rect = hero.getBoundingClientRect();
    if (rect.bottom < 0 || rect.top > window.innerHeight) return;

    const offset = Math.round(window.scrollY * 0.32);
    media.style.transform = "translate3d(0, " + offset + "px, 0)";
  }

  function onScroll() {
    if (ticking) return;
    ticking = true;
    window.requestAnimationFrame(updateParallax);
  }

  window.addEventListener("scroll", onScroll, { passive: true });
  if (typeof reduceMotion.addEventListener === "function") {
    reduceMotion.addEventListener("change", updateParallax);
  }
  updateParallax();
})();
