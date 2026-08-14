@extends('layout.mainlayout')
@section('content')
<main class="umg-faculty umg-faculty--criminologia" id="umg-criminologia">
    <x-umg-criminologia-story />
    <div class="umg-criminologia-band" id="umg-criminologia-pensum-screen">
        <x-umg-criminologia-pensum />
        <x-umg-criminologia-stats />
    </div>
    <x-umg-criminologia-faq />
</main>
@endsection
