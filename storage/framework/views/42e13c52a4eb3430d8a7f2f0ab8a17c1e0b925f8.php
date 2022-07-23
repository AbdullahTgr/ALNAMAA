<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row topp" >
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            <?php
                                $settings=DB::table('settings')->get();
                                
                            ?>
                            <li><i class="ti-headphone-alt"></i><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->phone); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
                            <li><i class="ti-email"></i> <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->email); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-6 col-md-12 col-12"> 
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                        <li><i class="ti-location-pin"></i><a href="<?php echo e(route('order.track')); ?>"><?php echo e(Lang::get('msg.trackorder')); ?></a></li>
                            
                            <?php if(auth()->guard()->check()): ?> 
                                <?php if(Auth::user()->role=='admin'): ?>
                                    <li><i class="ti-user"></i><a href="<?php echo e(route('admin')); ?>"  target="_blank"><?php echo e(Lang::get('msg.dashboard')); ?></a></li>
                                <?php else: ?> 
                                    <li><i class="ti-user"></i><a href="<?php echo e(route('user')); ?>"  target="_blank"><?php echo e(Lang::get('msg.dashboard')); ?></a></li>
                                <?php endif; ?>
                                <li><i class="ti-power-off"></i> <a href="<?php echo e(route('user.logout')); ?>"><?php echo e(Lang::get('msg.logout')); ?></a></li>

                            <?php else: ?>
                                <li><i class="ti-power-off"></i><a href="<?php echo e(route('login.form')); ?>"><?php echo e(Lang::get('msg.login')); ?> /</a> <a href="<?php echo e(route('register.form')); ?>"><?php echo e(Lang::get('msg.register')); ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        
            <?php if(session()->get('locale')=="ar"): ?>
