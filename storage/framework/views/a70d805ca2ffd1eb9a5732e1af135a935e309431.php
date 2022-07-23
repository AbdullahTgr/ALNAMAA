<!DOCTYPE html>
<html lang="zxx">
<head>
	<?php echo $__env->make('frontend.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>	 
</head>
<body class="js">
	
	
	
	<?php echo $__env->make('frontend.layouts.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- Header -->
	<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!--/ End Header -->
	<?php echo $__env->yieldContent('main-content'); ?>
	
	<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH /home/u953809391/domains/al-namapacking.com/public_html/new/resources/views/frontend/layouts/master.blade.php ENDPATH**/ ?>