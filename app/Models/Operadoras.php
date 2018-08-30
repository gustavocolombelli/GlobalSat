<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Operadoras extends Model
{
	public $timestamps = true;

	

	public function cadastrar($value) : Array
	{

		if($this->insert($value)){
		
			return[
				'success' => true,
				'message' => 'Operadora foi cadastrada com sucesso!'
			];
		}
		
		else return[
				'success' => false,
				'message' => 'Houve uma falha no cadastro da operadora.'
			];

	}


	
}

?>