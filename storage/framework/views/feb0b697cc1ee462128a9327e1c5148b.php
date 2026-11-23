<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('_ac8d3a735bed637ead2cb78d83776ca9')):
function _ac8d3a735bed637ead2cb78d83776ca9($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
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
extract(Flux::forwardedAttributes($attributes, [
    'name',
    'descriptionTrailing',
    'description',
    'label',
    'badge',
]));
?>

<?php $descriptionTrailing = $descriptionTrailing ??= $attributes->pluck('description:trailing'); ?>

<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'descriptionTrailing' => null,
    'description' => null,
    'label' => null,
    'badge' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$descriptionTrailing ??= $attributes['description-trailing'] ?? $attributes['descriptionTrailing'] ?? $__defaults['descriptionTrailing']; unset($attributes['descriptionTrailing'], $attributes['description-trailing']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
unset($__defaults);
?>

<?php if (isset($label) || isset($description) || isset($descriptionTrailing)): ?>
    <?php

        $fieldAttributes = Flux::attributesAfter('field:', $attributes, []);
        $labelAttributes = Flux::attributesAfter('label:', $attributes, ['badge' => $badge]);
        $descriptionAttributes = Flux::attributesAfter('description:', $attributes, []);
        $errorAttributes = Flux::attributesAfter('error:', $attributes, ['name' => $name]);
    ?>
    <?php if (!function_exists('_d47bd4e030b12c200675b950a1959ba8')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/field.blade.php'); } ?>
<?php if (isset($__slotsd47bd4e030b12c200675b950a1959ba8)) { $__slotsStackd47bd4e030b12c200675b950a1959ba8[] = $__slotsd47bd4e030b12c200675b950a1959ba8; } ?>
<?php if (isset($__datad47bd4e030b12c200675b950a1959ba8)) { $__dataStackd47bd4e030b12c200675b950a1959ba8[] = $__datad47bd4e030b12c200675b950a1959ba8; } ?>
<?php $__datad47bd4e030b12c200675b950a1959ba8 = ['attributes' => $fieldAttributes]; ?>
<?php $__slotsd47bd4e030b12c200675b950a1959ba8 = []; ?>
<?php $__blaze->pushData($__datad47bd4e030b12c200675b950a1959ba8); ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php if (!function_exists('_1912a84420acb6e5af0d0e83b444b87b')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/label.blade.php'); } ?>
<?php if (isset($__slots1912a84420acb6e5af0d0e83b444b87b)) { $__slotsStack1912a84420acb6e5af0d0e83b444b87b[] = $__slots1912a84420acb6e5af0d0e83b444b87b; } ?>
<?php if (isset($__data1912a84420acb6e5af0d0e83b444b87b)) { $__dataStack1912a84420acb6e5af0d0e83b444b87b[] = $__data1912a84420acb6e5af0d0e83b444b87b; } ?>
<?php $__data1912a84420acb6e5af0d0e83b444b87b = ['attributes' => $labelAttributes]; ?>
<?php $__slots1912a84420acb6e5af0d0e83b444b87b = []; ?>
<?php $__blaze->pushData($__data1912a84420acb6e5af0d0e83b444b87b); ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slots1912a84420acb6e5af0d0e83b444b87b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots1912a84420acb6e5af0d0e83b444b87b); ?>
<?php _1912a84420acb6e5af0d0e83b444b87b($__blaze, $__data1912a84420acb6e5af0d0e83b444b87b, $__blaze->mergeAttributes(['attributes' => $__data1912a84420acb6e5af0d0e83b444b87b['attributes']]), $__slots1912a84420acb6e5af0d0e83b444b87b, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack1912a84420acb6e5af0d0e83b444b87b)) { $__slots1912a84420acb6e5af0d0e83b444b87b = array_pop($__slotsStack1912a84420acb6e5af0d0e83b444b87b); } ?>
<?php if (! empty($__dataStack1912a84420acb6e5af0d0e83b444b87b)) { $__data1912a84420acb6e5af0d0e83b444b87b = array_pop($__dataStack1912a84420acb6e5af0d0e83b444b87b); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php if (!function_exists('_1385a0f7fcfd707406ec68500b438827')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/description.blade.php'); } ?>
<?php if (isset($__slots1385a0f7fcfd707406ec68500b438827)) { $__slotsStack1385a0f7fcfd707406ec68500b438827[] = $__slots1385a0f7fcfd707406ec68500b438827; } ?>
<?php if (isset($__data1385a0f7fcfd707406ec68500b438827)) { $__dataStack1385a0f7fcfd707406ec68500b438827[] = $__data1385a0f7fcfd707406ec68500b438827; } ?>
<?php $__data1385a0f7fcfd707406ec68500b438827 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots1385a0f7fcfd707406ec68500b438827 = []; ?>
<?php $__blaze->pushData($__data1385a0f7fcfd707406ec68500b438827); ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slots1385a0f7fcfd707406ec68500b438827['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots1385a0f7fcfd707406ec68500b438827); ?>
<?php _1385a0f7fcfd707406ec68500b438827($__blaze, $__data1385a0f7fcfd707406ec68500b438827, $__blaze->mergeAttributes(['attributes' => $__data1385a0f7fcfd707406ec68500b438827['attributes']]), $__slots1385a0f7fcfd707406ec68500b438827, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack1385a0f7fcfd707406ec68500b438827)) { $__slots1385a0f7fcfd707406ec68500b438827 = array_pop($__slotsStack1385a0f7fcfd707406ec68500b438827); } ?>
<?php if (! empty($__dataStack1385a0f7fcfd707406ec68500b438827)) { $__data1385a0f7fcfd707406ec68500b438827 = array_pop($__dataStack1385a0f7fcfd707406ec68500b438827); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        
        <?php $__getScope = fn($scope = []) => $scope; ?><?php if (isset($scope)) $__scope = $scope; ?><?php $scope = $__getScope(scope: ['attributes' => $errorAttributes->getAttributes()]); ?>
        <?php if (!function_exists('_5869628badf3af6c87975a34f0fbed98')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/error.blade.php'); } ?>
<?php $__componentData = ['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])]; ?>
<?php $__blaze->pushData($__componentData); ?>
<?php _5869628badf3af6c87975a34f0fbed98($__blaze, $__componentData, $__blaze->mergeAttributes(['attributes' => $__componentData['attributes']]), [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
        <?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>

        <?php if (isset($descriptionTrailing)): ?>
            <?php if (!function_exists('_1385a0f7fcfd707406ec68500b438827')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/description.blade.php'); } ?>
<?php if (isset($__slots1385a0f7fcfd707406ec68500b438827)) { $__slotsStack1385a0f7fcfd707406ec68500b438827[] = $__slots1385a0f7fcfd707406ec68500b438827; } ?>
<?php if (isset($__data1385a0f7fcfd707406ec68500b438827)) { $__dataStack1385a0f7fcfd707406ec68500b438827[] = $__data1385a0f7fcfd707406ec68500b438827; } ?>
<?php $__data1385a0f7fcfd707406ec68500b438827 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots1385a0f7fcfd707406ec68500b438827 = []; ?>
<?php $__blaze->pushData($__data1385a0f7fcfd707406ec68500b438827); ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slots1385a0f7fcfd707406ec68500b438827['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots1385a0f7fcfd707406ec68500b438827); ?>
<?php _1385a0f7fcfd707406ec68500b438827($__blaze, $__data1385a0f7fcfd707406ec68500b438827, $__blaze->mergeAttributes(['attributes' => $__data1385a0f7fcfd707406ec68500b438827['attributes']]), $__slots1385a0f7fcfd707406ec68500b438827, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack1385a0f7fcfd707406ec68500b438827)) { $__slots1385a0f7fcfd707406ec68500b438827 = array_pop($__slotsStack1385a0f7fcfd707406ec68500b438827); } ?>
<?php if (! empty($__dataStack1385a0f7fcfd707406ec68500b438827)) { $__data1385a0f7fcfd707406ec68500b438827 = array_pop($__dataStack1385a0f7fcfd707406ec68500b438827); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slotsd47bd4e030b12c200675b950a1959ba8['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsd47bd4e030b12c200675b950a1959ba8); ?>
<?php _d47bd4e030b12c200675b950a1959ba8($__blaze, $__datad47bd4e030b12c200675b950a1959ba8, $__blaze->mergeAttributes(['attributes' => $__datad47bd4e030b12c200675b950a1959ba8['attributes']]), $__slotsd47bd4e030b12c200675b950a1959ba8, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackd47bd4e030b12c200675b950a1959ba8)) { $__slotsd47bd4e030b12c200675b950a1959ba8 = array_pop($__slotsStackd47bd4e030b12c200675b950a1959ba8); } ?>
<?php if (! empty($__dataStackd47bd4e030b12c200675b950a1959ba8)) { $__datad47bd4e030b12c200675b950a1959ba8 = array_pop($__dataStackd47bd4e030b12c200675b950a1959ba8); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/with-field.blade.php ENDPATH**/ ?>