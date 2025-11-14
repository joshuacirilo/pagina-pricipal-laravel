<?php $page = 'about-us'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Y conoceréis la verdad y la verdad os hará libres
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Y conoceréis la verdad y la verdad os hará libres
        @endslot
    @endcomponent

    <!-- about -->
    <section class="about-section-two pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                <div class="p-3 p-sm-4 position-relative">
                    <div class="position-absolute top-0 start-0 z-n1">
                        <img src="{{URL::asset('build/img/shapes/shape-1.svg')}}" alt="img">
                    </div>
                    <div class="position-absolute bottom-0 end-0 z-n1">
                        <img src="{{URL::asset('build/img/shapes/shape-2.svg')}}" alt="img">
                    </div>
                    <!--
                    <div class="position-absolute bottom-0 start-0 mb-md-5 ms-md-n5">
                        <img src="{{URL::asset('build/img/icons/icon-1.svg')}}" alt="img">
                    </div>
                    -->
                    <img class="img-fluid img-radius" src="/build/img/about/aboutAuditoria/laptop-paperwork-contabilidad.jpg" alt="img">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-0 ps-lg-2 pt-4 pt-lg-0 ps-xl-5">
                        <div class="section-header">
                            <h2>Licenciatura en Contaduría Pública y Auditoría</h2>
                            <p>Es una carrera que promueve la excelencia académica mediante la implementación de un programa integral para la formación de contadores públicos y auditores con principios éticos y morales preparados para responder a las exigencias de las empresas que necesitan competir en un mundo globalizado. La carrera es impartida por docentes altamente calificados con experiencia profesional y académica.</p>
                        </div>
                        <div class="d-flex align-items-center about-us-banner">
                            <div>
                                <span class="bg-primary-transparent rounded-3 p-2 about-icon d-flex justify-content-center align-items-center">
                                    <i class="isax isax-book-1 fs-24"></i>
                                </span>
                            </div>
                            <div class="ps-3">
                                <h6 class="mb-2">Título académico a obtener</h6>
                                <p>Licenciado en Contaduría Pública y Auditoría.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center about-us-banner">
                            <div>
                                <span class="bg-secondary-transparent rounded-3 p-2 about-icon d-flex justify-content-center align-items-center">
                                    <i class="isax isax-bookmark5 fs-24"></i>
                                </span>
                            </div>
                            <div class="ps-3">
                                <h6 class="mb-2">Duración</h6>
                                <p>4 años y medio.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->

    <!-- benefits -->
    <section class="benefit-section">
        <div class="container">
            <div class="section-header text-center">
                <h2>Desarrolla tu potencial y lidera en tu profesión</h2>
                <p>La carrera de Contaduría Pública y Auditoría, guiada por nuestros mentores expertos, puede proporcionar información invaluable para tu desarrollo profesional.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <div class="position-absolute top-0 end-0 mt-n3 me-n4">
                                 <img src="/build/img/shapes/bg-1.png" alt="img">
                            </div>
                            <div class="p-4 rounded-pill bg-primary-transparent d-inline-flex">
                                <i class="isax isax-book-1 fs-24"></i>
                            </div>
                            <h5 class="mt-3 mb-1">¿Qué aprenderás?</h5>
                            <p>Esta carrera te prepara para resolver problemas empresariales y tomar decisiones en áreas contables y financieras, utilizando las nuevas tecnologías. Con un sólido enfoque en normativas internacionales, te mantendrás a la vanguardia para atender con profesionalismo a empresas tanto nacionales como internacionales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <div class="position-absolute top-0 end-0 mt-n3 me-n4">
                                <img src="{{URL::asset('build/img/shapes/bg-2.png')}}" alt="img">
                            </div>
                            <div class="p-4 rounded-pill bg-secondary-transparent d-inline-flex">
                                <i class="isax isax-bookmark5 fs-24"></i>
                            </div>
                            <h5 class="mt-3 mb-1">Perfil de Ingreso</h5>
                            <p>Cualquier persona interesada en profundizar sus conocimientos en el área contable y de auditoría, de preferencia con habilidades numéricas, razonamiento crítico y analítico, comprensión lectora, solución de problemas y dedicación. A lo largo de la carrera desarrollará las habilidades para asesorar al Consejo de administración y Gobierno corporativo de la empresa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <div class="position-absolute top-0 end-0 mt-n3 me-n4">
                                <img src="{{URL::asset('build/img/shapes/bg-3.png')}}" alt="img">
                            </div>
                            <div class="p-4 rounded-pill bg-skyblue-transparent d-inline-flex">
                                <i class="isax isax-chart-26 fs-24"></i>
                            </div>
                            <h5 class="mt-3 mb-1">Perfil de Egreso</h5>
                            <p>Profesional ético e independiente, capacitado para desempeñarse en cualquier circunstancia y responder a las demandas de un mundo globalizado. Con sólida formación técnica, está preparado para resolver problemas empresariales y tomar decisiones en los ámbitos contable, financiero, de auditoría y de tecnología.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benefits -->

