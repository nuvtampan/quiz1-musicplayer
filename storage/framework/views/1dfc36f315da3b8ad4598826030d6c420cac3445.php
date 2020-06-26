
<?php $__env->startSection('content'); ?>
<div class="container">
<h3>Edit Data Artis</h3>
<form method="post" action="<?php echo e(url('/artis/'.$row->artis_id)); ?>">
	<input type="hidden" name="_method" value="PATCH">
	<?php echo csrf_field(); ?>
	<table>
		<tr>
			<th>NAMA ARTIS</th>
			<td><input type="text" name="nama_artis" value="<?php echo e($row->nama_artis); ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr> 
	</table>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/artis/edit.blade.php ENDPATH**/ ?>