<?php

namespace Naykel\Formit\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{

    public $for;
    public $isChecked;
    public $label;
    public $helpText;
    public $rowClasses;
    public $adv; // removes frm-row allowing advanced layouts

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($for, $isChecked = null, $label = 'Checkbox', $adv = false, $helpText = null, $rowClasses = null)
    {
        $this->for = $for;
        $this->isChecked = $isChecked;
        $this->label = $label;
        $this->adv = $adv;
        $this->helpText = $helpText;
        $this->rowClasses = $rowClasses;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('formit::components.checkbox');
    }
}
