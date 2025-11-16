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


<!-- Construcción -->
<section class="construccion-section py-5 d-flex align-items-center">
    <div class="container text-center">

        <div class="construccion-box mx-auto p-4">
            <img
                src="{{ URL::asset('build/img/index/pagina_construccion.png') }}"
                alt="En Construcción"
                class="img-fluid construccion-img"
            >

            <h3 class="mt-4 text-primary fw-bold">Página en Construcción</h3>
            <p class="text-muted mb-0">
                Estamos trabajando para brindarte una mejor experiencia.
            </p>
        </div>

    </div>
</section>
<!-- /Construcción -->



@endsection
