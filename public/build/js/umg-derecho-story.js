/**
 * UMG Derecho — sticky stacked cards + ScrollTrigger scrub.
 * Expects globals: gsap, ScrollTrigger (vendor scripts).
 */
(function () {
  "use strict";

  var root = document.querySelector("[data-umg-derecho-story]");
  if (!root || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
  var desktopMq = window.matchMedia("(min-width: 992px)");
  var cards = Array.prototype.slice.call(root.querySelectorAll(".umg-derecho-story__card"));
  var navBtns = Array.prototype.slice.call(root.querySelectorAll("[data-story-nav]"));
  var triggers = [];
  var navBound = false;

  function headerOffset() {
    var raw = getComputedStyle(document.documentElement).getPropertyValue("--header-h").trim();
    var n = parseFloat(raw);
    return Number.isFinite(n) ? n : 72;
  }

  function setActiveNav(sceneId) {
    navBtns.forEach(function (btn) {
      var active = btn.getAttribute("data-story-nav") === sceneId;
      btn.classList.toggle("is-active", active);
      btn.setAttribute("aria-current", active ? "true" : "false");
    });
  }

  function bindNavOnce() {
    if (navBound) return;
    navBound = true;
    navBtns.forEach(function (btn) {
      btn.addEventListener("click", function () {
        var id = btn.getAttribute("data-story-nav");
        var target = root.querySelector('[data-scene="' + id + '"]');
        if (!target) return;
        var top = target.getBoundingClientRect().top + window.pageYOffset - headerOffset();
        window.scrollTo({ top: top, behavior: "smooth" });
      });
    });
  }

  function killAll() {
    triggers.forEach(function (t) {
      if (t && t.kill) t.kill();
    });
    triggers = [];
    ScrollTrigger.getAll().forEach(function (st) {
      if (st.trigger && root.contains(st.trigger)) {
        st.kill();
      }
    });
    cards.forEach(function (card) {
      var inner = card.querySelector(".umg-derecho-story__card-inner");
      var img = card.querySelector(".umg-derecho-story__img");
      var dim = card.querySelector("[data-story-dim]");
      var title = card.querySelector(".umg-derecho-story__title");
      var desc = card.querySelector(".umg-derecho-story__desc");
      var words = card.querySelectorAll(".umg-derecho-story__word");
      var paths = card.querySelectorAll(".umg-derecho-story__path");
      gsap.set([img, title, desc].filter(Boolean), { clearProps: "all" });
      if (inner) gsap.set(inner, { clearProps: "transform,opacity,filter" });
      if (dim) gsap.set(dim, { clearProps: "opacity,backgroundColor" });
      if (words.length) gsap.set(words, { clearProps: "all" });
      if (paths.length) gsap.set(paths, { clearProps: "all" });
    });
  }

  function revealStatic() {
    cards.forEach(function (card) {
      var words = card.querySelectorAll(".umg-derecho-story__word");
      var paths = card.querySelectorAll(".umg-derecho-story__path");
      gsap.set(words, { opacity: 1, y: 0 });
      gsap.set(paths, { opacity: 1, y: 0 });
      var img = card.querySelector(".umg-derecho-story__img");
      if (img) gsap.set(img, { scale: 1, y: 0 });
      var dim = card.querySelector("[data-story-dim]");
      if (dim) gsap.set(dim, { backgroundColor: "rgba(7, 26, 51, 0)" });
      var title = card.querySelector(".umg-derecho-story__title");
      var desc = card.querySelector(".umg-derecho-story__desc");
      if (title) gsap.set(title, { y: 0, opacity: 1 });
      if (desc) gsap.set(desc, { y: 0, opacity: 1 });
    });
  }

  function buildDesktop() {
    killAll();
    bindNavOnce();

    var sectionTrigger = ScrollTrigger.create({
      trigger: root,
      start: "top bottom",
      end: "bottom top",
      toggleClass: { targets: root, className: "is-inview" },
    });
    triggers.push(sectionTrigger);
    if (ScrollTrigger.isInViewport(root, 0.05)) {
      root.classList.add("is-inview");
    }

    cards.forEach(function (card, index) {
      var img = card.querySelector(".umg-derecho-story__img");
      var dim = card.querySelector("[data-story-dim]");
      var title = card.querySelector(".umg-derecho-story__title");
      var desc = card.querySelector(".umg-derecho-story__desc");
      var words = card.querySelectorAll(".umg-derecho-story__word");
      var paths = card.querySelectorAll(".umg-derecho-story__path");
      var sceneId = card.getAttribute("data-scene");
      var next = cards[index + 1];
      var isFirst = index === 0;

      /* Texto siempre legible: solo movimiento suave, sin opacity 0 */
      if (title) gsap.set(title, { y: isFirst ? 0 : 28, opacity: 1 });
      if (desc) gsap.set(desc, { y: isFirst ? 0 : 18, opacity: 1 });
      if (img) gsap.set(img, { scale: isFirst ? 1.04 : 1.08, y: isFirst ? 6 : 18 });
      if (dim) gsap.set(dim, { backgroundColor: "rgba(7, 26, 51, 0)" });
      if (words.length) gsap.set(words, { opacity: 0.35, y: 12 });
      if (paths.length) gsap.set(paths, { opacity: 0.4, y: 12 });

      var enterTl = gsap.timeline({
        scrollTrigger: {
          trigger: card,
          start: isFirst ? "top top" : "top 85%",
          end: isFirst ? "bottom top" : "top 30%",
          scrub: true,
        },
      });

      if (!isFirst) {
        if (title) enterTl.to(title, { y: 0, ease: "none" }, 0);
        if (desc) enterTl.to(desc, { y: 0, ease: "none" }, 0.1);
      }
      if (img) {
        enterTl.to(img, { scale: 1, y: -8, ease: "none" }, 0);
      }
      if (enterTl.scrollTrigger) triggers.push(enterTl.scrollTrigger);

      if (words.length) {
        var wordsTl = gsap.timeline({
          scrollTrigger: {
            trigger: card,
            start: "top 55%",
            end: "top 15%",
            scrub: true,
          },
        });
        words.forEach(function (word, i) {
          wordsTl.to(word, { opacity: 1, y: 0, ease: "none" }, i * 0.2);
        });
        if (wordsTl.scrollTrigger) triggers.push(wordsTl.scrollTrigger);
      }

      if (paths.length) {
        var pathsTl = gsap.timeline({
          scrollTrigger: {
            trigger: card,
            start: "top 50%",
            end: "top 10%",
            scrub: true,
          },
        });
        paths.forEach(function (path, i) {
          pathsTl.to(path, { opacity: 1, y: 0, ease: "none" }, i * 0.1);
        });
        if (pathsTl.scrollTrigger) triggers.push(pathsTl.scrollTrigger);
      }

      var activeTrigger = ScrollTrigger.create({
        trigger: card,
        start: "top " + (headerOffset() + 8) + "px",
        end: next ? "top " + (headerOffset() + 8) + "px" : "bottom bottom",
        endTrigger: next || card,
        onEnter: function () {
          setActiveNav(sceneId);
        },
        onEnterBack: function () {
          setActiveNav(sceneId);
        },
      });
      triggers.push(activeTrigger);

      /* Sin scale/opacity/filter en el card (causaba flash negro).
         Solo un velo suave sobre la foto mientras sube la siguiente. */
      if (next && dim) {
        var coverTl = gsap.timeline({
          scrollTrigger: {
            trigger: next,
            start: "top 90%",
            end: "top " + (headerOffset() + 4) + "px",
            scrub: true,
          },
        });
        coverTl.to(
          dim,
          {
            backgroundColor: "rgba(7, 26, 51, 0.28)",
            ease: "none",
          },
          0
        );
        if (coverTl.scrollTrigger) triggers.push(coverTl.scrollTrigger);
      }
    });

    if (cards[0]) setActiveNav(cards[0].getAttribute("data-scene"));
  }

  function buildMobileLite() {
    killAll();
    bindNavOnce();
    revealStatic();

    var sectionTrigger = ScrollTrigger.create({
      trigger: root,
      start: "top 60%",
      end: "bottom 40%",
      onEnter: function () {
        root.classList.add("is-inview");
      },
      onLeave: function () {
        root.classList.remove("is-inview");
      },
      onEnterBack: function () {
        root.classList.add("is-inview");
      },
      onLeaveBack: function () {
        root.classList.remove("is-inview");
      },
    });
    triggers.push(sectionTrigger);

    cards.forEach(function (card, index) {
      var sceneId = card.getAttribute("data-scene");
      if (index === 0) setActiveNav(sceneId);

      var t = ScrollTrigger.create({
        trigger: card,
        start: "top 55%",
        end: "bottom 45%",
        onEnter: function () {
          setActiveNav(sceneId);
        },
        onEnterBack: function () {
          setActiveNav(sceneId);
        },
      });
      triggers.push(t);
    });
  }

  function init() {
    if (reduceMotion.matches) {
      killAll();
      revealStatic();
      root.classList.add("is-inview");
      if (cards[0]) setActiveNav(cards[0].getAttribute("data-scene"));
      return;
    }

    if (desktopMq.matches) {
      buildDesktop();
    } else {
      buildMobileLite();
    }

    ScrollTrigger.refresh();
  }

  var resizeTimer;
  function onResize() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
      init();
    }, 180);
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }

  window.addEventListener("resize", onResize);
  if (desktopMq.addEventListener) {
    desktopMq.addEventListener("change", init);
  }
  if (reduceMotion.addEventListener) {
    reduceMotion.addEventListener("change", init);
  }
})();
