<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('__5663b381befeb1d655b2dab87460ac7c')):
function __5663b381befeb1d655b2dab87460ac7c($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = new \Livewire\Blaze\Runtime\BlazeAttributeBag($__attributes);
unset($__data, $__attributes);
ob_start();
?>


<?php if (!function_exists('__91ded0e8bb1a75a02736c76c12aaa946')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/button/index.blade.php'); } ?>
<?php $__componentData = ['attributes' => $attributes->class('shrink-0'),'variant' => 'subtle','square' => true,'xData' => true,'xOn:click' => '$dispatch(\'flux-sidebar-toggle\')','ariaLabel' => e(__('Toggle sidebar')),'dataFluxSidebarToggle' => true]; ?>
<?php $__blaze->pushData($__componentData); ?>
<?php __91ded0e8bb1a75a02736c76c12aaa946($__blaze, $__componentData, $__blaze->mergeAttributes(['attributes' => $__componentData['attributes'], 'variant' => 'subtle', 'square' => true, 'x-data' => true, 'x-on:click' => '$dispatch(\'flux-sidebar-toggle\')', 'aria-label' => $__componentData['ariaLabel'], 'data-flux-sidebar-toggle' => true]), [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/sidebar/toggle.blade.php ENDPATH**/ ?>