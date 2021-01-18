@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        {{-- <h4>{{ $title }}</h4> --}}
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
                      <input type="text" name="document_no" value="{{ $docmo }}" class="form-control" id="exampleInputEmail1" placeholder="Document Number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Supplier</label>
                      <select name="nama_supplier" class="form-control select2">
                        <option selected="" disabled="">Pilih Supplier</option>
                        @foreach($supplier as $sp)
                          <option value="{{ $sp->id }}">{{ $sp->nama_supplier }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>

            @if(isset($product))   
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
                                @foreach($product as $e=>$pd)
                                   <tr>
                                       <td><input type="checkbox" name="is_po" value="{{ $pd->id }}"></td>
                                       <td>{{ $e+1 }}</td>
                                       <td>{{ $pd->nama_product }}</td>
                                       <td>{{ number_format($pd->beli,0) }}</td>
                                       <td><input type="number" value="0" class="form-control" name="qty[]"></td>
                                   </tr>
                                @endforeach
                               </tbody>
                           </table>
                       </div>
                   </div>
                @endif
        </div>
    </div>
</div>
 
@endsection
 
@section('scripts')
 
<script language="JavaScript" type="text/javascript">
    $(document).ready(function(){
      
        $("select[name='nama_supplier']").change(function(e){
          let id_supplier = $(this).val();
          let url = "{{ url('po/products') }}"+'/'+id_supplier;

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
 
@endsection
