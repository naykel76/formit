<?php

namespace Naykel\Formit\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $for; // database_field
    public $currentValue; //  db or field value do not use 'value' or will conflict
    public $label; //(optional) input label
    public $helpText; // (optional) on screen help text
    public $required; // (optional) automatically adds *
    public $rowClasses; // (optional) row classes (inline)
    public $adv; // removes frm-row allowing advanced layouts
    public $items; // array of items

    public function __construct($for = null, $currentValue = null, $items, $label = null, $adv = false, $helpText = null, $required = true, $rowClasses = null)
    {
        // array_unshift($items, "Please Select ..."); // mutate array to include initial msg

        $this->for = $for;
        $this->currentValue = $currentValue;
        $this->items = $items; // mutated array
        $this->label = $label;
        $this->adv = $adv;
        $this->helpText = $helpText;
        $this->required = $required;
        $this->rowClasses = $rowClasses;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('formit::components.select');
    }
}
