<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pinjaman;
use App\Anggota;
use App\Angsuran;
use App\User;

class pinjamanController extends Controller
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
         $x = pinjaman::all();
         return view('pinjaman.index')->with('var', $x);
    }
    public function search(Request $request)
    {
        $query = $request->get('q');
        $hasil = pinjaman::where('nama_pinjaman', 'LIKE', '%' . $query . '%')->orWhere('ket', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('result', compact('hasil', 'query', 'link'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota = Anggota::all();
        $angsuran = Angsuran::all();
        return view('pinjaman.create', compact(['anggota',$anggota], ['angsuran',$angsuran]));
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
           'besar_pinjaman' => 'required',
           'tgl_pengajuan_pinjaman' => 'required', 
           'tgl_acc_pinjaman' => 'required', 
           'tgl_pinjaman' => 'required', 
           'tgl_pelunasan' => 'required', 
           'anggota_id' => 'required',
           'angsuran_id' => 'required',
           'ket' => 'required', 
        ]);
        
        $var = new pinjaman;
        $var->id;

        $var->nama_pinjaman = $request->nama_pinjaman;
        $var->besar_pinjaman = $request->besar_pinjaman;
        $var->tgl_pengajuan_pinjaman = $request->tgl_pengajuan_pinjaman;
        $var->tgl_acc_pinjaman = $request->tgl_acc_pinjaman;
        $var->tgl_pinjaman = $request->tgl_pinjaman;
        $var->tgl_pelunasan = $request->tgl_pelunasan;
        $var->anggota_id = $request->anggota_id;
        $var->angsuran_id = $request->angsuran_id;
        $var->ket = $request->ket;

        $var->save();
        return redirect('pinjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = pinjaman::find($id);

        if(!$var){
            abort(404);
        }

        return view('pinjaman.single')->with('var', $var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $moe = pinjaman::find($id);
        $senpai = Anggota::all();
        if(!$moe){
            abort(404);
        }
        
        return view('pinjaman')->with('ea', $moe)->with('anggota', $senpai);
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
           'besar_pinjaman' => 'required',
           'tgl_pengajuan_pinjaman' => 'required', 
           'tgl_acc_pinjaman' => 'required', 
           'tgl_pinjaman' => 'required', 
           'tgl_pelunasan' => 'required', 
           'anggota_id' => 'required',
           'angsuran_id' => 'required',
           'ket' => 'required', 
        ]);
        
        $var = pinjaman::find($id);
        
        $var->id;

        $var->nama_pinjaman = $request->nama_pinjaman;
        $var->besar_pinjaman = $request->besar_pinjaman;
        $var->tgl_pengajuan_pinjaman = $request->tgl_pengajuan_pinjaman;
        $var->tgl_acc_pinjaman = $request->tgl_acc_pinjaman;
        $var->tgl_pinjaman = $request->tgl_pinjaman;
        $var->tgl_pelunasan = $request->tgl_pelunasan;
        $var->anggota_id = $request->anggota_id;
        $var->angsuran_id = $request->angsuran_id;
        $var->ket = $request->ket;

        $var ->save();
        return redirect('pinjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = pinjaman::find($id);
        $var ->delete();
        return redirect('pinjaman');
    }
}
