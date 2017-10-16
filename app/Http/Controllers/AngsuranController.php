<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Angsuran;

class AngsuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
        $this->middleware('role:member');
    }
    
    public function index()
    {
         $vars = Angsuran::all();
         return view('angsuran.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('angsuran.create');
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

           'kategori_id' => 'required', 
           'anggota_id' => 'required', 
           'tgl_pembayaran' => 'required', 
           'angsuran_ke' => 'required', 
           'besar_angsuran' => 'required',
           'ket' => 'required', 

        ]);
        
        $var = new Angsuran;

        $var->kategori_id = $request->kategori_id;
        $var->anggota_id= $request->anggota_id;
        $var->tgl_pembayaran= $request->tgl_pembayaran;
        $var->angsuran_ke = $request->angsuran_ke;
        $var->besar_angsuran = $request->besar_angsuran;
        $var->ket = $request->ket;
        $var->save();
        return redirect('angsuran');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//         return view('angsuran.singgle', ['angsuran' => Angsuran::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $var = Angsuran::find($id);
        if(!$var){
            abort(404);
        }
        
        return view('angsuran.edit')->with('var', $var);
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

           'kategori_id' => 'required', 
           'anggota_id' => 'required', 
           'tgl_pembayaran' => 'required', 
           'angsuran_ke' => 'required', 
           'besar_angsuran' => 'required',
           'ket' => 'required', 

        ]);
        
        $var = Angsuran::find($id);
        $var->kategori_id = $request->kategori_id;
        $var->anggota_id= $request->anggota_id;
        $var->tgl_pembayaran= $request->tgl_pembayaran;
        $var->angsuran_ke = $request->angsuran_ke;
        $var->besar_angsuran = $request->besar_angsuran;
        $var->ket = $request->ket;
        $var->save();
        return redirect('angsuran');
    }

        
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = Angsuran::find($id);
        $var ->delete();
        return redirect('angsuran');
    }
}
