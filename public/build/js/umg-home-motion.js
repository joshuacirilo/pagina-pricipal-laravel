(function () {
  if (!document.body.classList.contains("umg-home")) return;

  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
  var reveals = document.querySelectorAll(".umg-reveal");

  if (!reveals.length) return;

  function revealAll() {
    reveals.forEach(function (el) {
      el.classList.add("is-visible");
    });
  }

  function revealSection(section) {
    if (!section || section.dataset.umgRevealed === "1") return;
    section.dataset.umgRevealed = "1";

    section.querySelectorAll(".umg-reveal").forEach(function (el) {
      el.classList.add("is-visible");
    });

    if (section.classList.contains("umg-reveal")) {
      section.classList.add("is-visible");
    }
  }

  /* Con scroll-snap, secciones altas (p. ej. 6 cards) nunca llegan a ratio 0.55.
     Detectamos “pantalla activa” por posición del borde superior. */
  function isActiveScreen(entry) {
    if (!entry.isIntersecting) return false;

    var rect = entry.boundingClientRect;
    var vh = window.innerHeight || document.documentElement.clientHeight || 1;
    var visible = Math.min(rect.bottom, vh) - Math.max(rect.top, 0);

    if (visible < vh * 0.35) return false;

    /* Top cerca del viewport = ya hiciste snap a esta pantalla */
    return rect.top < vh * 0.4 && rect.bottom > vh * 0.35;
  }

  if (reduceMotion.matches || !("IntersectionObserver" in window)) {
    revealAll();
    return;
  }

  var sections = document.querySelectorAll(
    [
      ".umg-parallax-hero",
      ".umg-faculties",
      ".umg-sistemas-landing .hero-panel",
      ".umg-sistemas-landing .section",
    ].join(",")
  );

  if (!sections.length) {
    revealAll();
    return;
  }

  var io = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (!isActiveScreen(entry)) return;
        revealSection(entry.target);
        io.unobserve(entry.target);
      });
    },
    {
      threshold: [0, 0.1, 0.25, 0.4, 0.55, 0.7, 0.85, 1],
      rootMargin: "0px 0px 0px 0px",
    }
  );

  sections.forEach(function (section) {
    io.observe(section);
  });
})();
