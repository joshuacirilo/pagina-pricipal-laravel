@php
    $story = config('umg-derecho-story');
    $scenes = $story['scenes'] ?? [];
    $progress = $story['progress'] ?? [];
@endphp

<section
    class="umg-derecho-story"
    id="umg-derecho-story"
    aria-labelledby="umg-derecho-story-title"
    data-umg-derecho-story
>
    @if (count($progress))
        <nav class="umg-derecho-story__progress" aria-label="Progreso de la historia">
            <ol class="umg-derecho-story__progress-list">
                @foreach ($progress as $i => $item)
                    <li>
                        <button
                            type="button"
                            class="umg-derecho-story__progress-btn{{ $i === 0 ? ' is-active' : '' }}"
                            data-story-nav="{{ $item['id'] }}"
                            aria-current="{{ $i === 0 ? 'true' : 'false' }}"
                        >
                            <span class="umg-derecho-story__progress-idx">{{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="umg-derecho-story__progress-bar" aria-hidden="true"></span>
                            <span class="umg-derecho-story__progress-label">{{ $item['label'] }}</span>
                        </button>
                    </li>
                @endforeach
            </ol>
        </nav>
    @endif

    <div class="umg-derecho-story__stack">
        @foreach ($scenes as $index => $scene)
            <x-umg-derecho-story-card
                :number="$scene['number']"
                :eyebrow="$scene['eyebrow']"
                :title="$scene['title']"
                :description="$scene['description'] ?? null"
                :image="$scene['image']"
                :image-alt="$scene['image_alt'] ?? ''"
                :variant="$scene['variant']"
                :scene-id="$scene['id']"
                :index="$index"
                :words="$scene['words'] ?? []"
                :paths="$scene['paths'] ?? []"
                :ctas="$scene['ctas'] ?? []"
                :priority="$index === 0"
            />
        @endforeach
    </div>
</section>
