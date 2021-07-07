<?php

namespace Naykel\Formit\View\Components;

use Illuminate\View\Component;

class Radio extends Component
{
    public $for; // Radio group name
    public $currentValue; //  db or field value do not use 'value' or will conflict
    public $label; // (optional) radio group title
    public $helpText; // (optional) on screen help text
    public $rowClasses; // (optional) row classes (inline)
    public $adv; // removes frm-row allowing advanced layouts
    public $items; // array of items

    public function __construct($for = null, $currentValue = null, $items, $label = null, $adv = false, $helpText = null, $rowClasses = null)
    {
        $this->for = $for;
        $this->currentValue = $currentValue;
        $this->items = $items; // mutated array
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
        return view('formit::components.radio');
    }
}
