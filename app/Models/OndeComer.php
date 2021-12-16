<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OndeComer
 * 
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $foto
 * @property string $morada
 * @property int $contacto
 * @property string $email
 * @property string $site
 * @property int $lat
 * @property int $lng
 * @property int $id_categoria
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 * @property CategoriaOndeComer $categoria_onde_comer
 *
 * @package App\Models
 */
class OndeComer extends Model
{
	protected $table = 'onde_comer';
	public $timestamps = false;

	protected $casts = [
		'contacto' => 'int',
		'lat' => 'int',
		'lng' => 'int',
		'id_categoria' => 'int',
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'nome',
		'descricao',
		'foto',
		'morada',
		'contacto',
		'email',
		'site',
		'lat',
		'lng',
		'id_categoria',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}

	public function categoria_onde_comer()
	{
		return $this->belongsTo(CategoriaOndeComer::class, 'id_categoria');
	}
}
