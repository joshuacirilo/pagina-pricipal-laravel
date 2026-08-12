(() => {
  const form = document.querySelector('[data-contact-form]');
  if (!form) return;

  const radios = form.querySelectorAll('input[name="contacto_tipo"]');
  const emailField = form.querySelector('[data-channel-field="email"]');
  const whatsappField = form.querySelector('[data-channel-field="whatsapp"]');
  const emailInput = emailField?.querySelector('input');
  const whatsappInput = whatsappField?.querySelector('input');

  if (!radios.length || !emailField || !whatsappField || !emailInput || !whatsappInput) return;

  const activateChannel = (channel) => {
    const isEmail = channel === 'email';

    emailField.hidden = !isEmail;
    whatsappField.hidden = isEmail;

    emailInput.toggleAttribute('required', isEmail);
    whatsappInput.toggleAttribute('required', !isEmail);

    if (isEmail) {
      emailInput.setAttribute('name', 'contacto');
      whatsappInput.removeAttribute('name');
    } else {
      whatsappInput.setAttribute('name', 'contacto');
      emailInput.removeAttribute('name');
    }
  };

  radios.forEach((radio) => {
    radio.addEventListener('change', () => {
      if (radio.checked) {
        activateChannel(radio.value);
      }
    });
  });

  const checked = form.querySelector('input[name="contacto_tipo"]:checked');
  activateChannel(checked?.value || 'email');
})();
