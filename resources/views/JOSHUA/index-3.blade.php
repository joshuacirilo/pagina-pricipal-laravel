<?php $page = 'index-3'; ?>

@extends('layout.mainlayout')
@section('content')

    <x-umg-parallax-hero />

    <x-umg-faculties />

    <x-umg-coordinator />

    <!-- Trending Course -->
    <div class="section trend-course">
        <div class="home-three-sec-bg">

        </div>
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 aos" data-aos="fade-up">
                <div class="section-header w-100 text-center">
                    <span class="fw-medium text-secondary fs-18 fw-bold mb-2 d-inline-block">Egresados Destacados</span>
                    <h2 class="mb-0">Orgullo de la Universidad Mariano Gálvez</h2>
                </div>
            </div>

        <div class="trending-course owl-theme aos" data-aos="fade-up">

            <!-- Egresado 1 -->
            <div>
                <div class="course-box trend-box">
                    <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">

                        <div class="course-img text-center">
                            <a href="#">
                                <img class="img-fluid" alt="Egresado" src="{{URL::asset('build/img/index/egresado1.png')}}">
                            </a>
                        </div>

                        <div class="course-content text-center mt-3">
                            <h3 class="title mb-2">
                                <a href="#">Luis Fernando López</a>
                            </h3>

                            <p class="mb-1"><strong>Carrera:</strong> Ingeniería en Sistemas</p>
                            <p class="mb-1"><strong>Graduación:</strong> Promoción 2021</p>
                            <p class="mb-2"><strong>Empresa:</strong> Tigo Guatemala</p>

                            <blockquote class="fst-italic text-secondary" style="font-size: 0.9rem;">
                                “La UMG me dio las herramientas para crear soluciones que impactan a miles de usuarios.”
                            </blockquote>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Egresado 2 -->
            <div>
                <div class="course-box trend-box">
                    <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">

                        <div class="course-img text-center">
                            <a href="#">
                                <img class="img-fluid" alt="Egresado" src="{{URL::asset('build/img/index/egresado3.png')}}">
                            </a>
                        </div>

                        <div class="course-content text-center mt-3">
                            <h3 class="title mb-2">
                                <a href="#">María José Herrera</a>
                            </h3>

                            <p class="mb-1"><strong>Carrera:</strong> Administración de Empresas</p>
                            <p class="mb-1"><strong>Graduación:</strong> Promoción 2020</p>
                            <p class="mb-2"><strong>Empresa:</strong> Banco Industrial</p>

                            <blockquote class="fst-italic text-secondary" style="font-size: 0.9rem;">
                                “En la UMG descubrí mi pasión por liderar proyectos con impacto humano.”
                            </blockquote>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Egresado 3 -->
            <div>
                <div class="course-box trend-box">
                    <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">

                        <div class="course-img text-center">
                            <a href="#">
                                <img class="img-fluid" alt="Egresado" src="{{URL::asset('build/img/index/Egresado2.png')}}">
                            </a>
                        </div>

                        <div class="course-content text-center mt-3">
                            <h3 class="title mb-2">
                                <a href="#">Carlos Medina</a>
                            </h3>

                            <p class="mb-1"><strong>Carrera:</strong> Ciencias Jurídicas y Sociales</p>
                            <p class="mb-1"><strong>Graduación:</strong> Promoción 2019</p>
                            <p class="mb-2"><strong>Empresa:</strong> Ministerio Público</p>

                            <blockquote class="fst-italic text-secondary" style="font-size: 0.9rem;">
                                “Servir a Guatemala con justicia es el mayor honor que la UMG me permitió alcanzar.”
                            </blockquote>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <!--Congresos-->

                <div class="section-header w-100 text-center">
                    <h2 class="mb-0">Eventos Importantes</h2>
                </div>

                <div class="instructors-course owl-carousel aos" data-aos="fade-up" data-autoplay="true">
                    <!-- 1 -->
                    <div class="instructor-item instructor-item-two">
                        <div class="instructors-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/index/congresoderecho.jpeg')}}">
                        </div>
                        <div class="instructor-content text-center">
                            <h3 class="title">Congreso de Derecho Penal</h3>
                            <p class="text-secondary">Análisis jurídico sobre reformas penales y aplicación en Guatemala.</p>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="instructor-item instructor-item-two">
                        <div class="instructors-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/index/congresoadministracion.jpeg')}}">
                        </div>
                        <div class="instructor-content text-center">
                            <h3 class="title">Congreso de Administración</h3>
                            <p class="text-secondary">Tendencias modernas en liderazgo, emprendimiento y gestión empresarial.</p>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="instructor-item instructor-item-two">
                        <div class="instructors-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/index/congresocriminologia.jpeg')}}">
                        </div>
                        <div class="instructor-content text-center">
                            <h3 class="title">Congreso de Criminología</h3>
                            <p class="text-secondary">Investigación criminal, perfiles criminológicos y prevención del delito.</p>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="instructor-item instructor-item-two">
                        <div class="instructors-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/index/congresotrabajosocial.jpeg')}}">
                        </div>
                        <div class="instructor-content text-center">
                            <h3 class="title">Congreso de Trabajo Social</h3>
                            <p class="text-secondary">Acción comunitaria y fortalecimiento de políticas de bienestar social.</p>
                        </div>
                    </div>

                    <!-- 5 -->
                    <div class="instructor-item instructor-item-two">
                        <div class="instructors-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/index/congresosistemas.jpg')}}">
                        </div>
                        <div class="instructor-content text-center">
                            <h3 class="title">Congreso de Ingeniería en Sistemas</h3>
                            <p class="text-secondary">Ciberseguridad, desarrollo de software y tendencias tecnológicas.</p>
                        </div>
                    </div>

                    <!-- 6 -->
                    <div class="instructor-item instructor-item-two">
                        <div class="instructors-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/index/congresocriminologia.jpeg')}}">
                        </div>
                        <div class="instructor-content text-center">
                            <h3 class="title">Congreso de Auditoría</h3>
                            <p class="text-secondary">Normas internacionales de auditoría y control financiero moderno.</p>
                        </div>
                    </div>
                </div>

                <script>
                $('.instructors-course').owlCarousel({
                    loop: true,
                    margin: 20,
                    autoplay: true,
                    autoplayTimeout: 2500,
                    autoplayHoverPause: false,
                    responsive:{
                        0:{ items:1 },
                        768:{ items:2 },
                        1024:{ items:3 }
                    }
                });
                </script>


        </div>
    </div>
    <!-- /Trending Course -->

   <!-- Estudiar en Mariano Gálvez -->
