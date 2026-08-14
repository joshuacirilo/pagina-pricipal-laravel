@php
    $story = config('umg-criminologia-story');
    $scenes = $story['scenes'] ?? [];
    $progress = $story['progress'] ?? [];
@endphp

<section
    class="umg-criminologia-story"
    id="umg-criminologia-story"
    aria-labelledby="umg-criminologia-story-title"
    data-umg-criminologia-story
>
    @if (count($progress))
        <nav class="umg-criminologia-story__progress" aria-label="Progreso de la historia">
            <ol class="umg-criminologia-story__progress-list">
                @foreach ($progress as $i => $item)
                    <li>
                        <button
                            type="button"
                            class="umg-criminologia-story__progress-btn{{ $i === 0 ? ' is-active' : '' }}"
                            data-story-nav="{{ $item['id'] }}"
                            aria-current="{{ $i === 0 ? 'true' : 'false' }}"
                        >
                            <span class="umg-criminologia-story__progress-idx">{{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="umg-criminologia-story__progress-bar" aria-hidden="true"></span>
                            <span class="umg-criminologia-story__progress-label">{{ $item['label'] }}</span>
                        </button>
                    </li>
                @endforeach
            </ol>
        </nav>
    @endif

    <div class="umg-criminologia-story__stack">
        @foreach ($scenes as $index => $scene)
            <x-umg-criminologia-story-card
                :number="$scene['number']"
                :eyebrow="$scene['eyebrow'] ?? ''"
                :title="$scene['title']"
                :description="$scene['description'] ?? null"
                :image="$scene['image']"
                :image-alt="$scene['image_alt'] ?? ''"
                :image-position="$scene['image_position'] ?? 'center center'"
                :variant="$scene['variant']"
                :scene-id="$scene['id']"
                :index="$index"
                :words="$scene['words'] ?? []"
                :points="$scene['points'] ?? []"
                :ctas="$scene['ctas'] ?? []"
                :priority="$index === 0"
            />
        @endforeach
    </div>
</section>