<style>
   
   body{
       direction:rtl;
       text-align: right;
    }
    .header.shop .right-bar .sinlge-bar {
        
    margin-left: 25px;
}
.header.shop .nav-inner {
    float: right;
}
.text-left {
    text-align: right!important;
}
.topp{
    direction: ltr;
}
.nice-select .option {
    cursor: pointer;
    font-weight: 400;
    line-height: 40px;
    list-style: none;
    min-height: 40px;
    outline: none;
    padding-left: 38px;
    padding-right: 10px;
    text-align: left;
    -webkit-transition: all 0.2s;
    text-align: right;
    transition: all 0.2s;
} 
.breadcrumbs .bread-inner {
    text-align: right;
}
.shop .single-shorter {
    
    margin-left: 10px;
}
.shop-newsletter .newsletter-inner .btn {
    display: inline-block;
    height: 55px;
    padding: 10px 30px;
    position: relative;
    top: 0;
    background: #720000;
    color: #fff;
    left: -4px;
    border-radius: 30px 0px 0px 30px;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
}
.shop-newsletter .newsletter-inner input {
    width: 500px;
    height: 55px;
    padding: 0px 29px;
    font-weight: 400;
    display: inline-block;
    text-shadow: none;
    box-shadow: none;
    border-radius: 0;
    border: none;
    border: 1px solid #ececec;
    border-radius: 0 30px 30px 0;
}
.shop-services .single-service {
    position: relative;
    padding-left: 65px;
    float: right;
}
.offset-lg-2 {
    margin-right: 16.666667%;
}
.contact-us .single-info {
    text-align: right;
    margin-bottom: 30px;
}
</style>
            <?php endif; ?>
            
        

        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <?php
                            $settings=DB::table('settings')->get();
                        ?>                    
                        <a href="<?php echo e(route('home')); ?>"><img src="<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->logo); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..." name="search">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            
                            
     
                            

            <?php if(session()->get('locale')=="en"): ?>
            
            <select>
                <option ><?php echo e(Lang::get('msg.allcats')); ?></option>
                <?php $__currentLoopData = Helper::getAllCategory(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option><?php echo e($cat->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select> 
<?php elseif(session()->get('locale')=="fr"): ?>
            
            <select>
                <option ><?php echo e(Lang::get('msg.allcats')); ?></option>
                <?php $__currentLoopData = Helper::getAllCategory(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option><?php echo e($cat->{'title-fr'}); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select> 
<?php else: ?>
            
            <select>
                <option ><?php echo e(Lang::get('msg.allcats')); ?></option>
                <?php $__currentLoopData = Helper::getAllCategory(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option><?php echo e($cat->{'title-ar'}); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select> 
<?php endif; ?>



                            <form method="POST" action="<?php echo e(route('product.search')); ?>">
                                <?php echo csrf_field(); ?>
                                <input name="search" placeholder="<?php echo e(Lang::get('msg.searchforproducthere')); ?>" type="search">
                                <button class="btnn" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Search Form -->
                        <div class="sinlge-bar shopping">
                            <?php 
                                $total_prod=0;
                                $total_amount=0;
                            ?>
                           <?php if(session('wishlist')): ?>
                                <?php $__currentLoopData = session('wishlist'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wishlist_items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $total_prod+=$wishlist_items['quantity'];
                                        $total_amount+=$wishlist_items['amount'];
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                            <a href="<?php echo e(route('wishlist')); ?>" class="single-icon"><i class="fa fa-heart-o"></i> <span class="total-count"><?php echo e(Helper::wishlistCount()); ?></span></a>
                            <!-- Shopping Item -->
                            <?php if(auth()->guard()->check()): ?>
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span><?php echo e(count(Helper::getAllProductFromWishlist())); ?> <?php echo e(Lang::get('msg.items')); ?></span>
                                        <a href="<?php echo e(route('wishlist')); ?>"><?php echo e(Lang::get('msg.viewwishlist')); ?></a>
                                    </div>
                                    <ul class="shopping-list">
                                        
                                            <?php $__currentLoopData = Helper::getAllProductFromWishlist(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php
                                                        $photo=explode(',',$data->product['photo']);
                                                    ?>
                                                    <li>
                                                        <a href="<?php echo e(route('wishlist-delete',$data->id)); ?>" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                        <a class="cart-img" href="#"><img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>"></a>
                                                        <h4><a href="<?php echo e(route('product-detail',$data->product['slug'])); ?>" target="_blank">
                                                            <?php if(session()->get('locale')=="en"): ?>
                                                            
                                                        <?php echo e($data->product['title']); ?>

                                                            </select> 
                                                <?php elseif(session()->get('locale')=="fr"): ?>
                                                            
                                                       <?php echo e($data->product['title-fr']); ?>

                                                <?php else: ?>
                                                            
                                                           <?php echo e($data->product['title-ar']); ?>

                                                <?php endif; ?>
                                                        </a></h4>
                                                        <p class="quantity"><?php echo e($data->quantity); ?> x - <span class="amount">$<?php echo e(number_format($data->price,2)); ?></span></p>
                                                    </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span><?php echo e(Lang::get('msg.total')); ?></span>
                                            <span class="total-amount">$<?php echo e(number_format(Helper::totalWishlistPrice(),2)); ?></span>
                                        </div>
                                        <a href="<?php echo e(route('cart')); ?>" class="btn animate"><?php echo e(Lang::get('msg.cart')); ?></a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!--/ End Shopping Item -->
                        </div>
                        
                        <div class="sinlge-bar shopping">
                            <a href="<?php echo e(route('cart')); ?>" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?php echo e(Helper::cartCount()); ?></span></a>
                            <!-- Shopping Item -->
                            <?php if(auth()->guard()->check()): ?>
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span><?php echo e(count(Helper::getAllProductFromCart())); ?> <?php echo e(Lang::get('msg.items')); ?></span>
                                        <a href="<?php echo e(route('cart')); ?>"><?php echo e(Lang::get('msg.viewcart')); ?></a>
                                    </div>
                                    <ul class="shopping-list">
                                        
                                            <?php $__currentLoopData = Helper::getAllProductFromCart(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php
                                                        $photo=explode(',',$data->product['photo']);
                                                    ?>
                                                    <li>
                                                        <a href="<?php echo e(route('cart-delete',$data->id)); ?>" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                        <a class="cart-img" href="#"><img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>"></a>
                                                        <h4><a href="<?php echo e(route('product-detail',$data->product['slug'])); ?>" target="_blank">
                                                            
                                                            
                                                            
                                                        
                                                            <?php if(session()->get('locale')=="en"): ?>
                                                            
                                                        <?php echo e($data->product['title']); ?>

                                                            </select> 
                                                <?php elseif(session()->get('locale')=="fr"): ?>
                                                            
                                                       <?php echo e($data->product['title-fr']); ?>

                                                <?php else: ?>
                                                            
                                                           <?php echo e($data->product['title-ar']); ?>

                                                <?php endif; ?>
                                                        
                                                        </a></h4>
                                                        <p class="quantity"><?php echo e($data->quantity); ?> x - <span class="amount">$<?php echo e(number_format($data->price,2)); ?></span></p>
                                                    </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span><?php echo e(Lang::get('msg.total')); ?></span>
                                            <span class="total-amount">$<?php echo e(number_format(Helper::totalCartPrice(),2)); ?></span>
                                        </div>
                                        <a href="<?php echo e(route('checkout')); ?>" class="btn animate"><?php echo e(Lang::get('msg.checkout')); ?></a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!--/ End Shopping Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">	
                                    <div class="nav-inner">	
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="<?php echo e(Request::path()=='home' ? 'active' : ''); ?>"><a href="<?php echo e(route('home')); ?>"><?php echo e(Lang::get('msg.home')); ?></a></li>
                                            <li class="<?php echo e(Request::path()=='about-us' ? 'active' : ''); ?>"><a href="<?php echo e(route('about-us')); ?>"><?php echo e(Lang::get('msg.aboutus')); ?></a></li>
                                            <li class="<?php if(Request::path()=='product-grids'||Request::path()=='product-lists'): ?>  active  <?php endif; ?>"><a href="<?php echo e(route('product-grids')); ?>"><?php echo e(Lang::get('msg.products')); ?></a><span class="new"><?php echo e(Lang::get('msg.new')); ?></span></li>												
                                                <?php echo e(Helper::getHeaderCategory(Lang::get('msg.categories') )); ?>

                                            <li class="<?php echo e(Request::path()=='blog' ? 'active' : ''); ?>"><a href="<?php echo e(route('blog')); ?>"><?php echo e(Lang::get('msg.blog')); ?></a></li>									
                                               
                                            <li class="<?php echo e(Request::path()=='contact' ? 'active' : ''); ?>"><a href="<?php echo e(route('contact')); ?>"><?php echo e(Lang::get('msg.contactus')); ?></a></li>
                                            <select class="form-control changeLang" >
                                                <option value="en" <?php echo e(session()->get('locale') == 'en' ? 'selected' : ''); ?>><?php echo e(Lang::get('msg.english')); ?></option>
                                                <option value="fr" <?php echo e(session()->get('locale') == 'fr' ? 'selected' : ''); ?>><?php echo e(Lang::get('msg.france')); ?></option>
                                                <option value="ar" <?php echo e(session()->get('locale') == 'ar' ? 'selected' : ''); ?>><?php echo e(Lang::get('msg.arabic')); ?></option>
                                            </select>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>

<?php /**PATH C:\xampp\htdocs\spanshop\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>