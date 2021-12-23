<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AreaTematica
 * 
 * @property int $id
 * @property string $descricao
 * 
 * @property Collection|Proposta[] $propostas
 *
 * @package App\Models
 */
class AreaTematica extends Model
{
	protected $table = 'area_tematica';
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
		return $this->hasMany(Proposta::class, 'area');
	}
}
