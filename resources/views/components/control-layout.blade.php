@aware([
    'for' => null,
    'value' => null,
    'label' => null,
    'helpText' => null,
    'required' => false,
    'rowClasses' => null,
    'inline' => false,
    'icon' => null,
    ])

@if(!$inline)  <div class='frm-row {{ $icon ? 'with-icon' : '' }} {{ $rowClasses }}'> @endif

    @isset($label)
        <label {{ $required ? "class='required'" : '' }} for="{{ $for }}">{{ $label }}</label>
    @endisset

    @isset($helpText)
        <div class="help"> <small>{{ $helpText }}</small> </div>
    @endisset

    {{ $slot }}

    @error($for)
        <div class="txt-red" role="alert"> {{ $message }} </div>
    @enderror

@if(!$inline) </div> @endif
