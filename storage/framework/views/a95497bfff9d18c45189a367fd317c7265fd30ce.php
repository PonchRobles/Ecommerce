 <div class="card product text-left">
    <?php if(Auth::check() && $product->user_id == Auth::user()->id): ?>

    <div class="absolute actions">
    <a href="<?php echo e(url('/products/'.$product->id.'/edit')); ?>">
    Editar</a>
    <?php echo $__env->make('products.delete', ['product'=> $product], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
    <?php endif; ?>
    <h1><?php echo e($product->title); ?></h1>
    <div class="row">
<div class="col-sm-6 col-xs-12">
    <?php if($product->extension): ?>
<img class="product-avatar" src="<?php echo e(url("/products/images/$product->id.$product->extension")); ?>" >
    <?php endif; ?>
</div>
<div class="col-sm-6 col-xs-12">
<p>
<strong>Descripcion<strong>
</p>

<p>
<?php echo e($product->description); ?>

</p>

<p>
<?php echo $__env->make("in_shopping_carts.form",["product" => $product], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</p>

</div>
    </div>
  </div>