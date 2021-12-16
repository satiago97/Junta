<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoQualidade
 * 
 * @property int $id
 * @property string $descricao
 * 
 * @property Collection|Qualidade[] $qualidades
 *
 * @package App\Models
 */
class TipoQualidade extends Model
{
	protected $table = 'tipo_qualidade';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'descricao'
	];

	public function qualidades()
	{
		return $this->hasMany(Qualidade::class, 'tipo_qualidade');
	}
}
