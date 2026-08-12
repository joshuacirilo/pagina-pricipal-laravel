(function () {
  const root = document.querySelector("[data-umg-assistant]");
  if (!root) return;

  const fab = root.querySelector("[data-umg-assistant-fab]");
  const panel = root.querySelector("[data-umg-assistant-panel]");
  const closeBtn = root.querySelector("[data-umg-assistant-close]");
  const tip = root.querySelector("[data-umg-assistant-tip]");
  const tipDismiss = root.querySelector("[data-umg-assistant-tip-dismiss]");
  if (!fab || !panel || !closeBtn) return;

  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
  let tipTimer = null;
  let previouslyFocused = null;

  function isOpen() {
    return fab.getAttribute("aria-expanded") === "true";
  }

  function hideTip() {
    if (!tip) return;
    tip.hidden = true;
    if (tipTimer) {
      window.clearTimeout(tipTimer);
      tipTimer = null;
    }
  }

  function showTip() {
    if (!tip || isOpen()) return;
    tip.hidden = false;
  }

  function openPanel() {
    previouslyFocused = document.activeElement;
    hideTip();
    panel.hidden = false;
    fab.setAttribute("aria-expanded", "true");
    fab.setAttribute("aria-label", "Cerrar asistente UMG");
    document.body.classList.add("is-umg-assistant-open");
    closeBtn.focus();
  }

  function closePanel() {
    if (!isOpen()) return;
    panel.hidden = true;
    fab.setAttribute("aria-expanded", "false");
    fab.setAttribute("aria-label", "Abrir asistente UMG");
    document.body.classList.remove("is-umg-assistant-open");
    if (previouslyFocused && typeof previouslyFocused.focus === "function") {
      previouslyFocused.focus();
    } else {
      fab.focus();
    }
  }

  function togglePanel() {
    if (isOpen()) closePanel();
    else openPanel();
  }

  fab.addEventListener("click", function (event) {
    event.preventDefault();
    togglePanel();
  });

  closeBtn.addEventListener("click", function (event) {
    event.preventDefault();
    closePanel();
  });

  if (tipDismiss) {
    tipDismiss.addEventListener("click", function (event) {
      event.preventDefault();
      hideTip();
    });
  }

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" && isOpen()) {
      event.preventDefault();
      closePanel();
    }
  });

  document.addEventListener("click", function (event) {
    if (!isOpen()) return;
    if (root.contains(event.target)) return;
    closePanel();
  });

  const tipDelay = reduceMotion.matches ? 400 : 2500;
  tipTimer = window.setTimeout(showTip, tipDelay);
})();
