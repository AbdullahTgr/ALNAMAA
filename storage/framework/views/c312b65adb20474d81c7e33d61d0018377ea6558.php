

<?php $__env->startSection('title','شركة النماء'); ?>

<?php $__env->startSection('main-content'); ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="<?php echo e(route('home')); ?>"><?php echo e(Lang::get('msg.home')); ?><i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);"><?php echo e(Lang::get('msg.login')); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
            
    <!-- Shop Login -->
    <section class="shop login section">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="login-form">
                        <h2><?php echo e(Lang::get('msg.login')); ?></h2>
                        <p><?php echo e(Lang::get('msg.pleaseregisterinordertocheckoutmorequickly')); ?></p>
                        <!-- Form -->
                        <form class="form" method="post" action="<?php echo e(route('login.submit')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label><?php echo e(Lang::get('msg.youremail')); ?><span>*</span></label>
                                        <input type="email" name="email" placeholder="" required="required" value="<?php echo e(old('email')); ?>">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label><?php echo e(Lang::get('msg.yourpassword')); ?><span>*</span></label>
                                        <input type="password" name="password" placeholder="" required="required" value="<?php echo e(old('password')); ?>">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" type="submit"><?php echo e(Lang::get('msg.login')); ?></button>
                                        <a href="<?php echo e(route('register.form')); ?>" class="btn"><?php echo e(Lang::get('msg.register')); ?></a>
                                        <?php echo e(Lang::get('msg.or')); ?>

                                        <a href="<?php echo e(route('login.redirect','facebook')); ?>" class="btn btn-facebook"><i class="ti-facebook"></i></a>
                                        <a href="<?php echo e(route('login.redirect','github')); ?>" class="btn btn-github"><i class="ti-github"></i></a>
                                        <a href="<?php echo e(route('login.redirect','google')); ?>" class="btn btn-google"><i class="ti-google"></i></a>

                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"><?php echo e(Lang::get('msg.rememberme')); ?></label>
                                    </div>
                                    <?php if(Route::has('password.request')): ?>
                                        <a class="lost-pass" href="<?php echo e(route('password.Reset')); ?>">
                                            <?php echo e(Lang::get('msg.lostyourpass')); ?>

                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Login -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
<style>
    .shop.login .form .btn{
        margin-right:0;
    }
    .btn-facebook{
        background:#39579A;
    }
    .btn-facebook:hover{
        background:#073088 !important;
    }
    .btn-github{
        background:#444444;
        color:white;
    }
    .btn-github:hover{
        background:black !important;
    }
    .btn-google{
        background:#ea4335;
        color:white;
    }
    .btn-google:hover{
        background:rgb(243, 26, 26) !important;
    }
</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alnamaastore\resources\views/frontend/pages/login.blade.php ENDPATH**/ ?>