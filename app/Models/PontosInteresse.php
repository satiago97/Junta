<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PontosInteresse
 * 
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $foto
 * @property string $morada
 * @property double $lat
 * @property double $lng
 * @property int $id_categoria
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 * @property CategoriaPontoInteresse $categoria_ponto_interesse
 *
 * @package App\Models
 */
class PontosInteresse extends Model
{
	protected $table = 'pontos_interesse';
	public $timestamps = false;

	protected $casts = [
		'lat' => 'double',
		'lng' => 'double',
		'id_categoria' => 'int',
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'nome',
		'descricao',
		'foto',
		'morada',
		'lat',
		'lng',
		'id_categoria',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}

	public function categoria_ponto_interesse()
	{
		return $this->belongsTo(CategoriaPontoInteresse::class, 'id_categoria');
	}
}
