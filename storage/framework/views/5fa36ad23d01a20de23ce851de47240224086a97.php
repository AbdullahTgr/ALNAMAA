
<?php $settings=DB::table('settings')->get(); ?>


<?php
$path="";    
?>
<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <?php
    $path=$data->logo
?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->startSection('meta'); ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    

	<meta name="keywords" content="<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>,<?php echo e($tag->title); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
	<meta name="description" content="<?php echo strip_tags( $settings[0]->{'description'} ); ?>">
	
    
    
	<meta property="og:title" content="<?php echo strip_tags($settings[0]->{'short_des'}); ?>">
    <meta property="og:image" content="<?php echo e(url($path)); ?>" />
	<meta property="og:description" content="<?php echo strip_tags($settings[0]->{'description'} ); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title',Lang::get('msg.Alsaidi')); ?>
<?php $__env->startSection('main-content'); ?>


<?php if(count($banners)>0): ?>
    <section id="Gslider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li data-target="#Gslider" data-slide-to="<?php echo e($key); ?>" class="<?php echo e((($key==0)? 'active' : '')); ?>"></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ol>
        <div class="carousel-inner" role="listbox">
                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php echo e((($key==0)? 'active' : '')); ?>">
                    <img class="first-slide" src="<?php echo e($banner->photo); ?>" alt="First slide">
                    <div class="carousel-caption d-md-block text-left">

                            <?php if(session()->get('locale')=="en"): ?>
                                
                                 
                        <h1 class="wow fadeInDown">
                            <?php echo e($banner->title); ?>

                        <p><?php echo html_entity_decode($banner->description); ?></p>
                        </h1>
                            <?php elseif(session()->get('locale')=="fr"): ?>
                                
                        <h1 class="wow fadeInDown">
                            <?php echo e($banner->{'title-fr'}); ?>

                        <p><?php echo html_entity_decode($banner->{'description-fr'}); ?></p>
                        </h1>
                            <?php else: ?>
                                
                        <h1 class="wow fadeInDown">
                            <?php echo e($banner->{'title-ar'}); ?>

                        <p><?php echo html_entity_decode($banner->{'description-ar'}); ?></p>
                        </h1>
                            <?php endif; ?>
                            <a target="_blank" href="https://www.youtube.com/channel/UCoJSM0GLnhJh17gZVvALHaA" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span><?php echo e(Lang::get('msg.watchvid')); ?></span></a>
                        <a class="btn btn-lg ws-btn wow fadeInUpBig" href="<?php echo e(route('product-grids')); ?>"  role="button"><?php echo e(Lang::get('msg.shopnow')); ?><i class="far fa-arrow-alt-circle-right"></i></i></a>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
        </div> 
        <a class="carousel-control-prev" href="#Gslider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"><?php echo e(Lang::get('msg.previous')); ?></span>
        </a>
        <a class="carousel-control-next" href="#Gslider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"><?php echo e(Lang::get('msg.next')); ?></span>
        </a>
    </section>
<?php endif; ?>

<!--/ End Slider Area -->

<!-- Start Small Banner  -->
<section class="small-banner section">
    <div class="container-fluid">
        <div class="row">
            <?php 
            $category_lists=DB::table('categories')->where('status','active')->limit(3)->get();
            ?>
            <?php if($category_lists): ?>
                <?php $__currentLoopData = $category_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($cat->is_parent==1): ?>
                        <!-- Single Banner  -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-banner">
                                <?php if($cat->photo): ?>
                                    <img src="<?php echo e($cat->photo); ?>" alt="<?php echo e($cat->photo); ?>">
                                <?php else: ?>
                                    <img src="https://via.placeholder.com/600x370" alt="#">
                                <?php endif; ?>
                                <div class="content">
                                    <h3>
                                        <?php if(session()->get('locale')=="en"): ?>
                                            
                                        <?php echo e($cat->title); ?>

                                        <?php elseif(session()->get('locale')=="fr"): ?>
                                            
                                        <?php echo e($cat->{'title-fr'}); ?>

                                        <?php else: ?>
                                            
                                        <?php echo e($cat->{'title-ar'}); ?>

                                        <?php endif; ?>
                                    </h3>
                                        <a href="<?php echo e(route('product-cat',$cat->slug)); ?>"><?php echo e(Lang::get('msg.discovernow')); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- /End Single Banner  -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Small Banner -->

