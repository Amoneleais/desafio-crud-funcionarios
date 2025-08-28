<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
  protected $fillable = [
    'nome',
    'cpf',
    'data_nascimento',
    'telefone',
    'genero',
  ];
}
