<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DetalhesDocumentoExecutivo
 * 
 * @property int $id
 * @property string $titulo
 * @property Carbon $data
 * @property string $documento
 * @property int $id_documento_executivo
 * 
 * @property DocumentosExecutivo $documentos_executivo
 * @property Collection|DocumentosExecutivo[] $documentos_executivos
 *
 * @package App\Models
 */
class DetalhesDocumentoExecutivo extends Model
{
	protected $table = 'detalhes_documento_executivo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_documento_executivo' => 'int'
	];

	protected $dates = [
		'data'
	];

	use HasFactory;
	protected $fillable = [
		'titulo',
		'data',
		'documento',
		'id_documento_executivo'
	];

	public function documentos_executivo()
	{
		return $this->belongsTo(DocumentosExecutivo::class, 'id_documento_executivo');
	}

	public function documentos_executivos()
	{
		return $this->hasMany(DocumentosExecutivo::class, 'id_detalhes');
	}
}
