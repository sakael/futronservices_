<x-layouts.inner-page :seo="$seo" :background="$page->hero_background">
    <x-section name="scripts-hedaer">
        <!-- Some JS and styles -->
    </x-section>
    <x-section name="hero-background"></x-section>
    <x-section name="hero-title">
        {{$page->title}}
    </x-section>
    <x-section name="hero-short-content">
        {!! $page->short_content !!}
    </x-section>
    <div class="section-page">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-md-10 col-12 mt-5">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
    <x-section name="scripts-footer">
        <!-- Some JS and styles -->
        <script type="text/javascript">
        </script>
    </x-section>
</x-layouts.inner-page>
