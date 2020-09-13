<?php $__env->startSection('content'); ?>
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                hello budy it's time for pizza
            </div>
            <p><?php echo e($name); ?> cost
                <?php echo e($price); ?> Dinar with <?php echo e($time); ?> minutes to been preaperd
            </p>
            <?php if($price > 10): ?>
            <p><?php echo e($name); ?> is expensive</p>
            <?php elseif($price < 10): ?> <p><?php echo e($name); ?> is cheap</p>

                <?php else: ?>
                <p>
                    <?php echo e($name); ?> cost normal
                </p>
                <?php endif; ?>

        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('pizzas/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BIBO\Documents\pizzahouse\resources\views/pizza.blade.php ENDPATH**/ ?>