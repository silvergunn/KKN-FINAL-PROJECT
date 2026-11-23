<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('_67d41944b0c50aeefb1ba3b0ed01a3ea')):
function _67d41944b0c50aeefb1ba3b0ed01a3ea($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = new \Livewire\Blaze\Runtime\BlazeAttributeBag($__attributes);
unset($__data, $__attributes);
ob_start();
?>


<?php
$__defaults = [
    'name' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
unset($__defaults);
?>

<?php
// We only want to show the name attribute on the checkbox if it has been set
// manually, but not if it has been set from the wire:model attribute...
$showName = isset($name);

if (! isset($name)) {
    $name = $attributes->whereStartsWith('wire:model')->first();
}

$classes = Flux::classes()
    ->add('flex size-[1.125rem] rounded-[.3rem] mt-px outline-offset-2')
    ;
?>

<?php if (!function_exists('_9a4f70701ca883fa7a0ec978f552b097')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/with-inline-field.blade.php'); } ?>
<?php if (isset($__slots9a4f70701ca883fa7a0ec978f552b097)) { $__slotsStack9a4f70701ca883fa7a0ec978f552b097[] = $__slots9a4f70701ca883fa7a0ec978f552b097; } ?>
<?php if (isset($__data9a4f70701ca883fa7a0ec978f552b097)) { $__dataStack9a4f70701ca883fa7a0ec978f552b097[] = $__data9a4f70701ca883fa7a0ec978f552b097; } ?>
<?php $__data9a4f70701ca883fa7a0ec978f552b097 = ['attributes' => $attributes]; ?>
<?php $__slots9a4f70701ca883fa7a0ec978f552b097 = []; ?>
<?php $__blaze->pushData($__data9a4f70701ca883fa7a0ec978f552b097); ?>
<?php ob_start(); ?>
    <ui-checkbox <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> data-flux-control data-flux-checkbox>
        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::checkbox.indicator", []); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_d38b58cbd4a10c6632f973bb06aa84e1')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/checkbox/indicator.blade.php'); } ?>
<?php $__componentData = []; ?>
<?php $__blaze->pushData($__componentData); ?>
<?php _d38b58cbd4a10c6632f973bb06aa84e1($__blaze, $__componentData, [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
    </ui-checkbox>
<?php $__slots9a4f70701ca883fa7a0ec978f552b097['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots9a4f70701ca883fa7a0ec978f552b097); ?>
<?php _9a4f70701ca883fa7a0ec978f552b097($__blaze, $__data9a4f70701ca883fa7a0ec978f552b097, $__blaze->mergeAttributes(['attributes' => $__data9a4f70701ca883fa7a0ec978f552b097['attributes']]), $__slots9a4f70701ca883fa7a0ec978f552b097, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack9a4f70701ca883fa7a0ec978f552b097)) { $__slots9a4f70701ca883fa7a0ec978f552b097 = array_pop($__slotsStack9a4f70701ca883fa7a0ec978f552b097); } ?>
<?php if (! empty($__dataStack9a4f70701ca883fa7a0ec978f552b097)) { $__data9a4f70701ca883fa7a0ec978f552b097 = array_pop($__dataStack9a4f70701ca883fa7a0ec978f552b097); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/checkbox/variants/default.blade.php ENDPATH**/ ?>