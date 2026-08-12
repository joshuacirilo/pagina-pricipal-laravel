@php
    $countdownDeadline = config('services.countdown_deadline');
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
                <div class="hero-copy">
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

                <aside class="hero-sidecard">
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
            <div class="section-copy center">
                <span class="eyebrow dark">Por qué la UMG</span>
                <h2>¿Por qué estudiar en la Universidad Mariano Gálvez?</h2>
                <p>
                    Formar parte de la <strong>Universidad Mariano Gálvez</strong> significa acceder a una educación con excelencia académica, valores cristianos y una sólida formación profesional.
                    La UMG te da las herramientas para crecer con éxito — en lo laboral y en lo personal.
                </p>
            </div>

            <div class="value-grid">
                <article class="value-card">
                    <span>01</span>
                    <h3>Calidad</h3>
                    <p>Programas académicos actualizados y de alta calidad.</p>
                </article>
                <article class="value-card">
                    <span>02</span>
                    <h3>Docentes</h3>
                    <p>Profesores altamente capacitados y con experiencia profesional.</p>
                </article>
                <article class="value-card">
                    <span>03</span>
                    <h3>Infraestructura</h3>
                    <p>Campus moderno y recursos tecnológicos para aprender con ventaja.</p>
                </article>
                <article class="value-card">
                    <span>04</span>
                    <h3>Valores</h3>
                    <p>Formación basada en valores éticos, humanos y cristianos.</p>
                </article>
            </div>
        </section>

        <section id="futuro" class="section section-dark split-section">
            <div class="section-copy">
                <span class="eyebrow">Tu futuro en Guastatoya</span>
                <h2>Una formación que te prepara para crecer.</h2>
                <p>
                    En la UMG Guastatoya encontrás facultades activas, docentes de alto nivel y un entorno universitario real.
                    No es solo estudiar: es construir tu futuro con respaldo académico y oportunidades concretas de crecimiento profesional.
                </p>
            </div>

            <div class="stats-panel">
                <div class="stat-card feature">
                    <span class="eyebrow">Oportunidades</span>
                    <p>Amplias oportunidades de crecimiento profesional en distintas áreas del conocimiento.</p>
                </div>
                <div class="stat-card">
                    <span class="eyebrow">Comunidad</span>
                    <p>Presencia real en Guastatoya, vida universitaria activa y acompañamiento cercano.</p>
                </div>
                <div class="stat-card">
                    <span class="eyebrow">Admisión</span>
                    <p>La ventana del segundo semestre está abierta: este es el momento de inscribirte.</p>
                </div>
            </div>
        </section>

        <section id="evento" class="section section-image-callout">
            <div class="section-copy center narrow light-text">
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
            <div class="section-copy center">
                <span class="eyebrow dark">Inscripción e información</span>
                <h2>Pedí información o iniciá tu inscripción hoy.</h2>
            </div>

            @if (session('status'))
                <p class="contact-status" role="status">{{ session('status') }}</p>
            @endif

            <form class="contact-form" method="POST" action="{{ route('contacto.store') }}" novalidate>
                @csrf

                <div class="honeypot" aria-hidden="true">
                    <label>
                        <span>Website</span>
                        <input type="text" name="website" tabindex="-1" autocomplete="off" />
                    </label>
                </div>

                <label>
                    <span>Nombre completo</span>
                    <input
                        type="text"
                        name="nombre"
                        value="{{ old('nombre') }}"
                        placeholder="Tu nombre"
                        required
                        maxlength="120"
                        aria-invalid="{{ $errors->has('nombre') ? 'true' : 'false' }}"
                    />
                    @error('nombre')
                        <p class="field-error">{{ $message }}</p>
                    @enderror
                </label>

                <label>
                    <span>Correo o WhatsApp</span>
                    <input
                        type="text"
                        name="contacto"
                        value="{{ old('contacto') }}"
                        placeholder="Cómo te contactamos"
                        required
                        maxlength="160"
                        aria-invalid="{{ $errors->has('contacto') ? 'true' : 'false' }}"
                    />
                    @error('contacto')
                        <p class="field-error">{{ $message }}</p>
                    @enderror
                </label>

                <label>
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

                <button type="submit" class="cta primary">Quiero que me contacten</button>
            </form>
        </section>
    </main>
</div>
