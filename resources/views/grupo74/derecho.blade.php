@extends('layout.mainlayout')
@section('content')
<main class="umg-faculty umg-faculty--derecho" id="umg-derecho">
    <x-umg-derecho-story />
    <div class="umg-derecho-band" id="umg-derecho-pensum-screen">
        <x-umg-derecho-pensum />
        <x-umg-derecho-stats />
    </div>
    <x-umg-derecho-faq />
</main>
@endsection
