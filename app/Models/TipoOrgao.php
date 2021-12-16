<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoOrgao
 * 
 * @property int $id
 * @property string $descricao
 * 
 * @property Collection|MembrosOrgaoAutarquium[] $membros_orgao_autarquia
 *
 * @package App\Models
 */
class TipoOrgao extends Model
{
	protected $table = 'tipo_orgao';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'descricao'
	];

	public function membros_orgao_autarquia()
	{
		return $this->hasMany(MembrosOrgaoAutarquium::class, 'tipo_orgao');
	}
}
