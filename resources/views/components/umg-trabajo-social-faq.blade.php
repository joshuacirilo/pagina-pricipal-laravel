<section
    class="umg-faculty-faq umg-trabajo-social-faq"
    id="umg-trabajo-social-faq"
    aria-labelledby="umg-trabajo-social-faq-title"
>
    <div class="umg-faculty-wrap umg-trabajo-social-faq__grid">
        <div class="umg-trabajo-social-faq__media umg-reveal">
            <figure class="umg-trabajo-social-faq__figure">
                <img
                    src="{{ URL::asset('images/trabajo-social/9e726ef6-37cb-435a-852c-ebb3ed380d4b.png') }}"
                    alt="Facultad de Trabajo Social UMG Guastatoya"
                    width="900"
                    height="1100"
                    loading="lazy"
                >
                <figcaption class="umg-trabajo-social-faq__badge">
                    <span class="umg-trabajo-social-faq__badge-mark" aria-hidden="true"></span>
                    <span>UMG Guastatoya</span>
                </figcaption>
            </figure>
        </div>

        <div class="umg-trabajo-social-faq__content umg-reveal">
            <p class="umg-trabajo-social-faq__eyebrow">Información útil</p>
            <h2 id="umg-trabajo-social-faq-title" class="umg-trabajo-social-faq__title">Preguntas frecuentes</h2>
            <p class="umg-trabajo-social-faq__lead">
                Todo lo esencial para decidir: formación, pensum, egreso e inscripción.
            </p>

            <div class="accordion umg-trabajo-social-faq__accordion" id="umgTrabajoSocialFaq">
                @php
                    $items = [
                        [
                            'q' => '¿Por qué elegirnos para tu educación?',
                            'a' => 'En la Facultad de Trabajo Social de la UMG formamos profesionales con sensibilidad social y capacidad de intervención real. Te prepararemos para transformar vidas y comunidades.',
                        ],
                        [
                            'q' => '¿Qué cursos contiene la carrera?',
                            'a' => 'Integra fundamentos filosóficos, históricos y sociales con metodologías de intervención individual, familiar, grupal y comunitaria; legislación social, gerencia social, proyectos, investigación e interculturalidad. Consulta el pensum en esta página o el Centro de Informaciones UMG Guastatoya.',
                        ],
                        [
                            'q' => '¿En qué me podré desempeñar?',
                            'a' => 'Podrás desempeñarte en la intervención directa con familias y comunidades, gestión de proyectos sociales, promoción y defensa de derechos humanos e investigación y docencia en el ámbito social.',
                        ],
                        [
                            'q' => '¿Qué documentos necesito para inscribirme? (recién graduado)',
                            'list' => [
                                'Constancia de Evaluación de Ubicación.',
                                'Completar Formulario de Nuevo Estudiante.',
                                'Original y fotocopia de DPI o pasaporte.',
                                'Certificación original de Básicos y Diversificado.',
                                'Fotostática de título de 5 x 7 pulgadas (sellado por Contraloría de Cuentas).',
                                'Dos fotografías recientes tamaño cédula.',
                                'Efectuar los pagos de inscripción correspondientes.',
                            ],
                        ],
                        [
                            'q' => '¿Qué necesito para traslado de otra universidad?',
                            'list' => [
                                'Certificación de matrícula.',
                                'Certificación de estudios (ambas de la universidad de procedencia).',
                                'Inversión (costos de preinscripción, inscripción, colegiaturas).',
                                'Costos de inscripción y colegiatura (sujetos a cambios).',
                            ],
                        ],
                    ];
                @endphp

                @foreach ($items as $i => $item)
                    @php
                        $n = $i + 1;
                        $hid = 'umgTrabajoSocialFaqH' . $n;
                        $cid = 'umgTrabajoSocialFaqC' . $n;
                        $open = $i === 0;
                    @endphp
                    <div class="accordion-item umg-trabajo-social-faq__item">
                        <h3 class="accordion-header" id="{{ $hid }}">
                            <button
                                class="accordion-button umg-trabajo-social-faq__btn{{ $open ? '' : ' collapsed' }}"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#{{ $cid }}"
                                aria-expanded="{{ $open ? 'true' : 'false' }}"
                                aria-controls="{{ $cid }}"
                            >
                                <span class="umg-trabajo-social-faq__num" aria-hidden="true">{{ str_pad((string) $n, 2, '0', STR_PAD_LEFT) }}</span>
                                <span class="umg-trabajo-social-faq__q">{{ $item['q'] }}</span>
                                <span class="umg-trabajo-social-faq__icon" aria-hidden="true">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                        <path class="umg-trabajo-social-faq__icon-h" d="M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                        <path class="umg-trabajo-social-faq__icon-v" d="M12 5v14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="{{ $cid }}"
                            class="accordion-collapse collapse{{ $open ? ' show' : '' }}"
                            aria-labelledby="{{ $hid }}"
                            data-bs-parent="#umgTrabajoSocialFaq"
                        >
                            <div class="accordion-body umg-trabajo-social-faq__body">
                                @if (!empty($item['list']))
                                    <ul class="umg-trabajo-social-faq__list">
                                        @foreach ($item['list'] as $li)
                                            <li>{{ $li }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>{{ $item['a'] }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="umg-trabajo-social-faq__cta">
                <p class="umg-trabajo-social-faq__cta-text">¿Aún tienes dudas? Te orientamos en admisión.</p>
                <a
                    class="umg-hero-btn umg-trabajo-social-faq__cta-btn"
                    href="https://umg.edu.gt/admisiones"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Ir a admisiones
                </a>
            </div>
        </div>
    </div>
</section>
