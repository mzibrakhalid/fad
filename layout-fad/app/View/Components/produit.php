<?php

namespace App\View\Components;

use Illuminate\View\Component;

class produit extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $price;
    public $title;
    public $image;
    public $previousPrice;


    public function __construct($price, $title, $image, $previousPrice)
    {
        $this->price = $price;
        $this->title = $title;
        $this->image = $image;
        $this->previousPrice = $previousPrice;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.produit');
    }
}
