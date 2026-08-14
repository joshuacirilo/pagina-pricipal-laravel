@extends('layout.mainlayout')
@section('content')
<main class="umg-faculty umg-faculty--trabajo-social" id="umg-trabajo-social">
    <x-umg-trabajo-social-story />
    <div class="umg-trabajo-social-band" id="umg-trabajo-social-pensum-screen">
        <x-umg-trabajo-social-pensum />
        <x-umg-trabajo-social-stats />
    </div>
    <x-umg-trabajo-social-faq />
</main>
@endsection
