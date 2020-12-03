@extends('layouts.master')
 
@section('content')
@if ($message = Session::get('success'))
  <div class="alert alert-success mt-3 pb-0">
    <p>{{ $message }}</p>
  </div>
@endif
<br>

<div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Data</h3>
			      <a class="btn btn-primary" href="{{ route('products.create') }}" >add Data</a>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">#</th>
                    <th scope="col" class="sort" data-sort="budget">Supplier</th>
                    <th scope="col" class="sort" data-sort="status">Nama</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Minimal stock</th>
                    <th scope="col">Harga</th>
                    <th scope="col">actions</th>
                  </tr>
                </thead>
                <tbody class="list">
        				@foreach($product as $e=>$dt)
        					<tr>
        						<td>{{ $e+1 }}</td>
        						<td>{{ $dt->supplier->nama_supplier }}</td>
                    <td>{{ $dt->nama_product }}</td>
        						<td>{{ $dt->kode }}</td>
        						<td>{{ $dt->stock }}</td>
                    <td>{{ $dt->minimal_stock }}</td>
                    <td>{{ $dt->harga }}</td>
        						<td>
                      <form action="{{ route('products.destroy',$dt->id) }}" method="POST">
   
<!--                           <a class="btn btn-info" href="{{ route('products.show',$dt->id) }}">Show</a>
 -->          
                          <a class="btn btn-primary" href="{{ route('products.edit',$dt->id) }}">Edit</a>
         
                          @csrf
                          @method('DELETE')
            
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
        					</tr>               						
        				@endforeach
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


@endsection
@section('scripts')
 
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
 
@endsection
