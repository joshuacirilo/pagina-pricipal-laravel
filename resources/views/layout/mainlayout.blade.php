<!DOCTYPE html>
@if(Route::is(['index-rtl']))
<html lang="en" dir="rtl">
@else
<html lang="en">
@endif

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Branding UMG -->
    <title>Universidad Mariano Gálvez de Guatemala</title>
    <meta name="description" content="Portal institucional de la Universidad Mariano Gálvez de Guatemala. Conoce nuestras facultades, programas académicos, sedes y servicios estudiantiles.">
    <meta name="keywords" content="Universidad Mariano Gálvez, UMG, educación superior, Guatemala, facultades, carreras, sedes">
    <meta name="author" content="Universidad Mariano Gálvez de Guatemala">
    <meta name="robots" content="index, follow">

    {{-- CSS/JS del template --}}
@include('layout.partials.head')   {{-- aquí ya se cargó style.css --}}

{{-- Tema UMG: al final y una sola vez --}}
<link rel="stylesheet"
      href="{{ asset('build/css/umg-theme.css') }}?v={{ filemtime(public_path('build/css/umg-theme.css')) }}">

</head>

@php
  // Clases dinámicas para <body>
  $bodyClass = '';
  if (Route::is(['index-5','index-6'])) {
      $bodyClass = 'home-five';
  } elseif (Route::is(['error-404','error-500','under-construction'])) {
      $bodyClass = 'error-page';
  } elseif (Route::is(['coming-soon'])) {
      $bodyClass = 'error-page comming-soon-pg';
  } elseif (Route::is(['student-messages','instructor-chat'])) {
      $bodyClass = 'chat-page main-chat-blk';
  }

  // Wrapper principal
  $wrapClasses = 'main-wrapper';
  if (Route::is(['login','register'])) $wrapClasses .= ' log-wrap';
  if (Route::is(['index-6']))          $wrapClasses .= ' index-six';

  // Flags para wrappers secundarios por home-3/home-4
  $isHome3 = Route::is(['index-3']);
  $isHome4 = Route::is(['index-4']);

  // Algunas vistas no muestran header/footer
  $hideLayoutChrome = Route::is([
    'coming-soon','error-404','error-500','forgot-password','login',
    'new-password','register-step-five','register-step-four','register-step-one',
    'register-step-three','register-step-two','register','under-construction',
    'verification-code','view-invoice','lock-screen','otp','reset-password','set-password',
  ]);

  // Chat wrapper
  $useChatWrapper = Route::is(['student-messages','instructor-chat']);
@endphp

<body class="{{ $bodyClass }}">

    @if ($useChatWrapper)
      <div class="main-wrapper chat-wrapper">
    @endif

    <div class="{{ $wrapClasses }}">
        @if ($isHome3)
          <div class="home-3">
        @endif
        @if ($isHome4)
          <div class="home-4">
        @endif

        @unless($hideLayoutChrome)
          @include('layout.partials.header')
        @endunless

        @yield('content')

        @unless($hideLayoutChrome)
          @include('layout.partials.footer')
        @endunless

        @if ($isHome3)
          </div>
        @endif
        @if ($isHome4)
          </div>
        @endif
    </div>

    @if ($useChatWrapper)
      </div>
    @endif

    @component('components.modalpopup') @endcomponent

    @include('layout.partials.footer-scripts')

<script>
(() => {
  const header = document.getElementById('umgHeader');
  if (!header) return;

  const onScroll = () => {
    if (window.scrollY > 20) {
      header.classList.add('is-sticky');
      document.body.classList.add('scrolled');
    } else {
      header.classList.remove('is-sticky');
      document.body.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();
</script>


</body>
</html>
