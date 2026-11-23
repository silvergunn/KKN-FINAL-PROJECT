<?php # [BlazeVersion]:{v3} ?>
<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('Products')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Products'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="min-h-full rounded-3xl bg-zinc-950 p-5 text-zinc-100 sm:p-8">
        <header class="mb-8 flex flex-wrap items-end justify-between gap-4">
            <div>
                <p class="mb-2 text-xs font-semibold uppercase tracking-[0.25em] text-teal-300">
                    Inventory / Products
                </p>
                <h1 class="text-3xl font-bold tracking-tight sm:text-4xl">Product catalog</h1>
                <p class="mt-2 text-sm text-zinc-400">
                    Keep prices, images, and available stock up to date.
                </p>
            </div>

            <a href="<?php echo e(route('products.create')); ?>"
               class="inline-flex min-h-12 items-center rounded-xl bg-teal-300 px-5 font-semibold text-zinc-950 transition hover:bg-teal-200">
                + Add product
            </a>
        </header>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('status')): ?>
            <div role="status" class="mb-6 rounded-xl border border-teal-400/30 bg-teal-400/10 px-4 py-3 text-sm text-teal-200">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <article class="overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-900">
                    <div class="flex h-40 items-center justify-center bg-zinc-800">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->image): ?>
                            <img
                                src="<?php echo e(asset('storage/' . $product->image)); ?>"
                                alt="<?php echo e($product->name); ?>"
                                class="h-full w-full object-cover"
                            >
                        <?php else: ?>
                            <span class="text-sm font-medium text-zinc-400">No product image</span>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <div class="p-5">
                        <div class="flex items-start justify-between gap-3">
                            <h2 class="text-lg font-semibold"><?php echo e($product->name); ?></h2>
                            <span class="shrink-0 font-semibold text-teal-300">
                                ₱<?php echo e(number_format((float) $product->price, 2)); ?>

                            </span>
                        </div>

                        <p class="mt-3 text-sm <?php echo e($product->stock_quantity <= 5 ? 'text-amber-300' : 'text-zinc-400'); ?>">
                            <?php echo e($product->stock_quantity); ?> in stock
                        </p>

                        <div class="mt-5 flex gap-3">
                            <a href="<?php echo e(route('products.edit', $product)); ?>"
                               class="inline-flex min-h-11 flex-1 items-center justify-center rounded-xl border border-zinc-600 px-4 text-sm font-medium hover:border-teal-300">
                                Edit
                            </a>

                            <form method="POST" action="<?php echo e(route('products.destroy', $product)); ?>"
                                  onsubmit="return confirm('Archive this product?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit"
                                        class="min-h-11 rounded-xl px-3 text-sm font-medium text-zinc-400 hover:text-red-300">
                                    Archive
                                </button>
                            </form>
                        </div>
                    </div>
                </article>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <div class="rounded-2xl border border-dashed border-zinc-700 bg-zinc-900 p-8 sm:col-span-2 xl:col-span-3">
                    <p class="text-lg font-semibold">No products yet</p>
                    <p class="mt-2 text-sm text-zinc-400">
                        Add your first product to start building the catalog.
                    </p>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <div class="mt-8"><?php echo e($products->links()); ?></div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81a506f898233b9e7d58286e6bea3c18)): ?>
<?php $attributes = $__attributesOriginal81a506f898233b9e7d58286e6bea3c18; ?>
<?php unset($__attributesOriginal81a506f898233b9e7d58286e6bea3c18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81a506f898233b9e7d58286e6bea3c18)): ?>
<?php $component = $__componentOriginal81a506f898233b9e7d58286e6bea3c18; ?>
<?php unset($__componentOriginal81a506f898233b9e7d58286e6bea3c18); ?>
<?php endif; ?><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\resources\views/products/index.blade.php ENDPATH**/ ?>