<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('_2a33e14023bff15be127b4b31bf6f704')):
function _2a33e14023bff15be127b4b31bf6f704($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
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
    'interactive' => null,
    'position' => 'top',
    'align' => 'center',
    'content' => null,
    'kbd' => null,
    'toggleable' => null,
];
$interactive ??= $attributes['interactive'] ?? $__defaults['interactive']; unset($attributes['interactive']);
$position ??= $attributes['position'] ?? $__defaults['position']; unset($attributes['position']);
$align ??= $attributes['align'] ?? $__defaults['align']; unset($attributes['align']);
$content ??= $attributes['content'] ?? $__defaults['content']; unset($attributes['content']);
$kbd ??= $attributes['kbd'] ?? $__defaults['kbd']; unset($attributes['kbd']);
$toggleable ??= $attributes['toggleable'] ?? $__defaults['toggleable']; unset($attributes['toggleable']);
unset($__defaults);
?>

<?php
// Support adding the .self modifier to the wire:model directive...
if (($wireModel = $attributes->wire('model')) && $wireModel->directive && ! $wireModel->hasModifier('self')) {
    unset($attributes[$wireModel->directive]);

    $wireModel->directive .= '.self';

    $attributes = $attributes->merge([$wireModel->directive => $wireModel->value]);
}
?>

<?php if ($toggleable): ?>
    <ui-dropdown position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php if (!function_exists('_69a9e79303b7effc8e9d2b0ef142c7b0')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/tooltip/content.blade.php'); } ?>
<?php if (isset($__slots69a9e79303b7effc8e9d2b0ef142c7b0)) { $__slotsStack69a9e79303b7effc8e9d2b0ef142c7b0[] = $__slots69a9e79303b7effc8e9d2b0ef142c7b0; } ?>
<?php if (isset($__data69a9e79303b7effc8e9d2b0ef142c7b0)) { $__dataStack69a9e79303b7effc8e9d2b0ef142c7b0[] = $__data69a9e79303b7effc8e9d2b0ef142c7b0; } ?>
<?php $__data69a9e79303b7effc8e9d2b0ef142c7b0 = ['kbd' => $kbd]; ?>
<?php $__slots69a9e79303b7effc8e9d2b0ef142c7b0 = []; ?>
<?php $__blaze->pushData($__data69a9e79303b7effc8e9d2b0ef142c7b0); ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $__slots69a9e79303b7effc8e9d2b0ef142c7b0['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots69a9e79303b7effc8e9d2b0ef142c7b0); ?>
<?php _69a9e79303b7effc8e9d2b0ef142c7b0($__blaze, $__data69a9e79303b7effc8e9d2b0ef142c7b0, ['kbd' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__data69a9e79303b7effc8e9d2b0ef142c7b0['kbd'])], $__slots69a9e79303b7effc8e9d2b0ef142c7b0, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack69a9e79303b7effc8e9d2b0ef142c7b0)) { $__slots69a9e79303b7effc8e9d2b0ef142c7b0 = array_pop($__slotsStack69a9e79303b7effc8e9d2b0ef142c7b0); } ?>
<?php if (! empty($__dataStack69a9e79303b7effc8e9d2b0ef142c7b0)) { $__data69a9e79303b7effc8e9d2b0ef142c7b0 = array_pop($__dataStack69a9e79303b7effc8e9d2b0ef142c7b0); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-dropdown>
<?php else: ?>
    <ui-tooltip position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip <?php if($interactive): ?> interactive <?php endif; ?>>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php if (!function_exists('_69a9e79303b7effc8e9d2b0ef142c7b0')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/tooltip/content.blade.php'); } ?>
<?php if (isset($__slots69a9e79303b7effc8e9d2b0ef142c7b0)) { $__slotsStack69a9e79303b7effc8e9d2b0ef142c7b0[] = $__slots69a9e79303b7effc8e9d2b0ef142c7b0; } ?>
<?php if (isset($__data69a9e79303b7effc8e9d2b0ef142c7b0)) { $__dataStack69a9e79303b7effc8e9d2b0ef142c7b0[] = $__data69a9e79303b7effc8e9d2b0ef142c7b0; } ?>
<?php $__data69a9e79303b7effc8e9d2b0ef142c7b0 = ['kbd' => $kbd]; ?>
<?php $__slots69a9e79303b7effc8e9d2b0ef142c7b0 = []; ?>
<?php $__blaze->pushData($__data69a9e79303b7effc8e9d2b0ef142c7b0); ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $__slots69a9e79303b7effc8e9d2b0ef142c7b0['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots69a9e79303b7effc8e9d2b0ef142c7b0); ?>
<?php _69a9e79303b7effc8e9d2b0ef142c7b0($__blaze, $__data69a9e79303b7effc8e9d2b0ef142c7b0, ['kbd' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__data69a9e79303b7effc8e9d2b0ef142c7b0['kbd'])], $__slots69a9e79303b7effc8e9d2b0ef142c7b0, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack69a9e79303b7effc8e9d2b0ef142c7b0)) { $__slots69a9e79303b7effc8e9d2b0ef142c7b0 = array_pop($__slotsStack69a9e79303b7effc8e9d2b0ef142c7b0); } ?>
<?php if (! empty($__dataStack69a9e79303b7effc8e9d2b0ef142c7b0)) { $__data69a9e79303b7effc8e9d2b0ef142c7b0 = array_pop($__dataStack69a9e79303b7effc8e9d2b0ef142c7b0); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-tooltip>
<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/tooltip/index.blade.php ENDPATH**/ ?>