{{---------------------------------------------------------------------------
    Naykel/Wridit Ckeditor Textarea component
---------------------------------------------------------------------------}}

{{-- add script to head --}}
@section('head')
    <script src="/vendor/ckeditor/ckeditor.js"></script>
    <style>
        div#cke_1_contents{
            height: 100vh;
        }
    </style>
@endsection

<div class="frm-row {{ $rowClasses }}">

    @isset($label)
        <label @isset($required) {{ "class=req" }} @endisset for="{{ $for }}">{{ $label }}</label>
    @endisset

    @isset($helpText)
        <div class="help"> <small>{{ $helpText }}</small> </div>
    @endisset

   <textarea id="ckeditor"
        name="{{ $for }}"
        @isset($placeholder) placeholder="{{ $placeholder }}" @endisset
        {{-- NK:!! the error class will not work like this, need to fix --}}
        @isset($classes) class="{{ $classes }} {{ $errors->has( $for ) ? 'bdr-red' : '' }}" @endisset
        @isset($attributes) {{ $attributes }} @endisset
    >
        {{  old($for) ? old($for) : ($value)  }}
    </textarea>

    @error($for)
        <div class="txt-red fullwidth tar" role="alert"> {{ $message }} </div>
    @enderror

</div>

@section('scripts')
    <script>
        setTimeout(function(){ CKEDITOR.replace( 'ckeditor' ); },100);
    </script>
@endsection
