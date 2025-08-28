<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
  protected $fillable = [
    'user_id',
    'nome',
    'cpf',
    'data_nascimento',
    'telefone',
    'genero',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
