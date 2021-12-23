<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConcursosPublico
 * 
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property string $documento
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class ConcursosPublico extends Model
{
	protected $table = 'concursos_publicos';
	public $timestamps = false;

	protected $casts = [
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'titulo',
		'descricao',
		'documento',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
