

<?php $__env->startSection('title', 'Бронювання прийнято – Ресторан'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Дякуємо! Вашу заявку прийнято</h1>
    <p>Менеджер ресторану зв'яжеться з вами для підтвердження бронювання столика.</p>

    <h3>Деталі заявки:</h3>
    <ul>
        <li><strong>Ім'я:</strong> <?php echo e($name); ?></li>
        <li><strong>Email:</strong> <?php echo e($email); ?></li>
        <li><strong>Повідомлення:</strong> <?php echo e($message); ?></li>
    </ul>

    <p>
        <a href="<?php echo e(route('site.booking')); ?>">Повернутися назад</a>
    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mnyky\reference-app\resources\views/site/booking-confirm.blade.php ENDPATH**/ ?>