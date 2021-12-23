<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoSituacao
 * 
 * @property int $id
 * @property string $descricao
 * 
 * @property Collection|Incidente[] $incidentes
 *
 * @package App\Models
 */
class TipoSituacao extends Model
{
	protected $table = 'tipo_situacao';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'descricao'
	];

	public function incidentes()
	{
		return $this->hasMany(Incidente::class, 'tipo_situacao');
	}
}
