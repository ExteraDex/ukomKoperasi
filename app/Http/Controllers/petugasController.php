<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petugas;

class petugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        $vars = petugas::all();
        return view('ptgs_kprsi.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ptgs_kprsi.create');
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
           'nama' => 'required', 'alamat' => 'required', 'no_tlp' => 'required', 'tmp_lhr' => 'required', 'tgl_lhr' => 'required', 'ket' => 'required',
        ]);
        
        $var = new petugas;
        $var->nama = $request->nama;
        $var->alamat = $request->alamat;
        $var->no_tlp = $request->no_tlp;
        $var->tmp_lhr = $request->tmp_lhr;
        $var->tgl_lhr = $request->tgl_lhr;
        $var->ket = $request->ket;
        $var->save();
        return redirect('petugas');
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
        $var = petugas::find($id);
        if(!$var){
            abort(404);
        }
        
        return view('ptgs_kprsi.edit')->with('var', $var);
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
           'nama' => 'required', 'alamat' => 'required', 'no_tlp' => 'required', 'tmp_lhr' => 'required', 'tgl_lhr' => 'required', 'ket' => 'required',
        ]);
        
        $var = petugas::find($id);
        $var->nama = $request->nama;
        $var->alamat = $request->alamat;
        $var->no_tlp = $request->no_tlp;
        $var->tmp_lhr = $request->tmp_lhr;
        $var->tgl_lhr = $request->tgl_lhr;
        $var->ket = $request->ket;
        $var ->save();
        return redirect('petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = petugas::find($id);
        $var ->delete();
        return redirect('petugas');
    }
}
