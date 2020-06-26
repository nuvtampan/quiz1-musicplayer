
<?php $__env->startSection('content'); ?>
<div class="container">
<h3>Tambah Data Track</h3>
<form method="post" action="<?php echo e(url('/track')); ?>" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<table>
		<tr>
			<th>JUDUL</th>
			<td><input type="text" name="nama_track"></td>
		</tr>
		<tr>
			<th>ALBUM & ARTIS</th>
			<td>
				<select name="album_id">
					<?php $__currentLoopData = $lst; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($row->album_id); ?>"><?php echo e($row->nama_album); ?> - <?php echo e($row->artis->nama_artis); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
				</select>
			</td>
		</tr>
		<tr>
			<th>FILE</th>
			<td><input type="file" name="file"></td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="SIMPAN"></td>
		</tr> 
	</table>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/track/add.blade.php ENDPATH**/ ?>