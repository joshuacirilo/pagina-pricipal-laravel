<div id="chat-widget" class="chat-widget">
    <button
        id="chat-widget-toggle"
        class="chat-widget__toggle"
        type="button"
        aria-label="Abrir asistente virtual"
        aria-controls="chat-widget-panel"
        aria-expanded="false"
    >
        <svg class="chat-widget__icon-open" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M12 2C6.48 2 2 6.03 2 11c0 2.4 1.05 4.57 2.77 6.19L4 22l5.05-1.69C10 20.75 10.98 21 12 21c5.52 0 10-4.03 10-9S17.52 2 12 2Z" fill="currentColor"/>
        </svg>
        <svg class="chat-widget__icon-close" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="m18 6-12 12M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
    </button>

    <section id="chat-widget-panel" class="chat-widget__panel" role="dialog" aria-modal="false" aria-label="Asistente virtual de la universidad" hidden>
        <header class="chat-widget__header">
            <div>
                <strong>Asistente virtual</strong>
                <span class="chat-widget__status">En línea</span>
            </div>
            <button id="chat-widget-close" class="chat-widget__close" type="button" aria-label="Cerrar chat">&times;</button>
        </header>

        <div id="chat-widget-messages" class="chat-widget__messages" aria-live="polite">
            <div class="chat-widget__message chat-widget__message--bot">
                Hola, soy el asistente virtual de la universidad. Puedo ayudarte con admisiones, becas, carreras y más. ¿En qué te ayudo?
            </div>
        </div>

        <form id="chat-widget-form" class="chat-widget__form">
            <label class="chat-widget__sr-only" for="chat-widget-input">Escribe tu pregunta</label>
            <input id="chat-widget-input" class="chat-widget__input" type="text" placeholder="Escribe tu pregunta..." maxlength="500" autocomplete="off" required>
            <button class="chat-widget__send" type="submit" aria-label="Enviar pregunta">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="m22 2-11 11m11-11-7 20-4-9-9-4 20-7Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                </svg>
            </button>
        </form>
    </section>
</div>
