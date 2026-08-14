<section
    class="umg-faculty-faq umg-derecho-faq"
    id="umg-derecho-faq"
    aria-labelledby="umg-derecho-faq-title"
>
    <div class="umg-faculty-wrap umg-derecho-faq__grid">
        <div class="umg-derecho-faq__media umg-reveal">
            <figure class="umg-derecho-faq__figure">
                <img
                    src="{{ URL::asset('build/img/about/pabellonUMG.jpeg') }}"
                    alt="Campus UMG Guastatoya"
                    width="900"
                    height="1100"
                    loading="lazy"
                >
                <figcaption class="umg-derecho-faq__badge">
                    <span class="umg-derecho-faq__badge-mark" aria-hidden="true"></span>
                    <span>UMG Guastatoya</span>
                </figcaption>
            </figure>
        </div>

        <div class="umg-derecho-faq__content umg-reveal">
            <p class="umg-derecho-faq__eyebrow">Información útil</p>
            <h2 id="umg-derecho-faq-title" class="umg-derecho-faq__title">Preguntas frecuentes</h2>
            <p class="umg-derecho-faq__lead">
                Todo lo esencial para decidir: formación, pensum, egreso e inscripción.
            </p>

            <div class="accordion umg-derecho-faq__accordion" id="umgDerechoFaq">
                @php
                    $items = [
                        [
                            'q' => '¿Por qué elegirnos para tu educación?',
                            'a' => 'Porque ofrecemos una formación jurídica integral, con docentes especializados, enfoque práctico, valores éticos y un plan de estudios actualizado que prepara a los futuros profesionales para desempeñarse con excelencia en cualquier área del Derecho.',
                        ],
                        [
                            'q' => '¿Qué cursos contiene la carrera?',
                            'a' => 'La Licenciatura en Ciencias Jurídicas y Sociales, Abogacía y Notariado incluye cursos clave como: Derecho Civil, Derecho Penal, Derecho Constitucional, Derecho Mercantil, Derecho Laboral, Derecho Administrativo, Derecho Procesal, Derecho Notarial, Filosofía del Derecho, Metodología Jurídica, Sociología Jurídica, Argumentación Jurídica, entre otros. Consulta el Centro de Informaciones o la oficina del Centro UMG Guastatoya.',
                        ],
                        [
                            'q' => '¿En qué podrás desempeñarte como Licenciado en Derecho?',
                            'a' => 'Podrás trabajar como abogado litigante, asesor jurídico, notario (al completar los requisitos legales), analista legal, defensor público, fiscal, trabajador en juzgados, entidades públicas y privadas, empresas, organizaciones no gubernamentales y en áreas de resolución de conflictos y protección de derechos humanos.',
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
                        $hid = 'umgDerechoFaqH' . $n;
                        $cid = 'umgDerechoFaqC' . $n;
                        $open = $i === 0;
                    @endphp
                    <div class="accordion-item umg-derecho-faq__item">
                        <h3 class="accordion-header" id="{{ $hid }}">
                            <button
                                class="accordion-button umg-derecho-faq__btn{{ $open ? '' : ' collapsed' }}"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#{{ $cid }}"
                                aria-expanded="{{ $open ? 'true' : 'false' }}"
                                aria-controls="{{ $cid }}"
                            >
                                <span class="umg-derecho-faq__num" aria-hidden="true">{{ str_pad((string) $n, 2, '0', STR_PAD_LEFT) }}</span>
                                <span class="umg-derecho-faq__q">{{ $item['q'] }}</span>
                                <span class="umg-derecho-faq__icon" aria-hidden="true">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                        <path class="umg-derecho-faq__icon-h" d="M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                        <path class="umg-derecho-faq__icon-v" d="M12 5v14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="{{ $cid }}"
                            class="accordion-collapse collapse{{ $open ? ' show' : '' }}"
                            aria-labelledby="{{ $hid }}"
                            data-bs-parent="#umgDerechoFaq"
                        >
                            <div class="accordion-body umg-derecho-faq__body">
                                @if (!empty($item['list']))
                                    <ul class="umg-derecho-faq__list">
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

            <div class="umg-derecho-faq__cta">
                <p class="umg-derecho-faq__cta-text">¿Aún tienes dudas? Te orientamos en admisión.</p>
                <a
                    class="umg-hero-btn umg-derecho-faq__cta-btn"
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
