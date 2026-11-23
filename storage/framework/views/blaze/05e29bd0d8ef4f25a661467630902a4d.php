<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('__d327ffe01a8f19116ce55f0de5018856')):
function __d327ffe01a8f19116ce55f0de5018856($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = new \Livewire\Blaze\Runtime\BlazeAttributeBag($__attributes);
unset($__data, $__attributes);
ob_start();
?>


<div <?php echo e($attributes->class('flex items-center justify-between gap-2 min-h-10')); ?> data-flux-sidebar-header>
    <?php echo e($slot); ?>

</div><?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/sidebar/header.blade.php ENDPATH**/ ?>