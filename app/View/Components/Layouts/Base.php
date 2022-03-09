<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class Base extends Component
{
    /**
     * The Seo.
     *
     * @var string
     */
    public $seo;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($seo)
    {
        $this->seo = $seo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.base');
    }
}