<div class="section share-knowledge">
    <div class="home-three-sec-bg">
        <img src="{{URL::asset('build/img/bg/bg-3.png')}}" alt="img" class="img-fluid sec-bg-01">
        <img src="{{URL::asset('build/img/bg/bg-4.png')}}" alt="img" class="img-fluid sec-bg-02">
    </div>
    <div class="container">
        <div class="row align-items-center row-gap-4">

            <!-- Imagen lateral -->
            <div class="col-md-6">
                <div class="knowledge-img aos" data-aos="fade-up">
                    <img src="{{URL::asset('build/img/index/EstudiantesU.png')}}" alt="Img" class="img-fluid">
                </div>
            </div>

            <!-- Texto principal -->
            <div class="col-md-6 d-flex align-items-center">
                <div class="join-mentor aos" data-aos="fade-up">
                    <h2>¿Por qué estudiar en la Universidad Mariano Gálvez?</h2>
                    <p>
                        Formar parte de la <strong>Universidad Mariano Gálvez</strong> significa acceder a una educación con excelencia académica, valores cristianos y una sólida formación profesional.
                        La UMG ofrece las herramientas necesarias para desarrollarte con éxito en el ámbito laboral y personal.
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex mb-3">
                            <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Programas académicos actualizados y de alta calidad
                        </li>
                        <li class="d-flex mb-3">
                            <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Docentes altamente capacitados y con experiencia profesional
                        </li>
                        <li class="d-flex mb-3">
                            <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Infraestructura moderna y recursos tecnológicos
                        </li>
                        <li class="d-flex mb-3">
                            <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Formación basada en valores éticos y humanos
                        </li>
                        <li class="d-flex mb-3">
                            <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Amplias oportunidades de crecimiento profesional
                        </li>
                    </ul>
                    <div>
                        <a href="https://umg.edu.gt/info?_gl=1*11y41d7*_ga*MTA1MjQyNDMyMi4xNzYxNzk0NjU4*_ga_HV9W4QM6V6*czE3NjMwMDg3ODIkbzgkZzAkdDE3NjMwMDg3ODIkajYwJGwwJGgw" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-xl">Conoce Más</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /Estudiar en Mariano Gálvez -->


