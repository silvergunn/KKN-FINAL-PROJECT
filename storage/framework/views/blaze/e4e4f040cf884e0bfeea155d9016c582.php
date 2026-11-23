<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('__9e03466ee0497cbaa843854aed6b13ca')):
function __9e03466ee0497cbaa843854aed6b13ca($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = new \Livewire\Blaze\Runtime\BlazeAttributeBag($__attributes);
unset($__data, $__attributes);
ob_start();
?>


<?php $iconTrailing ??= $attributes->pluck('icon:trailing'); ?>
<?php $iconVariant ??= $attributes->pluck('icon:variant'); ?>

<?php
$__defaults = [
    'iconTrailing' => null,
    'iconVariant' => 'mini',
    'variant' => 'default',
    'suffix' => null,
    'value' => null,
    'icon' => null,
    'kbd' => null,
];
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
$suffix ??= $attributes['suffix'] ?? $__defaults['suffix']; unset($attributes['suffix']);
$value ??= $attributes['value'] ?? $__defaults['value']; unset($attributes['value']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
$kbd ??= $attributes['kbd'] ?? $__defaults['kbd']; unset($attributes['kbd']);
unset($__defaults);
?>

<?php
if ($kbd) $suffix = $kbd;

$iconClasses = Flux::classes()
    ->add('me-2')
    // When using the outline icon variant, we need to size it down to match the default icon sizes...
    ->add($iconVariant === 'outline' ? 'size-5' : null)
    ;

$trailingIconClasses = Flux::classes()
    ->add('ms-auto text-zinc-400 [[data-flux-menu-item-icon]:hover_&]:text-current')
    // When using the outline icon variant, we need to size it down to match the default icon sizes...
    ->add($iconVariant === 'outline' ? 'size-5' : null)
    ;

$classes = Flux::classes()
    ->add('flex items-center px-2 py-1.5 w-full focus:outline-hidden select-none')
    ->add('rounded-md')
    ->add('text-start text-sm font-medium')
    ->add('[&[disabled]]:opacity-50')
    ->add(match ($variant) {
        'danger' => [
            'text-zinc-800 data-active:text-red-600 data-active:bg-red-50 dark:text-white dark:data-active:bg-red-400/20 dark:data-active:text-red-400',
            '**:data-flux-menu-item-icon:text-zinc-400 dark:**:data-flux-menu-item-icon:text-white/60 [&[data-active]_[data-flux-menu-item-icon]]:text-current',
        ],
        'default' => [
            'text-zinc-800 data-active:bg-zinc-50 dark:text-white dark:data-active:bg-zinc-600',
            '**:data-flux-menu-item-icon:text-zinc-400 dark:**:data-flux-menu-item-icon:text-white/60 [&[data-active]_[data-flux-menu-item-icon]]:text-current',
        ]
    })
    ;

$suffixClasses = Flux::classes()
    ->add('ms-auto text-xs text-zinc-400')
    ;
?>

<?php if (!function_exists('__2c735e3d36b811bc285921ae9abfefdb')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/button-or-link-pure.blade.php'); } ?>
<?php if (isset($__slots2c735e3d36b811bc285921ae9abfefdb)) { $__slotsStack2c735e3d36b811bc285921ae9abfefdb[] = $__slots2c735e3d36b811bc285921ae9abfefdb; } ?>
<?php if (isset($__data2c735e3d36b811bc285921ae9abfefdb)) { $__dataStack2c735e3d36b811bc285921ae9abfefdb[] = $__data2c735e3d36b811bc285921ae9abfefdb; } ?>
<?php $__data2c735e3d36b811bc285921ae9abfefdb = ['attributes' => $attributes->class($classes),'dataFluxMenuItem' => true,'dataFluxMenuItemHasIcon' => !! $icon]; ?>
<?php $__slots2c735e3d36b811bc285921ae9abfefdb = []; ?>
<?php $__blaze->pushData($__data2c735e3d36b811bc285921ae9abfefdb); ?>
<?php ob_start(); ?>
    <?php if (is_string($icon) && $icon !== ''): ?>
        <?php if (!function_exists('__722ef21d90e9e9252c87131d7a8a66c5')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/icon/index.blade.php'); } ?>
<?php $__componentData = ['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses,'dataFluxMenuItemIcon' => true]; ?>
<?php $__blaze->pushData($__componentData); ?>
<?php __722ef21d90e9e9252c87131d7a8a66c5($__blaze, $__componentData, ['icon' => \Livewire\Blaze\Runtime\BlazeRuntime::sanitizeFoldedAttribute($__componentData['icon']), 'variant' => \Livewire\Blaze\Runtime\BlazeRuntime::sanitizeFoldedAttribute($__componentData['variant']), 'class' => \Livewire\Blaze\Runtime\BlazeRuntime::sanitizeFoldedAttribute($__componentData['class']), 'data-flux-menu-item-icon' => true], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php elseif ($icon): ?>
        <?php echo e($icon); ?>

    <?php else: ?>
        <div class="w-7 hidden [[data-flux-menu]:has(>[data-flux-menu-item-has-icon])_&]:block"></div>
    <?php endif; ?>

    <?php echo e($slot); ?>


    <?php if (is_string($suffix) && $suffix !== ''): ?>
        <div class="<?php echo e($suffixClasses); ?>">
            <?php echo e($suffix); ?>

        </div>
    <?php elseif ($suffix): ?>
        <?php echo e($suffix); ?>

    <?php endif; ?>

    <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
        <?php if (!function_exists('__722ef21d90e9e9252c87131d7a8a66c5')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/icon/index.blade.php'); } ?>
<?php $__componentData = ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $trailingIconClasses,'dataFluxMenuItemIcon' => true]; ?>
<?php $__blaze->pushData($__componentData); ?>
<?php __722ef21d90e9e9252c87131d7a8a66c5($__blaze, $__componentData, ['icon' => \Livewire\Blaze\Runtime\BlazeRuntime::sanitizeFoldedAttribute($__componentData['icon']), 'variant' => \Livewire\Blaze\Runtime\BlazeRuntime::sanitizeFoldedAttribute($__componentData['variant']), 'class' => \Livewire\Blaze\Runtime\BlazeRuntime::sanitizeFoldedAttribute($__componentData['class']), 'data-flux-menu-item-icon' => true], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php elseif ($iconTrailing): ?>
        <?php echo e($iconTrailing); ?>

    <?php endif; ?>

    <?php echo e($submenu ?? ''); ?>

<?php $__slots2c735e3d36b811bc285921ae9abfefdb['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots2c735e3d36b811bc285921ae9abfefdb); ?>
<?php __2c735e3d36b811bc285921ae9abfefdb($__blaze, $__data2c735e3d36b811bc285921ae9abfefdb, $__blaze->mergeAttributes(['attributes' => $__data2c735e3d36b811bc285921ae9abfefdb['attributes'], 'data-flux-menu-item' => true, 'data-flux-menu-item-has-icon' => \Livewire\Blaze\Runtime\BlazeRuntime::sanitizeFoldedAttribute($__data2c735e3d36b811bc285921ae9abfefdb['dataFluxMenuItemHasIcon'])]), $__slots2c735e3d36b811bc285921ae9abfefdb, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack2c735e3d36b811bc285921ae9abfefdb)) { $__slots2c735e3d36b811bc285921ae9abfefdb = array_pop($__slotsStack2c735e3d36b811bc285921ae9abfefdb); } ?>
<?php if (! empty($__dataStack2c735e3d36b811bc285921ae9abfefdb)) { $__data2c735e3d36b811bc285921ae9abfefdb = array_pop($__dataStack2c735e3d36b811bc285921ae9abfefdb); } ?>
<?php $__blaze->popData(); ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/menu/item.blade.php ENDPATH**/ ?>