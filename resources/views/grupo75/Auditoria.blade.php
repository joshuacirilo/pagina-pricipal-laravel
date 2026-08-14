@extends('layout.mainlayout')
@section('content')
<main class="umg-faculty umg-faculty--auditoria" id="umg-auditoria">
    <x-umg-auditoria-story />
    <div class="umg-auditoria-band" id="umg-auditoria-pensum-screen">
        <x-umg-auditoria-pensum />
        <x-umg-auditoria-stats />
    </div>
    <x-umg-auditoria-faq />
</main>
@endsection
