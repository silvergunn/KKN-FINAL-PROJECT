<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('__bbedf90816881075d13b5f13955270e7')):
function __bbedf90816881075d13b5f13955270e7($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
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
$__defaults = [
    'position' => 'bottom end',
    'expanded' => false,
];
$position ??= $attributes['position'] ?? $__defaults['position']; unset($attributes['position']);
$expanded ??= $attributes['expanded'] ?? $__defaults['expanded']; unset($attributes['expanded']);
unset($__defaults);
?>

<ui-toast-group x-data x-on:toast-show.document="$el.showToast($event.detail)" popover="manual" position="<?php echo e($position); ?>" <?php echo e($expanded ? 'expanded' : ''); ?> wire:ignore>
    <?php echo e($slot); ?>

</ui-toast-group>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/toast/group.blade.php ENDPATH**/ ?>