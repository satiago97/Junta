<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 * 
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $morada
 * @property int $contacto
 * @property string $email
 * @property string $facebook
 * @property string $site
 * @property double $lat
 * @property double $lng
 * @property int $categoria
 * @property string $foto
 * @property int $id_freguesia
 * 
 * @property Freguesium $freguesium
 * @property CategoriaEmpresa $categoria_empresa
 *
 * @package App\Models
 */
class Empresa extends Model
{
	protected $table = 'empresas';
	public $timestamps = false;

	protected $casts = [
		'contacto' => 'int',
		'lat' => 'double',
		'lng' => 'double',
		'categoria' => 'int',
		'id_freguesia' => 'int'
	];

	protected $fillable = [
		'nome',
		'descricao',
		'morada',
		'contacto',
		'email',
		'facebook',
		'site',
		'lat',
		'lng',
		'categoria',
		'foto',
		'id_freguesia'
	];

	public function freguesium()
	{
		return $this->belongsTo(Freguesium::class, 'id_freguesia');
	}

	public function categoria_empresa()
	{
		return $this->belongsTo(CategoriaEmpresa::class, 'categoria');
	}
}
