<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentosExecutivo
 * 
 * @property int $id
 * @property date $data
 * @property int $categoria_documento_executivo
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 * @property DetalhesDocumentoExecutivo $detalhes_documento_executivo
 * @property Collection|DetalhesDocumentoExecutivo[] $detalhes_documento_executivos
 *
 * @package App\Models
 */
class DocumentosExecutivo extends Model
{
	protected $table = 'documentos_executivo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'data' => 'date',
		'categoria_documento_executivo' => 'int',
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'nome',
		'data',
		'categoria_documento_executivo',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}

	public function detalhes_documento_executivo()
	{
		return $this->belongsTo(DetalhesDocumentoExecutivo::class, 'id_detalhes');
	}

	public function categoria_documento_executivo()
	{
		return $this->belongsTo(CategoriaDocumentoExecutivo::class, 'categoria_documento_executivo');
	}

	public function detalhes_documento_executivos()
	{
		return $this->hasMany(DetalhesDocumentoExecutivo::class, 'id_documento_executivo');
	}
}
