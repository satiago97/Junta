<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Galerium
 * 
 * @property int $id
 * @property string $imagem
 * @property string $nome
 * @property int $data
 * @property int $id_freguesia
 * @property int $id_categoria
 * 
 * @property Freguesium $freguesium
 * @property CategoriaGalerium $categoria_galerium
 *
 * @package App\Models
 */
class Galerium extends Model
{
	protected $table = 'galeria';
	public $timestamps = false;

	protected $casts = [
		'data' => 'int',
		'id_freguesia' => 'int',
		'id_categoria' => 'int'
	];

	protected $fillable = [
		'imagem',
		'nome',
		'data',
		'id_freguesia',
		'id_categoria'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}

	public function categoria_galerium()
	{
		return $this->belongsTo(CategoriaGalerium::class, 'id_categoria');
	}
}
