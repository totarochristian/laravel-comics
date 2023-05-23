<div id="comic_{{ $comicIndex }}" class="comic d-flex flex-column">
    <div class="comicImage">
        <img src="{{ $comicData["thumb"] }}" alt="{{$comicData["series"]}}" class="w-100 h-100">
        <span class="type text-uppercase fw-bold">{{ $comicData["type"] }}</span>
        <span class="price fs-1 fw-bold">{{ $comicData["price"] }}</span>
    </div>
    <p class="w-100 text-uppercase pt-3">{{ $comicData["series"] }}</p>
</div>
