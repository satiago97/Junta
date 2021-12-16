<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Partido
 * 
 * @property int $id
 * @property string $nome
 * 
 * @property Collection|MembrosOrgaoAutarquium[] $membros_orgao_autarquia
 *
 * @package App\Models
 */
class Partido extends Model
{
	protected $table = 'partido';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'nome'
	];

	public function membros_orgao_autarquia()
	{
		return $this->hasMany(MembrosOrgaoAutarquium::class, 'partido');
	}
}
