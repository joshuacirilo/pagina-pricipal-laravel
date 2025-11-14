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
                    <div class="position-absolute bottom-0 start-0 mb-md-5 ms-md-n5">
                    </div>
                    <img class="img-fluid img-radius" src="/build/img/about/aboutTrabajoSocial/equipo-inicio-TrabajoSocial.jpg" alt="img">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-0 ps-lg-2 pt-4 pt-lg-0 ps-xl-5">
                        <div class="section-header">
                            <h2>Licenciatura en Trabajo Social</h2>
                            <p>La Escuela de Trabajo Social, tiene como visión formar profesionales especializados que respondan a las problemáticas sociales, capacitados para aplicar técnicas y herramientas de la gerencia social, mediante el fortalecimiento de los conocimientos teóricos de las ciencias sociales y del trabajo social.</p>
                        </div>
                        <div class="d-flex align-items-center about-us-banner">
                            <div>
                                <span class="bg-primary-transparent rounded-3 p-2 about-icon d-flex justify-content-center align-items-center">
                                    <i class="isax isax-book-1 fs-24"></i>
                                </span>
                            </div>
                            <div class="ps-3">
                                <h6 class="mb-2">Título académico a obtener</h6>
                                <p>Licenciado en Trabajo Social.</p>
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
                                <p>5 años.</p>
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
                <p>La carrera de Licenciado en Trabajo Social, guiada por nuestros mentores expertos, puede proporcionar información invaluable para tu desarrollo profesional.</p>
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
                            <p>Ciclos 1° al 4°: Formación teórica en ciencias sociales, fundamentos del trabajo social y el contexto histórico nacional.

                               Ciclos 5° al 6°: Enfoque práctico en la especialidad, desarrollando el razonamiento lógico para analizar problemáticas sociales específicas.

                               Ciclos 7° al 10°: Especialización en gestión e intervención dentro del sistema de protección social.</p>
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
                            <p>Posee habilidades avanzadas de comunicación, análisis y pensamiento crítico. Su perfil se distingue por una marcada sensibilidad social para trabajar con grupos vulnerables y adaptarse a entornos de riesgo, actuando siempre con un sólido compromiso ético y respeto por la diversidad cultural y lingüística.</p>
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
                            <p>Es un profesional comprometido para la promoción del desarrollo y la justicia social, sobre las bases del cumplimiento efectivo de los derechos humanos, la solidaridad y la equidad.

                               Posee conocimientos científicos para comprender las problemáticas que afronta la sociedad.

                               Aplica conocimientos para convertirlos en acciones que contribuyan al bienestar de las personas, familias y grupos vulnerables</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benefits -->

    <!-- *************************Instructores*************************esto ya funciona -->


    <style>
        .instructors-section .card-img-top {
            width: 180px;            /* tamaño del círculo */
            height: 180px;           /* tamaño del círculo */
            border-radius: 50%;      /* hace el círculo */
            object-fit: cover;       /* recorta sin deformar */
            object-position: center; /* centra la imagen */
            margin: 20px auto 0;     /* centrar imagen dentro de la card */
            display: block;
        }

        /* Ajusta la tarjeta para que no se vea estirada */
        .instructor-card {
            padding-top: 20px;
            text-align: center;
        }
    </style>


