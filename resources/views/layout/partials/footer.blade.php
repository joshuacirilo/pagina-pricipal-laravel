<footer id="umgFooter" class="umg-footer">
    <div class="umg-footer__main">
        <div class="container">
            <div class="umg-footer__grid">
                <div class="umg-footer__brand">
                    <a class="umg-footer__logo" href="{{ route('index-3') }}">
                        <img src="{{ URL::asset('build/img/logo.svg') }}" alt="Universidad Mariano Gálvez de Guatemala">
                    </a>
                    <p class="umg-footer__tagline">Sede Guastatoya · El Progreso</p>
                    <div class="umg-footer__social">
                        <a href="https://www.facebook.com/u.marianogalvez" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                            <img src="{{ URL::asset('build/img/icons/fb.svg') }}" alt="">
                        </a>
                        <a href="https://www.instagram.com/marianogalvez/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                            <img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt="">
                        </a>
                        <a href="https://www.linkedin.com/school/universidad-mariano-g-lvez-de-guatemala/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                            <img src="{{ URL::asset('build/img/icons/linkedin.svg') }}" alt="">
                        </a>
                        <a href="https://x.com/marianogalvez" target="_blank" rel="noopener noreferrer" aria-label="X">
                            <img src="{{ URL::asset('build/img/icons/x.svg') }}" alt="">
                        </a>
                    </div>
                </div>

                <div class="umg-footer__col">
                    <p class="umg-footer__heading">Contacto</p>
                    <address>
                        Barrio El Porvenir, Guastatoya, El Progreso
                    </address>
                    <a href="tel:+50224111800">2411-1800</a>
                    <a href="mailto:info@umg.edu.gt">info@umg.edu.gt</a>
                    <a href="https://umg.edu.gt/info" target="_blank" rel="noopener noreferrer">Centro de informaciones</a>
                    <a href="https://umg.edu.gt/tours" target="_blank" rel="noopener noreferrer">Tour virtual</a>
                </div>

                <div class="umg-footer__col">
                    <p class="umg-footer__heading">Facultades</p>
                    <a href="{{ route('derecho') }}">Derecho</a>
                    <a href="{{ route('administracion') }}">Administración</a>
                    <a href="{{ route('criminologia') }}">Criminología</a>
                    <a href="{{ route('sistemas-redes-sociales') }}">Ingeniería en Sistemas</a>
                    <a href="{{ route('trabajo-social') }}">Trabajo Social</a>
                    <a href="{{ route('auditoria') }}">Auditoría</a>
                </div>

                <div class="umg-footer__col">
                    <p class="umg-footer__heading">Universidad</p>
                    <a href="https://umg.edu.gt/historia" target="_blank" rel="noopener noreferrer">Historia</a>
                    <a href="https://umg.edu.gt/calendario" target="_blank" rel="noopener noreferrer">Calendario académico</a>
                    <a href="https://umg.edu.gt/biblioteca" target="_blank" rel="noopener noreferrer">Biblioteca</a>
                    <a href="https://umg.edu.gt/empleos" target="_blank" rel="noopener noreferrer">Empleo</a>
                    <a href="{{ url('privacy-policy') }}">Política de privacidad</a>
                    <a href="{{ url('terms-and-conditions') }}">Términos y condiciones</a>
                </div>
            </div>
        </div>
    </div>

    <div class="umg-footer__bottom">
        <div class="container">
            <p>© {{ date('Y') }} Universidad Mariano Gálvez de Guatemala. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
