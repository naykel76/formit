@props([
    'default' => true,
    'text' => null,
    'inline' => false,
    'rowClasses' => null,
    ])

    @if(!$inline)  <div class='frm-row tar {{ $rowClasses }}'> @endif

        <button type="submit" {{ $attributes->merge(['class' => 'btn' . ($default ? ' primary' : null)]) }}> {{ $text }} </button>

        @if(!$inline) </div> @endif
