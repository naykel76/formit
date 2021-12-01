
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

        <div x-data="{ value: @entangle($attributes->wire('model')), picker: undefined }" x-init="new Pikaday({ field: $refs.input, format: 'DD/MM/YY', onOpen() { this.setDate($refs.input.value) } })" x-on:change="value = $event.target.value">

            <input id="{{ $for }}" {{ $attributes->whereDoesntStartWith('wire:model') }} x-ref="input" x-bind:value="value" />

        </div>

    </x-formit::control-layout>
