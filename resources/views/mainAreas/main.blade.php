<main class="w-100 h-100 bg-custom-black text-white d-flex justify-content-center align-items-center overflow-hidden">
    @if ($menuData[1]["isActive"])
        @include('subAreas.main.comics')
    @else
        @include('subAreas.main.emptyTitle')
    @endif
</main>