<!-- *************************Instructores*************************esto ya funciona -->
<section class="instructors-section py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-primary">Nuestros Instructores</h2>

        <div class="row g-4">
            <!-- Instructor 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-auditoria1') }}'">
                     <!--
                    <img src="{{ asset('build/img/instructors/profesor1.jpeg') }}" class="card-img-top" alt="Profesor 1">
                    -->
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Lic. José Pérez</h5>
                        <p class="card-text text-muted">Coordinador de Facultad, Lic en Contaduría Pública y Auditoría.</p>
                    </div>
                </div>
            </div>


            <!-- Instructor 2 -->
             <!--
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-auditoria2') }}'">
                    <img src="{{ asset('build/img/instructors/profesor2.jpg') }}" class="card-img-top" alt="Profesor 2">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">No disponible</h5>
                        <p class="card-text text-muted">No disponible, en espera.</p>
                    </div>
                </div>
            </div>
            -->
            <!-- Instructor 3 -->
             <!--
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-auditoria3') }}'">
                    <img src="{{ asset('build/img/instructors/profesor3.jpg') }}" class="card-img-top" alt="Profesor 3">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">No disponible</h5>
                        <p class="card-text text-muted">No disponible, en espera.</p>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
</section>
<!-- /Instructores -->


    <!-- counter -->
    <section class="counter-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="counter-icon">
                                     <img src="/build/img/icons/counter-icon1.svg" alt="img">
                                </div>
                                <div class="count-content">
                                    <h4 class="text-info"><span class="count-digit">8</span>+</h4>
                                    <p>Oportunidades laborales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="counter-icon">
                                     <img src="/build/img/icons/counter-icon2.svg" alt="img">
                                </div>
                                <div class="count-content">
                                    <h4 class="text-warning"><span class="count-digit">12</span>+</h4>
                                    <p>Catedráticos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="counter-icon">
                                     <img src="/build/img/icons/counter-icon3.svg" alt="img">
                                </div>
                                <div class="count-content">
                                    <h4 class="text-skyblue"><span class="count-digit">25</span>+</h4>
                                    <p>Cursos certificados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 mb-0">
                        <div class="card-body d-flex align-items-center">
                            <div class="counter-icon">
                                 <img src="/build/img/icons/counter-icon4.svg" alt="img">
                            </div>
                            <div class="count-content">
                            <h4 class="text-lightgreen"><span class="count-digit">8</span>+</h4>
                                <p>Salones de clases</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter -->

    <!-- testimonials -->
    <section class="testimonials-section text-center">
        <div class="container">
            <div class="section-header text-center">
                <h2>Licenciatura en Contaduría y Auditoría</h2>
                <p>Esta carrera forma profesionales expertos en el análisis, control y gestión de la información financiera de las organizaciones. Los estudiantes desarrollan competencias en contabilidad, auditoría, normativas internacionales y herramientas tecnológicas aplicadas al ámbito tributario y financiero..</p>
            </div>
            <div class="testimonials-slider lazy mt-4">
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                            <!--
                            <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                            </div>
                            -->
                        </div>
                        <h6 class="mb-1">¿Por qué estudiar Licenciatura en Contaduría y Auditoría?</h6>
                        <p class="fs-14 mb-3">Esta carrera ofrece una sólida formación en el ámbito financiero y contable, preparando profesionales capaces de gestionar, auditar y analizar la información económica de cualquier organización. Con un plan de estudios actualizado en normativas internacionales y herramientas tecnológicas, los graduados se integran a un campo laboral estable y con alta demanda, tanto en el sector público como privado, contribuyendo a la transparencia y sostenibilidad de las empresas.</p>
                        <div>

                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <h6 class="mb-1">
                        <div class="position-relative d-inline-flex mb-2">

                        </div>
                        <h6 class="mb-1">El Futuro de la Lic. en Contaduría y Auditoría</h6>
                        <p class="fs-14 mb-3">El campo de la contaduría y auditoría está experimentando una transformación impulsada por la tecnología y las normativas globales. Los profesionales de esta disciplina ya no se limitan al registro de operaciones financieras, sino que ahora asumen roles estratégicos en la gestión de riesgos, el análisis de datos y la implementación de sistemas de control automatizados. El futuro de la carrera se orienta hacia la integración de habilidades técnicas y analíticas, preparando a los graduados para liderar en un entorno empresarial cada vez más digitalizado y global.</p>

                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">

                        </div>
                        <h6 class="mb-1">Competencias Clave del Lic. en Contaduría y Auditoría</h6>

                        <p class="fs-14 mb-3">El profesional egresado destaca por su capacidad para implementar sistemas de control interno, realizar auditorías financieras y aplicar normativas contables internacionales. Combina habilidades analíticas con un enfoque crítico para la toma de decisiones, gestionando riesgos y optimizando los procesos financieros. Además, domina herramientas tecnológicas para el análisis de datos y la emisión de informes confiables.</p>

                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">

                        </div>
                        <h6 class="mb-1">Licenciatura en Contaduría y Auditoría y Responsabilidad Social</h6>
                        <p class="fs-14 mb-3">Más allá del ámbito técnico, esta carrera forma profesionales comprometidos con la ética y la responsabilidad social. Los contadores y auditores promueven la transparencia financiera, contribuyen al cumplimiento de obligaciones fiscales y apoyan el desarrollo económico sostenible. Su labor es fundamental para generar confianza en las organizaciones y fomentar prácticas empresariales alineadas con el bienestar social.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials -->

    <!-- faq -->
    <section class="faq-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pe-md-5">
                    <div class="position-relative">
                        <img class="img-fluid rounded-4" src="{{URL::asset('/build/img/about/pabellonUMG.jpeg')}}" alt="img">
                        <div class="bg-warning text-center p-3 rounded-5 position-absolute top-0 end-0 z-index-1 d-none d-sm-block my-3 mx-3">
                            <i class="isax isax-message-question5 heading-color fs-46"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-header">
                        <h2>Preguntas Frecuentes</h2>
                        <p>Explore respuestas sobre las preguntas más comunes sobre nosotros!.</p>
                    </div>
                    <div class="faq-content">
                    <div class="accordion accordion-customicon1 accordions-items-seperate" id="accordioncustomicon1Example">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1One">
                                <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1One" aria-expanded="true" aria-controls="collapsecustomicon1One">
                                 ¿Por qué elegirnos para tu educación? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                                </a>
                            </h2>
                            <div id="collapsecustomicon1One" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1One" data-bs-parent="#accordioncustomicon1Example">
                                <div class="accordion-body pt-0">
                                 <p>En UMG te formamos como un profesional contable y auditor competitivo, con un plan de estudios actualizado y enfoque práctico que te prepara para destacar en el sector financiero nacional e internacional.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1Two">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                 ¿Qué cursos contiene la carrera? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Two" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Two" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>La carrera de Contaduría y Auditoría integra una formación completa que abarca contabilidad básica y avanzada, normas internacionales de información financiera y auditoría, legislación mercantil y tributaria, matemática financiera, análisis de estados financieros y gestión de riesgos. Incluye también cursos especializados en costos, auditoría de sistemas, ética profesional y desarrollo de proyectos, preparando profesionales para los desafíos del entorno financiero y empresarial actual. Puede encontrar más información en la sección de <strong>Centro de Informaciones</strong> o bien visitar la oficina del Centro UMG Guastatoya.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1Three">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three" aria-expanded="false" aria-controls="collapsecustomicon1One">
                            ¿En qué me podré desempeñar? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Three" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Three" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>Podrás desempeñarte en posiciones estratégicas como dirección financiera, auditoría interna/externa, consultoría, asesoría tributaria y emprendimiento en el sector contable-financiero..</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1Four">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Four" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                ¿Qué documentos necesito para inscribirme? (recién graduado) <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Four" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Four" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>	Constancia de Evaluación de Ubicación.
                                    	Completar Formulario de Nuevo Estudiante.
                                    	Original y fotocopia de DPI o pasaporte.
                                    	Certificación original de Básicos y Diversificado.
                                    	Fotostática de título de 5 x 7 pulgadas. (sellado por Contraloría de Cuentas).
                                    	Dos fotografías recientes tamaño Cédula.
                                    	Efectuar los pagos de inscripción correspondientes
                                 .</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1Five">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Five" aria-expanded="false" aria-controls="collapsecustomicon1One">
                            ¿Qué necesito para traslado de otra universidad? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Five" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Five" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>
                                   	Certificación de matrícula.
                                   	Certificación de estudios (ambas de Universidad de procedencia).

                                    Inversión (costos de preinscripción, inscripción, colegiaturas).
                                   	Costos de inscripción
                                    	 Costos de colegiatura (Costos sujetos a cambios)
                                 .</p>
                            </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- faq -->
@endsection
