@props([
    'title',
    'href',
    'image',
    'alt',
    'description',
])

<article class="umg-faculty-card">
    <div class="umg-faculty-card__media">
        <img src="{{ URL::asset($image) }}" alt="{{ $alt }}" width="640" height="360">
    </div>
    <div class="umg-faculty-card__accent" aria-hidden="true"></div>
    <div class="umg-faculty-card__body">
        <h3 class="umg-faculty-card__title">
            <a href="{{ $href }}">{{ $title }}</a>
        </h3>
        <p class="umg-faculty-card__text">{{ $description }}</p>
        <a class="umg-faculty-card__cta" href="{{ $href }}">Conocer más</a>
    </div>
</article>
