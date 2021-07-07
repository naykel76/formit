{{---------------------------------------------------------------------------
    Checkbox Component
---------------------------------------------------------------------------}}

<div class="frm-row {{ $rowClasses }}">

    <input type="checkbox" name="{{ $for }}" id="{{ $for }}"
        {{ old($for) ? (old($for) ? "checked='checked'" : null) : ($isChecked ? "checked='checked'" : null) }} />

    <label for="{{ $for }}">{{ $label }}</label>

    @isset($helpText)
        <div class="help"> <small>{{ $helpText }}</small> </div>
    @endisset

    @error($for)
        <div class="txt-red fullwidth tar" role="alert"> {{ $message }} </div>
    @enderror

</div>
