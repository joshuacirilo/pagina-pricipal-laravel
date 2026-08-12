@php
    $countdownDeadline = config('services.countdown_deadline');
@endphp

<div class="umg-sistemas-landing" id="sistemas-landing">
    <main class="page-shell">
        <header class="topbar">
            <a class="brand" href="#hero" aria-label="UMG Ingeniería en Sistemas sede Guastatoya">
                <img src="{{ asset('images/logo-umg.png') }}" alt="Logo oficial Universidad Mariano Gálvez de Guatemala" width="66" height="66" />
                <div>
                    <span>Universidad Mariano Gálvez</span>
                    <strong>Ingeniería en Sistemas</strong>
                    <small>Sede Guastatoya</small>
                </div>
            </a>

            <nav aria-label="Secciones Ingeniería en Sistemas">
                <a href="#valor">Propuesta</a>
                <a href="#futuro">Salida laboral</a>
                <a href="#evento">Evento 2026</a>
                <a href="#contacto">Contacto</a>
            </nav>

            <a class="cta small" href="#contacto">Solicitar info</a>
        </header>

        <section id="hero" class="hero-panel hero-stage">
            <div class="hero-media">
                <img src="{{ asset('images/hero-umg.png') }}" alt="Comunidad académica de Ingeniería en Sistemas UMG Guastatoya" />
            </div>

            <div class="hero-scrim"></div>

            <div class="hero-content">
                <div class="hero-copy">
                    <span class="eyebrow">Admisión abierta · segundo semestre · sede guastatoya</span>
                    <h1>La carrera que crece con la era de la inteligencia artificial.</h1>
                    <p>
                        Estudiá Ingeniería en Sistemas en la UMG y preparate para un mundo donde el software,
                        los datos, la automatización y la IA están transformando la forma de trabajar, crear y emprender.
                    </p>

                    <div class="hero-actions">
                        <a class="cta primary" href="#contacto">Inscribirme ahora</a>
                        <a class="cta secondary" href="#contacto">Quiero más información</a>
                    </div>

                    <div class="hero-meta">
                        <div>
                            <strong>+Tecnología</strong>
                            <span>Una carrera conectada con el presente.</span>
                        </div>
                        <div>
                            <strong>+Oportunidad</strong>
                            <span>Ideal para jóvenes, trabajadores y quienes retoman estudios.</span>
                        </div>
                        <div>
                            <strong>+Comunidad</strong>
                            <span>Eventos, proyectos y presencia real en Guastatoya.</span>
                        </div>
                    </div>
                </div>

                <aside class="hero-sidecard">
                    <div
                        class="countdown-card"
                        data-countdown
                        @if ($countdownDeadline) data-deadline="{{ $countdownDeadline }}" @endif
                    >
                        <span class="eyebrow">Ventana crítica</span>
                        <h2>48 horas para aplicar</h2>
                        <p>Activá tu proceso para el segundo semestre y tu interés por el Evento Tecnológico 2026.</p>

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
                    </div>
                </aside>
            </div>
        </section>

        <section id="valor" class="section section-light">
            <div class="section-copy center">
                <span class="eyebrow dark">Propuesta de valor</span>
                <h2>Ingeniería en Sistemas ya no es una opción de nicho. Es una de las rutas con más crecimiento en la economía digital.</h2>
                <p>
                    Hoy las empresas buscan personas capaces de pensar en sistemas, construir soluciones, integrar inteligencia artificial y adaptarse a cambios tecnológicos constantes.
                </p>
            </div>

            <div class="value-grid">
                <article class="value-card">
                    <span>01</span>
                    <h3>Demanda real</h3>
                    <p>Más sectores dependen de software, infraestructura, datos y automatización.</p>
                </article>
                <article class="value-card">
                    <span>02</span>
                    <h3>Ingeniería + IA</h3>
                    <p>No se trata solo de usar herramientas: se trata de entender cómo diseñarlas e integrarlas.</p>
                </article>
                <article class="value-card">
                    <span>03</span>
                    <h3>Flexibilidad</h3>
                    <p>Una carrera atractiva para graduados recientes, estudiantes en pausa o personas que trabajan.</p>
                </article>
                <article class="value-card">
                    <span>04</span>
                    <h3>Proyección</h3>
                    <p>Te prepara para crecer profesionalmente en una industria que no deja de expandirse.</p>
                </article>
            </div>
        </section>

        <section id="futuro" class="section section-dark split-section">
            <div class="section-copy">
                <span class="eyebrow">Salida laboral y tecnología</span>
                <h2>Una apuesta inteligente para el presente y para lo que viene.</h2>
                <p>
                    Ingeniería en Sistemas te abre puertas en desarrollo web, análisis de sistemas, soporte TI, automatización, datos y transformación digital. En la era de la IA, quien entiende tecnología tiene más capacidad para liderar, innovar y construir oportunidades.
                </p>
            </div>

            <div class="stats-panel">
                <div class="stat-card feature">
                    <span class="eyebrow">Habilidades</span>
                    <p>Programación, lógica, innovación, arquitectura de soluciones, visión digital.</p>
                </div>
                <div class="stat-card">
                    <span class="eyebrow">Oportunidades</span>
                    <p>Software, datos, soporte TI, análisis, automatización y crecimiento profesional.</p>
                </div>
                <div class="stat-card">
                    <span class="eyebrow">Comunidad</span>
                    <p>Formación con entorno activo, proyectos y una cultura tecnológica visible.</p>
                </div>
            </div>
        </section>

        <section id="evento" class="section section-image-callout">
            <div class="section-copy center narrow light-text">
                <span class="eyebrow light">Próximamente</span>
                <h2>Evento Tecnológico 2026 · UMG Ingeniería en Sistemas · Sede Guastatoya</h2>
                <p>
                    Un espacio para conectar con innovación, proyectos, networking y cultura tecnológica. No solo querés estudiar una carrera: querés entrar a una comunidad que se mueve.
                </p>
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
                            Inscribirme en Ingeniería en Sistemas
                        </option>
                        <option value="informacion" @selected(old('interes') === 'informacion')>
                            Solicitar información
                        </option>
                        <option value="evento" @selected(old('interes') === 'evento')>
                            Recibir noticias del Evento Tecnológico 2026
                        </option>
                    </select>
                    @error('interes')
                        <p class="field-error">{{ $message }}</p>
                    @enderror
                </label>

                <button type="submit" class="cta primary">Quiero que me contacten</button>
            </form>
        </section>

        <footer class="footer-bar">
            <span>UMG Ingeniería en Sistemas // Guastatoya</span>
            <span>Status: admisión activa</span>
        </footer>
    </main>
</div>
