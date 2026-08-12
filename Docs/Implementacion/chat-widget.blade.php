{{--
    Widget flotante del asistente virtual.
    Uso: inclúyelo una sola vez en tu layout principal, justo antes de </body>:

    <x-chat-widget />
--}}

<div id="chat-widget" class="chat-widget">
    {{-- Botón flotante que abre/cierra el chat --}}
    <button id="chat-widget-toggle" class="chat-widget__toggle" aria-label="Abrir asistente virtual">
        <svg class="chat-widget__icon-open" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C6.48 2 2 6.03 2 11c0 2.4 1.05 4.57 2.77 6.19L4 22l5.05-1.69C10 20.75 10.98 21 12 21c5.52 0 10-4.03 10-9s-4.48-10-10-10z" fill="currentColor"/>
        </svg>
        <svg class="chat-widget__icon-close" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
    </button>

    {{-- Panel del chat --}}
    <div id="chat-widget-panel" class="chat-widget__panel" role="dialog" aria-label="Asistente virtual de la universidad" hidden>
        <div class="chat-widget__header">
            <div>
                <strong>Asistente Virtual</strong>
                <span class="chat-widget__status">En línea</span>
            </div>
            <button id="chat-widget-close" class="chat-widget__close" aria-label="Cerrar chat">&times;</button>
        </div>

        <div id="chat-widget-messages" class="chat-widget__messages">
            <div class="chat-widget__message chat-widget__message--bot">
                Hola 👋 Soy el asistente virtual de la universidad. Puedo ayudarte con dudas sobre admisiones, becas, carreras y más. ¿En qué te ayudo?
            </div>
        </div>

        <form id="chat-widget-form" class="chat-widget__form">
            <input
                type="text"
                id="chat-widget-input"
                class="chat-widget__input"
                placeholder="Escribe tu pregunta..."
                maxlength="500"
                autocomplete="off"
                required
            >
            <button type="submit" class="chat-widget__send" aria-label="Enviar">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                </svg>
            </button>
        </form>
    </div>
</div>
