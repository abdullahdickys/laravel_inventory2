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
            /* dd($suppliers->all()); */
            return view('suppliers.index',compact('suppliers'));	 
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
        		'nama' => 'required'],
        		['no_telp' => 'required'],
        		['alamat' => 'required'
        ]);

        $suppliers = new supplier;
        $suppliers->nama = $request['nama'];
        $suppliers->no_telp = $request['no_telp'];
        $suppliers->alamat = $request['alamat'];
        $suppliers->save();

        return redirect()
            ->route('suppliers.index')
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
    public function update(Request $request, supplier $id)
    {
        $this->validate($request, [
                'nama' => 'required'],
                ['no_telp' => 'required'],
                ['alamat' => 'required'
        ]);

        $suppliers = new supplier;
        $suppliers->nama = $request['nama'];
        $suppliers->no_telp = $request['no_telp'];
        $suppliers->alamat = $request['alamat'];
        $suppliers->save();

        return redirect()
            ->route('suppliers.index')
            ->with('success','Data create Succesfull');   
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

        return redirect()
            ->route('suppliers.index')
            ->with('success','Data create Succesfull');   
    }
}