<!-- Start Product Area -->
<div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2><?php echo e(Lang::get('msg.trendingitems')); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">        
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            <ul class="nav nav-tabs filter-tope-group" id="myTab" role="tablist">
                                <?php 
                                    $categories=DB::table('categories')->where('status','active')->where('is_parent',1)->get();
                                    // dd($categories);
                                ?>
                                <?php if($categories): ?>
                                <button class="btn" style="background:#581845"data-filter="*">
                                    <?php echo e(Lang::get('msg.allproducts')); ?>

                                </button>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <button class="btn" style="background:none;color:#581845;"data-filter=".<?php echo e($cat->id); ?>">
                                        <?php if(session()->get('locale')=="en"): ?>
                                            
                                        <?php echo e($cat->title); ?>

                                        <?php elseif(session()->get('locale')=="fr"): ?>
                                            
                                        <?php echo e($cat->{'title-fr'}); ?>

                                        <?php else: ?>
                                            
                                        <?php echo e($cat->{'title-ar'}); ?>

                                        <?php endif; ?>
                                    </button>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                            <!--/ End Tab Nav -->
                        </div>
                        <div class="tab-content isotope-grid" id="myTabContent">
                             <!-- Start Single Tab -->
                            <?php if($product_lists): ?>
                                <?php $__currentLoopData = $product_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo e($product->cat_id); ?>">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="<?php echo e(route('product-detail',$product->slug)); ?>">
                                                <?php 
                                                    $photo=explode(',',$product->photo);
                                                // dd($photo);
                                                ?>
                                                <img class="default-img" src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>">
                                                <img class="hover-img" src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>">
                                                <?php if($product->stock<=0): ?>
                                                    <span class="out-of-stock"><?php echo e(Lang::get('msg.saleout')); ?></span>
                                                <?php elseif($product->condition=='new'): ?>
                                                    <span class="new"><?php echo e(Lang::get('msg.new')); ?></span
                                                <?php elseif($product->condition=='hot'): ?>
                                                    <span class="hot"><?php echo e(Lang::get('msg.hot')); ?></span>
                                                <?php else: ?>
                                                    <span class="price-dec"><?php echo e($product->discount); ?><?php echo e(Lang::get('msg.off%')); ?></span>
                                                <?php endif; ?>


                                            </a>
                                            <div class="button-head">
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#<?php echo e($product->id); ?>" title="Quick View" href="#"><i class=" ti-eye"></i><span><?php echo e(Lang::get('msg.quickshop')); ?></span></a>
                                                    <a title="Wishlist" href="<?php echo e(route('add-to-wishlist',$product->slug)); ?>" ><i class=" ti-heart "></i><span><?php echo e(Lang::get('msg.addtocart')); ?><?php echo e(Lang::get('msg.addtowishlist')); ?></span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add to cart" href="<?php echo e(route('add-to-cart',$product->slug)); ?>"><?php echo e(Lang::get('msg.addtocart')); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="<?php echo e(route('product-detail',$product->slug)); ?>">
                                                
                                                
                                                <?php if(session()->get('locale')=="en"): ?>
                                                    
                                                <?php echo e($product->title); ?>

                                                <?php elseif(session()->get('locale')=="fr"): ?>
                                                    
                                                <?php echo e($product->{'title-fr'}); ?>

                                                <?php else: ?>
                                                    
                                                <?php echo e($product->{'title-ar'}); ?>

                                                <?php endif; ?>
                                                
                                                
                                            
                                            </a></h3>
                                            <div class="product-price">
                                                <?php
                                                    $after_discount=($product->price-($product->price*$product->discount)/100);
                                                ?>
                                                <span>$<?php echo e(number_format($after_discount,2)); ?></span>
                                                <del style="padding-left:4%;">$<?php echo e(number_format($product->price,2)); ?></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                             <!--/ End Single Tab -->
                            <?php endif; ?>
                       
                        <!--/ End Single Tab -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- End Product Area -->

