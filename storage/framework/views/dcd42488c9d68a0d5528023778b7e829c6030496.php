
<?php $__env->startSection('content'); ?>
<div class="container">
<form action="<?php echo e(url('/artis')); ?>">
	<?php echo csrf_field(); ?>
	<h3>Daftar Artis<a id="tbh" href="<?php echo e(url('artis/create')); ?>">+</a></h3>
	<table>
		<tr>
			<th>ID</th>
			<th>NAMA ARTIS</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($row->artis_id); ?></td>
			<td><?php echo e($row->nama_artis); ?></td>
			<td><a id="btn"  href="<?php echo e(url('artis/'.$row->artis_id.'/edit')); ?>">Edit</a></td>
			<td><form action="<?php echo e(url('/artis/'.$row->artis_id)); ?>" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				<?php echo csrf_field(); ?>
				<button id="btn">Hapus</button>
			</form></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/artis/index.blade.php ENDPATH**/ ?>