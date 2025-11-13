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
                    <img class="img-fluid img-radius" src="/build/img/about/iniciocrimi-1.jpg" alt="img">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-0 ps-lg-2 pt-4 pt-lg-0 ps-xl-5">
                        <div class="section-header">
                            <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Criminología</span>
                            <h2>Licenciatura en Criminología y Política Criminal</h2>
                            <p>Es una carrera que promueve la excelencia académica mediante la implementación de un programa integral para la formación de criminólogos, técnica y científicamente competentes en su especialidad, la carrera tiene un enfoque desde el área psicológica, sociológica y sobre todo estratégica para la seguridad, prevención del delito, detección de formación de fenómenos criminales.
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
                                <p>Licenciado en Criminología y Política Criminal</p>
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
                <p>Criminología y Política Criminal te prepara para entender y combatir la conducta criminal con la guía de mentores expertos.</p>
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
                            <p>En esta carrera de Criminología, adquirirás las habilidades teóricas y prácticas para el análisis profundo del delito, aplicando creatividad, habilidad investigativa y lógica crítica para determinar el porqué de un hecho delictivo. El plan de estudios te proporcionará una sólida base en psicología criminal para la comprensión integral del delincuente, junto con el dominio de los aspectos jurídicos esenciales, asegurando el respeto del marco legal en todas las acciones de investigación criminal que realices.</p>
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
                            <p>El aspirante ideal a la Licenciatura en Criminología debe poseer una marcada habilidad investigativa y lógica, un profundo pensamiento crítico para el análisis de problemas sociales y delictivos, y un fuerte interés por el comportamiento humano (psicología y sociología). Es esencial que demuestre un sólido compromiso ético y social con la justicia y el marco legal, así como una afinidad por las Ciencias Sociales y Jurídicas, complementada con habilidades de comunicación efectiva para el reporte e interacción profesional.</p>
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
                            <p>El egresado de Criminología será un profesional capacitado para la investigación, el análisis y la prevención de fenómenos delictivos. Dominará las técnicas de investigación criminal y forense, la perfilación psicológica del delincuente, y aplicará su conocimiento jurídico para diseñar e implementar estrategias de seguridad, prevención y reinserción social que operen de manera ética y dentro del marco legal.</p>
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
                        onclick="window.location='{{ route('detalles-instructor-criminologia1') }}'">
                        <img src="{{ asset('build/img/instructor/LicCarlos.png') }}" class="card-img-top" alt="Profesor 1">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-2">Lic. Carlos Augusto Naavarro Ávila</h5>
                            <p class="card-text text-muted">Licenciado en Ciencias Criminológicas Y Criminalísticas </p>
                        </div>
                    </div>
                </div>

                   <!-- Instructor 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                        onclick="window.location='{{ route('detalles-instructor-criminologia22') }}'">
                        <img src="{{ asset('build/img/instructor/docenteCrimi3.png') }}" class="card-img-top" alt="Profesor 1">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-2">Licda.Susan Eunice Galindo Catalan</h5>
                            <p class="card-text text-muted">Licenciada en Ciencias Jurídicas y Sociales</p>
                        </div>
                    </div>
                </div>

                <!-- Instructor 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-criminologia3') }}'">
                    <img src="{{ asset('build/img/instructor/2.png') }}" class="card-img-top" alt="Profesor 2">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Lic. Roberto Bladimir Roldán Cruz</h5>
                        <p class="card-text text-muted">Licenciado en Administración de Empresas</p>
                    </div>
                </div>
            </div>

            <!-- Instructor 4 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-criminologia4') }}'">
                    <img src="{{ asset('build/img/instructor/1.png') }}" class="card-img-top" alt="Profesor 3">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Licda. Falvio Arturon</h5>
                        <p class="card-text text-muted">Licenciado en Ciencias Jurídicas y Sociales</p>
                    </div>
                </div>
            </div>

             <!-- Instructor 5 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-criminologia5') }}'">
                    <img src="{{ asset('build/img/instructor/debora.png') }}" class="card-img-top" alt="Profesor 3">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Licda. Debora Anahid Soto Colindres</h5>
                        <p class="card-text text-muted">Licenciada en Administración de Empresas</p>
                    </div>
                </div>
            </div>
            <!-- Instructor 6 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-criminologia6') }}'">
                    <img src="{{ asset('build/img/instructor/docenteCrimi4.png') }}" class="card-img-top" alt="Profesor 3">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Inga. Evelyn Raquel Cabrera Sánchez </h5>
                        <p class="card-text text-muted">Ingeniera en Sistemas de Información y Ciencias de la Computación </p>
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
                                <!--
                                <div class="counter-icon">
                                    <img src="/build/img/icons/iconsIngSistemas/networking_3150652.png" alt="img">
                                </div>
                                -->
                                <div class="count-content">
                                    <h4 class="text-info"><span class="count-digit">+10</span>+</h4>
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
                                <!--
                                <div class="counter-icon">
                                    <img src="./build/img/icons/counter-icon2.svg" alt="img">
                                </div>
                                -->
                                <div class="count-content">
                                    <h4 class="text-warning"><span class="count-digit">+10</span>+</h4>
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
                                <!--
                                <div class="counter-icon">
                                    <img src="./build/img/icons/counter-icon3.svg" alt="img">
                                </div>
                                -->
                                <div class="count-content">
                                    <h4 class="text-skyblue"><span class="count-digit">+15</span>+</h4>
                                    <p>Cursos certificados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 mb-0">
                        <div class="card-body d-flex align-items-center">
                            <!--
                            <div class="counter-icon">
                            <img src="./build/img/icons/counter-icon4.svg" alt="img">
                            </div>
                            -->
                            <div class="count-content">
                            <h4 class="text-lightgreen"><span class="count-digit">+10</span>+</h4>
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
                <h2>Criminología</h2>
                <p>Es la disciplina que estudia las causas, manifestaciones y consecuencias del comportamiento delictivo, así como los factores sociales, psicológicos y jurídicos que influyen en la criminalidad. Integra conocimientos de distintas áreas —como el derecho, la psicología, la sociología y las ciencias forenses— para analizar y proponer soluciones orientadas a la prevención del delito y la seguridad social.</p>
            </div>
            <div class="testimonials-slider lazy mt-4">
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                            <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                               <!--
                                <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-41.jpg" alt="img"></a>
                                -->
                            </div>
                            <!--
                            <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i>
                            -->
                        </div>
                        <h6>¿Por qué estudiar Criminología?</h6>
                        <p class="fs-14 mb-3">Porque es una carrera esencial para comprender y enfrentar los desafíos de la seguridad y la justicia en la sociedad actual. Te prepara para analizar conductas delictivas, investigar casos, elaborar perfiles criminológicos y contribuir en la formulación de políticas públicas orientadas a la prevención del delito y la rehabilitación social. Además, su campo laboral abarca instituciones públicas, privadas y de investigación en constante desarrollo.</p>

                        <!--
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                        </div>
-->
                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                             <!--
                            <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                                <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-42.jpg" alt="img"></a>
                            </div>
                            -->
                        </div>
                        <h6 class="mb-1">El Futuro de la Criminología</h6>
                        <p class="fs-14 mb-3">La criminología se consolida como una disciplina fundamental ante los nuevos escenarios delictivos y tecnológicos. Los profesionales del área serán cada vez más requeridos para abordar delitos cibernéticos, violencia social, criminalidad organizada y procesos de reinserción social. Su papel resulta clave en la construcción de entornos más seguros, justos y resilientes.</p>
                         <!--
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                        </div>
                        -->
                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                        </div>
                        <h6 class="mb-1">Competencias Clave del Criminólogo</h6>
                        <p class="fs-14 mb-3">Un criminólogo destaca por su capacidad analítica, pensamiento crítico y sentido ético. Entre sus principales competencias se incluyen la investigación científica, la observación objetiva, la elaboración de informes técnicos, la gestión de conflictos y la comunicación efectiva. Estas habilidades le permiten interpretar la conducta humana desde una perspectiva integral y contribuir a la toma de decisiones en materia de seguridad y justicia.</p>
                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                        </div>
                        <h6 class="mb-1">Criminología y Responsabilidad Social</h6>
                        <p class="fs-14 mb-3">Más allá del análisis del delito, la criminología fomenta la reflexión sobre las causas sociales de la violencia y la exclusión. Los criminólogos asumen un compromiso ético con la sociedad, participando en proyectos de prevención, educación y reinserción, promoviendo así una cultura de paz, legalidad y respeto a los derechos humanos.</p>
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
                                 <p>Porque ofrecemos una formación integral en Criminología, combinando teoría y práctica para comprender, prevenir y analizar el fenómeno delictivo desde un enfoque científico y humano.</p>
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
                                 <p>Incluye materias como Criminología, Criminalística, Derecho Penal, Psicología Criminal y Victimología. <strong>Centro de Informaciones</strong> o bien visitar la oficina del Centro UMG Guastatoya.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1Three">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three" aria-expanded="false" aria-controls="collapsecustomicon1One">
                            ¿En qué podrás desempeñarte como Licenciado en Criminología? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Three" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Three" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>Podrás trabajar en instituciones de justicia, seguridad pública, centros de investigación, docencia o asesoría en prevención del delito.</p>
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