<!-- Start Midium Banner  -->
<section class="midium-banner">
    <div class="container">
        <div class="row"> 
            <?php if($featured): ?>
                <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Single Banner  -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-banner">
                            <?php 
                                $photo=explode(',',$data->photo);
                            ?>
                            <img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>">
                            <div class="content">
                                <p>
                                    <?php if(session()->get('locale')=="en"): ?>
                                        
                                    <?php echo e($data->cat_info['title']); ?>

                                    <?php elseif(session()->get('locale')=="fr"): ?>
                                        
                                    <?php echo e($data->cat_info['title-fr']); ?>

                                    <?php else: ?>
                                        
                                    <?php echo e($data->cat_info['title-ar']); ?>

                                    <?php endif; ?>

                                    
                                </p>
                                <h3>
                                    <?php if(session()->get('locale')=="en"): ?>
                                        
                                   <?php echo e($data->title); ?> 
                                    <?php elseif(session()->get('locale')=="fr"): ?>
                                        
                                    <?php echo e($data->{'title-fr'}); ?> 
                                    <?php else: ?>
                                        
                                    <?php echo e($data->{'title-ar'}); ?> 
                                    <?php endif; ?>
                                    
                                    <br><?php echo e(Lang::get('msg.upto')); ?><span> <?php echo e($data->discount); ?>%</span></h3>
                                <a href="<?php echo e(route('product-detail',$data->slug)); ?>"><?php echo e(Lang::get('msg.shopnow')); ?></a>
                            </div>
                        </div>
                    </div>
                    <!-- /End Single Banner  -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Midium Banner -->

<!-- Start Most Popular -->
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2><?php echo e(Lang::get('msg.hotitem')); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <?php $__currentLoopData = $product_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($product->condition=='hot'): ?>
                            <!-- Start Single Product -->
                        <div class="single-product">
                            <div class="product-img">
                                <a href="<?php echo e(route('product-detail',$product->slug)); ?>">
                                    <?php 
                                        $photo=explode(',',$product->photo);
                                    // dd($photo);
                                    ?>
                                    <img class="default-img" src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>">
                                    <img class="hover-img" src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>">
                                    
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#<?php echo e($product->id); ?>" title="Quick View" href="#"><i class=" ti-eye"></i><span><?php echo e(Lang::get('msg.quickshop')); ?></span></a>
                                        <a title="Wishlist" href="<?php echo e(route('add-to-wishlist',$product->slug)); ?>" ><i class=" ti-heart "></i><span><?php echo e(Lang::get('msg.addtowishlist')); ?></span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a href="<?php echo e(route('add-to-cart',$product->slug)); ?>"><?php echo e(Lang::get('msg.addtocart')); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="<?php echo e(route('product-detail',$product->slug)); ?>">
                                    
                                    
                                    <?php if(session()->get('locale')=="en"): ?>
                                        
                                   <?php echo e($product->title); ?> 
                                    <?php elseif(session()->get('locale')=="fr"): ?>
                                        
                                    <?php echo e($product->{'title-fr'}); ?> 
                                    <?php else: ?>
                                        
                                    <?php echo e($product->{'title-ar'}); ?> 
                                    <?php endif; ?>
                                </a></h3>
                                <div class="product-price">
                                    <span class="old">$<?php echo e(number_format($product->price,2)); ?></span>
                                    <?php 
                                    $after_discount=($product->price-($product->price*$product->discount)/100)
                                    ?>
                                    <span>$<?php echo e(number_format($after_discount,2)); ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Most Popular Area -->

<!-- Start Shop Home List  -->
<section class="shop-home-list section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-section-title">
                            <h1><?php echo e(Lang::get('msg.latestitems')); ?></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $product_lists=DB::table('products')->where('status','active')->orderBy('id','DESC')->limit(6)->get();
                    ?>
                    <?php $__currentLoopData = $product_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4"  style="<?php echo e(session()->get('locale') == 'ar' ? 'direction: rtl;' : ''); ?>"  >
                            <!-- Start Single List  -->
                            <div class="single-list">
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="list-image overlay">
                                        <?php 
                                            $photo=explode(',',$product->photo);
                                            // dd($photo);
                                        ?>
                                        <img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>">
                                        <a href="<?php echo e(route('add-to-cart',$product->slug)); ?>" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 no-padding">
                                    <div class="content">
                                        <h4 class="title"><a href="#">
                                            <?php if(session()->get('locale')=="en"): ?>
                                                
                                           <?php echo e($product->title); ?> 
                                            <?php elseif(session()->get('locale')=="fr"): ?>
                                                
                                            <?php echo e($product->{'title-fr'}); ?> 
                                            <?php else: ?>
                                                
                                            <?php echo e($product->{'title-ar'}); ?> 
                                            <?php endif; ?>
                                        </a></h4>
                                        <p class="price with-discount">$<?php echo e(number_format($product->discount,2)); ?></p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- End Single List  -->
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Home List  -->

