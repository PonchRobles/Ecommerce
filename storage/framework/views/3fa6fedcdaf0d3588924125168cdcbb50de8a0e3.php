<?php $__env->startSection('title','Productos Facilito'); ?>
<?php $__env->startSection('content'); ?>

<div class="text-center products-container">
<div class="row">
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<div class="col-xs-10 col-sm-6" >
	 <?php echo $__env->make("products.product",["product"=>$product], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	 </div>
	 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	 </div>
	 <div >
	<?php echo e($products->links()); ?>

</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>