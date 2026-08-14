<!-- jQuery -->
<script src="{{ URL::asset('/build/js/jquery-3.7.1.min.js') }}"></script>


<!-- Bootstrap Core JS -->
<script src="{{ URL::asset('/build/js/bootstrap.bundle.min.js') }}"></script>

@if (Route::is(['index-2', 'index-3', 'index-4', 'index-5', 'index-6']))
    <!-- counterup JS -->
    <script src="{{ URL::asset('/build/js/jquery.waypoints.js') }}"></script>
    <script src="{{ URL::asset('/build/js/jquery.counterup.min.js') }}"></script>
@endif

@if (Route::is(['index','index-rtl']))
    <!-- Swiper Slider -->
    <script src="{{URL::asset('build/plugins/swiper/js/swiper-bundle.min.js')}}"></script>

    <!-- Fancybox JS -->
    <script src="{{URL::asset('build/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
@endif

<!-- Select2 JS -->
<script src="{{ URL::asset('/build/plugins/select2/js/select2.min.js') }}"></script>

@if (Route::is(['index-2', 'index-3', 'index-4', 'index-5']))
    <!-- Owl Carousel -->
    <script src="{{ URL::asset('/build/js/owl.carousel.min.js') }}"></script>
@endif

@if (Route::is(['about-us', 'blog-carousal', 'blog-details-left-sidebar', 'blog-details-right-sidebar', 'coming-soon', 'forgot-password', 'index-2', 'index-3', 'index-4', 'index-5', 'index-6', 'index-rtl', 'index', 'instructor-details', 'login', 'otp', 'register', 'set-password', 'student-details', 'reset-password']))
    <!-- Slick Slider -->
    <script src="{{ URL::asset('/build/plugins/slick/slick.js') }}"></script>
@endif

@if (Route::is(['index-2', 'index-3', 'index-4', 'index-5', 'index-6', 'index-rtl', 'index']))
    <!-- Aos -->
    <script src="{{ URL::asset('/build/plugins/aos/aos.js') }}"></script>
@endif

@if (Route::is(['about-us', 'become-an-instructor', 'index-rtl', 'index']))
    <!-- counterup JS -->
    <script src="{{URL::asset('/build/js/counter.js')}}"></script>
@endif

