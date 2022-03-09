<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class InnerPage extends Component
{
    /**
     * The Seo.
     *
     * @var string
     */
    public $seo;
    /**
     * The background image.
     *
     * @var string
     */
    public $background;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($seo,$background = NULL)
    {
        $this->seo = $seo;
        $this->background = $background;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.inner-page');
    }
}
