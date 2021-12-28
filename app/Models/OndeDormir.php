<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OndeDormir
 * 
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $foto
 * @property string $morada
 * @property int $contacto
 * @property string $email
 * @property string $site
 * @property double $lat
 * @property double $lng
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class OndeDormir extends Model
{
	protected $table = 'onde_dormir';
	public $timestamps = false;

	protected $casts = [
		'contacto' => 'int',
		'lat' => 'double',
		'lng' => 'double',
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
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
