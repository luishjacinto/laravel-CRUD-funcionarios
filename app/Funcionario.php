<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'matricula',
        'nome',
        'cargo',
        'salario',
        'bonificacao'
    ];
    //
    protected $table = 'funcionarios';

    public static function busca($pesquisa)
    {
      return static::where('nome', 'LIKE', '%' . $pesquisa . '%')->orWhere('matricula', $pesquisa)->orderBy('nome')->get();
    }

    public $timestamps = false;
}

?>