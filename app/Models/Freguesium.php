<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Freguesium
 * 
 * @property int $id
 * @property string $nome
 * @property string $morada
 * @property int $contacto
 * @property string $email
 * 
 * @property Collection|Agenda[] $agendas
 * @property Collection|Associaco[] $associacos
 * @property Collection|CarecterizacaoFreguesium[] $carecterizacao_freguesia
 * @property Collection|ConcursosPublico[] $concursos_publicos
 * @property Collection|Contacto[] $contactos
 * @property Collection|ContactosGerai[] $contactos_gerais
 * @property Collection|DocumentosAssembleium[] $documentos_assembleia
 * @property Collection|DocumentosExecutivo[] $documentos_executivos
 * @property Collection|Empresa[] $empresas
 * @property Collection|Escola[] $escolas
 * @property Collection|Faq[] $faqs
 * @property Collection|Galerium[] $galeria
 * @property Collection|Heraldica[] $heraldicas
 * @property Collection|Historium[] $historia
 * @property Collection|Imprensa[] $imprensas
 * @property Collection|Incidente[] $incidentes
 * @property Collection|Infraestrutura[] $infraestruturas
 * @property Collection|Jornal[] $jornals
 * @property Collection|MembrosOrgaoAutarquium[] $membros_orgao_autarquia
 * @property Collection|MensagemDoPresidente[] $mensagem_do_presidentes
 * @property Collection|Noticia[] $noticias
 * @property Collection|OndeComer[] $onde_comers
 * @property Collection|OndeDormir[] $onde_dormirs
 * @property Collection|OrçamentoParticipativo[] $orçamento_participativos
 * @property Collection|Paroquium[] $paroquia
 * @property Collection|PontosInteresse[] $pontos_interesses
 * @property Collection|ProgramasEIniciativa[] $programas_e_iniciativas
 * @property Collection|Qualidade[] $qualidades
 * @property Collection|Servico[] $servicos
 *
 * @package App\Models
 */
class Freguesium extends Model
{
	protected $table = 'freguesia';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'contacto' => 'int'
	];

	protected $fillable = [
		'nome',
		'morada',
		'contacto',
		'email'
	];

	public function agendas()
	{
		return $this->hasMany(Agenda::class, 'id_freguesia');
	}

	public function associacos()
	{
		return $this->hasMany(Associaco::class, 'id_freguesia');
	}

	public function carecterizacao_freguesia()
	{
		return $this->hasMany(CarecterizacaoFreguesium::class, 'id_freguesia');
	}

	public function concursos_publicos()
	{
		return $this->hasMany(ConcursosPublico::class, 'id_freguesia');
	}

	public function contactos()
	{
		return $this->hasMany(Contacto::class, 'id_freguesia');
	}

	public function contactos_gerais()
	{
		return $this->hasMany(ContactosGerai::class, 'id_freguesia');
	}

	public function documentos_assembleia()
	{
		return $this->hasMany(DocumentosAssembleium::class, 'id_freguesia');
	}

	public function documentos_executivos()
	{
		return $this->hasMany(DocumentosExecutivo::class, 'id_freguesia');
	}

	public function empresas()
	{
		return $this->hasMany(Empresa::class, 'id_freguesia');
	}

	public function escolas()
	{
		return $this->hasMany(Escola::class, 'id_freguesia');
	}

	public function faqs()
	{
		return $this->hasMany(Faq::class, 'id_freguesia');
	}

	public function galeria()
	{
		return $this->hasMany(Galerium::class, 'id_freguesia');
	}

	public function heraldicas()
	{
		return $this->hasMany(Heraldica::class, 'id_freguesia');
	}

	public function historia()
	{
		return $this->hasMany(Historium::class, 'id_freguesia');
	}

	public function imprensas()
	{
		return $this->hasMany(Imprensa::class, 'id_freguesia');
	}

	public function incidentes()
	{
		return $this->hasMany(Incidente::class, 'id_freguesia');
	}

	public function infraestruturas()
	{
		return $this->hasMany(Infraestrutura::class, 'id_freguesia');
	}

	public function jornals()
	{
		return $this->hasMany(Jornal::class, 'id_freguesia');
	}

	public function membros_orgao_autarquia()
	{
		return $this->hasMany(MembrosOrgaoAutarquium::class, 'id_freguesia');
	}

	public function mensagem_do_presidentes()
	{
		return $this->hasMany(MensagemDoPresidente::class, 'id_freguesia');
	}

	public function noticias()
	{
		return $this->hasMany(Noticia::class, 'id_freguesia');
	}

	public function onde_comers()
	{
		return $this->hasMany(OndeComer::class, 'id_freguesia');
	}

	public function onde_dormirs()
	{
		return $this->hasMany(OndeDormir::class, 'id_freguesia');
	}

	public function orçamento_participativos()
	{
		return $this->hasMany(OrçamentoParticipativo::class, 'id_freguesia');
	}

	public function paroquia()
	{
		return $this->hasMany(Paroquium::class, 'id_freguesia');
	}

	public function pontos_interesses()
	{
		return $this->hasMany(PontosInteresse::class, 'id_freguesia');
	}

	public function programas_e_iniciativas()
	{
		return $this->hasMany(ProgramasEIniciativa::class, 'id_freguesia');
	}

	public function qualidades()
	{
		return $this->hasMany(Qualidade::class, 'id_freguesia');
	}

	public function servicos()
	{
		return $this->hasMany(Servico::class, 'id_freguesia');
	}
}
