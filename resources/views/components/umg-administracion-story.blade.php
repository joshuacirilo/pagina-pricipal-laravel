@php
    $story = config('umg-administracion-story');
    $scenes = $story['scenes'] ?? [];
    $progress = $story['progress'] ?? [];
@endphp

<section
    class="umg-administracion-story"
    id="umg-administracion-story"
    aria-labelledby="umg-administracion-story-title"
    data-umg-administracion-story
>
    @if (count($progress))
        <nav class="umg-administracion-story__progress" aria-label="Progreso de la historia">
            <ol class="umg-administracion-story__progress-list">
                @foreach ($progress as $i => $item)
                    <li>
                        <button
                            type="button"
                            class="umg-administracion-story__progress-btn{{ $i === 0 ? ' is-active' : '' }}"
                            data-story-nav="{{ $item['id'] }}"
                            aria-current="{{ $i === 0 ? 'true' : 'false' }}"
                        >
                            <span class="umg-administracion-story__progress-idx">{{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="umg-administracion-story__progress-bar" aria-hidden="true"></span>
                            <span class="umg-administracion-story__progress-label">{{ $item['label'] }}</span>
                        </button>
                    </li>
                @endforeach
            </ol>
        </nav>
    @endif

    <div class="umg-administracion-story__stack">
        @foreach ($scenes as $index => $scene)
            <x-umg-administracion-story-card
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
