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
    'placeholder' => 'Please select',
    ])

    <x-formit::control-layout>

        <select {{ $attributes }}>

            @if($placeholder)
                <option value="">{{ $placeholder }}</option>
            @endif

            {{ $slot }}

        </select>

    </x-formit::control-layout>
