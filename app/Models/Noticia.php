<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Noticia
 * 
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property Carbon $data
 * @property string $foto
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class Noticia extends Model
{
	protected $table = 'noticias';
	public $timestamps = false;

	protected $casts = [
		'id_freguesia' => 'int'
	];

	protected $dates = [
		'data'
	];

	protected $fillable = [
		'titulo',
		'descricao',
		'data',
		'foto',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
