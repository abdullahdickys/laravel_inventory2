 
<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('success')): ?>
  <div class="alert alert-success mt-3 pb-0">
    <p><?php echo e($message); ?></p>
  </div>
<?php endif; ?>
<br>

<div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h2 class="mb-0">Products Data</h2>
			      <a class="btn btn-primary" href="<?php echo e(route('products.create')); ?>" >add Data</a>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">#</th>
                    <th scope="col" class="sort" data-sort="budget">Supplier</th>
                    <th scope="col" class="sort" data-sort="status">Product</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Minimal stock</th>
                    <th scope="col">Harga</th>
                    <th scope="col">actions</th>
                  </tr>
                </thead>
                <tbody class="list">
        				<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e=>$dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        					<tr>
        						<td><?php echo e($e+1); ?></td>
        						<td><?php echo e($dt->supplier->nama_supplier); ?></td>
                    <td><?php echo e($dt->nama_product); ?></td>
        						<td><?php echo e($dt->kode); ?></td>
        						<td><?php echo e($dt->stock); ?></td>
                    <td><?php echo e($dt->minimal_stock); ?></td>
                    <td><?php echo e($dt->harga); ?></td>
        						<td>
                      <form action="<?php echo e(route('products.destroy',$dt->id)); ?>" method="POST">
   
                          <a class="btn btn-info" href="<?php echo e(route('products.detail',$dt->id)); ?>">Detail</a>

                          <a class="btn btn-primary" href="<?php echo e(route('products.edit',$dt->id)); ?>">Edit</a>
         
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('DELETE'); ?>
            
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
        					</tr>               						
        				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <!-- <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div> -->
          </div>
        </div>
      </div>
     
    
      <!-- Footer -->
      
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dr4g0na/Desktop/project/laravel_inventory2/resources/views/products/index.blade.php ENDPATH**/ ?>