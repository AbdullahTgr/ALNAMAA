

                                                 
<?php $__env->startSection('meta'); ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
	<meta property="og:url" content="https://www.facebook.com/companynama"> 

    
	<meta name="keywords" content="<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>,<?php echo e($tag->title); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
	<meta name="description" content="مدونة النماء  لكل القصص والحكايات ومحبى القراءة ومتعتها ولكل كاتب واعد لسه بيبدأ ... سوف نسبح فى بحر قصة أو رواية أو كتاب أو ذكريات جميلة نسترجعها بكل تفاصيلها مدونة لكل فرد يحب القراءة ويسبح بها ويعلو عنان السماء">
	
	<meta property="og:title" content="مدونة النماء "> 

	<meta property="og:description" content="مدونة النماء  لكل القصص والحكايات ومحبى القراءة ومتعتها ولكل كاتب واعد لسه بيبدأ ... سوف نسبح فى بحر قصة أو رواية أو كتاب أو ذكريات جميلة نسترجعها بكل تفاصيلها مدونة لكل فرد يحب القراءة ويسبح بها ويعلو عنان السماء">

    <?php $__env->stopSection(); ?>

<?php $__env->startSection('title',"مدونة النماء"); ?>

<?php $__env->startSection('main-content'); ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="<?php echo e(route('home')); ?>"><?php echo e(Lang::get('msg.home')); ?><i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);"><?php echo e(Lang::get('msg.blog')); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
        
    <!-- Start Blog Single -->
    <section class="blog-single shop-blog grid section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <div class="col-lg-6 col-md-6 col-12">
                                <!-- Start Single Blog  -->
                                <div class="shop-single-blog col-12">
                                <img src="<?php echo e($post->photo); ?>" alt="<?php echo e($post->photo); ?>">
                                    <div class="content col-12">
                                        <?php 
                                            $author_info=DB::table('users')->select('name')->where('id',$post->added_by)->get();
                                        ?>
                                        <p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo e($post->created_at->format('d M, Y. D')); ?>

                                            <span class="float-right">
                                                <i class="fa fa-user" aria-hidden="true"></i> 
                                                <?php $__currentLoopData = $author_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->name): ?>
                                                        <?php echo e($data->name); ?>

                                                    <?php else: ?>
                                                    <?php echo e(Lang::get('msg.anonymous')); ?>

                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </span>
                                        </p>
                                        <a href="<?php echo e(route('blog.detail',$post->slug)); ?>" class="title"><?php echo e($post->{'title-ar'}); ?></a>
                                        <p><?php echo html_entity_decode($post->{"summary-ar"} ); ?></p>
                                        <a href="<?php echo e(route('blog.detail',$post->slug)); ?>" class="more-btn"><?php echo e(Lang::get('msg.continuereading')); ?></a>
                                    </div>
                                </div>
                                <!-- End Single Blog  -->
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12">
                            <!-- Pagination -->
                            
                            <!--/ End Pagination -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget search">
                            <form class="form" method="GET" action="<?php echo e(route('blog.search')); ?>">
                                <input type="text" placeholder="<?php echo e(Lang::get('msg.search')); ?>" name="search">
                                <button class="button" type="sumbit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget category">
                            <h3 class="title"><?php echo e(Lang::get('msg.blogcategories')); ?></h3>
                            <ul class="categor-list">
                                <?php if(!empty($_GET['category'])): ?>
                                    <?php 
                                        $filter_cats=explode(',',$_GET['category']);
                                    ?>
                                <?php endif; ?>
                            <form action="<?php echo e(route('blog.filter')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    
                                    <?php $__currentLoopData = Helper::postCategoryList('posts'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <li>
                                        <a href="<?php echo e(route('blog.category',$cat->slug)); ?>"><?php echo e($cat->{'title-ar'}); ?> </a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </form>
                                
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title"><?php echo e(Lang::get('msg.recentpost')); ?></h3>
                            <?php $__currentLoopData = $recent_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- Single Post -->
                                <div class="single-post " style="width: 100%" >
                                    <div class="image pull-left">
                                        <img src="<?php echo e($post->photo); ?>" alt="<?php echo e($post->photo); ?>">
                                    </div>
                                    <div class="content">
                                        <h5><a href="<?php echo route('blog.detail',strip_tags($post->slug)); ?>"><?php echo e($post->{'title-ar'}); ?></a></h5>
                                        <ul class="comment">
                                        <?php 
                                            $author_info=DB::table('users')->select('name')->where('id',$post->added_by)->get();
                                        ?>
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo e($post->created_at->format('d M, y')); ?></li>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> 
                                                <?php $__currentLoopData = $author_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->name): ?>
                                                        <?php echo e($data->name); ?>

                                                    <?php else: ?>
                                                    <?php echo e(Lang::get('msg.anonymous')); ?>

                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget side-tags">
                            <h3 class="title"><?php echo e(Lang::get('msg.tags')); ?></h3>
                            <ul class="tag">
                                <?php if(!empty($_GET['tag'])): ?>
                                    <?php 
                                        $filter_tags=explode(',',$_GET['tag']);
                                    ?>
                                <?php endif; ?>
                                <form action="<?php echo e(route('blog.filter')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php $__currentLoopData = Helper::postTagList('posts'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <li>
                                                <a href="<?php echo e(route('blog.tag',$tag->title)); ?>"><?php echo e($tag->title); ?> </a>
                                            </li>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </form>
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget newsletter">
                            <h3 class="title"><?php echo e(Lang::get('msg.newslatter')); ?></h3>
                            <div class="letter-inner">
                                <h4><?php echo e(Lang::get('msg.subscribetogetnews')); ?></h4>
                                
                            </div>
                        </div>
                        <!--/ End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Blog Single -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
    <style>
        .pagination{
            display:inline-flex;
        }
    </style>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Work\ALNAMAA\resources\views/frontend/pages/blog.blade.php ENDPATH**/ ?>