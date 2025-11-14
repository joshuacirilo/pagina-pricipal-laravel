<?php $page = 'instructor-assignment'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
        <br>
            <span class="badge" style="background-color: #3f3f3fff; color: white;">DERECHO</span>
        </br>
            Nuestros Instructores               @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Conoce a nuestros profesores        @endslot
    @endcomponent

    <!-- Instructores -->
    <div class="container py-5">
        <div class="row justify-content-center g-4">

            <!-- Información -->
<div class="col-md-7">
    <div class="card shadow-lg border-0 rounded-4 h-100">
    <div class="card-body ps-5 pe-4 pt-4 pb-4">
        <!-- Encabezado con imagen y datos -->
        <div class="d-flex align-items-center mb-4">
        <img src="{{ URL::asset('build/img/instructor/1.png') }}" 
     alt="Instructor" 
     class="me-3"
     style="width: 190px; height: 190px; object-fit: cover; border-radius: 50%; border: 2px solid #dee2e6;">

            <div>
                <h4 class="fw-bold text-primary mb-1">Lic. Falvio Arturo</h4>
                <span class="text-muted d-block">Licenciado en Ciencias Jurídicas y Sociales</span>
                <small class="text-secondary">Universidad Mariano Gálvez de Guatemala | Más de 10 años de experiencia</small>
            </div>
            </div>
        </div>

        <!-- Título y categoría -->
        <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
            <div class="card-body ps-5 pe-4 pt-4 pb-4">
            
        <!-- Título principal -->
        <h5 class="fw-bold mb-1 text-dark">
            <i class="fa-solid fa-user-tie me-2 text-primary"></i> Perfil Profesional
        </h5>
          <!-- Subtítulo debajo -->
        <span class="fw-semibold text-muted" style="font-size: 0.92rem;">
            Formación y experiencia destacada del instructor
        </span>

        </div>
        </div>

        <!-- Descripción -->
        <div class="mb-3">
            <div class="d-flex align-items-center mb-2 flex-wrap">
                <div class="card-body ps-5 pe-4 pt-4 pb-4">

                <span class="me-2 fw-semibold text-muted">Email:</span>
                <a href="javascript:void(0);" class="text-dark fw-medium me-3">flavio@miumg.edu.gt</a>
                <i class="fa-solid fa-star text-warning me-1"></i>
                <span class="fw-semibold">4.9</span>
                <span class="text-muted ms-1">(200 Reviews)</span>

            </div>
            </div>  
            <p class="text-muted mb-0">
                <div class="card-body ps-5 pe-4 pt-4 pb-4">
                Especialización Universitaria En Análisis Forense Digital Y Actuaciones Como Primeros Respondientes (Universidad Europea Miguel De Cervantes, Valladolid, España)
                </div>    
            </p>

        </div>

        <!-- Estadísticas y especialidades -->
        <div class="bg-light rounded-3 p-3 mb-3 d-flex justify-content-between align-items-center">
            <div>
                <span class="d-block fw-semibold mb-1">
                    <i class="isax isax-book-saved5 text-secondary me-2"></i>12+ Cursos Impartidos
                </span>
                <span class="d-block fw-semibold">
                    <i class="isax isax-profile-2user5 text-secondary me-2"></i>70+ Estudiantes
                </span>
            </div>
            <h6 class="fw-bold mb-1 text-secondary ms-1" style="margin-left: 0px;">Especialidades:</h6>
            <div class="text-end">
                <span class="badge bg-primary me-1">Notariado</span>
                <span class="badge bg-primary me-1">Derecho Penal y Civil</span>
                <span class="badge bg-primary me-1">Investigación Forense</span>
            </div>
        </div>

        <!-- Redes sociales -->
        <div class="d-flex align-items-center justify-content-end">
            <a href="#" class="rounded-circle d-inline-flex align-items-center justify-content-center me-2 border p-2">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="#" class="rounded-circle d-inline-flex align-items-center justify-content-center me-2 border p-2">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#" class="rounded-circle d-inline-flex align-items-center justify-content-center me-2 border p-2">
                <i class="fa-brands fa-x-twitter"></i>
            </a>
            <a href="#" class="rounded-circle d-inline-flex align-items-center justify-content-center me-2 border p-2">
                <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="#" class="rounded-circle d-inline-flex align-items-center justify-content-center border p-2">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
        </div>
    </div>
</div>

<!-- Tarjeta Derecha -->
<div class="col-md-4">
    <div class="card shadow-lg border-0 rounded-4 h-100">
        <div class="card-body text-center">
            <h5 class="fw-bold mb-3">Certificaciones</h5>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <img src="{{ URL::asset('build/img/instructor/umg.png') }}" alt="Cert" width="60" class="rounded-3 shadow-sm">
            </div>
            <hr class="my-3">
            <h6 class="fw-semibold text-secondary">Formación Académica</h6>
            <p class="text-muted small mb-0">Licenciatura en Ciencias Jurídicas y Sociales - UMG</p>
            <p class="text-muted small mb-0">Notariado - UMG</p>
            <p class="text-muted small mb-0">Derecho Penal y Civil - UMG</p>
            </div>
    </div>
</div>


        </div>
    </div>
    <!-- /Instructores -->

@endsection
