<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Incidente
 * 
 * @property int $id
 * @property string $nome
 * @property int $contacto
 * @property string $email
 * @property string $mensagem
 * @property string $imagem
 * @property string $morada
 * @property int $lat
 * @property int $lng
 * @property int $id_freguesia
 * @property int $tipo_situacao
 * @property int $tipo_incidente
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class Incidente extends Model
{
	protected $table = 'incidentes';
	public $timestamps = false;

	protected $casts = [
		'contacto' => 'int',
		'lat' => 'int',
		'lng' => 'int',
		'id_freguesia' => 'int',
		'tipo_situacao' => 'int',
		'tipo_incidente' => 'int'
	];

	protected $fillable = [
		'nome',
		'contacto',
		'email',
		'mensagem',
		'imagem',
		'morada',
		'lat',
		'lng',
		'id_freguesia',
		'tipo_situacao',
		'tipo_incidente'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}

	public function tipo_situacao()
	{
		return $this->belongsTo(TipoSituacao::class, 'tipo_situacao');
	}

	public function tipo_incidente()
	{
		return $this->belongsTo(TipoIncidente::class, 'tipo_incidente');
	}
}
