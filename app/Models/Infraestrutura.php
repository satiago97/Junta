<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Infraestrutura
 * 
 * @property int $id
 * @property int $nome
 * @property int $email
 * @property int $contacto
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class Infraestrutura extends Model
{
	protected $table = 'infraestruturas';
	public $timestamps = false;

	protected $casts = [
		'nome' => 'int',
		'email' => 'int',
		'contacto' => 'int',
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'nome',
		'email',
		'contacto',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
