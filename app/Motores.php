<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motores extends Model
{   
    //Também pode ser protected $guarded = [];

   protected $fillable = ['modelo','numero_de_polos','tensao_de_rede_v','regime_de_servico','corrente_nominal_a','potencia_nominal_w','torque_maximo_nm'];
}
