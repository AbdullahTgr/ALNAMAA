<?php $__env->startSection('title',Lang::get('msg.Alsaidi')); ?>
<?php $__env->startSection('main-content'); ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="<?php echo e(route('home')); ?>"><?php echo e(Lang::get('msg.home')); ?><i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);"><?php echo e(Lang::get('msg.ordertrack')); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
<section class="tracking_box_area section_gap py-5">
    <div class="container">
        <div class="tracking_box_inner">
            <p>
                <?php echo e(Lang::get('msg.totrackyourorder_')); ?>

                </p>
            <form class="row tracking_form my-4" action="<?php echo e(route('product.track.order')); ?>" method="post" novalidate="novalidate">
              <?php echo csrf_field(); ?>
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control p-2"  name="order_number" placeholder=" <?php echo e(Lang::get('msg.enteryourordernum')); ?>">
                </div>
                <div class="col-md-8 form-group">
                    <button type="submit" value="submit" class="btn submit_btn"><?php echo e(Lang::get('msg.trackorder')); ?></button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u953809391/domains/al-namapacking.com/public_html/new/resources/views/frontend/pages/order-track.blade.php ENDPATH**/ ?>