<link rel="shortcut icon" href="<?php echo e(asset('static/favicon.ico')); ?>">

<?php echo $__env->make('adminlte::passwords.email', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>