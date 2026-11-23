<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('_8aa4c0e36d647a3d0d72327c912161ac')):
function _8aa4c0e36d647a3d0d72327c912161ac($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = new \Livewire\Blaze\Runtime\BlazeAttributeBag($__attributes);
unset($__data, $__attributes);
ob_start();
?>


<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>
<?php $iconTrailing ??= $attributes->pluck('icon:trailing'); ?>
<?php $iconVariant ??= $attributes->pluck('icon:variant'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'right',
    'tooltipKbd' => null,
    'tooltip' => null,
    'iconVariant' => 'outline',
    'iconTrailing' => null,
    'badgeColor' => null,
    'iconDot' => null,
    'accent' => true,
    'badge' => null,
    'icon' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$badgeColor ??= $attributes['badge-color'] ?? $attributes['badgeColor'] ?? $__defaults['badgeColor']; unset($attributes['badgeColor'], $attributes['badge-color']);
$iconDot ??= $attributes['icon-dot'] ?? $attributes['iconDot'] ?? $__defaults['iconDot']; unset($attributes['iconDot'], $attributes['icon-dot']);
$accent ??= $attributes['accent'] ?? $__defaults['accent']; unset($attributes['accent']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
unset($__defaults);
?>

<?php
// Slots contain rendered HTML (including conditional comments) and encoded entities.
// Tooltips should mirror only the visible text.
$tooltip ??= $slot->isNotEmpty()
    ? trim(html_entity_decode(strip_tags((string) $slot), ENT_QUOTES | ENT_HTML5, 'UTF-8'))
    : null;

// Size-up icons in square/icon-only buttons...
$iconClasses = Flux::classes('size-4')
    ->add('in-data-flux-sidebar-group-dropdown:text-zinc-400! dark:in-data-flux-sidebar-group-dropdown:text-white/80!')
    ->add('[[data-flux-sidebar-item]:hover_&]:text-current!')
    ->add('[[data-flux-sidebar-item][data-active]_&]:text-current!');

$classes = Flux::classes()
    ->add('h-8 in-data-flux-sidebar-on-mobile:h-10 relative flex items-center gap-3 rounded-lg')
    ->add('in-data-flux-sidebar-collapsed-desktop:w-10 in-data-flux-sidebar-collapsed-desktop:justify-center')
    ->add('py-0 text-start w-full px-3 has-data-flux-navlist-badge:not-in-data-flux-sidebar-collapsed-desktop:pe-1.5 my-px')
    ->add('text-zinc-500 dark:text-white/80')
    ->add(match ($accent) {
        true => [
            'data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content)',
            'data-current:bg-white dark:data-current:bg-white/[7%] data-current:border data-current:border-zinc-200 dark:data-current:border-transparent',
            'hover:text-zinc-800 dark:hover:text-white dark:hover:bg-white/[7%] hover:bg-zinc-800/5 ',
            // Keep the hover treatment while a popover this item triggers, or one inside it, is open...
            'not-data-current:data-open:text-zinc-800 dark:not-data-current:data-open:text-white dark:not-data-current:data-open:bg-white/[7%] not-data-current:data-open:bg-zinc-800/5',
            'not-data-current:has-data-open:text-zinc-800 dark:not-data-current:has-data-open:text-white dark:not-data-current:has-data-open:bg-white/[7%] not-data-current:has-data-open:bg-zinc-800/5',
            'border border-transparent',
        ],
        false => [
            'data-current:text-zinc-800 dark:data-current:text-zinc-100 data-current:border-zinc-200',
            'data-current:bg-white dark:data-current:bg-white/10 data-current:border data-current:border-zinc-200 dark:data-current:border-white/10 data-current:shadow-xs',
            'hover:text-zinc-800 dark:hover:text-white',
            // Keep the hover treatment while a popover this item triggers, or one inside it, is open...
            'not-data-current:data-open:text-zinc-800 dark:not-data-current:data-open:text-white',
            'not-data-current:has-data-open:text-zinc-800 dark:not-data-current:has-data-open:text-white',
        ],
    })
    // Override the default styles to match dropdowns for when the item is inside a collapsed group dropdown...
    ->add('in-data-flux-sidebar-group-dropdown:w-auto! in-data-flux-sidebar-group-dropdown:px-2!')
    ->add('in-data-flux-sidebar-group-dropdown:focus:outline-hidden!')
    ->add('in-data-flux-sidebar-group-dropdown:text-zinc-800! in-data-flux-sidebar-group-dropdown:bg-white! in-data-flux-sidebar-group-dropdown:hover:bg-zinc-50!')
    ->add('in-data-flux-sidebar-group-dropdown:data-active:bg-zinc-50!')
    ->add('dark:in-data-flux-sidebar-group-dropdown:text-white! dark:in-data-flux-sidebar-group-dropdown:bg-transparent! dark:in-data-flux-sidebar-group-dropdown:hover:bg-zinc-600! dark:in-data-flux-sidebar-group-dropdown:data-active:bg-zinc-600!')
    ;
?>

<?php if (!function_exists('_2a33e14023bff15be127b4b31bf6f704')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/tooltip/index.blade.php'); } ?>
<?php if (isset($__slots2a33e14023bff15be127b4b31bf6f704)) { $__slotsStack2a33e14023bff15be127b4b31bf6f704[] = $__slots2a33e14023bff15be127b4b31bf6f704; } ?>
<?php if (isset($__data2a33e14023bff15be127b4b31bf6f704)) { $__dataStack2a33e14023bff15be127b4b31bf6f704[] = $__data2a33e14023bff15be127b4b31bf6f704; } ?>
<?php $__data2a33e14023bff15be127b4b31bf6f704 = ['position' => $tooltipPosition,'class' => 'block min-w-0']; ?>
<?php $__slots2a33e14023bff15be127b4b31bf6f704 = []; ?>
<?php $__blaze->pushData($__data2a33e14023bff15be127b4b31bf6f704); ?>
<?php ob_start(); ?>
    <?php if (!function_exists('_76e8bea58190a9a6ac57b7a07cf7fb7f')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/button-or-link.blade.php'); } ?>
<?php if (isset($__slots76e8bea58190a9a6ac57b7a07cf7fb7f)) { $__slotsStack76e8bea58190a9a6ac57b7a07cf7fb7f[] = $__slots76e8bea58190a9a6ac57b7a07cf7fb7f; } ?>
<?php if (isset($__data76e8bea58190a9a6ac57b7a07cf7fb7f)) { $__dataStack76e8bea58190a9a6ac57b7a07cf7fb7f[] = $__data76e8bea58190a9a6ac57b7a07cf7fb7f; } ?>
<?php $__data76e8bea58190a9a6ac57b7a07cf7fb7f = ['attributes' => $attributes->class($classes),'dataFluxSidebarItem' => true]; ?>
<?php $__slots76e8bea58190a9a6ac57b7a07cf7fb7f = []; ?>
<?php $__blaze->pushData($__data76e8bea58190a9a6ac57b7a07cf7fb7f); ?>
<?php ob_start(); ?>
        <?php if ($icon): ?>
            <div class="relative">
                <?php if (is_string($icon) && $icon !== ''): ?>
                    <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $icon, 'variant' => $iconVariant, 'class' => $iconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_722ef21d90e9e9252c87131d7a8a66c5')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/icon/index.blade.php'); } ?>
<?php $__componentData = ['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses]; ?>
<?php $__blaze->pushData($__componentData); ?>
<?php _722ef21d90e9e9252c87131d7a8a66c5($__blaze, $__componentData, ['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__componentData['icon']), 'variant' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__componentData['variant']), 'class' => $__componentData['class']], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                <?php else: ?>
                    <?php echo e($icon); ?>

                <?php endif; ?>

                <?php if ($iconDot): ?>
                    <div class="absolute top-[-2px] end-[-2px]">
                        <div class="size-[6px] rounded-full bg-zinc-500 dark:bg-zinc-400"></div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($slot->isNotEmpty()): ?>
            <div class="
                in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden
                flex-1 text-sm font-medium truncate [[data-nav-footer]_&]:hidden [[data-nav-sidebar]_[data-nav-footer]_&]:block" data-content><?php echo e($slot); ?></div>
        <?php endif; ?>

        <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
            <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconTrailing, 'variant' => $iconVariant, 'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden size-4!']); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_722ef21d90e9e9252c87131d7a8a66c5')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/icon/index.blade.php'); } ?>
<?php $__componentData = ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden size-4!']; ?>
<?php $__blaze->pushData($__componentData); ?>
<?php _722ef21d90e9e9252c87131d7a8a66c5($__blaze, $__componentData, ['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__componentData['icon']), 'variant' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__componentData['variant']), 'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden size-4!'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
        <?php elseif ($iconTrailing): ?>
            <?php echo e($iconTrailing); ?>

        <?php endif; ?>

        <?php if (isset($badge) && $badge !== ''): ?>
            <?php $badgeAttributes = Flux::attributesAfter('badge:', $attributes, ['color' => $badgeColor]); ?>
            <?php if (!function_exists('_8a614f0506a48ad65c3ee1333282a061')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/navlist/badge.blade.php'); } ?>
<?php if (isset($__slots8a614f0506a48ad65c3ee1333282a061)) { $__slotsStack8a614f0506a48ad65c3ee1333282a061[] = $__slots8a614f0506a48ad65c3ee1333282a061; } ?>
<?php if (isset($__data8a614f0506a48ad65c3ee1333282a061)) { $__dataStack8a614f0506a48ad65c3ee1333282a061[] = $__data8a614f0506a48ad65c3ee1333282a061; } ?>
<?php $__data8a614f0506a48ad65c3ee1333282a061 = ['attributes' => $badgeAttributes,'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden']; ?>
<?php $__slots8a614f0506a48ad65c3ee1333282a061 = []; ?>
<?php $__blaze->pushData($__data8a614f0506a48ad65c3ee1333282a061); ?>
<?php ob_start(); ?><?php echo e($badge); ?><?php $__slots8a614f0506a48ad65c3ee1333282a061['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots8a614f0506a48ad65c3ee1333282a061); ?>
<?php _8a614f0506a48ad65c3ee1333282a061($__blaze, $__data8a614f0506a48ad65c3ee1333282a061, $__blaze->mergeAttributes(['attributes' => $__data8a614f0506a48ad65c3ee1333282a061['attributes'], 'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden']), $__slots8a614f0506a48ad65c3ee1333282a061, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack8a614f0506a48ad65c3ee1333282a061)) { $__slots8a614f0506a48ad65c3ee1333282a061 = array_pop($__slotsStack8a614f0506a48ad65c3ee1333282a061); } ?>
<?php if (! empty($__dataStack8a614f0506a48ad65c3ee1333282a061)) { $__data8a614f0506a48ad65c3ee1333282a061 = array_pop($__dataStack8a614f0506a48ad65c3ee1333282a061); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slots76e8bea58190a9a6ac57b7a07cf7fb7f['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots76e8bea58190a9a6ac57b7a07cf7fb7f); ?>
<?php _76e8bea58190a9a6ac57b7a07cf7fb7f($__blaze, $__data76e8bea58190a9a6ac57b7a07cf7fb7f, $__blaze->mergeAttributes(['attributes' => $__data76e8bea58190a9a6ac57b7a07cf7fb7f['attributes'], 'data-flux-sidebar-item' => true]), $__slots76e8bea58190a9a6ac57b7a07cf7fb7f, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack76e8bea58190a9a6ac57b7a07cf7fb7f)) { $__slots76e8bea58190a9a6ac57b7a07cf7fb7f = array_pop($__slotsStack76e8bea58190a9a6ac57b7a07cf7fb7f); } ?>
<?php if (! empty($__dataStack76e8bea58190a9a6ac57b7a07cf7fb7f)) { $__data76e8bea58190a9a6ac57b7a07cf7fb7f = array_pop($__dataStack76e8bea58190a9a6ac57b7a07cf7fb7f); } ?>
<?php $__blaze->popData(); ?>

    <?php if (!function_exists('_69a9e79303b7effc8e9d2b0ef142c7b0')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/tooltip/content.blade.php'); } ?>
<?php if (isset($__slots69a9e79303b7effc8e9d2b0ef142c7b0)) { $__slotsStack69a9e79303b7effc8e9d2b0ef142c7b0[] = $__slots69a9e79303b7effc8e9d2b0ef142c7b0; } ?>
<?php if (isset($__data69a9e79303b7effc8e9d2b0ef142c7b0)) { $__dataStack69a9e79303b7effc8e9d2b0ef142c7b0[] = $__data69a9e79303b7effc8e9d2b0ef142c7b0; } ?>
<?php $__data69a9e79303b7effc8e9d2b0ef142c7b0 = ['kbd' => $tooltipKbd,'class' => 'not-in-data-flux-sidebar-collapsed-desktop:hidden in-data-flux-sidebar-group-dropdown:hidden cursor-default']; ?>
<?php $__slots69a9e79303b7effc8e9d2b0ef142c7b0 = []; ?>
<?php $__blaze->pushData($__data69a9e79303b7effc8e9d2b0ef142c7b0); ?>
<?php ob_start(); ?>
        <?php echo e($tooltip); ?>

    <?php $__slots69a9e79303b7effc8e9d2b0ef142c7b0['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots69a9e79303b7effc8e9d2b0ef142c7b0); ?>
<?php _69a9e79303b7effc8e9d2b0ef142c7b0($__blaze, $__data69a9e79303b7effc8e9d2b0ef142c7b0, ['kbd' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__data69a9e79303b7effc8e9d2b0ef142c7b0['kbd']), 'class' => 'not-in-data-flux-sidebar-collapsed-desktop:hidden in-data-flux-sidebar-group-dropdown:hidden cursor-default'], $__slots69a9e79303b7effc8e9d2b0ef142c7b0, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack69a9e79303b7effc8e9d2b0ef142c7b0)) { $__slots69a9e79303b7effc8e9d2b0ef142c7b0 = array_pop($__slotsStack69a9e79303b7effc8e9d2b0ef142c7b0); } ?>
<?php if (! empty($__dataStack69a9e79303b7effc8e9d2b0ef142c7b0)) { $__data69a9e79303b7effc8e9d2b0ef142c7b0 = array_pop($__dataStack69a9e79303b7effc8e9d2b0ef142c7b0); } ?>
<?php $__blaze->popData(); ?>
<?php $__slots2a33e14023bff15be127b4b31bf6f704['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots2a33e14023bff15be127b4b31bf6f704); ?>
<?php _2a33e14023bff15be127b4b31bf6f704($__blaze, $__data2a33e14023bff15be127b4b31bf6f704, ['position' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__data2a33e14023bff15be127b4b31bf6f704['position']), 'class' => 'block min-w-0'], $__slots2a33e14023bff15be127b4b31bf6f704, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack2a33e14023bff15be127b4b31bf6f704)) { $__slots2a33e14023bff15be127b4b31bf6f704 = array_pop($__slotsStack2a33e14023bff15be127b4b31bf6f704); } ?>
<?php if (! empty($__dataStack2a33e14023bff15be127b4b31bf6f704)) { $__data2a33e14023bff15be127b4b31bf6f704 = array_pop($__dataStack2a33e14023bff15be127b4b31bf6f704); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/sidebar/item.blade.php ENDPATH**/ ?>