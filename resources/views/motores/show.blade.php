@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row" align="center">
    <div class="col s12"> 
                
            <div class="card orange darken-4 sub-menu"><h4>Painel de Controle | Detalhes</h4></div>
            <div align="center">

</div>
    <div class="jumbotron text-center">
        <p class="flow-text">
            <strong>Identificação do Motor:</strong> {{ $motores->id }}<br>
            <strong>Modelo do Motor:</strong> {{ $motores->modelo }}<br>
            <strong>Numero de Polos:</strong> {{ $motores->numero_de_polos }}<br>
            <strong>Tensão de rede(V):</strong> {{ $motores->tensao_de_rede_v }}<br>
            <strong>Regime de Serviço:</strong> {{ $motores->regime_de_servico }}<br>
            <strong>Corrente Nominal(A):</strong> {{ $motores->corrente_nominal_a }}<br>
            <strong>Potência Nominal(W):</strong> {{ $motores->potencia_nominal_w }}<br>
            <strong>Torque Máximo(Nm):</strong> {{ $motores->torque_maximo_nm }}<br>
        </p>
    </div>
    <div align="center">
    <a class="btn btn-warning" href="/motores">Voltar</a>
    </div>

    </div>
    </div>
    </div>
@endsection