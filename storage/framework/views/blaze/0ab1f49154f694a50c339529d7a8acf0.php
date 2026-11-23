<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('__d435c2f37721d51d843eb32c6b37c644')):
function __d435c2f37721d51d843eb32c6b37c644($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = new \Livewire\Blaze\Runtime\BlazeAttributeBag($__attributes);
unset($__data, $__attributes);
ob_start();
?>


<?php
extract(Flux::forwardedAttributes($attributes, [
    'tooltipPosition',
    'tooltipKbd',
    'tooltip',
]));
?>

<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'top',
    'tooltipKbd' => null,
    'tooltip' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
unset($__defaults);
?>

<?php if ($tooltip): ?>
    <?php if (!function_exists('__2a33e14023bff15be127b4b31bf6f704')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/tooltip/index.blade.php'); } ?>
<?php if (isset($__slots2a33e14023bff15be127b4b31bf6f704)) { $__slotsStack2a33e14023bff15be127b4b31bf6f704[] = $__slots2a33e14023bff15be127b4b31bf6f704; } ?>
<?php if (isset($__data2a33e14023bff15be127b4b31bf6f704)) { $__dataStack2a33e14023bff15be127b4b31bf6f704[] = $__data2a33e14023bff15be127b4b31bf6f704; } ?>
<?php $__data2a33e14023bff15be127b4b31bf6f704 = ['class' => 'inline-flex','content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slots2a33e14023bff15be127b4b31bf6f704 = []; ?>
<?php $__blaze->pushData($__data2a33e14023bff15be127b4b31bf6f704); ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $__slots2a33e14023bff15be127b4b31bf6f704['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots2a33e14023bff15be127b4b31bf6f704); ?>
<?php __2a33e14023bff15be127b4b31bf6f704($__blaze, $__data2a33e14023bff15be127b4b31bf6f704, ['class' => 'inline-flex', 'content' => \Livewire\Blaze\Runtime\BlazeRuntime::sanitizeFoldedAttribute($__data2a33e14023bff15be127b4b31bf6f704['content']), 'position' => \Livewire\Blaze\Runtime\BlazeRuntime::sanitizeFoldedAttribute($__data2a33e14023bff15be127b4b31bf6f704['position']), 'kbd' => \Livewire\Blaze\Runtime\BlazeRuntime::sanitizeFoldedAttribute($__data2a33e14023bff15be127b4b31bf6f704['kbd'])], $__slots2a33e14023bff15be127b4b31bf6f704, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack2a33e14023bff15be127b4b31bf6f704)) { $__slots2a33e14023bff15be127b4b31bf6f704 = array_pop($__slotsStack2a33e14023bff15be127b4b31bf6f704); } ?>
<?php if (! empty($__dataStack2a33e14023bff15be127b4b31bf6f704)) { $__data2a33e14023bff15be127b4b31bf6f704 = array_pop($__dataStack2a33e14023bff15be127b4b31bf6f704); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/with-tooltip.blade.php ENDPATH**/ ?>