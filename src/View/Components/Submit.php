<?php

namespace Naykel\Formit\View\Components;

use Illuminate\View\Component;

class Submit extends Component
{

    public $classes;    // (optional) button classes
    public $label; // (optional)
    public $rowClasses; // (optional) row classes (inline)
    public $adv; // removes frm-row allowing advanced layouts

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $classes = 'btn-primary', $rowClasses = '', $label = 'Submit', $adv = false)
    {
        $this->classes = $classes;
        $this->rowClasses = $rowClasses;
        $this->label = $label;
        $this->adv = $adv;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('formit::components.submit');
    }
}
