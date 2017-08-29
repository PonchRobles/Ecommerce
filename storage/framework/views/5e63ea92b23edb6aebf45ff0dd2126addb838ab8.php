
<?php echo Form::open(['url' => $url, 'method' => $method, 'files' => true]); ?>

<div class="form-group">
  <?php echo e(Form::text('title',$product->title,['class' => 'form-control',
  'placeholder'=>'Titulo...'])); ?>

</div>
  <div class="form-group">
    <?php echo e(Form::number('pricing',$product->pricing,['class' => 'form-control',
    'placeholder'=>'precio de tu producto en centavos de dolar...'])); ?>

  </div>

<div class="form-group">
  <?php echo e(Form::file('cover')); ?>

</div>

<div class="form-group">

    <?php echo e(Form::textarea('description',$product->description,['class' => 'form-control',
    'placeholder'=>'describe tu producto...'])); ?>

  </div>

    <div class="form-group">
    <a href="<?php echo e(url('/products')); ?>">Regresar al listado de productos</a>
<input type="submit" value="Enviar" class="btn btn-success"></input>
    </div>

<?php echo Form::close(); ?>

</div>
