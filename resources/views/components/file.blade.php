@props([
    'for' => null,
    'value' => null,
    'label' => 'Select File',
    'adv' => false,
    'helpText' => null,
    'rowClasses' => null
    ])

    {{-- show icon --}}
    {{-- do i need name? --}}
    <?= !$adv ? "<div class='frm-row {{ $rowClasses }}'>" : '' ?>

    @isset($helpText)
        <div class="help"> <small>{{ $helpText }}</small> </div>
    @endisset

    {{-- <input type="file" id="uploaded_file" accept="image/*" /> --}}

    {{-- <label for="uploaded_file" class="btn">heyhey</label> --}}

    <input type="file" id="uploadedFile" name="uploadedFile" accept="image/*" />

    <label for="uploadedFile" class="btn">heyhey</label>


    {{-- <div class="btn file">


        <svg class="icon">
            <use xlink:href="/svg/naykel-ui-SVG-sprite.svg#upload"></use>
        </svg>

        <span class="file-label">
@isset($label)
                <span class="file-label">{{ $label }}</span>
@endisset
</span>

</div> --}}
{{-- <div class="btn file">

        <input type="file" name="{{ $for }}" accept="image/*" />

<svg class="icon">
    <use xlink:href="/svg/naykel-ui-SVG-sprite.svg#upload"></use>
</svg>

<span class="file-label">
    @isset($label)
        <span class="file-label">{{ $label }}</span>
    @endisset
</span>

</div> --}}


@error($for)
    <div class="txt-red fullwidth tar" role="alert"> {{ $message }} </div>
@enderror

<?= !$adv ? "</div>" : '' ?>