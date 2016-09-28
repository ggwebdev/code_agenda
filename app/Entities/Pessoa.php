<?php 

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model {

	protected $table = 'pessoas';

	protected $fillable = [
		'nome', 'apelido', 'sexo'
	];

	public function telefones()
	{
		# code...
	}

}