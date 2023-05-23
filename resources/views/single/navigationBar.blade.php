<div id="navigationBar" class="h-100 d-flex justify-content-between align-items-center gap-4">
    @foreach ($menuData as $elem)
        <div class="navigationBarElement h-100 {{ $elem["isActive"] ? 'active' : '' }}">
            <span class="h-100 fw-semibold text-uppercase">{{ $elem["text"] }}</span>
        </div>
    @endforeach
</div>