<!-- Testimoniales / Frases Motivadoras -->
<div class="testimonial-four">
    <div class="review">
        <div class="container">
            <div class="section-header text-center aos" data-aos="fade-up">
                <span class="fw-medium text-white fs-18 fw-bold mb-2 d-inline-block">Palabras que inspiran</span>
                <h2 class="text-white mb-0">Descubre la pasión por aprender en la UMG</h2>
            </div>

            <div class="mentor-testimonial lazy slider aos" data-aos="fade-up" data-sizes="50vw">

                <!-- Frase 1 -->
                <div class="d-flex justify-content-center">
                    <div class="testimonial-all">
                        <div class="testimonial-quotes">
                            <img src="{{URL::asset('build/img/icons/icon-28.png')}}" alt="Icono">
                        </div>
                        <div class="testimonial-content text-center align-items-center d-flex">
                            <div class="testimonial-info">
                                <div class="testimonial-icon">
                                    <img src="{{URL::asset('build/img/icons/icon-29.png')}}" alt="Icono">
                                </div>
                                <p>
                                    “En la Universidad Mariano Gálvez formamos profesionales con propósito, capaces de transformar su entorno a través del conocimiento y los valores.”
                                </p>
                                <div class="testimonial-user">
                                    <div class="user-img">
                                        <img src="{{URL::asset('build/img/index/frase1.png')}}" alt="Img" class="img-fluid">
                                    </div>
                                    <h6>Universidad Mariano Gálvez</h6>
                                    <span>Educación con valores y excelencia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Frase 2 -->
                <div class="d-flex justify-content-center">
                    <div class="testimonial-all">
                        <div class="testimonial-quotes">
                            <img src="{{URL::asset('build/img/icons/icon-28.png')}}" alt="Icono">
                        </div>
                        <div class="testimonial-content text-center align-items-center d-flex">
                            <div class="testimonial-info">
                                <div class="testimonial-icon">
                                    <img src="{{URL::asset('build/img/icons/icon-29.png')}}" alt="Icono">
                                </div>
                                <p>
                                    “Cada carrera es una oportunidad para descubrir tu potencial y dejar huella en el mundo. En la UMG, el futuro lo construyes tú.”
                                </p>
                                <div class="testimonial-user">
                                    <div class="user-img">
                                        <img src="{{URL::asset('build/img/index/frase2.png')}}" alt="Img" class="img-fluid">
                                    </div>
                                    <h6>Facultad de Ingeniería</h6>
                                    <span>Innovación y liderazgo tecnológico</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Frase 3 -->
                <div class="d-flex justify-content-center">
                    <div class="testimonial-all">
                        <div class="testimonial-quotes">
                            <img src="{{URL::asset('build/img/icons/icon-28.png')}}" alt="Icono">
                        </div>
                        <div class="testimonial-content text-center align-items-center d-flex">
                            <div class="testimonial-info">
                                <div class="testimonial-icon">
                                    <img src="{{URL::asset('build/img/icons/icon-29.png')}}" alt="Icono">
                                </div>
                                <p>
                                    “Estudiar en la UMG no solo te prepara para una profesión, te enseña a servir con integridad, fe y compromiso hacia los demás.”
                                </p>
                                <div class="testimonial-user">
                                    <div class="user-img">
                                        <img src="{{URL::asset('build/img/index/frase2.png')}}" alt="Img" class="img-fluid">
                                    </div>
                                    <h6>Comunidad UMG</h6>
                                    <span>Comprometidos con la excelencia humana</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Frase 4 -->
                <div class="d-flex justify-content-center">
                    <div class="testimonial-all">
                        <div class="testimonial-quotes">
                            <img src="{{URL::asset('build/img/icons/icon-28.png')}}" alt="Icono">
                        </div>
                        <div class="testimonial-content text-center align-items-center d-flex">
                            <div class="testimonial-info">
                                <p>
                                    “El conocimiento es poder, pero los valores son la guía. En la UMG cultivamos ambos para formar líderes con propósito.”
                                </p>
                                <div class="testimonial-user">
                                    <div class="user-img">
                                        <img src="{{URL::asset('build/img/index/frase3.png')}}" alt="Img" class="img-fluid">
                                    </div>
                                    <h6>Facultad de Humanidades</h6>
                                    <span>Formación integral y humana</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Frase 5 -->
                <div class="d-flex justify-content-center">
                    <div class="testimonial-all">
                        <div class="testimonial-quotes">
                            <img src="{{URL::asset('build/img/icons/icon-28.png')}}" alt="Icono">
                        </div>
                        <div class="testimonial-content text-center align-items-center d-flex">
                            <div class="testimonial-info">

                                <p>
                                    “Cada día de estudio es un paso más hacia tus sueños. En la UMG, creemos en ti y en el poder de tu esfuerzo.”
                                </p>
                                <div class="testimonial-user">
                                    <div class="user-img">
                                        <img src="{{URL::asset('build/img/index/frase2.png')}}" alt="Img" class="img-fluid">
                                    </div>
                                    <h6>Estudiantes UMG</h6>
                                    <span>Pasión, esfuerzo y crecimiento constante</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- /slider -->
        </div>
    </div>
