<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Escola
 * 
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $morada
 * @property int $lat
 * @property int $lng
 * @property string $foto
 * @property int $id_freguesia
 * @property string $link
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class Escola extends Model
{
	protected $table = 'escolas';
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
		'lat',
		'lng',
		'foto',
		'id_freguesia',
		'link'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
