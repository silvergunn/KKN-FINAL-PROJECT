<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('__3eaa5637ed1ece76e0122e4846fb1f5b')):
function __3eaa5637ed1ece76e0122e4846fb1f5b($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = new \Livewire\Blaze\Runtime\BlazeAttributeBag($__attributes);
unset($__data, $__attributes);
ob_start();
?>


<div class="-mx-[.3125rem] my-[.3125rem] h-px" <?php echo e($attributes); ?> data-flux-menu-separator>
    <?php if (!function_exists('__56fe1b3ed9a2f51eb659811f79c2db2b')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/separator.blade.php'); } ?>
<?php $__componentData = ['class' => 'dark:bg-zinc-600!']; ?>
<?php $__blaze->pushData($__componentData); ?>
<?php __56fe1b3ed9a2f51eb659811f79c2db2b($__blaze, $__componentData, ['class' => 'dark:bg-zinc-600!'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
</div>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/menu/separator.blade.php ENDPATH**/ ?>