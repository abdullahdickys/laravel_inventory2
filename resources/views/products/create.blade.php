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
               
				<form role="form" method="post" action="{{ route('products.store') }}">
         @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Supplier</label>
                  <select class="form-control select2" name="supplier_id">
                    @foreach($suppliers as $sp)
                      <option value="{{ $sp->id }}">{{ $sp->nama_supplier }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">nama product</label>
                  <input type="text" name="nama_product" class="form-control" id="exampleInputPassword1" placeholder="nama product"> 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">kode</label>
                  <input type="text" name="kode" class="form-control" value="{{ $code }}" id="exampleInputPassword1" placeholder="kode">
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
                  <label for="exampleInputPassword1">harga</label>
                  <input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="harga product">
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

