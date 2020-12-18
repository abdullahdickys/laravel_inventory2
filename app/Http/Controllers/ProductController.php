<?php

namespace App\Http\Controllers;

use App\product;
use App\supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = \App\product::all();
        // $product = product::leftJoin('supplier','supplier.id','=','product.id')->get();
        // dd($product->all());
        // return view('products.index',['product'=>$product,'no'=>0]);
        // var_dump($data);exit;
        // $data = \App\product::with('get_supplier')->get();  
        $datas = \App\supplier::all();
        return view('products.index',compact('product','datas'));
    }

    public function detail($id)
    {
        /* $dt = \App\product::all(); */
        $dt = \App\product::find($id);
        //dd($dt->all());
        return view('products.detail',compact('dt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = \App\supplier::all();
        $code = rand();
        /* dd($products->all()); */
        return view('products.create',compact('suppliers','code'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'supplier_id' => 'required',
                'nama_product' => 'required',
                'kode' => 'required',
                'stock' => 'required',
                'minimal_stock' => 'required',
                'beli' => 'required',
                'harga' => 'required'
            ]);

        // $data = $request->all();
        // product::create($request->except('_token'));
        // \App\product::insert($data);
        // dd($data);
        $product = new product;
        $product->supplier_id = $request['supplier_id'];
        $product->nama_product = $request['nama_product'];
        $product->kode = $request['kode'];
        $product->stock = $request['stock'];
        $product->minimal_stock = $request['minimal_stock'];
        $product->beli = $request['beli'];
        $product->harga = $request['harga'];
        $product->save();

        return redirect()
            ->route('products.index')
            ->with('success','Data create Succesfull');
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    // public function edit(supplier $supplier)
    public function edit($id)
    {
        $suppliers = supplier::get();
        $dt = product::find($id);
        return view('products.edit',compact('suppliers','dt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,   [
                'supplier_id' => 'required',
                'nama_product' => 'required',
                'kode' => 'required',
                /* 'stock' => 'required', */
                'minimal_stock' => 'required',
                'beli' => 'required',
                'harga' => 'required'
            ]);
        // $data = product::create($request->except('_token'));
        // \App\product::where('id',$id)->update($data);


        $product = product::find($id);
        $product->supplier_id = $request['supplier_id'];
        $product->nama_product = $request['nama_product'];
        $product->kode = $request['kode'];
        // $product->stock = $request['stock'];
        $product->minimal_stock = $request['minimal_stock'];
        $product->beli = $request['beli'];
        $product->harga = $request['harga'];
        $product->update();

        return redirect()
            ->route('products.index')
            ->with('success','Data edit Succesfull');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $products = supplier::find($id);
        product::where('id',$id)->delete();

        return redirect()
            ->route('products.index')
            ->with('success','Data delete Succesfull');   
    }
}
