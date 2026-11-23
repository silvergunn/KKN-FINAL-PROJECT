<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('_ed092045667f97449ba023470d86ecd5')):
function _ed092045667f97449ba023470d86ecd5($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
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
    'iconVariant' => 'mini',
    'size' => null,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
unset($__defaults);
?>

<?php
$attributes = $attributes->merge([
    'variant' => 'subtle',
    'class' => '-me-1',
    'square' => true,
    'size' => null,
]);
?>

<?php if (!function_exists('_91ded0e8bb1a75a02736c76c12aaa946')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/button/index.blade.php'); } ?>
<?php if (isset($__slots91ded0e8bb1a75a02736c76c12aaa946)) { $__slotsStack91ded0e8bb1a75a02736c76c12aaa946[] = $__slots91ded0e8bb1a75a02736c76c12aaa946; } ?>
<?php if (isset($__data91ded0e8bb1a75a02736c76c12aaa946)) { $__dataStack91ded0e8bb1a75a02736c76c12aaa946[] = $__data91ded0e8bb1a75a02736c76c12aaa946; } ?>
<?php $__data91ded0e8bb1a75a02736c76c12aaa946 = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','xData' => 'fluxInputViewable','xOn:click' => 'toggle()','xBind:dataViewableOpen' => 'open','ariaLabel' => e(__('Toggle password visibility'))]; ?>
<?php $__slots91ded0e8bb1a75a02736c76c12aaa946 = []; ?>
<?php $__blaze->pushData($__data91ded0e8bb1a75a02736c76c12aaa946); ?>
<?php ob_start(); ?>
    <?php if (!function_exists('_34453df2d2f4770428eac188971ff81a')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/icon/eye-slash.blade.php'); } ?>
<?php $__componentData = ['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block']; ?>
<?php $__blaze->pushData($__componentData); ?>
<?php _34453df2d2f4770428eac188971ff81a($__blaze, $__componentData, ['variant' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__componentData['variant']), 'class' => 'hidden [[data-viewable-open]>&]:block'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php if (!function_exists('_24ec21279e8fe504499183948b1f91f5')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/icon/eye.blade.php'); } ?>
<?php $__componentData = ['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden']; ?>
<?php $__blaze->pushData($__componentData); ?>
<?php _24ec21279e8fe504499183948b1f91f5($__blaze, $__componentData, ['variant' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__componentData['variant']), 'class' => 'block [[data-viewable-open]>&]:hidden'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php $__slots91ded0e8bb1a75a02736c76c12aaa946['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots91ded0e8bb1a75a02736c76c12aaa946); ?>
<?php _91ded0e8bb1a75a02736c76c12aaa946($__blaze, $__data91ded0e8bb1a75a02736c76c12aaa946, $__blaze->mergeAttributes(['attributes' => $__data91ded0e8bb1a75a02736c76c12aaa946['attributes'], 'size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__data91ded0e8bb1a75a02736c76c12aaa946['size']), 'x-data' => 'fluxInputViewable', 'x-on:click' => 'toggle()', 'x-bind:data-viewable-open' => 'open', 'aria-label' => $__data91ded0e8bb1a75a02736c76c12aaa946['ariaLabel']]), $__slots91ded0e8bb1a75a02736c76c12aaa946, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack91ded0e8bb1a75a02736c76c12aaa946)) { $__slots91ded0e8bb1a75a02736c76c12aaa946 = array_pop($__slotsStack91ded0e8bb1a75a02736c76c12aaa946); } ?>
<?php if (! empty($__dataStack91ded0e8bb1a75a02736c76c12aaa946)) { $__data91ded0e8bb1a75a02736c76c12aaa946 = array_pop($__dataStack91ded0e8bb1a75a02736c76c12aaa946); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/input/viewable.blade.php ENDPATH**/ ?>