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
               
        <form role="form" method="post" action="{{ route('products.update', $dt->id) }}">
         @csrf
            @method('PUT')
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Supplier</label>
                  <select class="form-control select2" name="supplier_id">
                    @foreach($suppliers as $sp)
                      <option value="{{ $sp->id }}" {{ ($dt->nama_supplier == $sp->id) ? 'selected' : '' }}>{{ $sp->nama_supplier }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">nama product</label>
                  <input type="text" name="nama_product" class="form-control" id="exampleInputPassword1" placeholder="nama product" value="{{ $dt->nama_product }}"> 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">kode</label>
                  <input type="text" name="kode" class="form-control" value="{{ $dt->kode }}" id="exampleInputPassword1" placeholder="kode">
                </div>
               <!--  <div class="form-group">
                  <label for="exampleInputPassword1">stock</label>
                  <input type="number" name="stock" class="form-control" id="exampleInputPassword1" placeholder="stock product" value="{{ $dt->stock }}">
                </div> -->
                <div class="form-group">
                  <label for="exampleInputPassword1">minimal stock</label>
                  <input type="number" name="minimal_stock" class="form-control" id="exampleInputPassword1" placeholder="minimal stock" value="{{ $dt->minimal_stock }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Harga Beli Product</label>
                  <input type="number" name="beli" class="form-control" id="exampleInputPassword1" placeholder="harga beli" value="{{ $dt->beli }}">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Harga Jual Product</label>
                  <input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="harga jual" value="{{ $dt->harga }}">
                </div>
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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
