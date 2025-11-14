<?php $page = 'instructor-assignment'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Conoce a nuestros profesores        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Conoce a nuestros profesores        @endslot
    @endcomponent
        <!-- Instructor -->
        <!-- Instructor -->
        <div class="container py-5">
        <div class="row justify-content-center g-4">

            <!-- Información -->
<div class="col-md-7">
    <div class="card shadow-lg border-0 rounded-4 h-100">
    <div class="card-body ps-5 pe-4 pt-4 pb-4">
        <!-- Encabezado con imagen y datos -->
        <div class="d-flex align-items-center mb-4">
        <img src="{{ URL::asset('build/img/instructor/cordinadora admi.jpg') }}"
     alt="Instructor"
     class="me-3"
     style="width: 190px; height: 190px; object-fit: cover; border-radius: 50%; border: 2px solid #dee2e6;">

            <div>
                <h4 class="fw-bold text-primary mb-1">Licda. Heissell Yesenia Grajeda Solis (COORDINADORA)</h4>
                <span class="text-muted d-block">Instructora Senior en Administración</span>
                <small class="text-secondary">UMG Guastatoya | 10 años de experiencia</small>
            </div>
            </div>
        </div>

        <!-- Título y categoría -->
        <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
            <div class="card-body ps-5 pe-4 pt-4 pb-4">
            <h5 class="fw-bold mb-0 text-dark">Especialidad Principal</h5>
        </div>
        </div>

        <!-- Descripción -->
        <div class="mb-3">
            <div class="d-flex align-items-center mb-2 flex-wrap">
                <div class="card-body ps-5 pe-4 pt-4 pb-4">

                <span class="me-2 fw-semibold text-muted">Administración</span>
                <a href="javascript:void(0);" class="text-dark fw-medium me-3"> </a>
                <!--<i class="fa-solid fa-star text-warning me-1"></i>
                <span class="fw-semibold">4.9</span>
                <span class="text-muted ms-1">(200 Reviews)</span>-->

            </div>
            </div>
            <p class="text-muted mb-0">
                <div class="card-body ps-5 pe-4 pt-4 pb-4">
                Licenciada con amplia formación académica y experiencia en gestión educativa. Se desempeña como Coordinadora de Facultad,
                función en la que dirige, organiza y supervisa las actividades académicas y administrativas del área a su cargo.
                Destaca por su liderazgo, responsabilidad y capacidad para trabajar con estudiantes, docentes y autoridades universitarias.
                </div>
            </p>

        </div>

        <!-- Estadísticas y especialidades -->
        <div class="bg-light rounded-3 p-3 mb-3 d-flex justify-content-between align-items-center">
            <div>
                <span class="d-block fw-semibold mb-1">
                    <i class="isax isax-book-saved5 text-secondary me-2"></i>40+ Lecciones
                </span>
                <span class="d-block fw-semibold">
                    <i class="isax isax-profile-2user5 text-secondary me-2"></i>300 Estudiantes
                </span>
            </div>
            <h6 class="fw-bold mb-1 text-primary ms-1" style="margin-left: 0px;">Especialidades:</h6>
            <div class="text-end">
                <span class="badge bg-primary me-1">Administración Estratégica</span>
                <span class="badge bg-success me-1">Administración Pública</span>
                <span class="badge bg-info text-dark">Administración Internacional</span>
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
               <!-- <img src="{{ URL::asset('build/img/badges/badge-01.png') }}" alt="Cert" width="60" class="rounded-3 shadow-sm">
                <img src="{{ URL::asset('build/img/badges/badge-02.png') }}" alt="Cert" width="60" class="rounded-3 shadow-sm">
                <img src="{{ URL::asset('build/img/badges/badge-03.png') }}" alt="Cert" width="60" class="rounded-3 shadow-sm">-->
            </div>
            <hr class="my-3">
            <h6 class="fw-semibold text-secondary">Formación Académica</h6>
            <p class="text-muted small mb-0">Licenciada en Administración de Empresas <br> </p>
        </div>
    </div>
</div>


        </div>
    </div>
        <!-- /Instructor -->
@endsection
