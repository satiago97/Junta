<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Associaco
 * 
 * @property int $id
 * @property string $morada
 * @property int $contacto
 * @property string $email
 * @property string $site
 * @property string $foto
 * @property string $descricao
 * @property double $lat
 * @property double $lng
 * @property string $nome
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class Associaco extends Model
{
	protected $table = 'associacoes';
	public $timestamps = false;

	protected $casts = [
		'contacto' => 'int',
		'lat' => 'double',
		'lng' => 'double',
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'morada',
		'contacto',
		'email',
		'site',
		'foto',
		'descricao',
		'lat',
		'lng',
		'nome',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
