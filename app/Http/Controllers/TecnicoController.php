<?php

namespace App\Http\Controllers;

use App\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnicos = Tecnico::all();

        return view('tecnicos.index', compact('tecnicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tecnicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required',
            'dni' => 'required|unique:clientes',
            'cuil' => 'required|unique:clientes',
            'telefono' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email|unique:clientes',
        ]);

        $tecnico = new Tecnico($data);
        $tecnico->notas_particulares = $request->notas_particulares;
        $tecnico->save();
        return redirect(route('tecnicos.index'))->with('success', 'Técnico '.$tecnico->nombres.' '.$tecnico->apellidos.' creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function show(Tecnico $tecnico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function edit(Tecnico $tecnico)
    {
        return view('tecnicos.edit', compact('tecnico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tecnico $tecnico)
    {
        $data = request()->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required',
            'dni' => 'required|unique:clientes,id,'.$tecnico->id,
            'cuil' => 'required|unique:clientes,id,'.$tecnico->id,
            'telefono' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email|unique:clientes,id,'.$tecnico->id,
        ]);

        $tecnico->nombres = $request->nombres;
        $tecnico->apellidos = $request->apellidos;
        $tecnico->fecha_nacimiento = $request->fecha_nacimiento;
        $tecnico->sexo = $request->sexo;
        $tecnico->dni = $request->dni;
        $tecnico->cuil = $request->cuil;
        $tecnico->telefono = $request->telefono;
        $tecnico->email = $request->email;
        $tecnico->notas_particulares = $request->notas_particulares;
        $tecnico->update();
        return redirect(route('tecnicos.index'))->with('success', 'Técnico '.$tecnico->nombres.' '.$tecnico->apellidos.' modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tecnico $tecnico)
    {
        //
    }
}