<!-- Start Shop Blog  -->
<section class="shop-blog section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2><?php echo e(Lang::get('msg.fromourblog')); ?></h2>
                </div>
            </div>
        </div>
        <div class="row" style="padding-bottom: 100px;">
            <?php if($posts): ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Blog  -->
                        <div class="shop-single-blog">
                            <img src="<?php echo e($post->photo); ?>" alt="<?php echo e($post->photo); ?>">
                            <div class="content">
                                <p class="date"><?php echo e($post->created_at->format('d M , Y. D')); ?></p>
                                <a href="<?php echo e(route('blog.detail',$post->slug)); ?>" class="title">
                                    <?php if(session()->get('locale')=="en"): ?>
                                        
                                   <?php echo e($post->title); ?> 
                                    <?php elseif(session()->get('locale')=="fr"): ?>
                                        
                                    <?php echo e($post->{'title-fr'}); ?> 
                                    <?php else: ?>
                                        
                                    <?php echo e($post->{'title-ar'}); ?> 
                                    <?php endif; ?>    
                                </a>
                                <a href="<?php echo e(route('blog.detail',$post->slug)); ?>" class="more-btn"><?php echo e(Lang::get('msg.continuereading')); ?></a>
                            </div>
                        </div>
                        <!-- End Single Blog  -->
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            
        </div>
    </div>
</section>
<!-- End Shop Blog  -->

<!-- Start Shop Services Area -->
<section class="shop-services section home">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
     	<h4><?php echo e(Lang::get('msg.freeshipping')); ?></h4>
                        <p><?php echo e(Lang::get('msg.ordersover100')); ?> </p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-reload"></i>
             	     <h4><?php echo e(Lang::get('msg.freereturn')); ?></h4>
                        <p><?php echo e(Lang::get('msg.wthin30daysreturn')); ?> </p>
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

