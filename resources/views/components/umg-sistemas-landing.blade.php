@php
    $countdownDeadline = config('services.countdown_deadline');
    $web3formsKey = config('services.web3forms.key');
@endphp

<div class="umg-sistemas-landing" id="sistemas-landing">
    <main class="page-shell">
        <header class="topbar">
            <a class="brand" href="#hero" aria-label="Universidad Mariano Gálvez sede Guastatoya">
                <img src="{{ asset('images/logo-umg.png') }}" alt="Logo oficial Universidad Mariano Gálvez de Guatemala" width="66" height="66" />
                <div>
                    <span>Universidad Mariano Gálvez</span>
                    <strong>Admisión abierta</strong>
                    <small>Sede Guastatoya</small>
                </div>
            </a>

            <nav aria-label="Secciones de admisión UMG Guastatoya">
                <a href="#valor">Por qué UMG</a>
                <a href="#futuro">Formación</a>
                <a href="#evento">Admisión</a>
                <a href="#contacto">Contacto</a>
            </nav>

            <a class="cta small" href="#contacto">Aplicar ahora</a>
        </header>

        <section id="hero" class="hero-panel hero-stage">
            <div class="hero-media">
                <img src="{{ asset('images/hero-umg.png') }}" alt="Comunidad académica Universidad Mariano Gálvez sede Guastatoya" />
            </div>

            <div class="hero-scrim"></div>

            <div class="hero-content">
                <div class="hero-copy umg-reveal umg-reveal--left">
                    <h1>Tu lugar en la UMG se define en estas horas.</h1>
                    <p>
                        En la Universidad Mariano Gálvez, sede Guastatoya, la admisión del segundo semestre ya está abierta.
                        Esta es tu <strong>ventana crítica</strong>: el momento de asegurar tu inscripción, elegir carrera
                        y empezar el ciclo con ventaja — antes de que el plazo se cierre.
                    </p>

                    <div class="hero-actions">
                        <a class="cta primary" href="#contacto">Asegurar mi inscripción</a>
                        <a class="cta secondary" href="#contacto">Hablar con admisiones</a>
                    </div>

                    <div class="hero-meta">
                        <div>
                            <strong>+Calidad</strong>
                            <span>Programas académicos actualizados y de alta calidad.</span>
                        </div>
                        <div>
                            <strong>+Docentes</strong>
                            <span>Profesores altamente capacitados y con experiencia profesional.</span>
                        </div>
                        <div>
                            <strong>+Valores</strong>
                            <span>Formación con excelencia académica, ética y valores cristianos.</span>
                        </div>
                    </div>
                </div>

                <aside class="hero-sidecard umg-reveal umg-reveal--right">
                    <div
                        class="countdown-card countdown-card--critical"
                        data-countdown
                        @if ($countdownDeadline) data-deadline="{{ $countdownDeadline }}" @endif
                    >
                        <span class="eyebrow">Ventana crítica</span>
                        <h2>Quedan horas para aplicar</h2>
                        <p>
                            Cuando el contador llegue a cero, esta ventana de admisión puede cerrarse.
                            Activá tu proceso hoy y asegurá tu lugar en la UMG Guastatoya.
                        </p>

                        <div class="timer-grid" aria-live="polite">
                            <div>
                                <strong data-days>02</strong>
                                <span>Días</span>
                            </div>
                            <div>
                                <strong data-hours>00</strong>
                                <span>Horas</span>
                            </div>
                            <div>
                                <strong data-minutes>00</strong>
                                <span>Min</span>
                            </div>
                            <div class="alert-box">
                                <strong data-seconds>00</strong>
                                <span>Seg</span>
                            </div>
                        </div>

                        <a class="cta primary countdown-card__cta" href="#contacto">Quiero aplicar en esta ventana</a>
                    </div>
                </aside>
            </div>
        </section>

        <section id="valor" class="section section-light">
            <div class="section-copy center umg-reveal">
                <span class="eyebrow dark">Por qué la UMG</span>
                <h2>¿Por qué estudiar en la Universidad Mariano Gálvez?</h2>
                <p>
                    Formar parte de la <strong>Universidad Mariano Gálvez</strong> significa acceder a una educación con excelencia académica, valores cristianos y una sólida formación profesional.
                    La UMG te da las herramientas para crecer con éxito — en lo laboral y en lo personal.
                </p>
            </div>

            <div class="value-grid umg-reveal-stagger">
                <article class="value-card umg-reveal umg-reveal--scale">
                    <span>01</span>
                    <h3>Calidad</h3>
                    <p>Programas académicos actualizados y de alta calidad.</p>
                </article>
                <article class="value-card umg-reveal umg-reveal--scale">
                    <span>02</span>
                    <h3>Docentes</h3>
                    <p>Profesores altamente capacitados y con experiencia profesional.</p>
                </article>
                <article class="value-card umg-reveal umg-reveal--scale">
                    <span>03</span>
                    <h3>Infraestructura</h3>
                    <p>Campus moderno y recursos tecnológicos para aprender con ventaja.</p>
                </article>
                <article class="value-card umg-reveal umg-reveal--scale">
                    <span>04</span>
                    <h3>Valores</h3>
                    <p>Formación basada en valores éticos, humanos y cristianos.</p>
                </article>
            </div>
        </section>

        <section id="futuro" class="section section-dark split-section">
            <div class="section-copy umg-reveal umg-reveal--left">
                <span class="eyebrow">Tu futuro en Guastatoya</span>
                <h2>Una formación que te prepara para crecer.</h2>
                <p>
                    En la UMG Guastatoya encontrás facultades activas, docentes de alto nivel y un entorno universitario real.
                    No es solo estudiar: es construir tu futuro con respaldo académico y oportunidades concretas de crecimiento profesional.
                </p>
            </div>

            <div class="stats-panel umg-reveal-stagger">
                <div class="stat-card feature umg-reveal umg-reveal--right">
                    <span class="eyebrow">Oportunidades</span>
                    <p>Amplias oportunidades de crecimiento profesional en distintas áreas del conocimiento.</p>
                </div>
                <div class="stat-card umg-reveal umg-reveal--right">
                    <span class="eyebrow">Comunidad</span>
                    <p>Presencia real en Guastatoya, vida universitaria activa y acompañamiento cercano.</p>
                </div>
                <div class="stat-card umg-reveal umg-reveal--right">
                    <span class="eyebrow">Admisión</span>
                    <p>La ventana del segundo semestre está abierta: este es el momento de inscribirte.</p>
                </div>
            </div>
        </section>

        <section id="evento" class="section section-image-callout">
            <div class="section-copy center narrow light-text umg-reveal umg-reveal--scale">
                <span class="eyebrow light">Admisión abierta</span>
                <h2>Tu lugar en la UMG Guastatoya se decide ahora.</h2>
                <p>
                    Excelencia académica, valores cristianos y formación profesional en una sede que te conoce por nombre.
                    No esperes al último día: asegurá tu inscripción mientras la ventana sigue activa.
                </p>
                <a class="cta primary section-callout__cta" href="#contacto">Quiero inscribirme hoy</a>
            </div>
        </section>

        <section id="contacto" class="section section-light contact-section">
            @php
                $contactoOld = old('contacto', '');
                $contactoTipoOld = old('contacto_tipo');
                $contactoCanales = ['email', 'whatsapp', 'celular'];
                $contactoCanal = in_array($contactoTipoOld, $contactoCanales, true)
                    ? $contactoTipoOld
                    : (str_contains($contactoOld, '@') ? 'email' : (strlen($contactoOld) > 0 ? 'whatsapp' : 'email'));
            @endphp

            <div class="contact-section__inner">
                <div class="section-copy center umg-reveal">
                    <h2>Pedí información o iniciá tu inscripción hoy.</h2>
                </div>

                <p
                    class="contact-status{{ session('status') ? '' : ' is-hidden' }}"
                    data-contact-status
                    role="status"
                    @if (! session('status')) hidden @endif
                >{{ session('status') }}</p>

                <form
                    class="contact-form contact-form--linear umg-reveal"
                    method="POST"
                    action="{{ route('contacto.store') }}"
                    novalidate
                    data-contact-form
                    @if ($web3formsKey !== '')
                        data-web3forms-key="{{ $web3formsKey }}"
                    @endif
                >
                    @csrf

                    <div class="honeypot" aria-hidden="true">
                        <label>
                            <span>Website</span>
                            <input type="text" name="website" tabindex="-1" autocomplete="off" />
                        </label>
                    </div>

                    <label class="contact-form__field">
                        <span>Nombre completo</span>
                        <input
                            type="text"
                            name="nombre"
                            value="{{ old('nombre') }}"
                            placeholder="Tu nombre y apellido"
                            required
                            maxlength="120"
                            aria-invalid="{{ $errors->has('nombre') ? 'true' : 'false' }}"
                        />
                        @error('nombre')
                            <p class="field-error">{{ $message }}</p>
                        @enderror
                    </label>

                    <fieldset class="contact-channel">
                        <legend>Medio de comunicación</legend>
                        <div class="contact-channel__toggle" role="radiogroup" aria-label="Medio de comunicación">
                            <label class="contact-channel__option">
                                <input
                                    type="radio"
                                    name="contacto_tipo"
                                    value="email"
                                    @checked($contactoCanal === 'email')
                                />
                                <span class="contact-channel__label">
                                    <svg class="contact-channel__icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16v16H4z"/><path d="m4 7 8 6 8-6"/></svg>
                                    Correo
                                </span>
                            </label>
                            <label class="contact-channel__option">
                                <input
                                    type="radio"
                                    name="contacto_tipo"
                                    value="whatsapp"
                                    @checked($contactoCanal === 'whatsapp')
                                />
                                <span class="contact-channel__label">
                                    <svg class="contact-channel__icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                                    WhatsApp
                                </span>
                            </label>
                            <label class="contact-channel__option">
                                <input
                                    type="radio"
                                    name="contacto_tipo"
                                    value="celular"
                                    @checked($contactoCanal === 'celular')
                                />
                                <span class="contact-channel__label">
                                    <svg class="contact-channel__icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="7" y="2" width="10" height="20" rx="2"/><path d="M11 18h2"/></svg>
                                    Celular
                                </span>
                            </label>
                        </div>
                    </fieldset>

                    <label class="contact-form__field contact-channel__field" data-channel-field="email" @if($contactoCanal !== 'email') hidden @endif>
                        <span>Correo electrónico</span>
                        <input
                            type="email"
                            value="{{ $contactoCanal === 'email' ? $contactoOld : '' }}"
                            placeholder="tu@correo.com"
                            maxlength="160"
                            autocomplete="email"
                            @if($contactoCanal === 'email') name="contacto" required @endif
                            aria-invalid="{{ $errors->has('contacto') ? 'true' : 'false' }}"
                        />
                    </label>

                    <label class="contact-form__field contact-channel__field" data-channel-field="whatsapp" @if($contactoCanal !== 'whatsapp') hidden @endif>
                        <span>Número de WhatsApp</span>
                        <input
                            type="tel"
                            value="{{ $contactoCanal === 'whatsapp' ? $contactoOld : '' }}"
                            placeholder="+502 0000 0000"
                            maxlength="160"
                            autocomplete="tel"
                            inputmode="tel"
                            @if($contactoCanal === 'whatsapp') name="contacto" required @endif
                            aria-invalid="{{ $errors->has('contacto') ? 'true' : 'false' }}"
                        />
                    </label>

                    <label class="contact-form__field contact-channel__field" data-channel-field="celular" @if($contactoCanal !== 'celular') hidden @endif>
                        <span>Número de celular</span>
                        <input
                            type="tel"
                            value="{{ $contactoCanal === 'celular' ? $contactoOld : '' }}"
                            placeholder="+502 0000 0000"
                            maxlength="160"
                            autocomplete="tel"
                            inputmode="tel"
                            @if($contactoCanal === 'celular') name="contacto" required @endif
                            aria-invalid="{{ $errors->has('contacto') ? 'true' : 'false' }}"
                        />
                    </label>

                    @error('contacto')
                        <p class="field-error contact-form__field-error">{{ $message }}</p>
                    @enderror

                    <label class="contact-form__field">
                        <span>Interés principal</span>
                        <select name="interes" required aria-invalid="{{ $errors->has('interes') ? 'true' : 'false' }}">
                            <option value="inscripcion" @selected(old('interes', 'inscripcion') === 'inscripcion')>
                                Inscribirme en la UMG Guastatoya
                            </option>
                            <option value="informacion" @selected(old('interes') === 'informacion')>
                                Solicitar información
                            </option>
                            <option value="evento" @selected(old('interes') === 'evento')>
                                Quiero que me contacten sobre admisión
                            </option>
                        </select>
                        @error('interes')
                            <p class="field-error">{{ $message }}</p>
                        @enderror
                    </label>

                    <button type="submit" class="cta primary contact-form__submit">
                        <span>Quiero que me contacten</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </button>
                </form>
            </div>
        </section>
    </main>
</div>
