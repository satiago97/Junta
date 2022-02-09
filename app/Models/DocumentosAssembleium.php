<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentosAssembleium
 * 
 * @property int $id
 * @property int $categoria_documento_assembleia
 * @property int $id_freguesia
 * @property date $data
 * 
 * @property Freguesium $freguesium
 * @property CategoriaDocumentoAssembleium $categoria_documento_assembleium
 * @property DetalhesDocumentoAssembleium $detalhes_documento_assembleium
 * @property Collection|DetalhesDocumentoAssembleium[] $detalhes_documento_assembleia
 *
 * @package App\Models
 */
class DocumentosAssembleium extends Model
{
	protected $table = 'documentos_assembleia';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'data' => 'date',
		'categoria_documento_assembleia' => 'int',
		'id_freguesia' => 'int'
		
	];

	protected $fillable = [
		'data',
		'categoria_documento_assembleia',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}

	public function categoria_documento_assembleium()
	{
		return $this->belongsTo(CategoriaDocumentoAssembleium::class, 'categoria_documento_assembleia');
	}

	public function detalhes_documento_assembleium()
	{
		return $this->belongsTo(DetalhesDocumentoAssembleium::class, 'id_detalhes');
	}

	public function detalhes_documento_assembleia()
	{
		return $this->hasMany(DetalhesDocumentoAssembleium::class, 'id_documento_assembleia');
	}
}
