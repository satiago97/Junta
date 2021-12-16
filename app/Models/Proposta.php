<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proposta
 * 
 * @property int $id
 * @property string $titulo
 * @property int $area
 * @property string $imagem
 * @property int $votos
 * @property int $estado
 * @property int $id_orcamento_participativo
 * 
 * @property OrçamentoParticipativo $orçamento_participativo
 * @property AreaTematica $area_tematica
 * @property EstadoPropostum $estado_propostum
 *
 * @package App\Models
 */
class Proposta extends Model
{
	protected $table = 'propostas';
	public $timestamps = false;

	protected $casts = [
		'area' => 'int',
		'votos' => 'int',
		'estado' => 'int',
		'id_orcamento_participativo' => 'int'
	];

	protected $fillable = [
		'titulo',
		'area',
		'imagem',
		'votos',
		'estado',
		'id_orcamento_participativo'
	];

	public function orçamento_participativo()
	{
		return $this->belongsTo(OrçamentoParticipativo::class, 'id_orcamento_participativo');
	}

	public function area_tematica()
	{
		return $this->belongsTo(AreaTematica::class, 'area');
	}

	public function estado_propostum()
	{
		return $this->belongsTo(EstadoPropostum::class, 'estado');
	}
}
