<?php

namespace App\Http\Controllers;

use App\kategori;
use Illuminate\Http\Request;

use App\Http\Requests;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
        $this->middleware('role:member');
    }
    public function index()
    {
        $vars = kategori::all();
        return view('kategori.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
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
           'nama_pinjaman' => 'required',
        ]);
        
        $var = new kategori;
        $var->nama_pinjaman = $request->nama_pinjaman;
        $var->save();
        return redirect('kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = kategori::find($id);
        if(!$var){
            abort(404);
        }
        
        return view('kategori.edit')->with('var', $var);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
           'nama_pinjaman' => 'required', 
        ]);
        
        $var = kategori::find($id);
        $var ->nama_pinjaman = $request->nama_pinjaman;
        $var ->save();
        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = kategori::find($id);
        $var ->delete();
        return redirect('kategori');
    }
}
