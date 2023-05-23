<div id="socials" class="d-flex gap-3">
    @foreach ($socialsData as $data)
    <a href="{{$data["link"]}}">
        <img src="{{ Vite::asset("/resources/img/".$data["imageName"]) }}" alt="$data["name"]">
    </a>
    @endforeach
</div>
