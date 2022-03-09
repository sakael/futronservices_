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
                <div class="col-md-13 col-12 mt-5">
                    {!! $page->content !!}
                    @if($careers)
                    <div class="accordion mt-5" id="accordionExample">
                        @foreach ($careers as $key => $item)
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="heading_{{$key}}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$key}}" aria-expanded="true" aria-controls="collapse_{{$key}}">
                                    {{$item->title}}
                                    </button>
                                </h2>
                                <div id="collapse_{{$key}}" class="accordion-collapse collapse @if($loop->index == 0)show @endif" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    {!! $item->text !!}
                                    </div>
                                </div>
                                </div>
                           
                            @endforeach
                        </div>
                        @endif
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
