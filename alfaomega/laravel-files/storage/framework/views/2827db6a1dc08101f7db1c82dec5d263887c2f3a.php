<?php $__env->startSection('title'); ?>
Alfa si omega | Despre noi
<?php $__env->stopSection(); ?>

 
<?php $__env->startSection('content'); ?>


        
    	
            <div class="content">
                <div class="title" >
                     <?php echo e($titlu); ?> 
                </div>
                
 

        
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>