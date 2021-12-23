<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Faq
 * 
 * @property int $id
 * @property string $titulo
 * @property string $texto
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 *
 * @package App\Models
 */
class Faq extends Model
{
	protected $table = 'faqs';
	public $timestamps = false;

	protected $casts = [
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'titulo',
		'texto',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}
}
