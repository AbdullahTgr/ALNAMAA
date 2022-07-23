<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('backend.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php
    $user=Auth()->user() 
  ?>
  
    <!-- Sidebar -->
    <?php if($user->role=='admin'): ?>
        
    <?php echo $__env->make('backend.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
    
    <?php echo $__env->make('backend.layouts.sidebar_m', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php echo $__env->make('backend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <?php echo $__env->yieldContent('main-content'); ?>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <?php echo $__env->make('backend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Work\Alsaidi\resources\views/backend/layouts/master.blade.php ENDPATH**/ ?>