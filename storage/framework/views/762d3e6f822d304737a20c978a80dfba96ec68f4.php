<?php $__env->startSection('content'); ?>
    <div class="flex-center position-ref full-height">
 
        <div class="content">
           <img src="/img/pizza-house.png" alt="this is a pizza house ">
            <h2 class="title">and we have for you :</h2>
          
          <!-- <?php for($i = 0 ; $i < count($pizzas) ; $i++): ?>
           <p><?php echo e($pizzas[$i]['name']); ?>**price :<?php echo e($pizzas[$i]['price']); ?></p>
           <?php endfor; ?>
    -->


<?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
 <!-- <?php echo e($loop->index); ?>/  <?php echo e($i['name']); ?> --  <?php echo e($i['price']); ?> DT -->

 <?php echo e($i->name); ?>  - type : <?php echo e($i->type); ?>  


</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<h2></h2>
        </div>
    </div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BIBO\Documents\pizzahouse\resources\views/bladeloop.blade.php ENDPATH**/ ?>