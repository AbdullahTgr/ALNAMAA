

<?php $__env->startSection('title','شركة النماء '); ?>

<?php $__env->startSection('main-content'); ?>

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html"><?php echo e(Lang::get('msg.home')); ?><i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html"><?php echo e(Lang::get('msg.aboutus')); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	
	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="about-content">
							<?php
								$settings=DB::table('settings')->get();
							?>
							<h3><?php echo e(Lang::get('msg.subscribeto')); ?><?php echo e(Lang::get('msg.welcometo')); ?>  <span> </span></h3>
							<p><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->description); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
							<div class="button">
								<a href="<?php echo e(route('blog')); ?>" class="btn"><?php echo e(Lang::get('msg.ourblog')); ?></a>
								<a href="<?php echo e(route('contact')); ?>" class="btn primary"><?php echo e(Lang::get('msg.contactus')); ?></a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-img overlay">
							
							<img src="<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->photo); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>" alt="<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->photo); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- End About Us -->
	
	<!-- Start Team -->
	
	<!--/ End Team Area -->
	
	<!-- Start Shop Services Area -->
	<section class="shop-services section">
		<div class="container">
			
			<?php

			?>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4><?php echo e(Lang::get('msg.freeshipping')); ?></h4>
						<p><?php echo e(Lang::get('msg.ordersover100')); ?></p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4><?php echo e(Lang::get('msg.freereturn')); ?></h4>
						<p><?php echo e(Lang::get('msg.wthin30daysreturn')); ?></p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<p><?php echo e(Lang::get('msg.100securepayment')); ?></p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4><?php echo e(Lang::get('msg.bestprice')); ?></h4>
						<p><?php echo e(Lang::get('msg.guarantedprice')); ?></p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	<?php echo $__env->make('frontend.layouts.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alnamaastore\resources\views/frontend/pages/about-us.blade.php ENDPATH**/ ?>