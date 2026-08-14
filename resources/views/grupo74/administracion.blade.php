@extends('layout.mainlayout')
@section('content')
<main class="umg-faculty umg-faculty--administracion" id="umg-administracion">
    <x-umg-administracion-story />
    <div class="umg-administracion-band" id="umg-administracion-pensum-screen">
        <x-umg-administracion-pensum />
        <x-umg-administracion-stats />
    </div>
    <x-umg-administracion-faq />
</main>
@endsection
