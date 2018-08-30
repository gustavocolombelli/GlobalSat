<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Veiculos;
use App\Models\Rastreadores;
use App\Http\Requests\Admin\VeiculoFormRequest;;
class VeiculosController extends Controller
{
	public function index()
	{
		$veiculos = Veiculos::veiculos();
		return view('admin.veiculos.index', compact('veiculos'));
	}

	public function cadastrar()
	{
		$rastreadores = Rastreadores::orderBy('nome')->get();

		return view('admin.veiculos.cadastrar', compact('rastreadores'));
	}

	public function inserir(VeiculoFormRequest $request)
	{
		$veiculo = new Veiculos();
		dd($request);
		$data = ['placa' => $request->placa,
			     'chassi' => $request->chassi,
			     'ano_fabricacao' => $request->ano_fabricacao
				];
		
		$retorno = $veiculo->inserir($data);

		if($retorno['success'] == true){
			return redirect()
					->route('veiculos.index')
					->with('success', $retorno['message']);
		}

		return redirect()
				->back()
				->with('error', $retorno['message']);
	}

	public function editar(Request $request)
	{
		$veiculo = Veiculos::where('placa', $request->placa)->first();
		return view('admin.veiculos.editar', compact('veiculo'));
	}

	public function atualizar(Request $request)
	{

		$data = [ 'placa' => $request->placa,
				 'chassi' => $request->chassi,
				 'ano_fabricacao'=> $request->ano_fabricacao,
            	 "updated_at" => \Carbon\Carbon::now()
				];


		$resultado = Veiculos::where('placa', $request->oldPlaca)->update($data);
		
		if($resultado){
			return redirect()
					->route('veiculos.index')
					->with('success', 'O veículo foi atualizado com sucesso.');
		}
		else redirect()
				->back()
				->with('error', 'Houve um problema na edição do veículo.');

	}
	
	public function excluir(Request $request)
	{
		$data = [ 'statusreg' => false,
				  'id_rastreador' => null,
            	 "updated_at" => \Carbon\Carbon::now()
				];

		$resultado = Veiculos::where('placa', $request->placa)->update($data);
		
		if($resultado){
			return redirect()
					->route('veiculos.index')
					->with('success', 'O veículo foi excluido com sucesso.');
		}
		else redirect()
				->back()
				->with('error', 'Houve um problema na exclusão do veículo.');

	}

	


}
?>