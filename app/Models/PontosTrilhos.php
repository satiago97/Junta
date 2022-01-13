<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OndeComer
 * 
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $imagem
 * @property string $coordenadas
 * @property int $id_trilho
 * @package App\Models
 */
class PontosTrilhos extends Model
{

    protected $table = 'pontos_trilho';
	public $timestamps = false;

    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'coordenadas',
        'id_trilho'
    ];

}
