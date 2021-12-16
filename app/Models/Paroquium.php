<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paroquium
 * 
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $morada
 * @property string $foto
 * @property int $lat
 * @property int $lng
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class Paroquium extends Model
{
	protected $table = 'paroquia';
	public $timestamps = false;

	protected $casts = [
		'lat' => 'int',
		'lng' => 'int',
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'nome',
		'descricao',
		'morada',
		'foto',
		'lat',
		'lng',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