</div>
<!-- /Testimoniales / Frases Motivadoras -->



    <!-- Blog -->
    <div class="section latest-blog">
        <div class="home-three-sec-bg">
            <img src="{{URL::asset('build/img/bg/bg-3.png')}}" alt="img" class="img-fluid sec-bg-01">
            <img src="{{URL::asset('build/img/bg/bg-4.png')}}" alt="img" class="img-fluid sec-bg-02">
        </div>
        <div class="container">
            <div class="section-header text-center aos" data-aos="fade-up">
                <h2>Noticias UMG</h2>
                <p class="mb-0">Mantente informado sobre actividades, logros y eventos importantes de la Universidad Mariano Gálvez</p>
            </div>

            <div class="row row-gap-4 justify-content-center">

                <!-- Blog 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-wrap shadow-sm mb-0">
                        <div class="blog-img">
                            <a href="{{ route('conts') }}" target="_blank">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/index/blog1.png')}}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-info mb-3">
                                <a href="javascript:void(0);" class="blog-category">UMG</a>
                                <p class="blog-date"><i class="isax isax-calendar-1"></i>Feb 10, 2025</p>
                            </div>
                            <h5>
                                <a href="{{ route('conts') }}" target="_blank">
                                    UMG inaugura nuevos programas académicos en sus sedes departamentales
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-wrap shadow-sm mb-0">
                        <div class="blog-img">
                            <a href="{{ route('conts') }}" target="_blank">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/index/blog2.jpeg')}}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-info mb-3">
                                <a href="javascript:void(0);" class="blog-category">Educación</a>
                                <p class="blog-date"><i class="isax isax-calendar-1"></i>Feb 12, 2025</p>
                            </div>
                            <h5>
                                <a href="{{ route('conts') }}" target="_blank">
                                    UMG fortalece proyectos de investigación para el desarrollo del país
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-wrap shadow-sm mb-0">
                        <div class="blog-img">
                            <a href="{{ route('conts') }}" target="_blank">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/index/blog3.jpeg')}}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-info mb-3">
                                <a href="javascript:void(0);" class="blog-category">Eventos</a>
                                <p class="blog-date"><i class="isax isax-calendar-1"></i>Feb 14, 2025</p>
                            </div>
                            <h5>
                                <a href="{{ route('conts') }}" target="_blank">
                                    Congreso académico reúne a estudiantes y profesionales en la UMG
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>

    <!-- /Blog -->

@endsection
