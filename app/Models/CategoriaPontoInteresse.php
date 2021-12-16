<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaPontoInteresse
 * 
 * @property int $id
 * @property string $descricao
 * 
 * @property Collection|PontosInteresse[] $pontos_interesses
 *
 * @package App\Models
 */
class CategoriaPontoInteresse extends Model
{
	protected $table = 'categoria_ponto_interesse';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'descricao'
	];

	public function pontos_interesses()
	{
		return $this->hasMany(PontosInteresse::class, 'id_categoria');
	}
}
