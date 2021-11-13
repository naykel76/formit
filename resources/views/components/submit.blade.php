@props(['label' => 'Submit', 'adv' => false, 'default' => true, 'rowClasses' => null])

<?= !$adv ? "<div class='frm-row $rowClasses'>" : '' ?>

    <button type="submit" {{ $attributes->merge(['class' => 'btn' . ($default ? ' primary' : null)]) }}> {{ $label }} </button>

<?= !$adv ? "</div>" : '' ?>

