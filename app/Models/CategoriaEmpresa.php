<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaEmpresa
 * 
 * @property int $id
 * @property string $descricao
 * 
 * @property Collection|Empresa[] $empresas
 *
 * @package App\Models
 */
class CategoriaEmpresa extends Model
{
	protected $table = 'categoria_empresa';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'descricao'
	];

	public function empresas()
	{
		return $this->hasMany(Empresa::class, 'categoria');
	}
}
