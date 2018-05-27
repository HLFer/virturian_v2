<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Motores;

class MotoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motores = Motores::all();
        return view('motores.index',['todosmotores' => $motores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('motores.create');
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
            'modelo' => 'required',
            'numero_de_polos' => 'required',
            'tensao_de_rede_v' => 'required',
            'regime_de_servico' => 'required',
            'corrente_nominal_a' => 'required',
            'potencia_nominal_w' => 'required',
            'torque_maximo_nm' => 'required'
        ]);
        
        $motores = new Motores;

        $motores->modelo = $request->modelo;
        $motores->numero_de_polos = $request->numero_de_polos;
        $motores->tensao_de_rede_v = $request->tensao_de_rede_v;
        $motores->regime_de_servico = $request->regime_de_servico;
        $motores->corrente_nominal_a = $request->corrente_nominal_a;
        $motores->potencia_nominal_w = $request->potencia_nominal_w;
        $motores->torque_maximo_nm = $request->torque_maximo_nm;
    
        $motores->save();

        return redirect('/motores')->with('message', 'Motor criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motores = Motores::find($id);
        return view('motores.show',compact('motores',$motores));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motores = Motores::find($id);
        if(empty($motores)){
            abort(404);
        }
        return view('motores.edit', compact('motores', $motores));
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
            'modelo' => 'required',
            'numero_de_polos' => 'required',
            'tensao_de_rede_v' => 'required',
            'regime_de_servico' => 'required',
            'corrente_nominal_a' => 'required',
            'potencia_nominal_w' => 'required',
            'torque_maximo_nm' => 'required'
        ]);
        
        $motores = Motores::find($id);

        $motores->modelo = $request->modelo;
        $motores->numero_de_polos = $request->numero_de_polos;
        $motores->tensao_de_rede_v = $request->tensao_de_rede_v;
        $motores->regime_de_servico = $request->regime_de_servico;
        $motores->corrente_nominal_a = $request->corrente_nominal_a;
        $motores->potencia_nominal_w = $request->potencia_nominal_w;
        $motores->torque_maximo_nm = $request->torque_maximo_nm;
    
        $motores->save();    
        $request->session()->flash('message', 'Motor editado com sucesso!');   
        return redirect('motores');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $motores = Motores::find($id);
            $motores->delete();
            return redirect('motores')->with('message', "Motor: $motores->modelo | Num. Identificação: $motores->id | DELETADO com sucesso!");   
    }
}
