<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrcamentoParticipativo
 * 
 * @property int $id
 * @property int $titulo
 * @property int $descricao
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 * @property Collection|ComoParticipar[] $como_participars
 * @property Collection|Proposta[] $propostas
 * @property Collection|Sobre[] $sobres
 *
 * @package App\Models
 */
class OrçamentoParticipativo extends Model
{
	protected $table = 'orcamento_participativo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'titulo' => 'int',
		'descricao' => 'int',
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'titulo',
		'descricao',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}

	public function como_participars()
	{
		return $this->hasMany(ComoParticipar::class, 'id_orcamento_participativo');
	}

	public function propostas()
	{
		return $this->hasMany(Proposta::class, 'id_orcamento_participativo');
	}

	public function sobres()
	{
		return $this->hasMany(Sobre::class, 'id_orcamento_participativo');
	}
}
