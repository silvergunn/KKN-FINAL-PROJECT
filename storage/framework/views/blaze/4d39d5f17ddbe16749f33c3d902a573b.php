<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('__1385a0f7fcfd707406ec68500b438827')):
function __1385a0f7fcfd707406ec68500b438827($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = new \Livewire\Blaze\Runtime\BlazeAttributeBag($__attributes);
unset($__data, $__attributes);
ob_start();
?>


<?php $srOnly = $srOnly ??= $attributes->pluck('sr-only'); ?>

<?php
$__defaults = [
    'srOnly' => null,
];
$srOnly ??= $attributes['sr-only'] ?? $attributes['srOnly'] ?? $__defaults['srOnly']; unset($attributes['srOnly'], $attributes['sr-only']);
unset($__defaults);
?>

<?php
$classes = Flux::classes()
    ->add('text-sm text-zinc-500 dark:text-white/60')
    ->add($srOnly ? 'sr-only' : '')
    ;
?>

<ui-description <?php echo e($attributes->class($classes)); ?> data-flux-description>
    <?php echo e($slot); ?>

</ui-description>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/description.blade.php ENDPATH**/ ?>