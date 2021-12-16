<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadoPropostum
 * 
 * @property int $id
 * @property string $descricao
 * 
 * @property Collection|Proposta[] $propostas
 *
 * @package App\Models
 */
class EstadoPropostum extends Model
{
	protected $table = 'estado_proposta';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'descricao'
	];

	public function propostas()
	{
		return $this->hasMany(Proposta::class, 'estado');
	}
}
