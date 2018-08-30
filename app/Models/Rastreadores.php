<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Rastreadores extends Model
{
	public $timestamps = true;

	

	public function inserir($value) : Array
	{

		if($this->insert($value)){
		
			return[
				'success' => true,
				'message' => 'Rastreador foi cadastrado com sucesso!'
			];
		}
		
		else return[
				'success' => false,
				'message' => 'Houve uma falha no cadastro do rastreador.'
			];

	}

	public static function rastreadores()
	{
		return DB::table('rastreadores')
				 ->join('operadoras', 'id_operadora', '=', 'operadoras.id')
				 ->paginate(10);
	}
	
}

?>