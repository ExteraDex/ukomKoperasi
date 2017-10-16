<?php

namespace App\Http\Controllers;

use App\detail;
use Illuminate\Http\Request;

use App\Http\Requests;

class DetailController extends Controller
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
         $vars = detail::all();
         return view('detail.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detail.create');
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
           'tgl_jatuh_tempo' => 'required', 'bsr_angsuran' => 'required', 'ket' => 'required', 
        ]);
        
        $var = new detail;
        $var->tgl_jatuh_tempo = $request->tgl_jatuh_tempo;
        $var->bsr_angsuran = $request->bsr_angsuran;
        $var->ket = $request->ket;
        $var->save();
        return redirect('detail');
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
        $var = detail::find($id);
        if(!$var){
            abort(404);
        }
        
        return view('detail.edit')->with('var', $var);
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
           'tgl_jatuh_tempo' => 'required', 'bsr_angsuran' => 'required', 'ket' => 'required',
        ]);
        
        $var = detail::find($id);
        $var ->tgl_jatuh_tempo = $request->tgl_jatuh_tempo;
        $var ->bsr_angsuran = $request->bsr_angsuran;
        $var ->ket = $request->ket;
        $var ->save();
        return redirect('detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = detail::find($id);
        $var ->delete();
        return redirect('detail');
    }
}
