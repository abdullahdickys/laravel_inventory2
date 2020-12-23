 
<?php $__env->startSection('content'); ?>
 
<?php if($errors->any()): ?>
  <div class="alert alert-danger pb-0">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
<?php endif; ?>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <!-- <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button> -->
                </p>
            </div>
            <div class="box-body">
               
				<form role="form" method="post" action="<?php echo e(route('products.store')); ?>">
         <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Supplier</label>
                  <select class="form-control select2" name="supplier_id">
                    <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($sp->id); ?>"><?php echo e($sp->nama_supplier); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">nama product</label>
                  <input type="text" name="nama_product" class="form-control" id="exampleInputPassword1" placeholder="nama product"> 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">kode</label>
                  <input type="text" name="kode" class="form-control" value="<?php echo e($code); ?>" id="exampleInputPassword1" placeholder="kode">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">stock</label>
                  <input type="number" name="stock" class="form-control" id="exampleInputPassword1" placeholder="stock product">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">minimal stock</label>
                  <input type="number" name="minimal_stock" class="form-control" id="exampleInputPassword1" placeholder="minimal stock">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Harga Beli Product</label>
                  <input type="number" name="beli" class="form-control" id="exampleInputPassword1" placeholder="harga jual">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Harga Jual Product</label>
                  <input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="harga beli">
                </div>
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
        </div>
    </div>
</div>
 
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('scripts'); ?>
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/Dr4g0na/Desktop/project/laravel_inventory2/resources/views/products/create.blade.php ENDPATH**/ ?>