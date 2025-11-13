@php
    // Header dinámico por ruta (por si más adelante quieres variar algo)
    $headerClasses = '';
    if (Route::is(['index-3'])) {
        $headerClasses = 'header-three position-fixed';
    } elseif (Route::is(['index-4'])) {
        $headerClasses = 'header-four';
    } else {
        $headerClasses = 'header-one';
    }
@endphp

<header id="umgHeader" class="{{ $headerClasses }}">
  <div class="container">
    <div class="header-nav">

      {{-- --- LOGO / MENU MÓVIL --- --}}
      <div class="navbar-header">
        <a id="mobile_btn" href="javascript:void(0);">
          <span class="bar-icon"><i class="isax isax-menu"></i></span>
        </a>

        <div class="navbar-logo">
          <a class="logo-white header-logo" href="{{ url('index-3') }}">
            <img src="{{ URL::asset('build/img/logo-white.svg') }}" class="logo" alt="Logo UMG">
          </a>
          <a class="logo-dark header-logo" href="{{ url('index-3') }}">
            <img src="{{ URL::asset('build/img/logo-white.svg') }}" class="logo" alt="Logo UMG">
          </a>
        </div>
      </div>

      {{-- --- MENÚ PRINCIPAL --- --}}
      <div class="main-menu-wrapper">
        <div class="menu-header">
          <a href="{{ url('index') }}" class="menu-logo">
            <img src="{{ URL::asset('build/img/logo.svg') }}" class="img-fluid" alt="Logo UMG">
          </a>
          <a id="menu_close" class="menu-close" href="javascript:void(0);">
            <i class="fas fa-times"></i>
          </a>
        </div>

        <ul class="main-nav">
          <li class="has-submenu">
            <a href="javascript:void(0);">Facultades <i class="fas fa-chevron-down"></i></a>
            <ul class="submenu">
              <li><a href="{{ route('derecho') }}">Derecho</a></li>
              <li><a href="{{ route('administracion') }}">Administración</a></li>
              <li><a href="{{ route('criminologia') }}">Criminología</a></li>
              <li><a href="{{ route('sistemas-redes-sociales') }}">Sistemas</a></li>
              <li><a href="{{ route('trabajo-social') }}">Trabajo Social</a></li>
              <li><a href="{{ route('auditoria') }}">Auditoría</a></li>
            </ul>
          </li>
          <li><a href="https://umg.edu.gt/admisiones" target="_blank">Admisiones</a></li>
          <li><a href="https://umg.edu.gt/info" target="_blank">Centro de Informaciones</a></li>
          <li><a href="https://es.wikipedia.org/wiki/Blog" target="_blank">Blog</a></li>
        </ul>

        {{-- --- DROPDOWNS Y LOGIN MOBILE --- --}}
        <div class="menu-dropdown">

        </div>

        <div class="menu-login">
         <a href="{{ url('https://apps2.umg.edu.gt/') }}" class="btn btn-primary d-inline-flex align-items-center me-2">
          CANVAS
        </a>
        </div>
      </div>

      {{-- --- BOTONES DERECHA (ESCRITORIO) --- --}}
      <div class="header-btn d-flex align-items-center">

        <a href="{{ url('https://apps2.umg.edu.gt/') }}" class="btn btn-primary d-inline-flex align-items-center me-2">
          CANVAS
        </a>

      </div>
    </div>
  </div>
</header>
