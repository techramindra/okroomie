<?php

namespace App\View\Components\Roomie;

use Illuminate\View\Component;
use stdClass;

class Step1 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data=new stdClass;
        return view('components.roomie.step1',compact('data'));
    }
}
