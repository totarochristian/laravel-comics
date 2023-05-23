<div id="brands" class="w-100 h-100 bg-primary text-white d-flex justify-content-center align-items-center">
    <div class="w-75 h-100 d-flex justify-content-around align-items-center gap-4">
        @foreach ($brandsData as $brand)
            @include('single.feature',[
                "featureImageName" => $brand["imageName"],
                "featureTitle" => $brand["text"],
            ])
        @endforeach
    </div>
</div>
