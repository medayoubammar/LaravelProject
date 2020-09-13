<?php $__env->startSection('content'); ?>
<div class="wrapper pizza-details">
    <p class="title"> Order for : <?php echo e($pizza->name); ?> </p>
    <p> type : <?php echo e($pizza->type); ?> </p>
    <p> coockTime : <?php echo e($pizza->cooktimmme); ?> </p>
    <p> Extra Toppings : </p>
    <ul>
        <?php $__currentLoopData = $pizza->toppings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li>
            <?php echo e($top); ?>

        </li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <div>
        <form action="/pizzas/<?php echo e($pizza->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
            <button class="btn">Complete this order</button>
        </form>

    </div>
</div>
<h5>
    <a href="<?php echo e(route('pizzas.index')); ?>">back to all pizzas</a>
</h5>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BIBO\Documents\pizzahouse\resources\views/pizzas/show.blade.php ENDPATH**/ ?>