<section class="instructors-section py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-primary">Nuestros Instructores</h2>

        <div class="row g-4">
            <!-- Instructor 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                    onclick="window.location='{{ route('detalles-instructor-trabajosocial1') }}'">

                    <img src="{{ asset('build/img/instructor/unknown_user.png') }}" class="card-img-top" alt="Profesor 1">

                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Lic. Lygia</h5>
                        <p class="card-text text-muted">Coordinadora de Facultad y Licenciada en Trabajo Social.</p>
                    </div>
                </div>
            </div>

            <!-- Instructor 2 -->

            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-trabajosocial2') }}'">
                    <img src="{{ asset('build/img/instructor/unknown_user.png') }}" class="card-img-top" alt="Profesor 2">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Lic. María González</h5>
                        <p class="card-text text-muted">Licenciada en Trabajo Social.</p>
                    </div>
                </div>
            </div>

            <!-- Instructor 3 -->

            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-trabajosocial3') }}'">
                    <img src="{{ asset('build/img/instructor/unknown_user.png') }}" class="card-img-top" alt="Profesor 3">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Lic. Luis Pérez</h5>
                        <p class="card-text text-muted">Licenciado en Trabajo Social.</p>
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
                                    <h4 class="text-warning"><span class="count-digit">8</span>+</h4>
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
                            <h4 class="text-lightgreen"><span class="count-digit">6</span>+</h4>
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
                <h2>Licenciatura en Trabajo Social</h2>
                <p>Forma profesionales con sensibilidad social y capacidad de intervención en realidades complejas. A través de un enfoque teórico-práctico, los estudiantes desarrollan habilidades para gestionar proyectos sociales, promover derechos humanos y trabajar con grupos vulnerables, contribuyendo al bienestar colectivo y la transformación social en Guatemala.</p>
            </div>
            <div class="testimonials-slider lazy mt-4">
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                            <!--
                            <div class="avatar rounded-circle avatar-xxl border border-white border-3">

                                <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-41.jpg" alt="img"></a>

                            </div>

                            <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i>
                            -->
                        </div>
                        <h6 class="mb-1">¿Por qué estudiar Lic en Trabajo Social?</h6>
                        <p class="fs-14 mb-3"></p>
                                <!--class="mb-3 text-truncate line-clamb-2"-->
                        <p class="fs-14 mb-3" >Porque te prepara para ser un agente de cambio en la sociedad, con las herramientas necesarias para intervenir, gestionar y transformar realidades en comunidades, familias e instituciones. A través de un enfoque humanista y metodologías prácticas, desarrollarás la capacidad de promover derechos humanos, impulsar proyectos de impacto social y trabajar con grupos en situación de vulnerabilidad, contribuyendo a la construcción de un país más justo e inclusivo.</p>
                        <div>
                            <!--
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            -->
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">

                        </div>
                        <h6 class="mb-1">El Futuro de la Lic. en Trabajo Social</h6>
                        <p class="fs-14 mb-3"></p>
                        <p class="fs-14 mb-3">El campo del trabajo social está evolucionando hacia un enfoque más estratégico y especializado, con una creciente demanda de profesionales capacitados para abordar problemáticas sociales complejas. Los futuros trabajadores sociales no solo intervendrán en situaciones de vulnerabilidad, sino que también liderarán proyectos de innovación social, gestión comunitaria y políticas públicas.

                                Tendencias como la migración, el envejecimiento poblacional, la violencia estructural y los efectos del cambio climático requerirán intervenciones basadas en datos y metodologías validadas.</p>

                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">

                        </div>
                        <h6 class="mb-1">Competencias Clave del Lic. en Trabajo Social</h6>
                        <p class="fs-14 mb-3"></p>
                        <p class="fs-14 mb-3">El profesional en Trabajo Social destaca por su capacidad para diseñar, implementar y evaluar intervenciones sociales basadas en el diagnóstico de necesidades comunitarias. Desarrolla habilidades en mediación y resolución de conflictos, acompañamiento psicosocial y gestión de proyectos de impacto colectivo. Su formación le permite trabajar con enfoque intercultural, aplicar marcos legales y éticos, y promover la participación ciudadana para impulsar cambios sostenibles en diversos contextos sociales.</p>
                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">

                        </div>
                        <h6 class="mb-1">Licenciatura en Trabajo Social y Responsabilidad Social</h6>
                          <p class="fs-14 mb-3"></p>
                          <p class="fs-14 mb-3">La Licenciatura en Trabajo Social forma profesionales cuyo ejercicio profesional está intrínsecamente ligado a la responsabilidad social. A través de su labor, promueven la justicia social, la equidad y el respeto por los derechos humanos, trabajando directamente con comunidades, grupos vulnerables e instituciones para generar condiciones de vida más dignas.

                                Su enfoque integra el acompañamiento psicosocial, la gestión de proyectos sostenibles y la incidencia en políticas públicas, siempre orientados a fortalecer el tejido social y a reducir desigualdades.
                          </p>
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
                        <img class="img-fluid rounded-4" src="{{URL::asset('build/img/about/pabellonUMG.jpeg')}}" alt="img">
                        <div class="bg-warning text-center p-3 rounded-5 position-absolute top-0 end-0 z-index-1 d-none d-sm-block my-3 mx-3">
                            <i class="isax isax-message-question5 heading-color fs-46"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-header">
                        <!--
                        <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">FAQs</span>
                         -->
                        <h2>Preguntas Frecuentes</h2>
                        <p>Explore respuestas sobre las preguntas más comunes sobre nosotros!.</p>
                    </div>
                    <div class="faq-content">
                    <div class="accordion accordion-customicon1 accordions-items-seperate" id="accordioncustomicon1Example">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1One">
                                <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1One" aria-expanded="true" aria-controls="collapsecustomicon1One">
                                 ¿Por qué elegirnos para tu educación?  <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                                </a>
                            </h2>
                            <div id="collapsecustomicon1One" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1One" data-bs-parent="#accordioncustomicon1Example">
                                <div class="accordion-body pt-0">
                                 <p>En la Facultad de Trabajo Social de la UMG formamos profesionales con sensibilidad social y capacidad de intervención real. Te prepararemos para transformar vidas y comunidades.</p>
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
                                 <p>La carrera de Trabajo Social integra una formación completa que abarca desde fundamentos filosóficos, históricos y sociales hasta metodologías de intervención individual, familiar, grupal y comunitaria. Incluye cursos como legislación social y derechos humanos, gerencia social, formulación y evaluación de proyectos, investigación científica aplicada, interculturalidad guatemalteca y herramientas prácticas como el Ejercicio Técnico Supervisado y el Trabajo de Graduación, preparando profesionales para responder con ética y eficacia a los desafíos sociales del país. Puede encontrar más información en la sección de <strong>Centro de Informaciones</strong> o bien visitar la oficina del Centro UMG Guastatoya.</p>
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
                                 <p>Podrás desempeñarte en la intervención directa con familias y comunidades, gestión de proyectos sociales, promoción y defensa de derechos humanos e investigación y docencia en el ámbito social.</p>
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
                                    	Efectuar los pagos de inscripción correspondientes.</p>
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
                                 <p> 	Certificación de matrícula.
                                   	Certificación de estudios (ambas de Universidad de procedencia).

                                    Inversión (costos de preinscripción, inscripción, colegiaturas).
                                   	Costos de inscripción
                                    	 Costos de colegiatura (Costos sujetos a cambios)</p>
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
