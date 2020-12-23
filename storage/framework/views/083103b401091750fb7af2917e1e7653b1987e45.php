<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('user.png')); ?> " class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(\Auth::user()->name); ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="<?php echo e(url('/home')); ?>"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
            <li class="active"><a href="<?php echo e(route('suppliers.index')); ?>"><i class="fa fa-link"></i> <span>Supplier</span></a></li>
            <li class="active"><a href="<?php echo e(route('products.index')); ?>"><i class="fa fa-link"></i> <span>Product</span></a></li>
            <li class="active"><a href="<?php echo e(route('po.index')); ?>"><i class="fa fa-link"></i> <span>Purchase Order</span></a></li>
           







        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
<?php /**PATH /home/Dr4g0na/Desktop/project/laravel_inventory2/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>