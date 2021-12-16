<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Qualidade
 * 
 * @property int $id
 * @property int $tipo_qualidade
 * @property string $descricao
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class Qualidade extends Model
{
	protected $table = 'qualidade';
	public $timestamps = false;

	protected $casts = [
		'tipo_qualidade' => 'int',
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'tipo_qualidade',
		'descricao',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}

	public function tipo_qualidade()
	{
		return $this->belongsTo(TipoQualidade::class, 'tipo_qualidade');
	}
}
