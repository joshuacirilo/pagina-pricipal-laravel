<section
    class="umg-faculty-faq umg-administracion-faq"
    id="umg-administracion-faq"
    aria-labelledby="umg-administracion-faq-title"
>
    <div class="umg-faculty-wrap umg-administracion-faq__grid">
        <div class="umg-administracion-faq__media umg-reveal">
            <figure class="umg-administracion-faq__figure">
                <img
                    src="{{ URL::asset('images/administracion/fb7a73b4-8292-4539-aff7-b9200dbada1b.png') }}"
                    alt="Facultad de Administración UMG Guastatoya"
                    width="900"
                    height="1100"
                    loading="lazy"
                >
                <figcaption class="umg-administracion-faq__badge">
                    <span class="umg-administracion-faq__badge-mark" aria-hidden="true"></span>
                    <span>UMG Guastatoya</span>
                </figcaption>
            </figure>
        </div>

        <div class="umg-administracion-faq__content umg-reveal">
            <p class="umg-administracion-faq__eyebrow">Información útil</p>
            <h2 id="umg-administracion-faq-title" class="umg-administracion-faq__title">Preguntas frecuentes</h2>
            <p class="umg-administracion-faq__lead">
                Todo lo esencial para decidir: formación, pensum, egreso e inscripción.
            </p>

            <div class="accordion umg-administracion-faq__accordion" id="umgAdministracionFaq">
                @php
                    $items = [
                        [
                            'q' => '¿Por qué elegirnos para tu educación?',
                            'a' => 'En la Universidad Mariano Gálvez te formamos como un profesional competitivo en Administración de Empresas, mediante un plan de estudios actualizado y con enfoque práctico. Nuestra formación te prepara para destacar en el ámbito financiero y empresarial.',
                        ],
                        [
                            'q' => '¿Qué cursos contiene la carrera?',
                            'a' => 'Incluye formación en dirección de empresas, contabilidad y finanzas, mercadeo y proyectos, economía y globalización, operaciones y logística, talento humano, análisis de decisiones y emprendimiento. Consulta el pensum en esta página, el Centro de Informaciones o la oficina del Centro UMG Guastatoya.',
                        ],
                        [
                            'q' => '¿En qué me podré desempeñar?',
                            'a' => 'Podrás desempeñarte en cargos directivos, administrativos, financieros, comerciales o incluso como empresario independiente, gracias a tu formación integral, ética y con visión global.',
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
                        $hid = 'umgAdministracionFaqH' . $n;
                        $cid = 'umgAdministracionFaqC' . $n;
                        $open = $i === 0;
                    @endphp
                    <div class="accordion-item umg-administracion-faq__item">
                        <h3 class="accordion-header" id="{{ $hid }}">
                            <button
                                class="accordion-button umg-administracion-faq__btn{{ $open ? '' : ' collapsed' }}"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#{{ $cid }}"
                                aria-expanded="{{ $open ? 'true' : 'false' }}"
                                aria-controls="{{ $cid }}"
                            >
                                <span class="umg-administracion-faq__num" aria-hidden="true">{{ str_pad((string) $n, 2, '0', STR_PAD_LEFT) }}</span>
                                <span class="umg-administracion-faq__q">{{ $item['q'] }}</span>
                                <span class="umg-administracion-faq__icon" aria-hidden="true">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                        <path class="umg-administracion-faq__icon-h" d="M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                        <path class="umg-administracion-faq__icon-v" d="M12 5v14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="{{ $cid }}"
                            class="accordion-collapse collapse{{ $open ? ' show' : '' }}"
                            aria-labelledby="{{ $hid }}"
                            data-bs-parent="#umgAdministracionFaq"
                        >
                            <div class="accordion-body umg-administracion-faq__body">
                                @if (!empty($item['list']))
                                    <ul class="umg-administracion-faq__list">
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

            <div class="umg-administracion-faq__cta">
                <p class="umg-administracion-faq__cta-text">¿Aún tienes dudas? Te orientamos en admisión.</p>
                <a
                    class="umg-hero-btn umg-administracion-faq__cta-btn"
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
