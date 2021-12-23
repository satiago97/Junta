<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaDocumentoExecutivo
 * 
 * @property int $id
 * @property string $descricao
 * 
 * @property Collection|DocumentosExecutivo[] $documentos_executivos
 *
 * @package App\Models
 */
class CategoriaDocumentoExecutivo extends Model
{
	protected $table = 'categoria_documento_executivo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'descricao'
	];

	public function documentos_executivos()
	{
		return $this->hasMany(DocumentosExecutivo::class, 'categoria_documento_executivo');
	}
}
