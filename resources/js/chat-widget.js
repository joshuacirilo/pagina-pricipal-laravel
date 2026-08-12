const endpoint = '/api/chat';

document.addEventListener('DOMContentLoaded', () => {
    const widget = document.getElementById('chat-widget');
    if (!widget) return;

    const toggle = document.getElementById('chat-widget-toggle');
    const close = document.getElementById('chat-widget-close');
    const panel = document.getElementById('chat-widget-panel');
    const form = document.getElementById('chat-widget-form');
    const input = document.getElementById('chat-widget-input');
    const messages = document.getElementById('chat-widget-messages');

    const setOpen = (open) => {
        panel.hidden = !open;
        widget.classList.toggle('chat-widget--open', open);
        toggle.setAttribute('aria-expanded', String(open));
        if (open) input.focus();
        else toggle.focus();
    };

    const appendMessage = (text, sender) => {
        const bubble = document.createElement('div');
        bubble.className = `chat-widget__message chat-widget__message--${sender}`;
        bubble.textContent = text;
        messages.append(bubble);
        messages.scrollTop = messages.scrollHeight;
        return bubble;
    };

    const appendTyping = () => {
        const bubble = document.createElement('div');
        bubble.className = 'chat-widget__message chat-widget__message--bot chat-widget__message--typing';
        bubble.innerHTML = '<span></span><span></span><span></span>';
        messages.append(bubble);
        messages.scrollTop = messages.scrollHeight;
        return bubble;
    };

    toggle.addEventListener('click', () => setOpen(panel.hidden));
    close.addEventListener('click', () => setOpen(false));
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !panel.hidden) setOpen(false);
    });

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        const question = input.value.trim();
        if (!question) return;

        appendMessage(question, 'user');
        input.value = '';
        input.disabled = true;
        const typing = appendTyping();

        try {
            const response = await fetch(endpoint, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', Accept: 'application/json' },
                body: JSON.stringify({ question }),
            });
            const data = await response.json();

            if (!response.ok) {
                appendMessage(typeof data.error === 'string' ? data.error : 'Ocurrió un error. Intenta de nuevo.', 'bot');
                return;
            }

            appendMessage(data.answer, 'bot');
        } catch (error) {
            console.error('Error en el asistente virtual:', error);
            appendMessage('No pude conectarme con el asistente. Intenta nuevamente en unos momentos.', 'bot');
        } finally {
            typing.remove();
            input.disabled = false;
            input.focus();
        }
    });
});
