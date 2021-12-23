<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contacto
 * 
 * @property int $id
 * @property string $morada
 * @property int $contacto
 * @property string $email
 * @property string $horario
 * @property string $titulo
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class Contacto extends Model
{
	protected $table = 'contactos';
	public $timestamps = false;

	protected $casts = [
		'contacto' => 'int',
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'morada',
		'contacto',
		'email',
		'horario',
		'titulo',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
