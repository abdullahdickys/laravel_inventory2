@extends('layouts.master')
 
@section('content')
 
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
				    <td>{!!DNS1D::getBarcodeHTML($dt->kode, 'S25')!!}</td>
   <!-- <div>{!!DNS1D::getBarcodeHTML($dt->kode, 'S25')!!}</div></br> -->
            <th><b>Nama Product</b></th>
            <td>:</td>
            <td>{{$dt->nama_product}}</td>
		    	</tr>
                       <tr>
                           <th>Suppliers</th>
                           <td>:</td>
                           <td>{{ $dt->supplier->nama_supplier }}</td>
                            <th><b>kode</b></th>
                            <td>:</td>
                            <td>{{$dt->kode}}</td>
                       </tr>
                       <tr>
                           <th>Stock</th>
                           <td>:</td>
                           <td>{{ $dt->stock }}</td>
                           <th><b>Minimal Stock</b></th>
                           <td>:</td>
                           <td>{{$dt->minimal_stock}}</td>
                       </tr>
                       <tr>
                           <th>Created At</th>
                           <td>:</td>
                           <td>{{ $dt->created_at }}</td>
                           <th><b>Update At</b></th>
                           <td>:</td>
                           <td>{{$dt->updated_at}}</td>
                       </tr>
                       <tr>
                           <th>Harga</th>
                           <td>:</td>
                           <td>{{ number_format($dt->harga,0) }}</td>
                       </tr>
		                 </tbody>
                   </table>
               </div>
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
