<section class="umg-faculty-instructors" aria-labelledby="umg-derecho-instructors-title">
    <div class="umg-faculty-wrap">
        <div class="umg-faculty-section-head umg-reveal">
            <p class="umg-faculty-eyebrow">Cuerpo académico</p>
            <h2 id="umg-derecho-instructors-title">Nuestros catedráticos</h2>
        </div>

        <div class="umg-faculty-instructors__grid">
            <a
                href="{{ route('detalles-instructor-derecho1') }}"
                class="umg-faculty-instructor-card umg-reveal"
            >
                <div class="umg-faculty-instructor-card__media">
                    <img
                        src="{{ asset('build/img/instructor/docenteCrimi3.png') }}"
                        alt="Licda. Susan Eunice Galindo Catalan"
                        width="480"
                        height="560"
                        loading="lazy"
                    >
                </div>
                <div class="umg-faculty-instructor-card__body">
                    <h3>Licda. Susan Eunice Galindo Catalan</h3>
                    <p>Licenciada en Ciencias Jurídicas y Sociales</p>
                </div>
            </a>

            <a
                href="{{ route('detalles-instructor-derecho2') }}"
                class="umg-faculty-instructor-card umg-reveal"
            >
                <div class="umg-faculty-instructor-card__media">
                    <img
                        src="{{ asset('build/img/instructor/1.png') }}"
                        alt="Licda. Falvio Arturon"
                        width="480"
                        height="560"
                        loading="lazy"
                    >
                </div>
                <div class="umg-faculty-instructor-card__body">
                    <h3>Licda. Falvio Arturon</h3>
                    <p>Licenciado en Ciencias Jurídicas y Sociales</p>
                </div>
            </a>

            <div class="umg-faculty-instructor-card umg-faculty-instructor-card--muted umg-reveal" aria-disabled="true">
                <div class="umg-faculty-instructor-card__media">
                    <img
                        src="{{ asset('build/img/instructor/unknown_user.png') }}"
                        alt=""
                        width="480"
                        height="560"
                        loading="lazy"
                        aria-hidden="true"
                    >
                </div>
                <div class="umg-faculty-instructor-card__body">
                    <h3>En construcción</h3>
                    <p>Perfil próximamente</p>
                </div>
            </div>
        </div>
    </div>
</section>
