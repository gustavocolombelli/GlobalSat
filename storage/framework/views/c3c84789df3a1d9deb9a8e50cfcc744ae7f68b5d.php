<?php if($errors->any()): ?>
	<div class="alert alert-warning alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<p><?php echo e($error); ?></p>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
<?php endif; ?>

<?php if(session('success')): ?>
	<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php echo e(session('success')); ?>

	</div>
<?php endif; ?>

<?php if(session('error')): ?>
	<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php echo e(session('error')); ?>

	</div>
<?php endif; ?>

<?php if(session('info')): ?>
	<div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php echo e(session('info')); ?>

	</div>
<?php endif; ?>