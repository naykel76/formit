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

    <x-formit::control-layout>

        <input name="{{ $for }}" id="{{ $for }}" value="{{ old($for) ? old($for) : ($value) }}" {{ $errors->has( $for ) ? "class=bdr-red" : null }} {{ $attributes->merge(['type' => 'text']) }} />

    </x-formit::control-layout>

    {{--
        {{ $attributes->whereStartsWith('wire:model') }}
    {{ $attributes->whereDoesntStartWith('wire:model') }}
    {{ $attributes->whereStartsWith('wire:model')->first() }}

    --}}
