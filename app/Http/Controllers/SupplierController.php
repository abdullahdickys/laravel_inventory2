<?php

namespace App\Http\Controllers;

use App\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            // $title = 'Master supplier';
            $suppliers = \App\supplier::all();
             // dd($suppliers->all()); 
            return view('suppliers.index',compact('suppliers'));	

            // $suppliers = supplier::latest()->paginate(5);
            // return view('suppliers.index', compact('suppliers'))
            // ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $title = 'tambah data';
        return View('suppliers/create');
        /* return view('suppliers.create',compact('title')); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        		'nama_supplier' => 'required'],
        		['no_telp' => 'required'],
        		['alamat' => 'required'
        ]);

        $suppliers = new supplier;
        $suppliers->nama_supplier = $request['nama_supplier'];
        $suppliers->no_telp = $request['no_telp'];
        $suppliers->alamat = $request['alamat'];
        $suppliers->save();

        return redirect()
            ->route('suppliers.index')
            ->with('success','Data create Succesful');
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
        $suppliers = supplier::find($id);
        return view('suppliers.edit',['suppliers'=>$suppliers]);
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
        $this->validate($request, [
                'nama_supplier' => 'required'],
                ['no_telp' => 'required'],
                ['alamat' => 'required'
        ]);

        $suppliers = supplier::find($id);
        $suppliers->nama_supplier = $request['nama_supplier'];
        $suppliers->no_telp = $request['no_telp'];
        $suppliers->alamat = $request['alamat'];
        $suppliers->update();

        return redirect()
            ->route('suppliers.index')
            ->with('success','Data update Succesfull');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suppliers = supplier::find($id);
        $suppliers->delete();
        // supplier::where('id',$id)->delete();

        return redirect()
            ->route('suppliers.index')
            ->with('success','Data delete Succesfull');   
    }
}
