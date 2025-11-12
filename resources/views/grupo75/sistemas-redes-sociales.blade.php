<?php $page = 'about-us'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
            About Us
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            About Us
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
                    <!-- Imagen portada-->
                    <img class="img-fluid img-radius" src="/build/img/about/aboutIngSistemas/encendido-computadora-portatil-gris.jpeg" alt="img">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-0 ps-lg-2 pt-4 pt-lg-0 ps-xl-5">
                        <div class="section-header">

                            <h2>Ingeniería en Sistemas y Ciencias de la Computación</h2>
                            <p>La carrera de Ingeniería en Sistemas de la UMG forma profesionales de alto nivel mediante un plan de estudios innovador, docentes especializados y laboratorios equipados con tecnología actualizada. Prepárate para gestionar sistemas de información y desarrollar proyectos alineados a las necesidades de la industria tecnológica.</p>
                        </div>
                        <div class="d-flex align-items-center about-us-banner">
                            <div>
                                <span class="bg-primary-transparent rounded-3 p-2 about-icon d-flex justify-content-center align-items-center">
                                    <i class="isax isax-book-1 fs-24"></i>
                                </span>
                            </div>
                            <div class="ps-3">
                                <h6 class="mb-2">Título académico a obtener</h6>
                                <p>Ingeniero en Sistemas de Información y Ciencias de la Computación.</p>
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

    <!-- benefits -->
    <section class="benefit-section">
        <div class="container">
            <div class="section-header text-center">

                <h2>Desarrolla tu potencial y lidera en tu profesión</h2>
                <p>Desarrolla tu potencial y lidera en tu profesión con la mentoría de expertos en tecnología que transformarán tu visión profesional.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <div class="position-absolute top-0 end-0 mt-n3 me-n4">

                            </div>
                            <div class="p-4 rounded-pill bg-primary-transparent d-inline-flex">
                                <i class="isax isax-book-1 fs-24"></i>
                            </div>
                            <h5 class="mt-3 mb-1">¿Qué Aprenderás?</h5>
                            <p>Aprenderás a solucionar problemas de forma creativa e innovadora por medio del desarrollo de software, la administración de sistemas informáticos y bases de datos, la implementación de redes y sistemas operativos y el uso avanzado de las telecomunicaciones; adquirirás conocimientos teóricos y prácticos para desempeñarte exitosamente en el desarrollo, implementación y gestión de proyectos tecnológicos para el sector empresarial privado o público en el entorno global.</p>
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
                            <p>El aspirante ideal para Ingeniería en Sistemas en la UMG posee sólida base en matemáticas, capacidad de resolver problemas e interés genuino por la tecnología. Debe ser adaptable para aprender lenguajes de programación y mantenerse actualizado en la evolución tecnológica..</p>
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
                            <p>El ingeniero en Sistemas de la UMG domina fundamentos clave como algoritmos, bases de datos, redes y desarrollo de software, integrando teoría y práctica para diseñar, implementar y gestionar proyectos tecnológicos complejos con calidad y eficiencia.</p>
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
                     onclick="window.location='{{ route('detalles-instructor-sistemas1') }}'">
                    <img src="{{ asset('build/img/instructor/IngSistemasInstructor/IngOscarValientePerfil.jpg') }}" class="card-img-top" alt="Profesor 1">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Ing Oscar Valiente </h5>
                        <p class="card-text text-muted">Coordinador de Facultad e Ing en Sistemas de la Información y Ciencias de la Computación (experiencia en CiberSeguridad y Administración de Sistemas).</p>
                    </div>
                </div>
            </div>

            <!-- Instructor 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-sistemas2') }}'">
                    <img src="{{ asset('build/img/instructor/IngSistemasInstructor/IngRichardOrtizPerfil.jpeg') }}" class="card-img-top" alt="Profesor 2">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Ing Richard Ortiz</h5>
                        <p class="card-text text-muted">Ing en Sistemas de la Información y Ciencias de la Computación (experiencia en CiberSeguridad) .</p>
                    </div>
                </div>
            </div>

            <!-- Instructor 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100 instructor-card" style="cursor:pointer;"
                     onclick="window.location='{{ route('detalles-instructor-sistemas3') }}'">
                    <img src="{{ asset('build/img/instructor/IngSistemasInstructor/IngOttoOrtizPerfil.jpeg') }}" class="card-img-top" alt="Profesor 3">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Ing Otto Ortíz</h5>
                        <p class="card-text text-muted">Ing en Sistemas de la Información y Ciencias de la Computación (experiencia en AWS Solutions).</p>
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
                                <!--
                                <div class="counter-icon">
                                    <img src="./build/img/icons/counter-icon2.svg" alt="img">
                                </div>
                                -->
                                <div class="count-content">
                                    <h4 class="text-warning"><span class="count-digit">10</span>+</h4>
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
                            <!--
                            <div class="counter-icon">
                            <img src="./build/img/icons/counter-icon4.svg" alt="img">
                            </div>
                            -->
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
                <h2>Ingeniería en Sistemas</h2>
                <p>Es la disciplina que diseña, implementa y optimiza soluciones tecnológicas integrales, combinando conocimientos en software, hardware, redes y gestión de datos para resolver problemas complejos y impulsar la transformación digital en organizaciones.</p>
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
                        <h6>¿Por qué estudiar Ingeniería en Sistemas?</h6>
                        <p class="fs-14 mb-3">Porque es la carrera con mayor demanda en el mercado digital actual. Te prepara para crear soluciones tecnológicas innovadoras, trabajar en proyectos globales y desarrollar competencias en áreas como inteligencia artificial, ciberseguridad y desarrollo de software, con un campo laboral en constante crecimiento.</p>

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
                        <h6 class="mb-1">El Futuro de la Ingeniería en Sistemas</h6>
                        <p class="mb-3 text-truncate line-clamb-2">La demanda de ingenieros en sistemas sigue en crecimiento constante, con nuevas oportunidades en campos como la ciberseguridad, la inteligencia artificial y el análisis de datos. Estos profesionales son clave para la transformación digital de empresas e instituciones, impulsando la innovación y optimizando procesos en todos los sectores productivos..</p>
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
                        <h6 class="mb-1">Competencias Clave del Ingeniero en Sistemas</h6>
                        <p class="mb-3 text-truncate line-clamb-2">Un ingeniero en sistemas destaca por su capacidad para analizar, diseñar e implementar soluciones tecnológicas eficientes. Entre sus competencias principales se incluyen el pensamiento crítico, la gestión de proyectos, el trabajo en equipo y la comunicación efectiva, habilidades que complementan su conocimiento técnico especializado.</p>
                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                        </div>
                        <h6 class="mb-1">Ingeniería en Sistemas y Responsabilidad Social</h6>
                        <p class="mb-3 text-truncate line-clamb-2">Más allá del aspecto técnico, la carrera forma profesionales conscientes de su impacto social. Los ingenieros en sistemas pueden desarrollar soluciones inclusivas, promover el acceso a la tecnología y contribuir a resolver problemáticas sociales a través de innovaciones con sentido humano.</p>
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
                        <img class="img-fluid rounded-4" src="{{URL::asset('/build/img/about/abouIngSistemas/pabellonUMG.jpeg')}}" alt="img">
                        <div class="bg-warning text-center p-3 rounded-5 position-absolute top-0 end-0 z-index-1 d-none d-sm-block my-3 mx-3">
                            <i class="isax isax-message-question5 heading-color fs-46"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-header">
                        <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">FAQs</span>
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
                                 <p>En UMG te formamos como un profesional competitivo en tecnología, con un plan de estudios estructurado y con enfoque práctico que te prepara para destacar en el sector tecnológico nacional e internacional</p>
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
                                 <p>La carrera de Ingeniería en Sistemas integra formación en matemáticas, física y electrónica con asignaturas centrales como programación, bases de datos, redes, inteligencia artificial y seguridad informática. Incluye también cursos de gestión tecnológica, emprendimiento y proyectos de grado para un desarrollo profesional integral. Puede encontrar más información en la sección de <strong>Centro de Informaciones</strong> o bien visitar la oficina del Centro UMG Guastatoya.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1Three">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three" aria-expanded="false" aria-controls="collapsecustomicon1One">
                            ¿En qué podrás desempeñarte como Ing en Sistemas? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Three" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Three" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>Podrás trabajar en desarrollo de software, auditoría de sistemas, administración de infraestructura tecnológica, gestión de redes, dirección de departamentos de TI, gestión de proyectos tecnológicos y seguridad informática, tanto en el sector público como privado.</p>
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
