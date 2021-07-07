<?php

namespace Naykel\Formit\View\Components;

use Illuminate\View\Component;

class Ckeditor extends Component
{
    public $for; // database_field
    public $value; // database value
    public $label; //(optional) input label
    public $classes; // (optional) input classes
    public $attributes; // (optional) attributes (readonly, hidden, selected)
    public $helpText; // (optional) on screen help text
    public $required; // (optional) automatically adds *
    public $rowClasses; // (optional) row classes (inline)
    public $adv; // removes frm-row allowing advanced layouts

    public function __construct($for, $value = null, $label = null, $adv = false, $classes = null, $attributes = null, $helpText = null, $required = false, $rowClasses = null)
    {
        $this->for = $for;
        $this->value = $value;
        $this->label = $label;
        $this->adv = $adv;
        $this->classes = $classes;
        $this->attributes = $attributes;
        $this->helpText = $helpText;
        $this->required = $required;
        $this->rowClasses = $rowClasses;
    }

    public function render()
    {
        return view('formit::components.ckeditor');
    }
}
