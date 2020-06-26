
<?php $__env->startSection('content'); ?>
<div class="container">
<h3>Tambah Data Artis</h3>
<form method="post" action="<?php echo e(url('/artis')); ?>">
	<?php echo csrf_field(); ?>
	<table>
		<tr>
			<th>NAMA ARTIS</th>
			<td><input type="text" name="nama_artis"></td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="SIMPAN"></td>
		</tr> 
	</table>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/artis/add.blade.php ENDPATH**/ ?>