@if (Route::is(['add-course']))
    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('/build/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
@endif

@if (Route::is(['index-5']))
    <!-- Swiper Slider -->
    <script src="{{ URL::asset('/build/plugins/swiper/js/swiper.min.js') }}"></script>
@endif

@if (Route::is(['add-course', 'instructor-announcements', 'instructor-assignment', 'instructor-tickets', 'student-tickets']))
    <!-- Summernote JS -->
    <script src="{{ URL::asset('build/plugins/summernote/summernote-lite.min.js')}}"></script>
@endif

@if (Route::is(['student-messages']))
    <!-- Slimscroll JS -->
    <script src="{{URL::asset('build/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
@endif

@if (Route::is(['instructor-details']))
    <!-- Feather JS -->
    <script src="{{ URL::asset('/build/plugins/feather/feather.min.js') }}"></script>
@endif

<!-- Sticky Sidebar JS -->
<script src="{{ URL::asset('/build/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
<script src="{{ URL::asset('/build/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

@if (Route::is(['instructor-dashboard', 'instructor-earnings', 'instructor-integrations', 'instructor-linked-accounts', 'instructor-message', 'instructor-notifications', 'instructor-payout', 'instructor-plans', 'instructor-settings', 'instructor-social-profiles']))
    <!-- Chart JS -->
    <script src="{{ URL::asset('/build/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('/build/plugins/apexchart/chart-data.js') }}"></script>
@endif

@if (Route::is(['course-category-3', 'course-category-2', 'course-category', 'course-details-2', 'course-details', 'course-grid', 'course-list', 'instructor-details', 'instructor-grid', 'instructor-list' ]))
    <!-- Rangeslider JS -->
    <script src="{{ URL::asset('/build/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{ URL::asset('/build/plugins/ion-rangeslider/js/custom-rangeslider.js')}}"></script>
@endif

@if (Route::is(['register', 'set-password', 'student-change-password', 'reset-password']))
    <!-- Validation-->
    <script src="{{ URL::asset('/build/js/validation.js') }}"></script>
@endif

@if (Route::is(['instructor-certificate', 'instructor-assignment', 'instructor-dashboard', 'instructor-earnings', 'instructor-integrations', 'instructor-linked-accounts', 'instructor-message', 'instructor-notifications', 'intstructor-payout', 'instructor-plans', 'instructor-quiz', 'instrcutor-quiz-results', 'instructor-settings', 'instrcutor-social-profiles', 'instructor-statements', 'instructor-tickets', 'instructor-withdraw', 'student-settings']))
    <!-- Moment JS -->
    <script src="{{ URL::asset('/build/js/moment.min.js') }}"></script>
@endif

@if (Route::is(['instructor-dashboard', 'instructor-earnings', 'instructor-integrations', 'instructor-linked-accounts', 'instructor-message', 'instructor-notifications', 'intstructor-payout', 'instructor-plans', 'instructor-settings', 'instrcutor-social-profiles', 'instructor-statements', 'instructor-tickets', 'instructor-withdraw']))
    <!-- Daterangepicker JS -->
    <script src="{{ URL::asset('/build/plugins/daterangepicker/daterangepicker.js') }}"></script>
@endif

@if (Route::is(['instructor-certificate', 'instructor-assignment', 'instructor-earnings', 'instructor-integrations', 'instructor-linked-accounts', 'instructor-message', 'instructor-notifications', 'intstructor-payout', 'instructor-plans', 'instructor-quiz', 'instrcutor-quiz-results', 'instructor-settings', 'instrcutor-social-profiles', 'instructor-statements', 'instructor-tickets', 'instructor-withdraw', 'student-settings','instructor-quiz-results']))
    <!-- Datepicker JS -->
    <script src="{{ URL::asset('/build/js/moment.min.js')}}"></script>
    <script src="{{ URL::asset('/build/js/bootstrap-datetimepicker.min.js') }}"></script>
@endif

<!-- Custom JS -->
<script src="{{ URL::asset('/build/js/script.js') }}"></script>
@if (Route::is(['index-3']))
<script src="{{ URL::asset('build/js/umg-home.js') }}?v={{ filemtime(public_path('build/js/umg-home.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-home-motion.js') }}?v={{ filemtime(public_path('build/js/umg-home-motion.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-sistemas-countdown.js') }}?v={{ filemtime(public_path('build/js/umg-sistemas-countdown.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-sistemas-contact.js') }}?v={{ filemtime(public_path('build/js/umg-sistemas-contact.js')) }}"></script>
@endif
@if (Route::is(['derecho']))
<script src="{{ URL::asset('build/js/vendor/gsap.min.js') }}?v={{ filemtime(public_path('build/js/vendor/gsap.min.js')) }}"></script>
<script src="{{ URL::asset('build/js/vendor/ScrollTrigger.min.js') }}?v={{ filemtime(public_path('build/js/vendor/ScrollTrigger.min.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-derecho-story.js') }}?v={{ filemtime(public_path('build/js/umg-derecho-story.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-derecho-pensum.js') }}?v={{ filemtime(public_path('build/js/umg-derecho-pensum.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-faculty-derecho.js') }}?v={{ filemtime(public_path('build/js/umg-faculty-derecho.js')) }}"></script>
@endif
@if (Route::is(['administracion']))
<script src="{{ URL::asset('build/js/vendor/gsap.min.js') }}?v={{ filemtime(public_path('build/js/vendor/gsap.min.js')) }}"></script>
<script src="{{ URL::asset('build/js/vendor/ScrollTrigger.min.js') }}?v={{ filemtime(public_path('build/js/vendor/ScrollTrigger.min.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-administracion-story.js') }}?v={{ filemtime(public_path('build/js/umg-administracion-story.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-administracion-pensum.js') }}?v={{ filemtime(public_path('build/js/umg-administracion-pensum.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-faculty-administracion.js') }}?v={{ filemtime(public_path('build/js/umg-faculty-administracion.js')) }}"></script>
@endif
@if (Route::is(['auditoria']))
<script src="{{ URL::asset('build/js/vendor/gsap.min.js') }}?v={{ filemtime(public_path('build/js/vendor/gsap.min.js')) }}"></script>
<script src="{{ URL::asset('build/js/vendor/ScrollTrigger.min.js') }}?v={{ filemtime(public_path('build/js/vendor/ScrollTrigger.min.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-auditoria-story.js') }}?v={{ filemtime(public_path('build/js/umg-auditoria-story.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-auditoria-pensum.js') }}?v={{ filemtime(public_path('build/js/umg-auditoria-pensum.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-faculty-auditoria.js') }}?v={{ filemtime(public_path('build/js/umg-faculty-auditoria.js')) }}"></script>
@endif
@if (Route::is(['criminologia']))
<script src="{{ URL::asset('build/js/vendor/gsap.min.js') }}?v={{ filemtime(public_path('build/js/vendor/gsap.min.js')) }}"></script>
<script src="{{ URL::asset('build/js/vendor/ScrollTrigger.min.js') }}?v={{ filemtime(public_path('build/js/vendor/ScrollTrigger.min.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-criminologia-story.js') }}?v={{ filemtime(public_path('build/js/umg-criminologia-story.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-criminologia-pensum.js') }}?v={{ filemtime(public_path('build/js/umg-criminologia-pensum.js')) }}"></script>
<script src="{{ URL::asset('build/js/umg-faculty-criminologia.js') }}?v={{ filemtime(public_path('build/js/umg-faculty-criminologia.js')) }}"></script>
@endif
<script src="{{ URL::asset('build/js/umg-floating-assistant.js') }}?v={{ filemtime(public_path('build/js/umg-floating-assistant.js')) }}"></script>
<script>
(function(){
  const header   = document.getElementById('umgHeader');
  const btn      = document.getElementById('mobile_btn');
  const panel    = document.querySelector('#umgHeader .main-menu-wrapper');
  const closeBtn = document.getElementById('menu_close');
  const nav      = document.querySelector('#umgHeader .main-nav');

  // Calcula altura real del header -> --header-h
  function setHeaderH(){
    if (!header) return;
    const h = header.offsetHeight || 56;
    document.documentElement.style.setProperty('--header-h', h + 'px');
  }
  setHeaderH(); addEventListener('load', setHeaderH); addEventListener('resize', setHeaderH);

  // Toggle del panel
  const open  = ()=> document.body.classList.add('menu-open');
  const close = ()=> document.body.classList.remove('menu-open');
  const toggle= ()=> document.body.classList.contains('menu-open') ? close() : open();

  if (btn)      btn.addEventListener('click', e => { e.preventDefault(); toggle(); });
  if (closeBtn) closeBtn.addEventListener('click', e => { e.preventDefault(); close(); });

  // Submenús en móvil (tap)
  if (nav){
    nav.addEventListener('click', e=>{
      const link = e.target.closest('.has-submenu > a');
      const isMobile = matchMedia('(max-width: 991.98px)').matches;
      if (link && isMobile){ e.preventDefault(); link.parentElement.classList.toggle('open'); }
    });
  }

  // Cerrar al hacer click fuera del panel
  document.addEventListener('click', e=>{
    const isMobile = matchMedia('(max-width: 991.98px)').matches;
    if (!isMobile) return;
    const inside = e.target.closest('#umgHeader .main-menu-wrapper, #mobile_btn');
    if (!inside) close();
  });

  // Cerrar con ESC y al pasar a escritorio
  document.addEventListener('keydown', e=>{ if (e.key === 'Escape') close(); });
  matchMedia('(min-width: 992px)').addEventListener('change', mq=>{ if (mq.matches) close(); });

  // Si el template abre su propio overlay, apágalo en caliente
  const killOverlay = ()=> document.querySelectorAll('.sidebar-overlay,.mobile-menu-overlay,.menu-overlay,.bg-overlay')
                      .forEach(el => el.style.display = 'none');
  document.addEventListener('DOMNodeInserted', killOverlay);
  document.addEventListener('click', killOverlay);
})();
</script>
