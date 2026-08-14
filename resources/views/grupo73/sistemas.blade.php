@extends('layout.mainlayout')
@section('content')
<main class="umg-faculty umg-faculty--sistemas" id="umg-sistemas">
    <x-umg-sistemas-story />
    <div class="umg-sistemas-band" id="umg-sistemas-pensum-screen">
        <x-umg-sistemas-pensum />
        <x-umg-sistemas-stats />
    </div>
    <x-umg-sistemas-faq />
</main>
@endsection
