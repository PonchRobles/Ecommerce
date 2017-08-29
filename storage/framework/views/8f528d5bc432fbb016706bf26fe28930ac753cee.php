<?php $__env->startSection("content"); ?>
<div class="container">
	<div class="panel panel-default">
		<div class="pane-heading">
			<h2>dasboard</h2>
		</div>
		<div class="panel-body">
		<h3>Estadistica</h3>
		<div class="row top-space">
			<div class="col-xs-4 col-md-3 col-lg-2 sale-data">
				<span><?php echo e($totalMonth); ?></span>
			numero de ventas
			</div>

				<div class="col-xs-4 col-md-3 col-lg-2 sale-data">
				<span><?php echo e($totalMonthCount); ?>USD</span>
				Ingresos del mes
			</div>

		</div>
			<h3>Ventas</h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<td>Id. Venta</td>
						<td>Comprador</td>
						<td>Direccion</td>
						<td>No. Guia</td>
						<td>Status</td>
						<td>Fecha de venta</td>
						<td>Acciones</td>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td><?php echo e($order->id); ?></td>
						<td><?php echo e($order->recipient_name); ?></td>
						<td><?php echo e($order->address()); ?></td>
						<td>
							<a 
							 href=""
							 data-type="text" 
							 data-pk="<?php echo e($order->id); ?>" 
							 data-url="<?php echo e(url("/orders/$order->id")); ?>"
							 data-title="Numero de guia"
							 data-value="<?php echo e($order->guide_number); ?>"
							 class="set-guide-number"
							 data-name="guide_number">
								</a>
								</td>
						<td>
							<a 
							href="" 
							data-type="select" 
							data-pk="<?php echo e($order->id); ?>" 
							data-url="<?php echo e(url("/orders/$order->id")); ?>" 
							data-title="Numero de guia"
							data-value="<?php echo e($order->status); ?>"
							class="select-status"
							data-name="status">
								
							</a>
						</td>
						<td><?php echo e($order->created_at); ?></td>
						<td>Acciones</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>