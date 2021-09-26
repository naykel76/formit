@props([
    'for' => null,
    'value' => null,
    'label' => null,
    'adv' => false,
    'helpText' => null,
    'required' => false,
    'rowClasses' => null
    ])


<?= !$adv ? "<div class='frm-row $rowClasses'>" : '' ?>

    @isset($label)
        <label {{ $required ? "class='required'" : '' }} for="{{ $for }}">{{ $label }}</label>
    @endisset

    @isset($helpText)
        <div class="help"> <small>{{ $helpText }}</small> </div>
    @endisset

    <input name="{{ $for }}" id="{{ $for }}" {{ $errors->has( $for ) ? "class=bdr-red" : null }} {{ $attributes->merge(['type' => 'text']) }} value="{{ old($for) ? old($for) : ($value) }}" />

    @error($for)
        <div class="txt-red" role="alert"> {{ $message }} </div>
    @enderror

<?= !$adv ? "</div>" : '' ?>
