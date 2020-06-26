
<?php $__env->startSection('content'); ?>
<div class="container">
<form action="<?php echo e(url('/artis')); ?>">
	<?php echo csrf_field(); ?>
	<h3>Daftar Track<a id="tbh" href="<?php echo e(url('track/create')); ?>">+</a></h3>
	<table>
		<tr>
			<th>ID</th>
			<th>JUDUL LAGU</th>
			<th>ALBUM</th>
			<th>FILE</th>
			<th>HAPUS</th>
		</tr>
		<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr class="cen">
			<td><?php echo e($row->track_id); ?></td>
			<td><?php echo e($row->nama_track); ?></td>
			<td><?php echo e($row->album->artis->nama_artis); ?> - <?php echo e($row->album->nama_album); ?></td>
			<td>
				<audio controls>
        			<source src="lagu/<?php echo e($row->file); ?>" type="audio/mp3">
        		</audio>
			</td>
			<td><form action="<?php echo e(url('/track/'.$row->track_id)); ?>" method="post">
				<input type="hidden" name="_method" value="DELETE">
				<?php echo csrf_field(); ?>
				<button id="btn" >Hapus</button>
			</form></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/track/index.blade.php ENDPATH**/ ?>