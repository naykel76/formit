{{---------------------------------------------------------------------------
    File input component with help text
---------------------------------------------------------------------------}}

{{-- Conditionally render the 'frm-row'. This makes it easer to create complex
layouts using columns. This seems a little convoluted and could easliy be placed
on the WTF pile, but it works! --}}


@if (!$adv)<div class="frm-row {{ $rowClasses }}"> @endif

    @isset($helpText)
        <div class="help"> <small>{{ $helpText }}</small> </div>
    @endisset

    <div class="btn file">

        <input type="file" name="{{ $for }}" accept="image/*" />

        <svg class="icon">
           <use xlink:href="/svg/nk_icon-defs.svg#icon-upload"></use>
        </svg>

        <span class="file-label">
            @isset($label)
                <span class="file-label">{{ $label }}</span>
            @endisset
        </span>

    </div>
{{--
    <input name="{{ $for }}"
        {{ $errors->has( $for ) ? "class=bdr-red" : null }}
        {{ $attributes->merge(['type' => 'text']) }}
        value="{{ old($for) ? old($for) : ($value) }}" /> --}}

    @error($for)
        <div class="txt-red fullwidth tar" role="alert"> {{ $message }} </div>
    @enderror

@if (!$adv)</div> @endif
