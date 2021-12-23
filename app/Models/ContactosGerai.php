<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactosGerai
 * 
 * @property int $id
 * @property string $titulo
 * @property string $morada
 * @property int $contacto
 * @property string $email
 * @property string $horario
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class ContactosGerai extends Model
{
	protected $table = 'contactos_gerais';
	public $timestamps = false;

	protected $casts = [
		'contacto' => 'int',
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'titulo',
		'morada',
		'contacto',
		'email',
		'horario',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
