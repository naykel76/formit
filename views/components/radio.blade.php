{{---------------------------------------------------------------------------
    Radio component with help text

---------------------------------------------------------------------------}}

{{-- Conditionally render the 'frm-row'. This makes it easer to create complex
layouts using columns. This seems a little convoluted an easliy could be placed
on the WTF pile, but it works! --}}
<?= !$adv ? "<div class='frm-row {{ $rowClasses }}'>" : '' ?>

    @isset($label)
        <label @isset($required) {{ "class=req" }} @endisset for="{{ $for }}">{{ $label }}</label>
    @endisset

    @isset($helpText)
        <div class="help"> <small>{{ $helpText }}</small> </div>
    @endisset

    {{-- https://laracasts.com/discuss/channels/laravel/laravel-livewire-form-radio?page=1&replyId=675598 --}}
    {{-- NK:FIX --}}
    <div class="ml group">
        @foreach($items as $item)
            <div class="">
                <input name="{{ $for }}" type="radio" >

                {{-- @if ($item == $value)
                    {{ dd('sdfsdf') }}
            @else
                {{ dd('szzzzzdfsdf') }}

        @endif--}}
        {{-- <input name="{{ $for }}" type="radio" {{ old($for) ? (old($for) ? "checked='checked'" : null) : ($item ? "checked='checked'" : null) }}> --}}
        {{-- <input name="{{ $field_for }}" type="radio" {{ old($field_for) ? (old($field_for) ? "checked='checked'" : null) : ($is_checked ? "checked='checked'" : null) }}> --}}
        {{-- {{ old($field_for) ? (old($field_for) ? "checked='checked'" : null) : ($is_checked ? "checked='checked'" : null) }}> --}}
        <label class="fw4 nm" for="{{ $item }}">{{ $item }}</label>
    </div>


@endforeach
</div>

<div class="bx fullwidth">
    {{ old($for) }}
</div>

@error($for)
    <div class="txt-red fullwidth tar" role="alert"> {{ $message }} </div>
@enderror

<?= !$adv ? "</div>" : '' ?>

    {{-- 
@foreach($items as $item)
@if($item == (old($for) ? old($for) : ($currentValue ?? '')))
        <option value="{{ $item }}" selected> {{ $item }} </option>
@else
    <option value="{{ $item }}"> {{ $item }} </option>
@endif
@endforeach--}}