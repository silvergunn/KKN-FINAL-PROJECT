<?php # [BlazeVersion]:{v3} ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'sidebar' => false,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'sidebar' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sidebar): ?>
    <?php if (!function_exists('_6129d2f654700a337ee91caac6a7971e')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/sidebar/brand.blade.php'); } ?>
<?php if (isset($__slots6129d2f654700a337ee91caac6a7971e)) { $__slotsStack6129d2f654700a337ee91caac6a7971e[] = $__slots6129d2f654700a337ee91caac6a7971e; } ?>
<?php if (isset($__data6129d2f654700a337ee91caac6a7971e)) { $__dataStack6129d2f654700a337ee91caac6a7971e[] = $__data6129d2f654700a337ee91caac6a7971e; } ?>
<?php $__data6129d2f654700a337ee91caac6a7971e = ['name' => config('app.name', 'Laravel'),'attributes' => $attributes]; ?>
<?php $__slots6129d2f654700a337ee91caac6a7971e = []; ?>
<?php $__blaze->pushData($__data6129d2f654700a337ee91caac6a7971e); ?>
<?php ob_start(); ?>
         <?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-5 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slots6129d2f654700a337ee91caac6a7971e['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground']); ?>
    <?php $__slots6129d2f654700a337ee91caac6a7971e['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots6129d2f654700a337ee91caac6a7971e); ?>
<?php _6129d2f654700a337ee91caac6a7971e($__blaze, $__data6129d2f654700a337ee91caac6a7971e, $__blaze->mergeAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__data6129d2f654700a337ee91caac6a7971e['name']), 'attributes' => $__data6129d2f654700a337ee91caac6a7971e['attributes']]), $__slots6129d2f654700a337ee91caac6a7971e, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack6129d2f654700a337ee91caac6a7971e)) { $__slots6129d2f654700a337ee91caac6a7971e = array_pop($__slotsStack6129d2f654700a337ee91caac6a7971e); } ?>
<?php if (! empty($__dataStack6129d2f654700a337ee91caac6a7971e)) { $__data6129d2f654700a337ee91caac6a7971e = array_pop($__dataStack6129d2f654700a337ee91caac6a7971e); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php if (!function_exists('_bf994c722d5c57af0355c23a637cc7da')) { require $__blaze->compile('C:\Users\Administrator\Herd\midnight-pos-source\vendor\livewire\flux\stubs\resources\views\flux/brand.blade.php'); } ?>
<?php if (isset($__slotsbf994c722d5c57af0355c23a637cc7da)) { $__slotsStackbf994c722d5c57af0355c23a637cc7da[] = $__slotsbf994c722d5c57af0355c23a637cc7da; } ?>
<?php if (isset($__databf994c722d5c57af0355c23a637cc7da)) { $__dataStackbf994c722d5c57af0355c23a637cc7da[] = $__databf994c722d5c57af0355c23a637cc7da; } ?>
<?php $__databf994c722d5c57af0355c23a637cc7da = ['name' => config('app.name', 'Laravel'),'attributes' => $attributes]; ?>
<?php $__slotsbf994c722d5c57af0355c23a637cc7da = []; ?>
<?php $__blaze->pushData($__databf994c722d5c57af0355c23a637cc7da); ?>
<?php ob_start(); ?>
         <?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-5 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slotsbf994c722d5c57af0355c23a637cc7da['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground']); ?>
    <?php $__slotsbf994c722d5c57af0355c23a637cc7da['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsbf994c722d5c57af0355c23a637cc7da); ?>
<?php _bf994c722d5c57af0355c23a637cc7da($__blaze, $__databf994c722d5c57af0355c23a637cc7da, $__blaze->mergeAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($__databf994c722d5c57af0355c23a637cc7da['name']), 'attributes' => $__databf994c722d5c57af0355c23a637cc7da['attributes']]), $__slotsbf994c722d5c57af0355c23a637cc7da, $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackbf994c722d5c57af0355c23a637cc7da)) { $__slotsbf994c722d5c57af0355c23a637cc7da = array_pop($__slotsStackbf994c722d5c57af0355c23a637cc7da); } ?>
<?php if (! empty($__dataStackbf994c722d5c57af0355c23a637cc7da)) { $__databf994c722d5c57af0355c23a637cc7da = array_pop($__dataStackbf994c722d5c57af0355c23a637cc7da); } ?>
<?php $__blaze->popData(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\resources\views/components/app-logo.blade.php ENDPATH**/ ?>