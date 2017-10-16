<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\simpanan;

class simpananController extends Controller
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
         
         $vars = simpanan::all();
         return view('simpanan.index',['var' => $vars]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('simpanan.create');
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
           'nm_simpanan' => 'required', 'anggota_id' => 'required', 'tgl_simpanan' => 'required', 'besar_simpanan' => 'required', 'ket' => 'required',
        ]);
        
        $var = new simpanan;
        $var->nm_simpanan = $request->nm_simpanan;
        $var->anggota_id = $request->anggota_id;
        $var->tgl_simpanan = $request->tgl_simpanan;
        $var->besar_simpanan = $request->besar_simpanan;
        $var->ket = $request->ket;
        $var->save();
        return redirect('simpanan');
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
        $var = simpanan::find($id);
        if(!$var){
            abort(404);
        }
        
        return view('simpanan.edit')->with('var', $var);
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
           'nm_simpanan' => 'required', 'anggota_id' => 'required', 'tgl_simpanan' => 'required', 'besar_simpanan' => 'required', 'ket' => 'required',
        ]);
        
        $var = simpanan::find($id);
        $var->nm_simpanan = $request->nm_simpanan;
        $var->anggota_id = $request->anggota_id;
        $var->tgl_simpanan = $request->tgl_simpanan;
        $var->besar_simpanan = $request->besar_simpanan;
        $var->ket = $request->ket;
        $var ->save();
        return redirect('simpanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = simpanan::find($id);
        $var ->delete();
        return redirect('simpanan');
    }
}
