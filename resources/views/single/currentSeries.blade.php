<div id="currentSeries" class="w-100 h-100 d-flex flex-column justify-content-start align-items-center pb-4">
    <div class="w-75 ">
        @include("single.button", [
            "btnTitle" => "current series",
            "btnSize" => 3,
            "btnFilled" => true,
            "btnAlignCenter" => false
        ])
    </div>
    <div class="w-75 h-100 d-flex flex-column justify-content-start align-items-start pb-4">
        @include("single.comicsLinks")
        @include("single.button", [
            "btnTitle" => "load more",
            "btnSize" => 2,
            "btnFilled" => true,
            "btnAlignCenter" => true
        ])
    </div>
</div>
