<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sobre
 * 
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property int $id_orcamento_participativo
 * 
 * @property OrçamentoParticipativo $orçamento_participativo
 *
 * @package App\Models
 */
class Sobre extends Model
{
	protected $table = 'sobre';
	public $timestamps = false;

	protected $casts = [
		'id_orcamento_participativo' => 'int'
	];

	protected $fillable = [
		'titulo',
		'descricao',
		'id_orcamento_participativo'
	];

	public function orçamento_participativo()
	{
		return $this->belongsTo(OrçamentoParticipativo::class, 'id_orcamento_participativo');
	}
}
