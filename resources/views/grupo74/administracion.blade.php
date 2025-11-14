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
                    <!--<div class="position-absolute bottom-0 start-0 mb-md-5 ms-md-n5">
                        <img src="{{URL::asset('build/img/icons/icon-1.svg')}}" alt="img">
                    </div>-->
                    <img class="img-fluid img-radius" src="/build/img/about/imgadmi11.jpg" alt="img">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-0 ps-lg-2 pt-4 pt-lg-0 ps-xl-5">
                        <div class="section-header">
                            <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Administración</span>
                            <h2>Licenciatura en
                            Ciencias de la Administración</h2>
                            <p>La Licenciatura en Ciencias de la Administración es una carrera que promueve la excelencia académica mediante la implementación de
                                un programa acreditado internacionalmente que integra aspectos teóricos y prácticos para la dirección de empresas y la gestión de
                                 organizaciones en el marco de un entorno cambiante y globalizado, el programa académico es impartido por docentes altamente
                                 calificados con experiencia profesional y académica.</p>
                        </div>
                        <div class="d-flex align-items-center about-us-banner">
                            <div>
                                <span class="bg-primary-transparent rounded-3 p-2 about-icon d-flex justify-content-center align-items-center">
                                    <i class="isax isax-book-1 fs-24"></i>
                                </span>
                            </div>
                            <div class="ps-3">
                                <h6 class="mb-2">Título académico a obtener</h6>
                                <p>Licenciado en Administración de Empresas</p>
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
                                <p>4 años</p>
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
                <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">UMG Guastatoya</span>
                <h2>Desarrolla tu potencial y lidera en tu profesión</h2>
                <p>La carrera de  Ciencias de la Administración, guiada por nuestros mentores expertos, puede proporcionar información
                    invaluable para tu desarrollo profesional.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <div class="position-absolute top-0 end-0 mt-n3 me-n4">
                                <!--<img src="./build/img/shapes/bg-1.png" alt="img">-->
                            </div>
                            <div class="p-4 rounded-pill bg-primary-transparent d-inline-flex">
                                <i class="isax isax-book-1 fs-24"></i>
                            </div>
                            <h5 class="mt-3 mb-1">¿Qué aprenderás</h5>
                            <p>En esta carrera aprenderás sobre Dirección de Empresas, Requisitos legales de negocios, Contabilidad y Finanzas, Filosofía y
                                Sociología de Negocios, Mercadeo y Proyectos, Economía y Globalización, Operaciones y Logística, Talento Humano y Motivación.
                                Adquirirás conocimientos teóricos y prácticos sobre: Comunicación de Negocios, Análisis de Situaciones Críticas, Gestión de
                                Coaching, Dirección de Equipos, Resolución de Conflictos, Procesos Estadísticos, Toma de Decisiones, Autodominio de Actitud
                                <br><br><br><br> <br><br> <br></p>
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
                            <h5 class="mt-3 mb-1">Perfil de
                            Ingreso</h5>
                            <p>El aspirante a la carrera de Administración de Empresas debe tener una inclinación hacia el pensamiento analítico y estratégico.
                                Los aspirantes deben mostrar interés en comprender el funcionamiento de las organizaciones, así como en las dinámicas de gestión
                                y liderazgo empresarial. Se espera que posean habilidades comunicativas y de trabajo en equipo, dado que la colaboración es
                                fundamental en el entorno administrativo. <br> <br>
                                Además, es deseable que tengan una actitud proactiva y adaptabilidad frente a los cambios, habilidades que son cruciales en el mundo
                                empresarial en constante evolución <br> <br><br> </p>
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
                            <h5 class="mt-3 mb-1">Perfil de
                            Egreso</h5>
                            <p>Al terminar la carrera, el administrador de empresas debe tener el siguiente perfil de egreso: <br> <br>
                                Conocimientos en: dirección de empresas, requisitos legales de negocios, contabilidad, finanzas,
                                 filosofía y sociología de negocios, mercadeo y proyectos, economía y globalización, operaciones y
                                 logística, informática y tecnología, talento humano y motivación.<br> <br>
                                Habilidades en: comunicación de negocios, análisis de situaciones críticas, gestión de coaching,
                                dirección de equipos, resolución de conflictos, procesos estadísticos, toma de decisiones, autodominio
                                de actitudes, influencia de valores.</p>
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
                    onclick="window.location='{{ route('detalles-instructor-administracion1') }}'">
                        <img src="{{ asset('build/img/instructor/docente1admi.jpg') }}" class="card-img-top" alt="Profesor 1">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-2">Lic. Jose Humberto Martinez Morales</h5>
                           <!-- <p class="card-text text-muted">Docente En administración de empresas con más de 14 años de experiencia universitaria. Maestria en docencia Superior</p>-->
                        </div>
                    </div>
                </div>

                <!-- Instructor 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                    onclick="window.location='{{ route('detalles-instructor-criminologia5') }}'" >
                        <img src="{{ asset('build/img/instructor/debora soto1.jpg') }}" class="card-img-top" alt="Profesor 2">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-2">Licda. Debora Anahid Soto Colindres</h5>
                            <p class="card-text text-muted"></p>
                        </div>
                    </div>
                </div>



                  <!-- Instructor 3 -->
                  <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-administracion3') }}'">
                    <img src="{{ asset('build/img/instructor/IngSistemasInstructor/IngEduardoHernandezPerfil.jpeg') }}" class="card-img-top" alt="Profesor 3">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Ing Eduardo Hernández</h5>
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



    <!-- testimonials -->
    <section class="testimonials-section text-center">
        <div class="container">
            <div class="section-header text-center">
                <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block"></span>
                <h2>Administración</h2>
                <p>La administración combina conocimientos técnicos, liderazgo y toma de decisiones para dirigir a las personas y los recursos
                     de una organización hacia el éxito, fomentando la innovación, el trabajo en equipo y la responsabilidad social.</p>
            </div>
            <div class="testimonials-slider lazy mt-4">
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                            <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                                <!--<a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-41.jpg" alt="img"></a>
                             -->
                            </div>
                            <!-- <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i> -->
                        </div>
                        <h6 class="mb-1"><a href="{{url('instructor-details')}}">¿Por qué estudiar Administración?</a></h6>
                        <p class="fs-14 mb-3">Estudiar Administración te permite adquirir los conocimientos y habilidades necesarios para
                            dirigir, planificar y coordinar los recursos de una empresa u organización. Es una carrera que forma líderes capaces de tomar
                             decisiones, resolver problemas y alcanzar objetivos de manera eficiente. Además, brinda una visión integral de áreas como
                              finanzas, recursos humanos, marketing y emprendimiento, preparando al profesional para desenvolverse en distintos sectores
                              laborales o incluso crear su propio negocio.</p>
                        <p class="mb-3 text-truncate line-clamb-2"></p>
                        <div>
                            <!--<i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i> -->
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                            <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                               <!-- <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-42.jpg" alt="img"></a>-->
                            </div>
                            <!--<i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i> -->
                        </div>
                        <h6 class="mb-1"><a href="{{url('instructor-details')}}">El Futuro de la Administración</a></h6>
                        <p class="fs-14 mb-3"></p>El futuro de la Administración se orienta hacia la innovación, la tecnología y la sostenibilidad.
                         Los administradores del mañana deberán ser líderes éticos, digitales y capaces de adaptarse a los constantes cambios del
                          entorno empresarial global.
                        <p class="mb-3 text-truncate line-clamb-2"></p>
                        <div>
                            <!--<i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>-->
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                            <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                              <!--  <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-43.jpg" alt="img"></a>-->
                            </div>
                           <!-- <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i>-->
                        </div>
                        <h6 class="mb-1"><a href="{{url('instructor-details')}}">Competencias Clave del Administrador</a></h6>
                        <p class="fs-14 mb-3">Las competencias clave del administrador son el liderazgo, la comunicación, la toma de decisiones, la
                             planificación estratégica, la adaptabilidad, la ética y la capacidad de innovar.</p>
                        <p class="mb-3 text-truncate line-clamb-2"></p>
                        <div>
                          <!--  <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>-->
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                            <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                                <!--<a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-43.jpg" alt="img"></a>-->
                            </div>
                           <!-- <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i>-->
                        </div>
                        <h6 class="mb-1"><a href="{{url('instructor-details')}}">Administración y Responsabilidad Social</a></h6>
                        <p class="fs-14 mb-3">La Administración y la Responsabilidad Social van de la mano, ya que el administrador moderno debe dirigir las
                            organizaciones con ética, compromiso ambiental y enfoque humano, buscando no solo el éxito económico, sino también el bienestar
                            social.</p>
                        <p class="mb-3 text-truncate line-clamb-2"></p>
                        <div>
                           <!-- <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>-->
                        </div>
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
                        <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block"></span>
                        <h2>Preguntas Frecuentes</h2>
                        <p>Explore respuestas sobre las preguntas más comunes sobre nosotros!.</p>
                    </div>
                    <div class="faq-content">
                    <div class="accordion accordion-customicon1 accordions-items-seperate" id="accordioncustomicon1Example">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1One">
                                <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1One" aria-expanded="true" aria-controls="collapsecustomicon1One">
                                ¿Por qué elegirnos para tu educación?
                                 <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                                </a>
                            </h2>
                            <div id="collapsecustomicon1One" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1One" data-bs-parent="#accordioncustomicon1Example">
                                <div class="accordion-body pt-0">
                                 <p> En la Universidad Mariano Gálvez te formamos como un profesional competitivo en Administración de Empresas, mediante
                                     un plan de estudios actualizado y con enfoque práctico. Nuestra formación te prepara para destacar en el ámbito
                                     financiero y empresarial</p>
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
                                 <p>
                                 Puede encotrar más detalles en la sección de Centro de Informaciones para revisar el pensum de estudios o bien visitar la oficina
                                  de su Centro UMG más cercano.</p>
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
                                 <p>Podrás desempeñarte en cargos directivos, administrativos, financieros, comerciales o incluso como empresario independiente,
                                    gracias a tu formación integral, ética y con visión global.</p>
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
                                 <p> Constancia de Evaluación de Ubicación.  Completar Formulario de Nuevo Estudiante.  Original y fotocopia de DPI o pasaporte.
                                     Certificación original de Básicos y Diversificado.  Fotostática de título de 5 x 7 pulgadas. (sellado por Contraloría de
                                    Cuentas).  Dos fotografías recientes tamaño Cédula.  Efectuar los pagos de inscripción correspondientes .</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1Five">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Five" aria-expanded="false" aria-controls="collapsecustomicon1One">
                            ¿Qué necesito para traslado de otra universidad?<i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Five" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Five" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p> Certificación de matrícula.  Certificación de estudios (ambas de Universidad de procedencia).  Inversión
                                    (costos de preinscripción, inscripción, colegiaturas).  Costos de inscripción Q600.00  Costos de colegiatura Q560.00
                                    (Costos sujestos a cambios) .</p>
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
