<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Veiculos extends Model
{
	public $timestamps = true;

	

	public function inserir($value) : Array
	{

		if($this->insert($value)){
		
			return[
				'success' => true,
				'message' => 'Veículo foi cadastrado com sucesso!'
			];
		}
		
		else return[
				'success' => false,
				'message' => 'Houve uma falha no cadastro do veículo.'
			];

	}

	public static function veiculos()
	{
		return DB::table('veiculos')
				 ->join('rastreadores', 'id_rastreador', '=', 'rastreadores.serial')
				 ->join('operadoras', 'rastreadores.id_operadora', '=', 'operadoras.id')
				 ->where('statusreg', '=', true)
				 ->paginate(10);
	}


	
}

?>