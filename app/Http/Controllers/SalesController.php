<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Produk;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sales::with('produk');
        $data = Sales::latest()->paginate(5);

        return view('sales.vsales', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::all();
        return view('sales.addsales', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required',
            'nama_pembeli' => 'required',
            'jumlah' => 'required'
        ]);

        Sales::create($request->all());

        return redirect('/sales')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales $sales, $id)
    {
        $sales = Sales::findOrFail($id);
        $produk = Produk::all();
        return view('sales.editsales', compact('sales', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sales, $id)
    {
        $request->validate([
            'produk_id' => 'required',
            'nama_pembeli' => 'required',
            'jumlah' => 'required'
        ]);

        $sales = Sales::findOrFail($id);
        $sales->update($request->all());

        return redirect('/sales')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales, $id)
    {
        $sales = Sales::findOrFail($id);
        $sales->delete();
        return redirect('/sales')->with('success', 'Data Berhasil Dihapus');
    }
}
