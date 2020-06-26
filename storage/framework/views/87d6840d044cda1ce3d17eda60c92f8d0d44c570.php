
<?php $__env->startSection('content'); ?>
<div class="container">
<h3>Tambah Data Artis</h3>
<form method="post" action="<?php echo e(url('/album')); ?>">
	<?php echo csrf_field(); ?>
	<table>
		<tr>
			<td>NAMA ALBUM</td>
			<td><input type="text" name="nama_album"></td>
		</tr>
		<tr>
			<td>NAMA ARTIS</td>
			<td>
				<select name="artis_id">
					<?php $__currentLoopData = $lst; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($row->artis_id); ?>"><?php echo e($row->nama_artis); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="SIMPAN"></td>
		</tr> 
	</table>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/Album/add.blade.php ENDPATH**/ ?>