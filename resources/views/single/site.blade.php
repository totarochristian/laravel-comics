@foreach ($sitesData as $siteList)
    <div class="d-flex flex-column justify-content-start align-items-start">
        <h5 class="fw-semibold text-uppercase">{{ $siteList["title"] }}</h5>
        @foreach ($siteList["links"] as $link)
            <div id="links" class="d-flex flex-column">
                <a class="fs-7 text-capitalize" :href="{{ $link["link"] }}">{{ $link["text"] }}</a>
            </div>
        @endforeach
    </div>
@endforeach

