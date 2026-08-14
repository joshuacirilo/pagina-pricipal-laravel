<section
    class="umg-faculty-faq umg-criminologia-faq"
    id="umg-criminologia-faq"
    aria-labelledby="umg-criminologia-faq-title"
>
    <div class="umg-faculty-wrap umg-criminologia-faq__grid">
        <div class="umg-criminologia-faq__media umg-reveal">
            <figure class="umg-criminologia-faq__figure">
                <img
                    src="{{ URL::asset('images/criminologia/628403d8-a6e7-4f4f-97d0-2fa24030336f.png') }}"
                    alt="Facultad de Criminología UMG Guastatoya"
                    width="900"
                    height="1100"
                    loading="lazy"
                >
                <figcaption class="umg-criminologia-faq__badge">
                    <span class="umg-criminologia-faq__badge-mark" aria-hidden="true"></span>
                    <span>UMG Guastatoya</span>
                </figcaption>
            </figure>
        </div>

        <div class="umg-criminologia-faq__content umg-reveal">
            <p class="umg-criminologia-faq__eyebrow">Información útil</p>
            <h2 id="umg-criminologia-faq-title" class="umg-criminologia-faq__title">Preguntas frecuentes</h2>
            <p class="umg-criminologia-faq__lead">
                Todo lo esencial para decidir: formación, pensum, egreso e inscripción.
            </p>

            <div class="accordion umg-criminologia-faq__accordion" id="umgCriminologiaFaq">
                @php
                    $items = [
                        [
                            'q' => '¿Por qué elegirnos para tu educación?',
                            'a' => 'Porque ofrecemos una formación integral en Criminología, combinando teoría y práctica para comprender, prevenir y analizar el fenómeno delictivo desde un enfoque científico y humano.',
                        ],
                        [
                            'q' => '¿Qué cursos contiene la carrera?',
                            'a' => 'Incluye materias como Criminología, Criminalística, Derecho Penal, Psicología Criminal y Victimología. Consulta el pensum en esta página, el Centro de Informaciones o la oficina del Centro UMG Guastatoya.',
                        ],
                        [
                            'q' => '¿En qué podrás desempeñarte como Licenciado en Criminología?',
                            'a' => 'Podrás trabajar en instituciones de justicia, seguridad pública, centros de investigación, docencia o asesoría en prevención del delito.',
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
                        $hid = 'umgCriminologiaFaqH' . $n;
                        $cid = 'umgCriminologiaFaqC' . $n;
                        $open = $i === 0;
                    @endphp
                    <div class="accordion-item umg-criminologia-faq__item">
                        <h3 class="accordion-header" id="{{ $hid }}">
                            <button
                                class="accordion-button umg-criminologia-faq__btn{{ $open ? '' : ' collapsed' }}"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#{{ $cid }}"
                                aria-expanded="{{ $open ? 'true' : 'false' }}"
                                aria-controls="{{ $cid }}"
                            >
                                <span class="umg-criminologia-faq__num" aria-hidden="true">{{ str_pad((string) $n, 2, '0', STR_PAD_LEFT) }}</span>
                                <span class="umg-criminologia-faq__q">{{ $item['q'] }}</span>
                                <span class="umg-criminologia-faq__icon" aria-hidden="true">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                        <path class="umg-criminologia-faq__icon-h" d="M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                        <path class="umg-criminologia-faq__icon-v" d="M12 5v14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="{{ $cid }}"
                            class="accordion-collapse collapse{{ $open ? ' show' : '' }}"
                            aria-labelledby="{{ $hid }}"
                            data-bs-parent="#umgCriminologiaFaq"
                        >
                            <div class="accordion-body umg-criminologia-faq__body">
                                @if (!empty($item['list']))
                                    <ul class="umg-criminologia-faq__list">
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

            <div class="umg-criminologia-faq__cta">
                <p class="umg-criminologia-faq__cta-text">¿Aún tienes dudas? Te orientamos en admisión.</p>
                <a
                    class="umg-hero-btn umg-criminologia-faq__cta-btn"
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
