<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Heraldica
 * 
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property string $foto
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class Heraldica extends Model
{
	protected $table = 'heraldica';
	public $timestamps = false;

	protected $casts = [
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'titulo',
		'descricao',
		'foto',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
