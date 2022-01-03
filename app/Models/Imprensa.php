<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Imprensa
 * 
 * @property int $id
 * @property string $pdf
 * @property string $descricao
 * @property int $id_freguesia
 * @property date $data
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class Imprensa extends Model
{
	protected $table = 'imprensa';
	public $timestamps = false;

	protected $casts = [
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'pdf',
		'nome',
		'id_freguesia',
		'data'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
