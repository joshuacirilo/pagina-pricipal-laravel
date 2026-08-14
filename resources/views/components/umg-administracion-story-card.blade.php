@props([
    'number' => '01',
    'eyebrow' => '',
    'title' => '',
    'description' => null,
    'image' => '',
    'imageAlt' => '',
    'imagePosition' => 'center center',
    'variant' => 'default',
    'sceneId' => '',
    'index' => 0,
    'words' => [],
    'points' => [],
    'ctas' => [],
    'priority' => false,
])

<article
    {{ $attributes->class([
        'umg-administracion-story__card',
        'umg-administracion-story__card--' . $variant,
    ]) }}
    data-scene="{{ $sceneId }}"
    data-scene-index="{{ $index }}"
    style="--story-z: {{ (int) $index + 1 }};"
>
    <div class="umg-administracion-story__card-inner">
        <div class="umg-administracion-story__media" aria-hidden="true">
            <img
                class="umg-administracion-story__img"
                src="{{ URL::asset($image) }}"
                alt=""
                width="1600"
                height="1000"
                style="--story-object-pos: {{ $imagePosition }};"
                @if ($priority) fetchpriority="high" @else loading="lazy" @endif
            >
            <div class="umg-administracion-story__scrim"></div>
            <div class="umg-administracion-story__dim" data-story-dim></div>
        </div>

        <div class="umg-administracion-story__content">
            @if ($eyebrow !== '')
                <p class="umg-administracion-story__eyebrow">{{ $eyebrow }}</p>
            @endif

            <div class="umg-administracion-story__head">
                <span class="umg-administracion-story__num" aria-hidden="true">{{ $number }}</span>
                <div class="umg-administracion-story__title-mask">
                    @if ($index === 0)
                        <h1 class="umg-administracion-story__title" id="umg-administracion-story-title">
                            {{ $title }}
                        </h1>
                    @else
                        <h2 class="umg-administracion-story__title">
                            {{ $title }}
                        </h2>
                    @endif
                </div>
            </div>

            @if ($description)
                <div class="umg-administracion-story__desc-mask">
                    <p class="umg-administracion-story__desc">{{ $description }}</p>
                </div>
            @endif

            @if (! empty($words))
                <ul class="umg-administracion-story__words" aria-label="Proceso de formación">
                    @foreach ($words as $word)
                        <li class="umg-administracion-story__word">{{ $word }}</li>
                    @endforeach
                </ul>
            @endif

            @if (! empty($points))
                <ul class="umg-administracion-story__points" aria-label="Puntos clave">
                    @foreach ($points as $point)
                        <li class="umg-administracion-story__point">
                            <span class="umg-administracion-story__point-mark" aria-hidden="true"></span>
                            <span>{{ $point }}</span>
                        </li>
                    @endforeach
                </ul>
            @endif

            @if (! empty($ctas))
                <nav class="umg-administracion-story__ctas" aria-label="Acciones de admisión">
                    @foreach ($ctas as $cta)
                        @php
                            $isPrimary = ($cta['style'] ?? 'primary') === 'primary';
                            $external = ! empty($cta['external']);
                        @endphp
                        <a
                            class="{{ $isPrimary ? 'umg-hero-btn' : 'umg-faculty-btn-ghost' }} umg-administracion-story__cta"
                            href="{{ $cta['href'] }}"
                            @if ($external) target="_blank" rel="noopener noreferrer" @endif
                        >{{ $cta['label'] }}</a>
                    @endforeach
                </nav>
            @endif

            <span class="visually-hidden">{{ $imageAlt }}</span>
        </div>
    </div>
</article>
