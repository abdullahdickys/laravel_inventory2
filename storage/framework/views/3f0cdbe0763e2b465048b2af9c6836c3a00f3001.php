 
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
               
				<form role="form" method="post" action="<?php echo e(route('suppliers.update', $suppliers->id)); ?>">
          <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Supplier</label>
                  <input type="text" name="nama" value="<?php echo e($suppliers['nama']); ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Supplier">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No Telp</label>
                  <input type="number" name="no_telp" value="<?php echo e($suppliers['no_telp']); ?>" class="form-control" id="exampleInputPassword1" placeholder="No Telp">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Alamat</label>
                  <textarea type="text" name="alamat" class="form-control" rows="5" placeholder="Alamat"><?php echo e($suppliers['alamat']); ?></textarea>
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


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dr4g0na/Desktop/project/laravel_inventory2/resources/views/suppliers/edit.blade.php ENDPATH**/ ?>