 
<?php $__env->startSection('content'); ?>
 
<div class="row">
    <div class="col-md-12">
        <h4><?php echo e($title); ?></h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
						<div class="box-body">
								<div class="table-responsive">
								    <table class="table">
								    	<thead>
								    		<tr>
								    			<th>#</th>
								    			<th>nama</th>
								    			<th>no telp</th>
								    			<th>alamat</th>
								    		</tr>
								    	</thead>
								    </table>
								<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e=>$dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($e+1); ?></td>
									<td><?php echo e($dt->nama); ?></td>
									<td><?php echo e($dt->no_telp); ?></td>
									<td><?php echo e($dt->alamat); ?></td>
								</tr>               						
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
            </div>
        </div>
    </div>
</div>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dr4g0na/Desktop/project/laravel_coba/resources/views/supplier/index.blade.php ENDPATH**/ ?>