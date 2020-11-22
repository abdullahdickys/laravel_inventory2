@extends('layouts.master')
 
@section('content')

<div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Light table</h3>
			      <a class="btn btn-primary" href="{{ route('suppliers.create') }}" >add Data</a>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">#</th>
                    <th scope="col" class="sort" data-sort="budget">Nama</th>
                    <th scope="col" class="sort" data-sort="status">No Telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">actions</th>
                  </tr>
                </thead>
                <tbody class="list">
				@foreach($suppliers as $e=>$dt)
					<tr>
						<td>{{ $e+1 }}</td>
						<td>{{ $dt->nama }}</td>
						<td>{{ $dt->no_telp }}</td>
						<td>{{ $dt->alamat }}</td>
						<td><button type="button" class="btn btn-warning">edit</button>|<button type="button" class="btn btn-danger">delete</button></td>
					</tr>               						
				@endforeach
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
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
            </div>
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
