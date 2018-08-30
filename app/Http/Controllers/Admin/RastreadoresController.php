<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rastreadores;
use App\Models\Operadoras;
use App\Http\Requests\Admin\RastreadorFormRequest;

class RastreadoresController extends Controller
{
	public function index()
	{
		$rastreadores = Rastreadores::rastreadores();

		return view('admin.rastreadores.index', compact('rastreadores'));
	}

	public function cadastrar()
	{
		$operadoras =  Operadoras::orderBy('nome_operadora')->get();

		return view('admin.rastreadores.cadastrar', compact('operadoras'));
	}

	public function inserir(RastreadorFormRequest $request)
	{
		$rastreadores = new Rastreadores();

		$data = ['id_operadora' => $request->id_operadora,
			     'nome' => $request->nome,
			     'serial' => $request->serial
				];
		
		$retorno = $rastreadores->inserir($data);

		if($retorno['success'] == true){
			return redirect()
					->route('rastreadores.index')
					->with('success', $retorno['message']);
		}

		return redirect()
				->back()
				->with('error', $retorno['message']);

	}

	public function excluir(Request $request)
	{

		$rastreadores = Rastreadores::where('serial', $request->serial);
		$resultado = $rastreadores->delete();
		
		if($resultado){
			return redirect()
					->route('rastreadores.index')
					->with('success', 'O rastreador foi removido com sucesso.');
		}
		else redirect()
				->back()
				->with('error', 'Houve um problema na remoção do rastreador.');
	}

	public function editar(Request $request)
	{
		$operadoras =  Operadoras::orderBy('nome_operadora')->get();
		$rastreador = Rastreadores::where('serial', $request->serial)->first();

		$offset = 0;

		foreach ($operadoras as $operadora) {
			if ($operadora->id == $rastreador->id_operadora) {
				$rastreador['nome_operadora'] = $operadora->nome_operadora;
				$rastreador['pais_operadora'] = $operadora->pais;
				unset($operadoras[$offset]);
				break;
			}
			$offset++;
		}

		return view('admin.rastreadores.editar', ['rastreador' => $rastreador, 'operadoras' => $operadoras]);

	}

	public function atualizar(Request $request)
	{
		$data = ['placa' => $request->placa,
				 'chassi' => $request->chassi,
				 'ano_fabricacao' => $request->ano_fabricacao,
            	 "updated_at" => \Carbon\Carbon::now()
				];


		$resultado = Rastreadores::where('serial', $request->oldPlaca)->update($data);
		
		if($resultado){
			return redirect()
					->route('rastreadores.index')
					->with('success', 'A rastreadore foi atualizado com sucesso.');
		}
		else redirect()
				->back()
				->with('error', 'Houve um problema na atualização do rastreador.');

	}

	public function rastreadores(){
		$rastreadores = Rastreadores::orderBy('nome')->paginate(5);

		return view('admin.rastreadores.rastreadores', compact('rastreadores'));
	}
}

?>