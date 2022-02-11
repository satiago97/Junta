<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Slider
 * 
 * @property int $id
 * @property string $titulo
 * @property string $subtitulo
 * @property string $textobotao
 * @property string $descricao
 * @property string $imagem
 * @property string $link
 * 
 *
 * @package App\Models
 */

class Slider extends Model
{
    use HasFactory;

    protected $table = 'slider';
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'titulo',
		'subtitulo',
		'textobotao',
		'descricao',
		'imagem',
        'link'
	];
}

