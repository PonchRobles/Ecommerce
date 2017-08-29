<?php $__env->startSection('content'); ?>
<div class="container text-center">
 <?php echo $__env->make("products.product",["product"=>$product], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>