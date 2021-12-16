<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MembrosOrgaoAutarquia
 * 
 * @property int $id
 * @property string $nome
 * @property string $foto
 * @property int $partido
 * @property int $tipo_membro
 * @property int $tipo_orgao
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesia
 *
 * @package App\Models
 */
class MembrosOrgaoAutarquia extends Model
{
	protected $table = 'membros_orgao_autarquia';
	public $timestamps = false;

	protected $casts = [
		'partido' => 'int',
		'tipo_membro' => 'int',
		'tipo_orgao' => 'int',
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'nome',
		'foto',
		'partido',
		'tipo_membro',
		'tipo_orgao',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}

	public function tipo_orgao()
	{
		return $this->belongsTo(TipoOrgao::class, 'tipo_orgao');
	}

	public function tipo_membro()
	{
		return $this->belongsTo(TipoMembro::class, 'tipo_membro');
	}

	public function partido()
	{
		return $this->belongsTo(Partido::class, 'partido');
	}
}
