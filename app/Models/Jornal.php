<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Jornal
 * 
 * @property int $id
 * @property string $titulo
 * @property Carbon $data
 * @property string $foto
 * @property string $pdf
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class Jornal extends Model
{
	protected $table = 'jornal';
	public $timestamps = false;

	protected $casts = [
		'id_freguesia' => 'int'
	];

	protected $dates = [
		'data'
	];

	protected $fillable = [
		'titulo',
		'data',
		'foto',
		'pdf',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
