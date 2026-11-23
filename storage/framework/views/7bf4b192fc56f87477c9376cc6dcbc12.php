<?php # [BlazeVersion]:{v3} ?>
<form method="POST"
      action="<?php echo e(isset($customer) ? route('customers.update', $customer) : route('customers.store')); ?>"
      class="space-y-6">
    <?php echo csrf_field(); ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($customer)): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <div>
        <label for="full_name" class="mb-2 block text-sm font-medium">Full name</label>
        <input id="full_name" name="full_name" type="text" required maxlength="100"
               value="<?php echo e(old('full_name', $customer->full_name ?? '')); ?>"
               autocomplete="name"
               class="min-h-12 w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 text-white outline-none focus:border-teal-300">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-2 text-sm text-red-300"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    <div>
        <label for="email" class="mb-2 block text-sm font-medium">Email</label>
        <input id="email" name="email" type="email" required maxlength="100"
               value="<?php echo e(old('email', $customer->email ?? '')); ?>"
               autocomplete="email"
               class="min-h-12 w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 text-white outline-none focus:border-teal-300">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-2 text-sm text-red-300"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    <div>
        <label for="phone" class="mb-2 block text-sm font-medium">Phone (optional)</label>
        <input id="phone" name="phone" type="tel" maxlength="20"
               value="<?php echo e(old('phone', $customer->phone ?? '')); ?>"
               autocomplete="tel"
               class="min-h-12 w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 text-white outline-none focus:border-teal-300">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-2 text-sm text-red-300"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    <div class="flex flex-wrap gap-3 border-t border-zinc-800 pt-6">
        <button type="submit"
                class="min-h-12 rounded-xl bg-teal-300 px-6 font-semibold text-zinc-950 hover:bg-teal-200">
            <?php echo e(isset($customer) ? 'Save changes' : 'Add customer'); ?>

        </button>

        <a href="<?php echo e(route('customers.index')); ?>"
           class="inline-flex min-h-12 items-center rounded-xl border border-zinc-700 px-5 text-sm hover:border-zinc-500">
            Cancel
        </a>
    </div>
</form><?php /**PATH C:\Users\Administrator\Herd\midnight-pos-source\resources\views/customers/_form.blade.php ENDPATH**/ ?>