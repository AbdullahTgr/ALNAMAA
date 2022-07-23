
<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4><?php echo e(Lang::get('msg.newsletter')); ?></h4>
                        <p> <?php echo e(Lang::get('msg.subscribeto')); ?><span>10%</span><?php echo e(Lang::get('msg.offyourfirstpurchase')); ?> </p>
                        <form action="<?php echo e(route('subscribe')); ?>" method="post" class="newsletter-inner">
                            <?php echo csrf_field(); ?>
                            <input name="email" placeholder="Your email address" required="" type="email">
                            <button class="btn" type="submit"><?php echo e(Lang::get('msg.subscribe')); ?></button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter --><?php /**PATH C:\xampp\htdocs\alnamaastore\resources\views/frontend/layouts/newsletter.blade.php ENDPATH**/ ?>