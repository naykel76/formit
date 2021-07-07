{{---------------------------------------------------------------------------
    Textarea component
---------------------------------------------------------------------------}}

<div class="frm-row {{ $rowClasses }}">

    @isset($label)
        <label @isset($required) {{ "class=req" }} @endisset for="{{ $for }}">{{ $label }}</label>
    @endisset

    @isset($helpText)
        <div class="help"> <small>{{ $helpText }}</small> </div>
    @endisset

    <textarea rows="4" cols="50"
        name="{{ $for }}" {{ $attributes }}
        {{ $errors->has( $for ) ? "class=bdr-red" : null }}
    >{{  old($for) ? old($for) : ($value)  }}</textarea>

    @error($for)
        <div class="txt-red fullwidth tar" role="alert"> {{ $message }} </div>
    @enderror

</div>
