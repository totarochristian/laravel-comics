<div id="contacts" class="w-100 text-white d-flex justify-content-center align-items-center overflow-hidden">
    <div class="w-75 d-flex justify-content-between align-items-center gap-4">
        @include("single.button", [
            "btnTitle" => "sign-up now!",
            "btnSize" => 3,
            "btnFilled" => false,
            "btnAlignCenter" => false
        ])
        <div class="w-100 d-flex justify-content-between align-items-center gap-4">
            <h5 class="text-primary fw-bold text-uppercase">follow us</h5>
            @include("single.social")
        </div>
    </div>
</div>
