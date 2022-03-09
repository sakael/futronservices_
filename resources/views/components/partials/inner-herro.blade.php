<div class="container-flow page-hero">
    <div class="row">
        <div class="col-12 col-md-7 first-col"></div>
        <div class="col-12 col-md-5 background  {{ $background ?? '' }}">
        </div>
    </div>
</div>
<div class="container page-inner-hero">
    <div class="col-12 col-md-7 position-relative">
        <div class="text-wrap p-5 position-relative">
            <h3 class="fs-48 extra-bold raleway uppercase lh-base">
            @yield('hero-title','')<br><span></span></h3>
            <p class="cabin lh-sm fs-20 mt-4">@yield('hero-short-content','')</p>
        </div>
    </div>
</div>