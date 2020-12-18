 
<?php $__env->startSection('content'); ?>
 
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="boxox-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
               <div class="table-responsive">
		   <table class="table table-stripped">
		    <tbody>
		    	<tr>
		    		<th><b>Barcode</b></th>
		    		<td>:</td>
				    <td><?php echo DNS1D::getBarcodeHTML($dt->kode, 'S25'); ?></td>
   <!-- <div><?php echo DNS1D::getBarcodeHTML($dt->kode, 'S25'); ?></div></br> -->
            <th><b>Nama Product</b></th>
            <td>:</td>
            <td><?php echo e($dt->nama_product); ?></td>
		    	</tr>
                       <tr>
                           <th>Suppliers</th>
                           <td>:</td>
                           <td><?php echo e($dt->supplier->nama_supplier); ?></td>
                            <th><b>kode</b></th>
                            <td>:</td>
                            <td><?php echo e($dt->kode); ?></td>
                       </tr>
                       <tr>
                           <th>Stock</th>
                           <td>:</td>
                           <td><?php echo e($dt->stock); ?></td>
                           <th><b>Minimal Stock</b></th>
                           <td>:</td>
                           <td><?php echo e($dt->minimal_stock); ?></td>
                       </tr>
                       <tr>
                           <th>Created At</th>
                           <td>:</td>
                           <td><?php echo e($dt->created_at); ?></td>
                           <th><b>Update At</b></th>
                           <td>:</td>
                           <td><?php echo e($dt->updated_at); ?></td>
                       </tr>
                       <tr>
                           <th>Harga</th>
                           <td>:</td>
                           <td><?php echo e(number_format($dt->harga,0)); ?></td>
                       </tr>
		                 </tbody>
                   </table>
               </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/Dr4g0na/Desktop/project/laravel_inventory2/resources/views/products/detail.blade.php ENDPATH**/ ?>