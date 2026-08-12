@props([
    'title' => '¡Hola! Soy tu asistente UMG 👋',
    'intro' => 'Estoy aquí para ayudarte. Puedes contactarnos en:',
    'address' => 'Barrio El Porvenir, Guastatoya, El Progreso',
    'phone' => '2411-1800',
    'phoneHref' => 'tel:+50224111800',
    'email' => 'info@umg.edu.gt',
    'ctaUrl' => 'https://umg.edu.gt/admisiones',
    'ctaLabel' => 'REGÍSTRATE',
    'ctaSub' => 'en nuestra página web',
    'tip' => '¿Necesitas ayuda? Estoy aquí para asesorarte.',
    'image' => 'images/mascota-digital.png',
])

<aside
    class="umg-assistant"
    data-umg-assistant
    aria-label="Asistente de contacto UMG"
>
    <div
        class="umg-assistant__tip"
        data-umg-assistant-tip
        role="status"
        aria-live="polite"
        hidden
    >
        <p>{{ $tip }}</p>
        <button
            type="button"
            class="umg-assistant__tip-dismiss"
            data-umg-assistant-tip-dismiss
            aria-label="Cerrar mensaje de ayuda"
        >
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
    </div>

    <div
        class="umg-assistant__panel"
        id="umg-assistant-panel"
        data-umg-assistant-panel
        role="dialog"
        aria-modal="true"
        aria-labelledby="umg-assistant-title"
        hidden
    >
        <div class="umg-assistant__panel-header">
            <p class="umg-assistant__panel-brand">Asistente UMG</p>
            <button
                type="button"
                class="umg-assistant__close"
                data-umg-assistant-close
                aria-label="Cerrar asistente"
            >
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
        </div>

        <div class="umg-assistant__panel-body">
            <div class="umg-assistant__mascot-preview" aria-hidden="true">
                @if ($image)
                    <img
                        class="umg-assistant__mascot-img"
                        src="{{ URL::asset($image) }}"
                        alt=""
                        width="120"
                        height="120"
                        decoding="async"
                    >
                @else
                    @include('components.partials.umg-assistant-robot-svg', ['variant' => 'panel'])
                @endif
            </div>

            <h2 id="umg-assistant-title" class="umg-assistant__title">{{ $title }}</h2>
            <p class="umg-assistant__intro">{{ $intro }}</p>

            <ul class="umg-assistant__contacts">
                <li>
                    <span class="umg-assistant__icon" aria-hidden="true">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                            <path d="M12 21s7-5.4 7-11a7 7 0 1 0-14 0c0 5.6 7 11 7 11z" stroke="currentColor" stroke-width="1.8"/>
                            <circle cx="12" cy="10" r="2.4" stroke="currentColor" stroke-width="1.8"/>
                        </svg>
                    </span>
                    <span>{{ $address }}</span>
                </li>
                <li>
                    <span class="umg-assistant__icon" aria-hidden="true">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                            <path d="M6.5 4.5h3l1.5 4-2 1.5a12 12 0 0 0 5 5l1.5-2 4 1.5v3a2 2 0 0 1-2.2 2A15.5 15.5 0 0 1 4.5 6.7 2 2 0 0 1 6.5 4.5z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <a href="{{ $phoneHref }}">{{ $phone }}</a>
                </li>
                <li>
                    <span class="umg-assistant__icon" aria-hidden="true">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                            <rect x="3.5" y="5.5" width="17" height="13" rx="2" stroke="currentColor" stroke-width="1.8"/>
                            <path d="m4.5 7.5 7.5 6 7.5-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <a href="mailto:{{ $email }}">{{ $email }}</a>
                </li>
            </ul>

            <a
                class="umg-assistant__cta"
                href="{{ $ctaUrl }}"
                target="_blank"
                rel="noopener noreferrer"
            >
                <span class="umg-assistant__cta-label">{{ $ctaLabel }}</span>
                @if ($ctaSub)
                    <span class="umg-assistant__cta-sub">{{ $ctaSub }}</span>
                @endif
            </a>
        </div>
    </div>

    <button
        type="button"
        class="umg-assistant__fab"
        data-umg-assistant-fab
        aria-expanded="false"
        aria-controls="umg-assistant-panel"
        aria-label="Abrir asistente UMG"
    >
        <span class="umg-assistant__fab-glow" aria-hidden="true"></span>
        <span class="umg-assistant__fab-face" aria-hidden="true">
            @if ($image)
                <img
                    class="umg-assistant__mascot-img"
                    src="{{ URL::asset($image) }}"
                    alt=""
                    width="72"
                    height="72"
                    decoding="async"
                >
            @else
                @include('components.partials.umg-assistant-robot-svg', ['variant' => 'fab'])
            @endif
        </span>
        <span class="umg-assistant__status" aria-hidden="true"></span>
    </button>
</aside>
