<section class="umg-prefooter" aria-labelledby="umg-prefooter-title">
    <div class="umg-prefooter__media" aria-hidden="true">
        <img
            src="{{ URL::asset('build/img/index/EstudiantesU.png') }}"
            alt=""
            width="1920"
            height="800"
        >
    </div>
    <div class="umg-prefooter__overlay"></div>

    <div class="umg-prefooter__content">
        <h2 id="umg-prefooter-title">¿Listo para lo que sigue?</h2>
        <nav class="umg-parallax-hero__actions" aria-label="Próximos pasos">
            <a
                class="umg-hero-btn"
                href="https://umg.edu.gt/info"
                target="_blank"
                rel="noopener noreferrer"
            >Solicitar información</a>
            <a
                class="umg-hero-btn"
                href="https://umg.edu.gt/admisiones"
                target="_blank"
                rel="noopener noreferrer"
            >Admisión</a>
            <a
                class="umg-hero-btn"
                href="{{ route('index-3') }}#facultades"
            >Explorar facultades</a>
        </nav>
    </div>
</section>
