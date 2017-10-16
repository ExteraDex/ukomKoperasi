<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pinjaman;
use App\Anggota;
use App\petugas;

class CariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $query = $request->get('q');

        $pinjaman = pinjaman::where('nama_pinjaman', 'LIKE', '%' . $query . '%')->orWhere('ket', 'LIKE', '%' . $query . '%')->paginate(10);

        $anggota = Anggota::where('nama', 'LIKE', '%' . $query . '%')->paginate(10);

        $petugas = petugas::where('nama', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('result', compact('query', 'anggota', 'petugas', 'pinjaman'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
