<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('_3bdebf3a1189aa7be60e69858e27d6f4')):
function _3bdebf3a1189aa7be60e69858e27d6f4($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = new \Livewire\Blaze\Runtime\BlazeAttributeBag($__attributes);
$__delegateData = $__data;
unset($__data, $__attributes);
ob_start();
?>


<?php
$__awareDefaults = [ 'variant' ];
$variant = $__blaze->getConsumableData('variant');
unset($__awareDefaults);
?>

<?php
$__defaults = [
    'variant' => 'default',
];
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
unset($__defaults);
?>

<?php
// This prevents variants picked up by `@aware()` from other wrapping components like flux::modal from being used here...
$variant = $variant !== 'default' && Flux::componentExists('checkbox.variants.' . $variant)
    ? $variant
    : 'default';
?>

<?php $__resolved = $__blaze->resolve('flux::' . 'checkbox.variants.' . $variant); ?>
<?php $__delegatedData = $__delegateData ?? $__env->getCurrentComponentData(); ?>
<?php $__blaze->pushData($__delegatedData); ?>
<?php if ($__resolved !== false): ?>
<?php if (isset($__slots3168951cfd125d9bd6f8d67d4e9f9daa)) { $__slotsStack3168951cfd125d9bd6f8d67d4e9f9daa[] = $__slots3168951cfd125d9bd6f8d67d4e9f9daa; } ?>
<?php $__slots3168951cfd125d9bd6f8d67d4e9f9daa = []; ?>
<?php ob_start(); ?><?php echo e($slot); ?><?php $__slots3168951cfd125d9bd6f8d67d4e9f9daa['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__slots3168951cfd125d9bd6f8d67d4e9f9daa = array_merge($__blaze->mergedComponentSlots(), $__slots3168951cfd125d9bd6f8d67d4e9f9daa); ?>
<?php ('_' . $__resolved)($__blaze, $__delegatedData, $attributes->getAttributes(), $__slots3168951cfd125d9bd6f8d67d4e9f9daa, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack3168951cfd125d9bd6f8d67d4e9f9daa)) { $__slots3168951cfd125d9bd6f8d67d4e9f9daa = array_pop($__slotsStack3168951cfd125d9bd6f8d67d4e9f9daa); } ?>
<?php else: ?>
<?php if (! Flux::componentExists(('checkbox.variants.' . $variant))) throw new \Exception('Flux component [' . ('checkbox.variants.' . $variant) . '] does not exist.'); ?>
<?php if (isset($component)) { $__componentOriginalafa996725f9b25601ebcd45564ea511a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalafa996725f9b25601ebcd45564ea511a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => (app()->version() >= 12 ? hash('xxh128', 'flux') : md5('flux')) . '::' . ('checkbox.variants.' . $variant), 'data' => array_merge($__delegatedData, $__blaze->mergedComponentSlots())] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::' . ('checkbox.variants.' . $variant)); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes($attributes->getAttributes()); ?>
<?php echo e($slot); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalafa996725f9b25601ebcd45564ea511a)): ?>
<?php $attributes = $__attributesOriginalafa996725f9b25601ebcd45564ea511a; ?>
<?php unset($__attributesOriginalafa996725f9b25601ebcd45564ea511a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalafa996725f9b25601ebcd45564ea511a)): ?>
<?php $component = $__componentOriginalafa996725f9b25601ebcd45564ea511a; ?>
<?php unset($__componentOriginalafa996725f9b25601ebcd45564ea511a); ?>
<?php endif; ?>
<?php endif; ?>
<?php $__blaze->popData(); ?>
<?php unset($__resolved, $__delegatedData) ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/checkbox/index.blade.php ENDPATH**/ ?>