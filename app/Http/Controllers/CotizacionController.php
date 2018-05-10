<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cotization;
use App\Client;
use App\Paper;
use App\Work;
use Laracasts\Flash\Flash;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizacion = Cotization::orderBy('id','ASC')->paginate(5);
        return view('cotizacion.index')->with('cotizacion',$cotizacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $clientes = [0 => 'Selecione'] + Client::lists('nombrecomercial','id')->all();
        $trabajos = [0 => 'Selecione'] + Work::lists('trabajo','id_trabajo')->all();
        $papeles = [0 => 'Selecione'] + Paper::lists('papel','id_papel')->all();
      /*$papeles = Paper::lists('papel','id_papel')->all();
        $papeles = [0 => 'Selecione'] + $papeles;*/
        return view('cotizacion.create',compact('clientes','trabajos','papeles'));
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
