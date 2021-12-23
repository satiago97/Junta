<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaGalerium
 * 
 * @property int $id
 * @property string $descricao
 * 
 * @property Collection|Galerium[] $galeria
 *
 * @package App\Models
 */
class CategoriaGalerium extends Model
{
	protected $table = 'categoria_galeria';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'descricao'
	];

	public function galeria()
	{
		return $this->hasMany(Galerium::class, 'id_categoria');
	}
}
