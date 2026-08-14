(() => {
  const form = document.querySelector('[data-contact-form]');
  if (!form) return;

  const radios = form.querySelectorAll('input[name="contacto_tipo"]');
  const channelFields = {
    email: form.querySelector('[data-channel-field="email"]'),
    whatsapp: form.querySelector('[data-channel-field="whatsapp"]'),
    celular: form.querySelector('[data-channel-field="celular"]'),
  };
  const channelInputs = {
    email: channelFields.email?.querySelector('input'),
    whatsapp: channelFields.whatsapp?.querySelector('input'),
    celular: channelFields.celular?.querySelector('input'),
  };
  const submitBtn = form.querySelector('button[type="submit"]');
  const submitLabel = submitBtn?.querySelector('span');
  const statusEl = document.querySelector('[data-contact-status]');

  const canalLabels = {
    email: 'Correo',
    whatsapp: 'WhatsApp',
    celular: 'Celular',
  };

  const interesLabels = {
    inscripcion: 'Inscribirme en la UMG Guastatoya',
    informacion: 'Solicitar información',
    evento: 'Quiero que me contacten sobre admisión',
  };

  const channelsReady = Object.values(channelFields).every(Boolean)
    && Object.values(channelInputs).every(Boolean);

  const setStatus = (message, isError = false) => {
    if (!statusEl) return;

    statusEl.textContent = message;
    statusEl.hidden = false;
    statusEl.classList.remove('is-hidden');
    statusEl.classList.toggle('contact-status--error', isError);
  };

  const activateChannel = (channel) => {
    if (!channelsReady) return;

    const active = canalLabels[channel] ? channel : 'email';

    Object.entries(channelFields).forEach(([key, field]) => {
      const input = channelInputs[key];
      const isActive = key === active;

      field.hidden = !isActive;
      input.toggleAttribute('required', isActive);

      if (isActive) {
        input.setAttribute('name', 'contacto');
      } else {
        input.removeAttribute('name');
      }
    });
  };

  if (radios.length && channelsReady) {
    radios.forEach((radio) => {
      radio.addEventListener('change', () => {
        if (radio.checked) {
          activateChannel(radio.value);
        }
      });
    });

    const checked = form.querySelector('input[name="contacto_tipo"]:checked');
    activateChannel(checked?.value || 'email');
  }

  const accessKey = (form.dataset.web3formsKey || '').trim();
  if (!accessKey || !submitBtn) return;

  form.addEventListener('submit', async (event) => {
    event.preventDefault();

    if (!form.reportValidity()) return;

    const formData = new FormData(form);
    formData.delete('_token');

    const nombre = String(formData.get('nombre') || '').trim();
    const canal = String(formData.get('contacto_tipo') || 'email');
    const contacto = String(formData.get('contacto') || '').trim();
    const interes = String(formData.get('interes') || '');
    const interesLabel = interesLabels[interes] || interes;
    const canalLabel = canalLabels[canal] || canal;

    formData.set('access_key', accessKey);
    formData.set('subject', `Contacto UMG Guastatoya — ${interesLabel}`);
    formData.set('from_name', 'Portal UMG Guastatoya');
    formData.set('name', nombre);

    if (canal === 'email') {
      formData.set('email', contacto);
    } else {
      formData.set('phone', contacto);
      formData.set('email', 'noreply@umg.edu.gt');
    }

    formData.set(
      'message',
      [
        `Nombre: ${nombre}`,
        `Medio: ${canalLabel}`,
        `Contacto: ${contacto}`,
        `Interés: ${interesLabel}`,
      ].join('\n')
    );

    const originalText = submitLabel?.textContent || 'Quiero que me contacten';
    submitBtn.disabled = true;
    if (submitLabel) submitLabel.textContent = 'Enviando…';

    try {
      const response = await fetch('https://api.web3forms.com/submit', {
        method: 'POST',
        body: formData,
      });

      const data = await response.json().catch(() => ({}));

      if (response.ok && data.success !== false) {
        setStatus('Recibimos tu solicitud. Te contactaremos pronto.');
        form.reset();
        activateChannel('email');
        const emailRadio = form.querySelector('input[name="contacto_tipo"][value="email"]');
        if (emailRadio) emailRadio.checked = true;
      } else {
        setStatus(data.message || 'No se pudo enviar. Intenta de nuevo.', true);
      }
    } catch {
      setStatus('Algo salió mal. Revisa tu conexión e intenta de nuevo.', true);
    } finally {
      submitBtn.disabled = false;
      if (submitLabel) submitLabel.textContent = originalText;
    }
  });
})();
