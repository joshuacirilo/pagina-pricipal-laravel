/**
 * Lógica del widget de chat del asistente virtual.
 * Sin dependencias externas: fetch nativo + DOM API.
 */

const CHAT_ENDPOINT = '/api/chat';

document.addEventListener('DOMContentLoaded', () => {
    const widget = document.getElementById('chat-widget');
    if (!widget) return; // el componente no está presente en esta página

    const toggleBtn = document.getElementById('chat-widget-toggle');
    const closeBtn = document.getElementById('chat-widget-close');
    const panel = document.getElementById('chat-widget-panel');
    const form = document.getElementById('chat-widget-form');
    const input = document.getElementById('chat-widget-input');
    const messagesEl = document.getElementById('chat-widget-messages');

    const openPanel = () => {
        panel.hidden = false;
        widget.classList.add('chat-widget--open');
        input.focus();
    };

    const closePanel = () => {
        panel.hidden = true;
        widget.classList.remove('chat-widget--open');
    };

    toggleBtn.addEventListener('click', () => {
        widget.classList.contains('chat-widget--open') ? closePanel() : openPanel();
    });

    closeBtn.addEventListener('click', closePanel);

    function appendMessage(text, sender) {
        const bubble = document.createElement('div');
        bubble.className = `chat-widget__message chat-widget__message--${sender}`;
        bubble.textContent = text;
        messagesEl.appendChild(bubble);
        messagesEl.scrollTop = messagesEl.scrollHeight;
        return bubble;
    }

    function appendTypingIndicator() {
        const bubble = document.createElement('div');
        bubble.className = 'chat-widget__message chat-widget__message--bot chat-widget__message--typing';
        bubble.id = 'chat-widget-typing';
        bubble.innerHTML = '<span></span><span></span><span></span>';
        messagesEl.appendChild(bubble);
        messagesEl.scrollTop = messagesEl.scrollHeight;
    }

    function removeTypingIndicator() {
        document.getElementById('chat-widget-typing')?.remove();
    }

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const question = input.value.trim();
        if (!question) return;

        appendMessage(question, 'user');
        input.value = '';
        input.disabled = true;
        appendTypingIndicator();

        try {
            const response = await fetch(CHAT_ENDPOINT, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    // Necesario si el endpoint vive dentro del grupo 'web' con CSRF.
                    // Si lo pusiste en routes/api.php (sin sesión), puedes quitar esta línea.
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content ?? '',
                },
                body: JSON.stringify({ question }),
            });

            const data = await response.json();
            removeTypingIndicator();

            if (!response.ok) {
                appendMessage(data.error ?? 'Ocurrió un error. Intenta de nuevo.', 'bot');
                return;
            }

            appendMessage(data.answer, 'bot');
        } catch (error) {
            removeTypingIndicator();
            appendMessage('No pude conectarme con el asistente. Revisa tu conexión e intenta de nuevo.', 'bot');
            console.error('Error en chat-widget:', error);
        } finally {
            input.disabled = false;
            input.focus();
        }
    });
});
