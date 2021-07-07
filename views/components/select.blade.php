{{---------------------------------------------------------------------------
    Select component with help text

---------------------------------------------------------------------------}}

{{-- Conditionally render the 'frm-row'. This makes it easer to create complex
layouts using columns. This seems a little convoluted an easliy could be placed
on the WTF pile, but it works! --}}

@if(!$adv)<div class="frm-row {{ $rowClasses }}"> @endif

    @isset($label)
        <label @isset($required) {{ "class=req" }} @endisset for="{{ $for }}">{{ $label }}</label>
    @endisset

    @isset($helpText)
        <div class="help"> <small>{{ $helpText }}</small> </div>
    @endisset

    <select name="{{ $for }}" {{ $errors->has( $for ) ? "class=bdr-red" : null }}>

        <option value="">Please Select ...</option>

        {{-- if the item in this iteration equals the old value, then select it --}}
        @foreach($items as $item)
            @if($item == (old($for) ? old($for) : ($currentValue ?? '')))
                <option value="{{ $item }}" selected> {{ $item }} </option>
            @else
                <option value="{{ $item }}"> {{ $item }} </option>
            @endif
        @endforeach

    </select>

    @error($for)
        <div class="txt-red fullwidth tar" role="alert"> {{ $message }} </div>
    @enderror

    @if(!$adv)</div> @endif