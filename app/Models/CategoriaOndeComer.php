<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaOndeComer
 * 
 * @property int $id
 * @property string $descricao
 * 
 * @property Collection|OndeComer[] $onde_comers
 *
 * @package App\Models
 */
class CategoriaOndeComer extends Model
{
	protected $table = 'categoria_onde_comer';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'descricao'
	];

	public function onde_comers()
	{
		return $this->hasMany(OndeComer::class, 'id_categoria');
	}
}
