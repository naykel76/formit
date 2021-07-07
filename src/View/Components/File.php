<?php

namespace Naykel\Formit\View\Components;

use Illuminate\View\Component;

class File extends Component
{
    public $for; // database_field
    public $value; // database value
    public $label; //(optional) input label
    public $helpText; // (optional) on screen help text
    public $rowClasses; // (optional) row classes (inline)
    public $adv; // removes frm-row allowing advanced layouts

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($for =null, $value = null, $label = 'Choose a file ...', $adv = false, $helpText = null, $rowClasses = null)
    {
        $this->for = $for;
        $this->value = $value;
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
        return view('formit::components.file');
    }
}
