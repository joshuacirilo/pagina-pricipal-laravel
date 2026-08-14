(function () {
  'use strict';

  var root = document.querySelector('[data-umg-auditoria-pensum]');
  if (!root) return;

  var cards = Array.prototype.slice.call(root.querySelectorAll('[data-pensum-card]'));
  var panels = Array.prototype.slice.call(root.querySelectorAll('[data-pensum-panel]'));
  var hint = root.querySelector('[data-pensum-hint]');
  if (!cards.length || !panels.length) return;

  var total = cards.length;
  var mid = Math.floor((total - 1) / 2);
  var active = 0;
  var interacted = false;

  function slotFor(index, activeIndex) {
    return (index - activeIndex + mid + total) % total;
  }

  function markInteracted() {
    if (interacted) return;
    interacted = true;
    root.classList.add('is-interacted');
    if (hint) {
      hint.setAttribute('data-hidden', 'true');
    }
  }

  function activate(index) {
    if (index < 0 || index >= total) return;
    active = index;

    cards.forEach(function (card, i) {
      var on = i === active;
      var slot = slotFor(i, active);
      card.classList.toggle('is-active', on);
      card.setAttribute('aria-selected', on ? 'true' : 'false');
      card.tabIndex = on ? 0 : -1;
      card.style.setProperty('--pensum-slot', String(slot));
      card.style.setProperty('--pensum-mid', String(mid));
      card.style.setProperty('--pensum-n', String(total));
    });

    panels.forEach(function (panel, i) {
      var on = i === active;
      panel.classList.toggle('is-active', on);
      if (on) {
        panel.removeAttribute('hidden');
      } else {
        panel.setAttribute('hidden', '');
      }
    });
  }

  function next() {
    activate((active + 1) % total);
  }

  cards.forEach(function (card) {
    card.addEventListener('click', function () {
      markInteracted();
      var index = Number(card.getAttribute('data-index'));
      if (index === active) {
        next();
      } else {
        activate(index);
      }
      cards[active].focus();
    });

    card.addEventListener('keydown', function (event) {
      var nextIndex = active;

      if (event.key === 'ArrowRight' || event.key === 'ArrowDown') {
        nextIndex = (active + 1) % total;
      } else if (event.key === 'ArrowLeft' || event.key === 'ArrowUp') {
        nextIndex = (active - 1 + total) % total;
      } else if (event.key === 'Home') {
        nextIndex = 0;
      } else if (event.key === 'End') {
        nextIndex = total - 1;
      } else {
        return;
      }

      event.preventDefault();
      markInteracted();
      activate(nextIndex);
      cards[active].focus();
    });
  });

  activate(0);
})();
