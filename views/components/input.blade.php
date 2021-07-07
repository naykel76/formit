{{---------------------------------------------------------------------------
    Input component with help text

    Note: If you are updating an input where the value has come from the database
    make sure you add the old('field') when setting the 'value' field.


---------------------------------------------------------------------------}}

{{-- Conditionally render the 'frm-row'. This makes it easer to create complex
layouts using columns. This seems a little convoluted an easliy could  be placed
on the WTF pile, but it works! --}}
@if(!$adv)<div class="frm-row {{ $rowClasses }}"> @endif

    @isset($label)
        <label @isset($required) {{ "class=req" }} @endisset for="{{ $for }}">{{ $label }}</label>
    @endisset

    @isset($helpText)
        <div class="help"> <small>{{ $helpText }}</small> </div>
    @endisset

    <input name="{{ $for }}" {{ $errors->has( $for ) ? "class=bdr-red" : null }} {{ $attributes->merge(['type' => 'text']) }} value="{{ old($for) ? old($for) : ($value) }}" />

    @error($for)
        <div class="txt-red fullwidth tar" role="alert"> {{ $message }} </div>
    @enderror

@if(!$adv)</div> @endif