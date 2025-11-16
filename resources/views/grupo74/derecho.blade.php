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
                    <!--
                    <div class="position-absolute bottom-0 start-0 mb-md-5 ms-md-n5">
                        <img src="{{URL::asset('build/img/icons/icon-1.svg')}}" alt="img">
                    </div>
                    -->
                    <!-- Imagen portada-->
                    <img class="img-fluid img-radius" src="/build/img/about/iniDerecho1.jpg" alt="img">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-0 ps-lg-2 pt-4 pt-lg-0 ps-xl-5">
                        <div class="section-header">
                            <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Derecho</span>
                            <h2>Ciencias Jurídicas y Sociales</h2>
                            <p>La carrera de Ciencias Jurídicas y Sociales entrelaza el estudio del derecho con las ciencias sociales, enfatizando la interpretación y aplicación legal en contextos variados. El aprendizaje se basa en el análisis de casos, el debate crítico y la práctica en clínicas jurídicas. Se cultiva la habilidad argumentativa y el razonamiento ético para abordar asuntos de justicia social. La formación se orienta hacia la conciencia social y el desarrollo humano en la práctica legal. El objetivo es formar juristas con visión integral, capaces de influir positivamente en la sociedad.
                            </p>
                        </div>
                        <div class="d-flex align-items-center about-us-banner">
                            <div>
                                <span class="bg-primary-transparent rounded-3 p-2 about-icon d-flex justify-content-center align-items-center">
                                    <i class="isax isax-book-1 fs-24"></i>
                                </span>
                            </div>
                            <div class="ps-3">
                                <h6 class="mb-2">Título académico a obtener</h6>
                                <p>Licenciatura en Ciencias Jurídicas y Sociales</p>
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
                                <p>5 años</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->

   <!-- benefits, fragmento copiado de auditoria -->
    <section class="benefit-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">UMG Guastatoya</span>
                <h2>Desarrolla tu potencial y lidera en tu profesión</h2>
                <p>La Licenciatura en Ciencias Jurídicas y Sociales, Abogacía y Notariado de la Universidad Mariano Gálvez de Guatemala te prepara para comprender, interpretar y aplicar el Derecho con la guía de profesionales expertos en el ámbito jurídico.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <div class="position-absolute top-0 end-0 mt-n3 me-n4">
                                        <!-- <img src="./build/img/shapes/bg-1.png" alt="img">-->
                            </div>
                            <div class="p-4 rounded-pill bg-primary-transparent d-inline-flex">
                                <i class="isax isax-book-1 fs-24"></i>
                            </div>
                            <h5 class="mt-3 mb-1">¿Qué aprenderás?</h5>
                            <p>En la Licenciatura en Ciencias Jurídicas y Sociales, Abogacía y Notariado, adquirirás una sólida formación teórica y práctica para la interpretación, aplicación y defensa del derecho. Desarrollarás pensamiento crítico, razonamiento lógico y capacidad argumentativa para analizar problemas jurídicos complejos. El plan de estudios te proporcionará bases firmes en Derecho Constitucional, Civil, Penal, Laboral, Administrativo y Notarial, garantizando que puedas actuar siempre dentro del marco legal y con responsabilidad profesional.</p>
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
                            <p>El aspirante ideal a la Licenciatura en Ciencias Jurídicas y Sociales, Abogacía y Notariado debe poseer habilidades de análisis, pensamiento crítico y razonamiento lógico. Debe mostrar interés por los procesos sociales, el comportamiento humano y el funcionamiento de las instituciones del Estado. Asimismo, es esencial que tenga vocación de servicio, compromiso ético, responsabilidad social y facilidad para comunicarse de manera oral y escrita, ya que estas competencias serán fundamentales en su formación y desempeño profesional.</p>
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
                            <p>El egresado de la Licenciatura en Ciencias Jurídicas y Sociales, Abogacía y Notariado será un profesional capaz de interpretar y aplicar la legislación vigente, asesorar legalmente, representar a personas ante distintas instancias judiciales y elaborar instrumentos notariales. Contará con dominio de las ramas fundamentales del derecho, capacidad para la argumentación jurídica, habilidades para la resolución de conflictos y un sólido compromiso ético. Estará preparado para actuar en procesos civiles, penales, laborales, administrativos y constitucionales, siempre dentro del marco legal y con responsabilidad profesional.</p>
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
            <h2 class="text-center mb-5 fw-bold text-primary">Nuestros Catedráticos</h2>
                    
            <div class="row g-4">       
                
            <!-- Instructor 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                        onclick="window.location='{{ route('detalles-instructor-derecho1') }}'">
                        <img src="{{ asset('build/img/instructor/docenteCrimi3.png') }}" class="card-img-top" alt="Profesor 1">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-2">Licda. Susan Eunice Galindo Catalan</h5>
                            <p class="card-text text-muted">Licenciada en Ciencias Jurídicas y Sociales</p>
                        </div>
                    </div>
                </div>

                   <!-- Instructor 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-derecho2') }}'">
                    <img src="{{ asset('build/img/instructor/1.png') }}" class="card-img-top" alt="Profesor 3">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Licda. Falvio Arturon</h5>
                        <p class="card-text text-muted">Licenciado en Ciencias Jurídicas y Sociales</p>
                    </div>
                </div>
            </div>

            <!-- Instructor 3 -->
                  <!-- Instructor 3 -->

            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-auditoria3') }}'">
                    <img src="{{ asset('build\img\instructor\unknown_user.png') }}" class="card-img-top" alt="Profesor 3">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">En Construcción...</h5>
                        <p class="card-text text-muted"></p>
                    </div>
                </div>
            </div>

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
                                    <h4 class="text-info"><span class="count-digit">10</span>+</h4>
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
                                    <h4 class="text-warning"><span class="count-digit">6</span>+</h4>
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

   <!--Tarjetas de informacion con modales -->
    <section class="testimonials-section text-center">
        <div class="container">

            <!-- TÍTULO Y DESCRIPCIÓN -->
            <div class="section-header text-center">
                <h2>Facultad de Ciencias Jurídicas y Sociales</h2>
                <h4>-Derecho-</h4>
                <p>
                    Es la disciplina que interpreta, aplica y desarrolla el ordenamiento jurídico, utilizando conocimientos en legislación, argumentación, análisis crítico y redacción legal para resolver conflictos, garantizar la justicia y atender las necesidades sociales dentro del marco del Derecho.
                </p>
            </div>

            <div class="testimonials-slider lazy mt-4">

                <!-- 1 -->
                <div>
                    <div class="testimonials-item card-blue modal-trigger" data-bs-toggle="modal" data-bs-target="#modal1">
                        <h6 class="mb-2 fw-bold">¿Por qué estudiar Derecho?</h6>
                    </div>
                </div>

                <!-- 2 -->
                <div>
                    <div class="testimonials-item card-blue modal-trigger" data-bs-toggle="modal" data-bs-target="#modal2">
                        <h6 class="mb-2 fw-bold">El Futuro del Derecho</h6>
                    </div>
                </div>

                <!-- 3 -->
                <div>
                    <div class="testimonials-item card-blue modal-trigger" data-bs-toggle="modal" data-bs-target="#modal3">
                        <h6 class="mb-2 fw-bold">Competencias Clave</h6>
                    </div>
                </div>

                <!-- 4 -->
                <div>
                    <div class="testimonials-item card-blue modal-trigger" data-bs-toggle="modal" data-bs-target="#modal4">
                        <h6 class="mb-2 fw-bold">Responsabilidad Social</h6>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--fin Tarjetas de informacion con modales -->
    

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
                                 <p>Porque ofrecemos una formación jurídica integral, con docentes especializados, enfoque práctico, valores éticos y un plan de estudios actualizado que prepara a los futuros profesionales para desempeñarse con excelencia en cualquier área del Derecho.</p>
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
                                 <p>La Licenciatura en Ciencias Jurídicas y Sociales, Abogacía y Notariado incluye cursos clave como:
                                    Derecho Civil, Derecho Penal, Derecho Constitucional, Derecho Mercantil, Derecho Laboral, Derecho Administrativo, Derecho Procesal, Derecho Notarial, Filosofía del Derecho, Metodología Jurídica, Sociología Jurídica, Argumentación Jurídica, entre otros. <strong>Centro de Informaciones</strong> o bien visitar la oficina del Centro UMG Guastatoya.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1Three">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three" aria-expanded="false" aria-controls="collapsecustomicon1One">
                            ¿En qué podrás desempeñarte como Licenciado en Derecho?<i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Three" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Three" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>Podrás trabajar como abogado litigante, asesor jurídico, notario (al completar los requisitos legales), analista legal, defensor público, fiscal, trabajador en juzgados, entidades públicas y privadas, empresas, organizaciones no gubernamentales y en áreas de resolución de conflictos y protección de derechos humanos.</p>
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


<!--Modales -->
            <!-- Modal 1 -->
    <div class="modal fade custom-modal" id="modal1" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold">¿Por qué estudiar Derecho?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    Permite defender derechos, resolver conflictos, participar en la construcción de una sociedad más justa y acceder a múltiples oportunidades profesionales en el sector público y privado.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade custom-modal" id="modal2" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold">El Futuro del Derecho</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                La práctica jurídica evoluciona con la digitalización, el gobierno electrónico y la gestión moderna de información legal, generando nuevas áreas de especialización.                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade custom-modal" id="modal3" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold">Competencias Clave</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    Interpretación de normas, argumentación jurídica, redacción legal, análisis crítico y uso adecuado de herramientas tecnológicas aplicadas al ámbito jurídico.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="modal fade custom-modal" id="modal4" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold">Responsabilidad Social</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    El profesional del Derecho contribuye al bienestar social garantizando justicia, respeto a los derechos humanos y soluciones legales que fortalezcan la convivencia y el orden jurídico.
                </div>
            </div>
        </div>
    </div>

<!-- Final modales -->    
@endsection
