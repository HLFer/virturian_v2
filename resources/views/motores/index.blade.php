
@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row" align="center">
    <div class="col s12"> 
                
    <div class="card indigo darken-4 sub-menu"><h4>Painel de Controle | Motores</h4></div>
             
                                   
                <div>
                    <h3 class="center-align">Motores Cadastrados</h3>
                </div>
        

                    <div id="tabela" class="" align="center">
                        <table class="responsive-table centered green lighten-2 striped">
                            <thead align="center">
                                <tr>
                                    <th>Cod. Identificação</th>
                                    <th>Nome Modelo</th>
                                    <th>Número de Polos</th>
                                    <th>Tensão de Rede (V)</th>
                                    <th>Regime de Serviço</th>
                                    <th>Corrente Nominal (A)</th>
                                    <th>Potência Nominal (W)</th>
                                    <th>Torque Máximo (Nm)</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody align="center">    
                            @foreach($todosmotores as $motor)
                                <tr>
                                    <td>{{ $motor->id }}</td>
                                    <td>{{ $motor->modelo }}</td>
                                    <td>{{ $motor -> numero_de_polos }}</td>
                                    <td>{{ $motor -> tensao_de_rede_v }}</td>
                                    <td>{{ $motor -> regime_de_servico }}</td>
                                    <td>{{ $motor -> corrente_nominal_a }}</td>
                                    <td>{{ $motor -> potencia_nominal_w }}</td>
                                    <td>{{ $motor -> torque_maximo_nm }}</td>
                                    <td>
                                        
                                            <a class="btn equal-size orange darken-4" href="/motores/{{ $motor->id }}">Detalhes</a>
                                            <a class="btn equal-size light-blue darken-4" href="/motores/{{ $motor->id }}/edit">Editar</a>
                                            
                                            <form action="{{ url('motores', [$motor->id]) }}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input class="btn equal-size red darken-4" type="submit" name="name" value="Deletar">
                                            </form>
                      
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            
                        </table><br>
                        <div class="atual-red-edit red darken-4">
                            {{ Session::get('message') }}<hr>
                        </div>
                        <div id="botao-cadastrar" >
                            <a class="btn green darken-4" href="/motores/create">Cadastrar novo Motor</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
