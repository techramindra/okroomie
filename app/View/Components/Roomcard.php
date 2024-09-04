<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Roomcard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    private $val;
    private $key;
    public function __construct($val,$key)
    {
        $this->val=$val;
        $this->key=$key;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $key=$this->key;
        $val=$this->val;
        return view('components.room-card',compact('key','val'));
    }
}
