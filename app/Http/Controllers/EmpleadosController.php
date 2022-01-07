<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Empleados;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleados::with('Areas')->get();
        return view('empleados.index')->with(['empleados'=>$empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Areas::all();
        return view('empleados.crearEmpleado')->with(['areas'=>$areas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            //guardar Empleado
            $agregar = new Empleados();
            $agregar->nombre = request('nombre');
            $agregar->email = request('email');
            $agregar->sexo = request('sexo');
            $agregar->boletin = (int)request('boletin');
            $agregar->descripcion = request('descripcion');
            $agregar->area_id = request('area_id');
            $agregar->save();
        }catch(QueryException $queryException){
            return response()->json(['msg'=>$queryException->getMessage()],500);
        }
            return response()->json(['msg'=>'Se ha Guardao el Empleado']);
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
