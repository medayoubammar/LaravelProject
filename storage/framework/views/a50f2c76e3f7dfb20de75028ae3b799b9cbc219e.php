<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">

    <div class="content">
        <img src="/img/pizza-house.png" alt="this is a pizza house " class="welcome-img">
        <div>
            <div class="title">Pizza House 2020</div>
<a href="<?php echo e(route('pizzas.create')); ?>">Order Pizza from here !</a>
<p class="title">  <?php echo e(session('msg')); ?> </p>
</div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BIBO\Documents\pizzahouse\resources\views/welcome.blade.php ENDPATH**/ ?>