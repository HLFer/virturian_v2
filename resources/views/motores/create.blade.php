
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12"> 

                <div class="card green darken-4 sub-menu" align="center"><h4>Painel de Controle | Cadastro</h4></div>
<h2>Cadastrar novo motor</h2>

     
    <form action="/motores" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Nome| Modelo Motor</label>
        <input type="text" class="form-control" id="modelo"  name="modelo">

        <label>Número de Polos</label>
                          <select class="browser-default" name="numero_de_polos">
                            <option value="" disabled selected>Escolha a quantidade de polos do Motor</option>
                            <option value="2">2 Polos</option>
                            <option value="4">4 Polos</option>
                            <option value="6">6 Polos</option>
                            <option value="8">8 Polos</option>
                          </select>

        <label>Tensão de Rede</label>
                          <select class="browser-default" name="tensao_de_rede_v">
                            <option value="" disabled selected>Escolha a Tensão(V) de Rede do Motor</option>
                            <option value="220">220Volts</option>
                            <option value="380">380Volts</option>
                            <option value="440">440Volts</option>
                          </select>

        <label>Regime de serviço</label>
                          <select class="browser-default" name="regime_de_servico">
                            <option value="" disabled selected>Escolha o Regime de Serviço</option>
                            <option value="S1">Regime S1</option>
                            <option value="S2">Regime S2</option>
                            <option value="S3">Regime S3</option>
                            <option value="S4">Regime S4</option>
                            <option value="S5">Regime S5</option>
                          </select>

        <label for="title">Corrente Nominal(A)</label>
        <input type="number" class="form-control" id="corrente_nominal_a"  name="corrente_nominal_a">

        <label for="title">Potência Nominal(W)</label>
        <input type="number" class="form-control" id="potencia_nominal_w"  name="potencia_nominal_w">

        <label for="title">Torque Máximo(Nm)</label>
        <input type="number" class="form-control" id="torque_maximo_nm"  name="torque_maximo_nm">

      </div>

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <div align="center">
      <button type="submit" class="btn green darken-4">Cadastrar</button><br><br>
      <a class="btn btn-warning" href="/motores">Voltar</a>
      </div>
    </form>

   </div> 
   </div> 
   </div> 

@endsection