@props([
    'for' => null,
    'value' => null,
    'label' => null,
    'adv' => false,
    'helpText' => null,
    'required' => false,
    'rowClasses' => null
    ])

{{-- DO NOT ADD ROW AND COLUMNS HERE UNLESS THEY CAN BE OVERRIDDEN --}}

<?= !$adv ? "<div class='frm-row $rowClasses'>" : '' ?>

    @isset($label)
        <label {{ $required ? "class='required'" : '' }} for="{{ $for }}">{{ $label }}</label>
    @endisset

    @isset($helpText)
        <div class="help"> <small>{{ $helpText }}</small> </div>
    @endisset

    <textarea name="{{ $for }}" id="{{ $for }}" {{ $errors->has( $for ) ? "class=bdr-red" : null }} {{ $attributes }} >{{ old($for) ? old($for) : ($value) }}</textarea>

    @error($for)
        <div class="txt-red" role="alert"> {{ $message }} </div>
    @enderror

<?= !$adv ? "</div>" : '' ?>