<!-- Modal -->
<?php if($product_lists): ?>
    <?php $__currentLoopData = $product_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="<?php echo e($product->id); ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row no-gutters">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <!-- Product Slider -->
                                        <div class="product-gallery">
                                            <div class="quickview-slider-active">
                                                <?php 
                                                    $photo=explode(',',$product->photo);
                                                // dd($photo);
                                                ?>
                                                <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="single-slider">
                                                        <img src="<?php echo e($data); ?>" alt="<?php echo e($data); ?>">
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    <!-- End Product slider -->
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="quickview-content">
                                        <h2>
                                            <?php if(session()->get('locale')=="en"): ?>
                                                
                                           <?php echo e($product->title); ?> 
                                            <?php elseif(session()->get('locale')=="fr"): ?>
                                                
                                            <?php echo e($product->{'title-fr'}); ?> 
                                            <?php else: ?>
                                                
                                            <?php echo e($product->{'title-ar'}); ?> 
                                            <?php endif; ?>
                                        </h2>
                                        <div class="quickview-ratting-review">
                                            <div class="quickview-ratting-wrap">
                                                <div class="quickview-ratting">
                                                    
                                                    <?php
                                                        $rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
                                                        $rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
                                                    ?>
                                                    <?php for($i=1; $i<=5; $i++): ?>
                                                        <?php if($rate>=$i): ?>
                                                            <i class="yellow fa fa-star"></i>
                                                        <?php else: ?> 
                                                        <i class="fa fa-star"></i>
                                                        <?php endif; ?>
                                                    <?php endfor; ?>
                                                </div>
                                                <a href="#"> (<?php echo e($rate_count); ?> <?php echo e(Lang::get('msg.customerreview')); ?>)</a>
                                            </div>
                                            <div class="quickview-stock">
                                                <?php if($product->stock >0): ?>
                                                <span><i class="fa fa-check-circle-o"></i> <?php echo e($product->stock); ?> <?php echo e(Lang::get('msg.instock')); ?></span>
                                                <?php else: ?> 
                                                <span><i class="fa fa-times-circle-o text-danger"></i> <?php echo e($product->stock); ?> <?php echo e(Lang::get('msg.outofstock')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php
                                            $after_discount=($product->price-($product->price*$product->discount)/100);
                                        ?>
                                        <h3><small><del class="text-muted">$<?php echo e(number_format($product->price,2)); ?></del></small>    $<?php echo e(number_format($after_discount,2)); ?>  </h3>
                                        <div class="quickview-peragraph">
                                            <p><?php echo html_entity_decode($product->summary); ?></p>
                                        </div>
                                        <?php if($product->size): ?>
                                            <div class="size">
                                                <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                        <h5 class="title"><?php echo e(Lang::get('msg.size')); ?></h5>
                                                        <select>
                                                            <?php 
                                                            $sizes=explode(',',$product->size);
                                                            // dd($sizes);
                                                            ?>
                                                            <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option><?php echo e($size); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <form action="<?php echo e(route('single-add-to-cart')); ?>" method="POST" class="mt-4">
                                            <?php echo csrf_field(); ?> 
                                            <div class="quantity">
                                                <!-- Input Order -->
                                                <div class="input-group">
                                                    <div class="button minus">
                                                        <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                            <i class="ti-minus"></i>
                                                        </button>
                                                    </div>
													<input type="hidden" name="slug" value="<?php echo e($product->slug); ?>">
                                                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                                    <div class="button plus">
                                                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--/ End Input Order -->
                                            </div>
                                            <div class="add-to-cart">
                                                <button type="submit" class="btn"><?php echo e(Lang::get('msg.addtocart')); ?></button>
                                                <a href="<?php echo e(route('add-to-wishlist',$product->slug)); ?>" class="btn min"><i class="ti-heart"></i></a>
                                            </div>
                                        </form>
                                        <div class="default-social">
                                        <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<!-- Modal end -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62246f7e58f4c4001368640a&product=inline-share-buttons' async='async'></script>
    <style>
        /* Banner Sliding */
        #Gslider .carousel-inner {
        background: #000000;
        color:#581845;
        }

        #Gslider .carousel-inner{
        /* max-height: 50vh; */
        }
        #Gslider .carousel-inner img{
            opacity: .8;
    height: 66vh;
    width: 100%;
    object-fit: cover;
    object-position: center;
    margin: auto;
        }

        #Gslider .carousel-inner .carousel-caption {
            bottom: 25%;
    background: #ffffff2e;
    padding: 5%;
        }

        #Gslider .carousel-inner .carousel-caption h1 {
        font-size: 30px;
        font-weight: bold;
        line-height: 100%;
        color: #2196f3;
        }

        #Gslider .carousel-inner .carousel-caption p {
        font-size: 18px;
        color: #581845;
        margin: 28px 0 28px 0;
        }

        #Gslider .carousel-indicators {
        bottom: 70px;
        }



    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    
    
    <script>
        
        /*==================================================================
        [ Isotope ]*/
        var $topeContainer = $('.isotope-grid');
        var $filter = $('.filter-tope-group');

        // filter items on button click
        $filter.each(function () {
            $filter.on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $topeContainer.isotope({filter: filterValue});
            });
            
        });

        // init Isotope
        $(window).on('load', function () {
            var $grid = $topeContainer.each(function () {
                $(this).isotope({
                    itemSelector: '.isotope-item',
                    layoutMode: 'fitRows',
                    percentPosition: true,
                    animationEngine : 'best-available',
                    masonry: {
                        columnWidth: '.isotope-item'
                    }
                });
            });
        });

        var isotopeButton = $('.filter-tope-group button');

        $(isotopeButton).each(function(){
            $(this).on('click', function(){
                for(var i=0; i<isotopeButton.length; i++) {
                    $(isotopeButton[i]).removeClass('how-active1');
                }

                $(this).addClass('how-active1');
            });
        });
    </script>
    <script>
         function cancelFullScreen(el) {
            var requestMethod = el.cancelFullScreen||el.webkitCancelFullScreen||el.mozCancelFullScreen||el.exitFullscreen;
            if (requestMethod) { // cancel full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
        }

        function requestFullScreen(el) {
            // Supports most browsers and their versions.
            var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullscreen;

            if (requestMethod) { // Native full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
            return false
        }
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Work\ALNAMAA\resources\views/frontend/index.blade.php ENDPATH**/ ?>