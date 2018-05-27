
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12">      
    
    <div class="card light-blue darken-4 sub-menu" align="center"><h4>Painel de Controle | Edição</h4></div>
                                        
                      <h3 align="center">Editar Motor Id: {{$motores->id}}</h3>

                      <form action="/motores/{{ $motores->id }}" method="POST">
                          <h6 class="atual-red-edit">Nome | Modelo atual: {{ $motores->modelo }}</h6>
                          <label>Nome | Modelo do Motor</label>
                          <input type="text" name="modelo" value="" placeholder="Nome/Modelo">

                          {{ ($errors->has('modelo')) ? $errors->first('modelo') : '' }}

                          
                          <label>Número de Polos</label>
                          <h6 class="atual-red-edit">Número de polos atual: {{ $motores->numero_de_polos }}</h6>
                          <select class="browser-default" name="numero_de_polos">
                            <option value="" disabled selected>Escolha a quantidade de polos do Motor</option>
                            <option value="2">2 Polos</option>
                            <option value="4">4 Polos</option>
                            <option value="6">6 Polos</option>
                            <option value="8">8 Polos</option>
                          </select>
                          
                          {{ ($errors->has('numero_de_polos')) ? $errors->first('numero_de_polos') : '' }}
                          <hr>     

                          <label>Tensão de Rede</label>
                          <h6 class="atual-red-edit">Tensão(V) de Rede atual: {{ $motores->tensao_de_rede_v }}</h6>
                          <select class="browser-default" name="tensao_de_rede_v">
                            <option value="" disabled selected>Escolha a Tensão(V) de Rede do Motor</option>
                            <option value="220">220Volts</option>
                            <option value="380">380Volts</option>
                            <option value="440">440Volts</option>
                          </select>
                          {{ ($errors->has('tensao_de_rede_v')) ? $errors->first('tensao_de_rede_v') : '' }}
                          <hr> 

                          <label>Regime de serviço</label>
                          <h6 class="atual-red-edit">Regime de serviço atual: {{ $motores->regime_de_servico }}</h6>
                          <select class="browser-default" name="regime_de_servico">
                            <option value="" disabled selected>Escolha o Regime de Serviço</option>
                            <option value="S1">Regime S1</option>
                            <option value="S2">Regime S2</option>
                            <option value="S3">Regime S3</option>
                            <option value="S4">Regime S4</option>
                            <option value="S5">Regime S5</option>
                          </select>
                          {{ ($errors->has('regime_de_servico')) ? $errors->first('regime_de_servico') : '' }}

                          <h6 class="atual-red-edit">Corrente nominal atual: {{ $motores->corrente_nominal_a }}A</h6>
                          <input type="number" name="corrente_nominal_a" value="">
                          {{ ($errors->has('corrente_nominal_a')) ? $errors->first('corrente_nominal_a') : '' }}
                          
                          <h6 class="atual-red-edit">Potência nominal atual: {{ $motores->potencia_nominal_w }}W</h6>
                          <input type="number" name="potencia_nominal_w" value="">
                          {{ ($errors->has('potencia_nominal_w')) ? $errors->first('potencia_nominal_w') : '' }}
                          
                          <h6 class="atual-red-edit">Torque máximo atual: {{ $motores->torque_maximo_nm }}Nm</h6>
                          <input type="number" name="torque_maximo_nm" value="">
                          {{ ($errors->has('torque_maximo_nm')) ? $errors->first('torque_maximo_nm') : '' }}

                          <div align="center">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn light-blue darken-4" name="name" value="Editar"><br><br>
                            <a class="btn btn-warning" href="/motores">Voltar</a>
                          </div>
                      </form>
    </div>
  </div>
</div>
@endsection