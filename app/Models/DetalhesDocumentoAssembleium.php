<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalhesDocumentoAssembleium
 * 
 * @property int $id
 * @property string $titulo
 * @property Carbon $data
 * @property string $documento
 * @property int $id_documento_assembleia
 * 
 * @property DocumentosAssembleium $documentos_assembleium
 * @property Collection|DocumentosAssembleium[] $documentos_assembleia
 *
 * @package App\Models
 */
class DetalhesDocumentoAssembleium extends Model
{
	protected $table = 'detalhes_documento_assembleia';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_documento_assembleia' => 'int'
	];

	protected $dates = [
		'data'
	];

	protected $fillable = [
		'titulo',
		'data',
		'documento',
		'id_documento_assembleia'
	];

	public function documentos_assembleium()
	{
		return $this->belongsTo(DocumentosAssembleium::class, 'id_documento_assembleia');
	}

	public function documentos_assembleia()
	{
		return $this->hasMany(DocumentosAssembleium::class, 'id_detalhes');
	}
}
