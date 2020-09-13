<?php $__env->startSection('content'); ?>

<center>
<div class="wrapper index-wrap">
    <!-- <?php for($i = 0 ; $i < count($pizzas) ; $i++): ?>
           <p><?php echo e($pizzas[$i]['name']); ?>**price :<?php echo e($pizzas[$i]['price']); ?></p>
           <?php endfor; ?>
     -->
    <h1>Pizza orders</h1>


    <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
        <!-- <?php echo e($loop->index); ?>/  <?php echo e($i['name']); ?> --  <?php echo e($i['price']); ?> DT -->

        <!--  name : <?php echo e($i->name); ?> // type : <?php echo e($i->type); ?> // toppings : <?php $__currentLoopData = $i->toppings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> *<?php echo e($top); ?> -->
        <div class="pizza-itemm">
        <img src="/img/pizza.png" alt="pizza icone">
        </div>
        <h4> <a href="/pizzas/<?php echo e($i->id); ?>"><?php echo e($i->name); ?></a> </h4>
       
       <!-- <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
      

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BIBO\Documents\pizzahouse\resources\views/pizzas/index.blade.php ENDPATH**/ ?>