@php
    $pensum = config('umg-derecho-pensum');
    $cycles = $pensum['cycles'] ?? [];
@endphp

<section
    class="umg-derecho-pensum"
    id="umg-derecho-pensum"
    aria-labelledby="umg-derecho-pensum-title"
    data-umg-derecho-pensum
>
    <div class="umg-faculty-wrap">
        <div class="umg-faculty-section-head umg-reveal">
            <p class="umg-faculty-eyebrow">{{ $pensum['eyebrow'] ?? 'Plan de estudios' }}</p>
            <h2 id="umg-derecho-pensum-title">{{ $pensum['title'] ?? 'Pensum de la carrera' }}</h2>
            @if (!empty($pensum['lead']))
                <p class="umg-derecho-pensum__lead">{{ $pensum['lead'] }}</p>
            @endif
        </div>

        <div class="umg-derecho-pensum__stage umg-reveal" data-pensum-stage>
            <div class="umg-derecho-pensum__fan-wrap">
                <p class="umg-derecho-pensum__hint" data-pensum-hint>
                    <span class="umg-derecho-pensum__hint-icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                            <path d="M9.5 3.5v10.2l-1.7-1.7a1.2 1.2 0 0 0-1.7 1.7l3.8 3.8a2 2 0 0 0 1.4.6h4.9a2 2 0 0 0 1.9-1.4l1.5-5.1a1.5 1.5 0 0 0-1.5-1.9h-3.7V3.5a1.5 1.5 0 0 0-3 0Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
                            <path d="M12.5 14.5v4.2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                        </svg>
                    </span>
                    <span class="umg-derecho-pensum__hint-text">Haz click en las tarjetas</span>
                </p>

                <div
                    class="umg-derecho-pensum__fan"
                    role="tablist"
                    aria-label="Ciclos del pensum. Haz click para cambiar de ciclo."
                    data-pensum-fan
                >
                    @foreach ($cycles as $index => $cycle)
                        @php
                            $isActive = $index === 0;
                            $total = count($cycles);
                            $mid = intdiv($total - 1, 2);
                            $slot = ($index + $mid) % $total;
                            $tabId = 'umg-pensum-tab-' . $cycle['id'];
                            $panelId = 'umg-pensum-panel-' . $cycle['id'];
                        @endphp
                        <button
                            type="button"
                            class="umg-derecho-pensum__card{{ $isActive ? ' is-active' : '' }}"
                            id="{{ $tabId }}"
                            role="tab"
                            aria-selected="{{ $isActive ? 'true' : 'false' }}"
                            aria-controls="{{ $panelId }}"
                            tabindex="{{ $isActive ? '0' : '-1' }}"
                            data-pensum-card
                            data-index="{{ $index }}"
                            style="--pensum-slot: {{ $slot }}; --pensum-mid: {{ $mid }}; --pensum-n: {{ $total }};"
                        >
                            <span class="umg-derecho-pensum__card-num" aria-hidden="true">{{ $cycle['number'] }}</span>
                            <span class="umg-derecho-pensum__card-label">{{ $cycle['label'] }}</span>
                            <span class="umg-derecho-pensum__card-title">{{ $cycle['title'] }}</span>
                            <span class="umg-derecho-pensum__card-hint" aria-hidden="true">Siguiente</span>
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="umg-derecho-pensum__panels">
                @foreach ($cycles as $index => $cycle)
                    @php
                        $isActive = $index === 0;
                        $tabId = 'umg-pensum-tab-' . $cycle['id'];
                        $panelId = 'umg-pensum-panel-' . $cycle['id'];
                        $semesters = $cycle['semesters'] ?? [];
                    @endphp
                    <div
                        class="umg-derecho-pensum__panel{{ $isActive ? ' is-active' : '' }}"
                        id="{{ $panelId }}"
                        role="tabpanel"
                        aria-labelledby="{{ $tabId }}"
                        @unless ($isActive) hidden @endunless
                        data-pensum-panel
                        data-index="{{ $index }}"
                    >
                        <p class="umg-derecho-pensum__panel-cycle">{{ $cycle['label'] }} · {{ $cycle['title'] }}</p>
                        <div class="umg-derecho-pensum__semesters">
                            @foreach ($semesters as $semester)
                                <article class="umg-derecho-pensum__semester">
                                    <h3 class="umg-derecho-pensum__semester-title">{{ $semester['label'] }}</h3>
                                    <ul class="umg-derecho-pensum__courses">
                                        @foreach ($semester['courses'] as $course)
                                            <li class="umg-derecho-pensum__course">
                                                <span class="umg-derecho-pensum__course-mark" aria-hidden="true"></span>
                                                <span>{{ $course }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </article>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        @if (!empty($pensum['disclaimer']))
            <p class="umg-derecho-pensum__disclaimer umg-reveal">{{ $pensum['disclaimer'] }}</p>
        @endif
    </div>
</section>
