<?php $page = 'contacto'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Contáctanos
        @endslot
        @slot('item1')
            Inicio
        @endslot
        @slot('item2')
            Contáctanos
        @endslot
    @endcomponent

    <section class="contact-sec">
        <div class="container">
            <div class="contact-info">
                <div class="row row-gap-3">
                    <!-- Dirección -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-body border p-sm-4">
                            <div class="d-flex align-items-center">
                                <div class="contact-icon">
                                    <span class="bg-primary fs-24 rounded-3 d-flex justify-content-center align-items-center">
                                        <i class="isax isax-location5 text-white"></i>
                                    </span>
                                </div>
                                <div class="ps-3">
                                    <h5 class="mb-1">Dirección</h5>
                                    <address class="mb-0">
                                        3a. avenida 9-00 zona 2, Ciudad de Guatemala, Guatemala
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Teléfono -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-body border p-sm-4">
                            <div class="d-flex align-items-center">
                                <div class="contact-icon">
                                    <span class="bg-primary fs-24 rounded-3 d-flex justify-content-center align-items-center">
                                        <i class="isax isax-headphone5 text-white"></i>
                                    </span>
                                </div>
                                <div class="ps-3">
                                    <h5 class="mb-1">Teléfono</h5>
                                    <p class="mb-0">
                                        <a href="tel:+50224111800" class="text-gray-5 text-primary-hover text-decoration-underline mb-0">
                                            (502) 2411-1800
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Correo electrónico -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-body border p-sm-4">
                            <div class="d-flex align-items-center">
                                <div class="contact-icon">
                                    <span class="bg-primary fs-24 rounded-3 d-flex justify-content-center align-items-center">
                                        <i class="isax isax-message5 text-white"></i>
                                    </span>
                                </div>
                                <div class="ps-3">
                                    <h5 class="mb-1">Correo electrónico</h5>
                                    <p class="mb-0">
                                        <a href="mailto:info@umg.edu.gt" class="text-gray-5 text-primary-hover text-decoration-underline mb-0">
                                            info@umg.edu.gt
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulario de contacto -->
            <div class="bg-light border rounded-4 p-4 p-sm-5 p-md-6">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-details">
                            <div class="section-header">
                                <span class="section-badge">
                                    Contáctanos
                                </span>
                                <h2>Ponte en contacto con nosotros hoy</h2>
                                <p>
                                    Comunícate con nosotros para conocer cómo nuestras soluciones pueden mejorar tu experiencia educativa. 
                                    ¡Estamos aquí para ayudarte a construir un entorno de aprendizaje más dinámico y eficiente!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-0">
                            <div class="card-body p-4 p-sm-5 p-md-6">
                                <h4 class="mb-3">Envíanos un mensaje</h4>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6 mb-4 mb-sm-0">
                                            <div class="mb-4">
                                                <label class="form-label">Nombre <span class="ms-1 text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Tu nombre">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label class="form-label">Correo electrónico <span class="ms-1 text-danger">*</span></label>
                                                <input type="email" class="form-control form-control-lg" placeholder="Tu correo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-4 mb-sm-0">
                                            <div class="mb-4">
                                                <label class="form-label">Teléfono</label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Tu número de teléfono">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label class="form-label">Asunto</label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Asunto del mensaje">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Mensaje</label>
                                        <textarea class="form-control form-control-lg" rows="4" placeholder="Escribe tu mensaje aquí..."></textarea>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-secondary btn-lg">Enviar mensaje</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mapa actualizado -->
            <div class="contact-map rounded-4 overflow-hidden">
        <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.282825654911!2d-90.5133783!3d14.6589478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a209e1ffbfdd%3A0x12b0303b26e4ecd6!2sUniversidad%20Mariano%20G%C3%A1lvez%20de%20Guatemala!5e0!3m2!1ses!2sgt!4v1730169600000!5m2!1ses!2sgt" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

@endsection
