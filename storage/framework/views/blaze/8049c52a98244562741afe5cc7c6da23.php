<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('__3d472e2b56c12240c798de0b11bdec2c')):
function __3d472e2b56c12240c798de0b11bdec2c($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = new \Livewire\Blaze\Runtime\BlazeAttributeBag($__attributes);
unset($__data, $__attributes);
ob_start();
?>


<div <?php echo e($attributes->class('flex-1')); ?> data-flux-spacer></div>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/spacer.blade.php ENDPATH**/ ?>