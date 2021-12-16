<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaDocumentoAssembleium
 * 
 * @property int $id
 * @property string $descricao
 * 
 * @property Collection|DocumentosAssembleium[] $documentos_assembleia
 *
 * @package App\Models
 */
class CategoriaDocumentoAssembleium extends Model
{
	protected $table = 'categoria_documento_assembleia';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'descricao'
	];

	public function documentos_assembleia()
	{
		return $this->hasMany(DocumentosAssembleium::class, 'categoria_documento_assembleia');
	}
}
