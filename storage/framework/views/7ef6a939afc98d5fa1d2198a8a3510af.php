<?php # [BlazeVersion]:{v3} ?>
<?php
if (!function_exists('_562f9bc9f52fc2e47c81f2f4056f677b')):
function _562f9bc9f52fc2e47c81f2f4056f677b($__blaze, $__data = [], $__attributes = [], $__slots = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = new \Livewire\Blaze\Runtime\BlazeAttributeBag($__attributes);
unset($__data, $__attributes);
ob_start();
?>


<?php $iconVariant ??= $attributes->pluck('icon:variant'); ?>
<?php $iconTrailing ??= $attributes->pluck('icon:trailing'); ?>

<?php
$__defaults = [
    'iconVariant' => 'micro',
    'iconTrailing' => null,
    'initials' => null,
    'chevron' => true,
    'circle' => null,
    'avatar' => null,
    'name' => null,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$initials ??= $attributes['initials'] ?? $__defaults['initials']; unset($attributes['initials']);
$chevron ??= $attributes['chevron'] ?? $__defaults['chevron']; unset($attributes['chevron']);
$circle ??= $attributes['circle'] ?? $__defaults['circle']; unset($attributes['circle']);
$avatar ??= $attributes['avatar'] ?? $__defaults['avatar']; unset($attributes['avatar']);
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
unset($__defaults);
?>

<?php
$iconTrailing = $iconTrailing ?? ($chevron ? 'chevron-down' : null);

// When using the outline icon variant, we need to size it down to match the default icon sizes...
$iconClasses = Flux::classes('text-zinc-400 dark:text-white/80 group-hover:text-zinc-800 dark:group-hover:text-white group-data-open:text-zinc-800 dark:group-data-open:text-white')
    ->add($iconVariant === 'outline' ? 'size-4' : '');

$classes = Flux::classes()
    ->add('group flex items-center')
    ->add('rounded-lg has-data-[circle=true]:rounded-full')
    ->add('[ui-dropdown>&]:w-full') // Without this, the "name" won't get truncated in a sidebar dropdown...
    ->add('p-1 hover:bg-zinc-800/5 dark:hover:bg-white/10 data-open:bg-zinc-800/5 dark:data-open:bg-white/10')
    ;
?>

<button type="button" <?php echo e($attributes->class($classes)); ?> data-flux-sidebar-profile>
    <div class="shrink-0">
        <?php if ($avatar instanceof \Illuminate\View\ComponentSlot): ?>
            <?php echo e($avatar); ?>

        <?php else: ?>
            <?php $avatarAttributes = Flux::attributesAfter('avatar:', $attributes, ['src' => $avatar, 'size' => 'sm', 'circle' => $circle, 'name' => $name, 'initials' => $initials]); ?>
            <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::avatar", ['attributes' => $avatarAttributes]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_1a27139697b35cd2f947ebf92290dd95')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/avatar/index.blade.php'); } ?>
<?php $__componentData = ['attributes' => $avatarAttributes]; ?>
<?php $__blaze->pushData($__componentData); ?>
<?php _1a27139697b35cd2f947ebf92290dd95($__blaze, $__componentData, $__blaze->mergeAttributes(['attributes' => $__componentData['attributes']]), [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
        <?php endif; ?>
    </div>

    <?php if ($name): ?>
        <span class="in-data-flux-sidebar-collapsed-desktop:hidden mx-2 text-sm text-zinc-500 dark:text-white/80 group-hover:text-zinc-800 dark:group-hover:text-white group-data-open:text-zinc-800 dark:group-data-open:text-white font-medium truncate">
            <?php echo e($name); ?>

        </span>
    <?php endif; ?>

    <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
        <div class="in-data-flux-sidebar-collapsed-desktop:hidden shrink-0 ms-auto size-8 flex justify-center items-center">
            <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconTrailing, 'variant' => $iconVariant, 'class' => $iconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_722ef21d90e9e9252c87131d7a8a66c5')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/icon/index.blade.php'); } ?>
<?php $__componentData = ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $iconClasses]; ?>
<?php $__blaze->pushData($__componentData); ?>
<?php _722ef21d90e9e9252c87131d7a8a66c5($__blaze, $__componentData, ['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__componentData['icon']), 'variant' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__componentData['variant']), 'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__componentData['class'])], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
        </div>
    <?php elseif ($iconTrailing): ?>
        <?php echo e($iconTrailing); ?>

    <?php endif; ?>
</button>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/sidebar/profile.blade.php ENDPATH**/ ?>