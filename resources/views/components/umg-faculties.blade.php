<section class="umg-faculties" id="facultades" aria-labelledby="umg-faculties-title">
    <div class="container">
        <div class="umg-faculties__header umg-reveal">
            <h2 id="umg-faculties-title">Explora nuestras facultades</h2>
            <span class="umg-faculties__rule" aria-hidden="true"></span>
        </div>

        <div class="umg-faculties__grid umg-reveal-stagger">
            <x-umg-faculty-card
                class="umg-reveal umg-reveal--scale"
                title="Derecho"
                href="{{ route('derecho') }}"
                image="build/img/about/iniDerecho1.jpg"
                alt="Estudiantes de Ciencias Jurídicas y Sociales"
                description="Formación jurídica con visión ética para interpretar y aplicar el Derecho en contextos sociales reales."
            />
            <x-umg-faculty-card
                class="umg-reveal umg-reveal--scale"
                title="Administración"
                href="{{ route('administracion') }}"
                image="build/img/about/imgadmi11.jpg"
                alt="Estudiantes de Ciencias de la Administración"
                description="Dirección de empresas y gestión organizacional con un enfoque teórico-práctico y visión global."
            />
            <x-umg-faculty-card
                class="umg-reveal umg-reveal--scale"
                title="Criminología"
                href="{{ route('criminologia') }}"
                image="build/img/about/iniciocrimi-1.jpg"
                alt="Estudiantes de Criminología y Política Criminal"
                description="Prevención del delito y análisis criminológico desde una mirada psicológica, sociológica y estratégica."
            />
            <x-umg-faculty-card
                class="umg-reveal umg-reveal--scale"
                title="Ingeniería en Sistemas"
                href="{{ route('sistemas') }}"
                image="build/img/about/aboutIngSistemas/encendido-computadora-portatil-gris.jpeg"
                alt="Estudiantes de Ingeniería en Sistemas"
                description="Desarrollo de software, redes y ciberseguridad para resolver desafíos tecnológicos del presente."
            />
            <x-umg-faculty-card
                class="umg-reveal umg-reveal--scale"
                title="Trabajo Social"
                href="{{ route('trabajo-social') }}"
                image="build/img/about/aboutTrabajoSocial/equipo-inicio-TrabajoSocial.jpg"
                alt="Estudiantes de Trabajo Social"
                description="Intervención comunitaria y gerencia social para responder a las problemáticas del entorno."
            />
            <x-umg-faculty-card
                class="umg-reveal umg-reveal--scale"
                title="Auditoría"
                href="{{ route('auditoria') }}"
                image="build/img/about/aboutAuditoria/laptop-paperwork-contabilidad.jpg"
                alt="Estudiantes de Contaduría Pública y Auditoría"
                description="Contaduría y auditoría con principios éticos para las exigencias de un entorno empresarial global."
            />
        </div>
    </div>
</section>
