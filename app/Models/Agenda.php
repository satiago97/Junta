<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Agenda
 * 
 * @property int $id
 * @property string $link
 * @property string $titulo
 * @property string $descricao
 * @property string $imagem
 * @property Carbon $data_inicio
 * @property Carbon $data_fim
 * @property Carbon $hora
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class Agenda extends Model
{
	protected $table = 'agenda';
	public $timestamps = false;

	protected $casts = [
		'id_freguesia' => 'int'
	];

	protected $dates = [
		'data',
		'hora'
	];

	protected $fillable = [
		'link',
		'titulo',
		'descricao',
		'imagem',
		'data_inicio',
		'data_fim',
		'hora',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
