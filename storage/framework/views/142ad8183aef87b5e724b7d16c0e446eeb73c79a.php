 
<?php $__env->startSection('content'); ?>
 
<div class="row">
    <div class="col-md-12">
        
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>

            <div class="box-body">
            	 <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Document No</label>
                      <input type="text" name="document_no" value="<?php echo e($docmo); ?>" class="form-control" id="exampleInputEmail1" placeholder="Document Number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Supplier</label>
                      <select name="nama_supplier" class="form-control select2">
                        <option selected="" disabled="">Pilih Supplier</option>
                        <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($sp->id); ?>"><?php echo e($sp->nama_supplier); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>

            <?php if(isset($product)): ?>   
                   <div class="row">
                       <div class="col-md-12">
                           <table class="table myTable">
                               <thead>
                                   <tr>
                                       <th>Pilih Product</th>
                                       <th>#</th>
                                       <th>Nama Product</th>
                                       <th>Harga Beli</th>
                                       <th>Qty</th>
                                   </tr>
                               </thead>
                               <tbody>
                                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e=>$pd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr>
                                       <td><input type="checkbox" name="is_po" value="<?php echo e($pd->id); ?>"></td>
                                       <td><?php echo e($e+1); ?></td>
                                       <td><?php echo e($pd->nama_product); ?></td>
                                       <td><?php echo e(number_format($pd->beli,0)); ?></td>
                                       <td><input type="number" value="0" class="form-control" name="qty[]"></td>
                                   </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </tbody>
                           </table>
                       </div>
                   </div>
                <?php endif; ?>
        </div>
    </div>
</div>
 
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('scripts'); ?>
 
<script language="JavaScript" type="text/javascript">
    $(document).ready(function(){
      
        $("select[name='nama_supplier']").change(function(e){
          let id_supplier = $(this).val();
          let url = "<?php echo e(url('po/products')); ?>"+'/'+id_supplier;

          window.location.href = url;
        });
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        });
 
    });
</script>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/Dr4g0na/Desktop/project/laravel_inventory2/resources/views/po/create.blade.php ENDPATH**/ ?>