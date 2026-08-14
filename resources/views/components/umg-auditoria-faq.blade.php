<section
    class="umg-faculty-faq umg-auditoria-faq"
    id="umg-auditoria-faq"
    aria-labelledby="umg-auditoria-faq-title"
>
    <div class="umg-faculty-wrap umg-auditoria-faq__grid">
        <div class="umg-auditoria-faq__media umg-reveal">
            <figure class="umg-auditoria-faq__figure">
                <img
                    src="{{ URL::asset('images/Auditoria/d84542fa-6be8-457b-a58a-4f4ac7b09a8c.png') }}"
                    alt="Facultad de Auditoría UMG Guastatoya"
                    width="900"
                    height="1100"
                    loading="lazy"
                >
                <figcaption class="umg-auditoria-faq__badge">
                    <span class="umg-auditoria-faq__badge-mark" aria-hidden="true"></span>
                    <span>UMG Guastatoya</span>
                </figcaption>
            </figure>
        </div>

        <div class="umg-auditoria-faq__content umg-reveal">
            <p class="umg-auditoria-faq__eyebrow">Información útil</p>
            <h2 id="umg-auditoria-faq-title" class="umg-auditoria-faq__title">Preguntas frecuentes</h2>
            <p class="umg-auditoria-faq__lead">
                Todo lo esencial para decidir: formación, pensum, egreso e inscripción.
            </p>

            <div class="accordion umg-auditoria-faq__accordion" id="umgAuditoriaFaq">
                @php
                    $items = [
                        [
                            'q' => '¿Por qué elegirnos para tu educación?',
                            'a' => 'En UMG te formamos como un profesional contable y auditor competitivo, con un plan de estudios actualizado y enfoque práctico que te prepara para destacar en el sector financiero nacional e internacional.',
                        ],
                        [
                            'q' => '¿Qué cursos contiene la carrera?',
                            'a' => 'Integra contabilidad básica y avanzada, normas internacionales de información financiera y auditoría, legislación mercantil y tributaria, matemática financiera, análisis de estados financieros, costos, auditoría de sistemas, ética profesional y gestión de riesgos. Consulta el pensum en esta página o el Centro de Informaciones UMG Guastatoya.',
                        ],
                        [
                            'q' => '¿En qué me podré desempeñar?',
                            'a' => 'Podrás desempeñarte en posiciones estratégicas como dirección financiera, auditoría interna/externa, consultoría, asesoría tributaria y emprendimiento en el sector contable-financiero.',
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
                        $hid = 'umgAuditoriaFaqH' . $n;
                        $cid = 'umgAuditoriaFaqC' . $n;
                        $open = $i === 0;
                    @endphp
                    <div class="accordion-item umg-auditoria-faq__item">
                        <h3 class="accordion-header" id="{{ $hid }}">
                            <button
                                class="accordion-button umg-auditoria-faq__btn{{ $open ? '' : ' collapsed' }}"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#{{ $cid }}"
                                aria-expanded="{{ $open ? 'true' : 'false' }}"
                                aria-controls="{{ $cid }}"
                            >
                                <span class="umg-auditoria-faq__num" aria-hidden="true">{{ str_pad((string) $n, 2, '0', STR_PAD_LEFT) }}</span>
                                <span class="umg-auditoria-faq__q">{{ $item['q'] }}</span>
                                <span class="umg-auditoria-faq__icon" aria-hidden="true">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                        <path class="umg-auditoria-faq__icon-h" d="M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                        <path class="umg-auditoria-faq__icon-v" d="M12 5v14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <div
                            id="{{ $cid }}"
                            class="accordion-collapse collapse{{ $open ? ' show' : '' }}"
                            aria-labelledby="{{ $hid }}"
                            data-bs-parent="#umgAuditoriaFaq"
                        >
                            <div class="accordion-body umg-auditoria-faq__body">
                                @if (!empty($item['list']))
                                    <ul class="umg-auditoria-faq__list">
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

            <div class="umg-auditoria-faq__cta">
                <p class="umg-auditoria-faq__cta-text">¿Aún tienes dudas? Te orientamos en admisión.</p>
                <a
                    class="umg-hero-btn umg-auditoria-faq__cta-btn"
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
