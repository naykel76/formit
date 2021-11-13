{{-- icon only works without a label because it realise on the relative position of the frm-row --}}

@props([
    'for' => null,
    'value' => null,
    'label' => null,
    'helpText' => null,
    'required' => false,
    'rowClasses' => null,
    'inline' => false,
    'leadingAddOn' => false,
    'icon' => null,
    ])

    @push('head')
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    @endpush

    <x-formit::control-layout>

        <div x-data x-init="new Pikaday({ field: $refs.input, format: 'DD/MM/YYYY' })" @change="$dispatch('input', $event.target.value)">

            {{-- <input  value="{{ old($for) ? old($for) : ($value) }}" {{ $attributes->merge(['type' => 'text']) }} /> --}}

            <input wire:model="editing.date_for_editing" x-ref="input" name="{{ $for }}" id="{{ $for }} {{ $errors->has( $for ) ? "class=bdr-red" : null }}" />

        </div>

        @if($icon && !$label)

            <x:gotime::icon icon="{{ $icon }}" />

        @endif

    </x-formit::control-layout>


    @push('scripts')
        <script src="https://unpkg.com/moment"></script>
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    @endpush

    {{-- <div x-data="{ value: @entangle($attributes->wire('model')), picker: undefined }" x-init="new Pikaday({ field: $refs.input, format: 'MM/DD/YYYY', onOpen() { this.setDate($refs.input.value) } })" x-on:change="value = $event.target.value" class="flex rounded-md shadow-sm">


        <input {{ $attributes->whereDoesntStartWith('wire:model') }} x-ref="input" x-bind:value="value" class="" />
    </div> --}}