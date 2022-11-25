<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Entete extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $nom;
    public $jour;


    public function __construct($personne, $jour)
    {
        $this->nom = $personne;
        $this->jour = $jour;

        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.entete');
    }
}
