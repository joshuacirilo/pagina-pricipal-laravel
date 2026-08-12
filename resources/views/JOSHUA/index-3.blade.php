<?php $page = 'index-3'; ?>

@extends('layout.mainlayout')
@section('content')

    <x-umg-parallax-hero />

    <x-umg-faculties />

    <x-umg-sistemas-landing />

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

@endsection
