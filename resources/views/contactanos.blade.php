<?php $page = 'contactanos'; ?>
@extends('layout.mainlayout')

@section('content')
@php
    $web3formsKey = config('services.web3forms.key');
@endphp

<div class="umg-contactanos" data-hot-window>
    <div class="umg-contactanos__stage">
        <aside class="umg-contactanos__pitch" aria-labelledby="umg-contactanos-title">
            <div class="umg-contactanos__pitch-media" aria-hidden="true">
                <img
                    src="{{ asset('images/hero-umg.png') }}"
                    alt=""
                    width="1200"
                    height="1600"
                >
            </div>
            <div class="umg-contactanos__pitch-veil" aria-hidden="true"></div>
            <div class="umg-contactanos__pitch-inner">
                <a class="umg-contactanos__home" href="{{ route('index-3') }}">
                    <img src="{{ asset('images/logo-umg.png') }}" alt="UMG" width="48" height="48">
                    <span>Volver al inicio</span>
                </a>
                <p class="umg-contactanos__brand">Universidad Mariano Gálvez</p>
                <p class="umg-contactanos__brand-sub">Sede Guastatoya</p>
                <h1 id="umg-contactanos-title">Habla con admisiones ahora</h1>
                <p class="umg-contactanos__lead">
                    Déjanos tus datos y te contactamos por el medio que elijas.
                </p>
                <ul class="umg-contactanos__facts">
                    <li>
                        <strong>Teléfono</strong>
                        <a href="tel:+50224111800">2411-1800</a>
                    </li>
                    <li>
                        <strong>Correo</strong>
                        <a href="mailto:info@umg.edu.gt">info@umg.edu.gt</a>
                    </li>
                </ul>
            </div>
        </aside>

        <section class="umg-contactanos__panel" aria-labelledby="umg-contact-form-title">
            <div class="umg-contactanos__panel-inner">
                <p class="umg-contactanos__eyebrow">Ventana de contacto</p>
                <h2 id="umg-contact-form-title">Te respondemos pronto</h2>

                <p
                    class="umg-contactanos__status is-hidden"
                    data-contact-status
                    role="status"
                    hidden
                ></p>

                <form
                    class="umg-contactanos__form"
                    method="POST"
                    action="#"
                    novalidate
                    data-contact-form
                    @if ($web3formsKey !== '')
                        data-web3forms-key="{{ $web3formsKey }}"
                    @endif
                >
                    <div class="umg-contactanos__honeypot" aria-hidden="true">
                        <label>
                            <span>Website</span>
                            <input type="text" name="website" tabindex="-1" autocomplete="off">
                        </label>
                    </div>

                    <label class="umg-contactanos__field">
                        <span>Nombre completo</span>
                        <input type="text" name="nombre" placeholder="Tu nombre y apellido" required maxlength="120" autocomplete="name">
                    </label>

                    <div class="umg-contactanos__channel" role="radiogroup" aria-label="Medio de comunicación">
                        <p class="umg-contactanos__channel-legend">Medio de comunicación</p>
                        <div class="umg-contactanos__channel-toggle">
                            <label class="umg-contactanos__channel-option">
                                <input type="radio" name="contacto_tipo" value="email" checked>
                                <span class="umg-contactanos__channel-label">Correo</span>
                            </label>
                            <label class="umg-contactanos__channel-option">
                                <input type="radio" name="contacto_tipo" value="whatsapp">
                                <span class="umg-contactanos__channel-label">WhatsApp</span>
                            </label>
                            <label class="umg-contactanos__channel-option">
                                <input type="radio" name="contacto_tipo" value="celular">
                                <span class="umg-contactanos__channel-label">Celular</span>
                            </label>
                        </div>
                    </div>

                    <label class="umg-contactanos__field" data-channel-field="email">
                        <span>Correo electrónico</span>
                        <input type="email" name="contacto" placeholder="tu@correo.com" maxlength="160" autocomplete="email" required>
                    </label>

                    <label class="umg-contactanos__field" data-channel-field="whatsapp" hidden>
                        <span>Número de WhatsApp</span>
                        <input type="tel" placeholder="+502 0000 0000" maxlength="160" autocomplete="tel" inputmode="tel">
                    </label>

                    <label class="umg-contactanos__field" data-channel-field="celular" hidden>
                        <span>Número de celular</span>
                        <input type="tel" placeholder="+502 0000 0000" maxlength="160" autocomplete="tel" inputmode="tel">
                    </label>

                    <label class="umg-contactanos__field">
                        <span>Interés</span>
                        <select name="interes" required>
                            <option value="inscripcion" selected>Inscribirme</option>
                            <option value="informacion">Solicitar información</option>
                            <option value="evento">Admisión</option>
                            <option value="otro">Otro</option>
                        </select>
                    </label>

                    <label class="umg-contactanos__field umg-contactanos__field--message">
                        <span>Mensaje</span>
                        <textarea name="mensaje" rows="2" maxlength="800" placeholder="¿En qué te ayudamos?"></textarea>
                    </label>

                    <button type="submit" class="umg-contactanos__submit">
                        <span>Quiero que me contacten</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </button>
                </form>
            </div>
        </section>
    </div>
</div>
@endsection
