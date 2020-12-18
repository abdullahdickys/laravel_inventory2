@extends('layouts.master')
 
@section('content')
 
@if ($errors->any())
  <div class="alert alert-danger pb-0">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
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
               
				<form role="form" method="post" action="{{ route('suppliers.update', $suppliers->id) }}">
          @csrf
            @method('PUT')
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Supplier</label>
                  <input type="text" name="nama_supplier" value="{{ $suppliers['nama_supplier'] }}" class="form-control" id="exampleInputEmail1" placeholder="Nama Supplier">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No Telp</label>
                  <input type="number" name="no_telp" value="{{ $suppliers['no_telp'] }}" class="form-control" id="exampleInputPassword1" placeholder="No Telp">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Alamat</label>
                  <textarea type="text" name="alamat" class="form-control" rows="5" placeholder="Alamat">{{ $suppliers['alamat'] }}</textarea>
                </div>
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">update</button>
              </div>
            </form>
            </div>
        </div>
    </div>
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

