

<?php $__env->startSection('title', 'Бронювання – Ресторан'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Бронювання столика</h1>

    <p><em><?php echo e($info); ?></em></p>

    <form method="POST" action="<?php echo e(route('site.booking.store')); ?>">
        <?php echo csrf_field(); ?>


        <div>
            <label for="name">Ваше ім'я:</label><br>
            <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p style="color: red;"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <br>

        <div>
            <label for="email">Електронна пошта:</label><br>
            <input type="text" id="email" name="email" value="<?php echo e(old('email')); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p style="color: red;"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <br>

        <div>
            <label for="message">Побажання до столика:</label><br>
            <textarea id="message" name="message" ><?php echo e(old('message')); ?></textarea>
            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p style="color: red;"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <br>

        <button type="submit">Надіслати заявку</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mnyky\reference-app\resources\views/site/booking.blade.php ENDPATH**/ ?>