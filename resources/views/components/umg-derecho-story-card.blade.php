@props([
    'number' => '01',
    'eyebrow' => '',
    'title' => '',
    'description' => null,
    'image' => '',
    'imageAlt' => '',
    'variant' => 'default',
    'sceneId' => '',
    'index' => 0,
    'words' => [],
    'paths' => [],
    'ctas' => [],
    'priority' => false,
])

@php
    $isLight = $variant === 'comienza';
@endphp

<article
    {{ $attributes->class([
        'umg-derecho-story__card',
        'umg-derecho-story__card--' . $variant,
        'umg-derecho-story__card--light' => $isLight,
    ]) }}
    data-scene="{{ $sceneId }}"
    data-scene-index="{{ $index }}"
    style="--story-z: {{ (int) $index + 1 }};"
>
    <div class="umg-derecho-story__card-inner">
        <div class="umg-derecho-story__media" aria-hidden="true">
            <img
                class="umg-derecho-story__img"
                src="{{ URL::asset($image) }}"
                alt=""
                width="1600"
                height="1000"
                @if ($priority) fetchpriority="high" @else loading="lazy" @endif
            >
            <div class="umg-derecho-story__scrim"></div>
            <div class="umg-derecho-story__dim" data-story-dim></div>
        </div>

        <div class="umg-derecho-story__content">
            <p class="umg-derecho-story__eyebrow">
                <span class="umg-derecho-story__num" aria-hidden="true">{{ $number }}</span>
                {{ $eyebrow }}
            </p>

            <div class="umg-derecho-story__title-mask">
                @if ($index === 0)
                    <h1 class="umg-derecho-story__title" id="umg-derecho-story-title">
                        {{ $title }}
                    </h1>
                @else
                    <h2 class="umg-derecho-story__title">
                        {{ $title }}
                    </h2>
                @endif
            </div>

            @if ($description)
                <div class="umg-derecho-story__desc-mask">
                    <p class="umg-derecho-story__desc">{{ $description }}</p>
                </div>
            @endif

            @if (! empty($words))
                <ul class="umg-derecho-story__words" aria-label="Proceso de formación">
                    @foreach ($words as $word)
                        <li class="umg-derecho-story__word">{{ $word }}</li>
                    @endforeach
                </ul>
            @endif

            @if (! empty($paths))
                <ul class="umg-derecho-story__paths" aria-label="Caminos profesionales">
                    @foreach ($paths as $path)
                        <li class="umg-derecho-story__path">{{ $path }}</li>
                    @endforeach
                </ul>
            @endif

            @if (! empty($ctas))
                <nav class="umg-derecho-story__ctas" aria-label="Acciones de admisión">
                    @foreach ($ctas as $cta)
                        @php
                            $isPrimary = ($cta['style'] ?? 'primary') === 'primary';
                            $external = ! empty($cta['external']);
                        @endphp
                        <a
                            class="{{ $isPrimary ? 'umg-hero-btn' : 'umg-faculty-btn-ghost' }} umg-derecho-story__cta"
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
