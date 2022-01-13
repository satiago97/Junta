<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class OndeComer
 * 
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $linha
 * @package App\Models
 */

class Trilhos extends Model
{

    protected $table = 'trilhos';
	public $timestamps = false;

    protected $fillable = [
        'nome',
        'descricao',
        'linha'
    ];


}
