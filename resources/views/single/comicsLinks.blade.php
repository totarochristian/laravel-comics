<div id="comicsLinks" class="px-3 py-4 d-flex justify-content-center flex-wrap gap-4">
    @foreach ($comicsData as $comicData)
    @include("single.comic",[
        "comicIndex" => $loop->index,
        "comicData" => $comicData
    ])
    @endforeach
</div>
