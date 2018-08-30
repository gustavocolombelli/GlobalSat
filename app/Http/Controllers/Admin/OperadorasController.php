<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Operadoras;
use App\Http\Requests\Admin\OperadoraFormRequest;
class OperadorasController extends Controller
{
	public function index()
	{
		$operadoras =  Operadoras::orderBy('nome_operadora')->paginate(10);
		return view('admin.operadoras.index', compact('operadoras'));
	}

	public function cadastrarOperadora()
	{
		return view('admin.operadoras.cadastrar');
	}

	public function realizaCadastro(OperadoraFormRequest $request)
	{
		$operadoras = new Operadoras;

		$data = ['nome_operadora' => $request->nome_operadora,
				 'codigo_operadora' => $request->codigo_operadora,
				 'pais' => $request->pais,
				 "created_at" =>  \Carbon\Carbon::now(),
            	 "updated_at" => \Carbon\Carbon::now()
				];
		$retorno = $operadoras->cadastrar($data);

		if($retorno['success'] == true){
			return redirect()
					->route('operadoras.index')
					->with('success', $retorno['message']);
		}

		return redirect()
				->back()
				->with('error', $retorno['message']);
	}

	public function excluir(Request $request)
	{
		
		$operadora = Operadoras::where('id', $request->id);
		$resultado = $operadora->delete();
		
		if($resultado){
			return redirect()
					->route('operadoras.index')
					->with('success', 'A operadora foi removida com sucesso.');
		}
		else redirect()
				->back()
				->with('error', 'Houve um problema na remoção da operadora.');
	}

	public function editar(Request $request)
	{
		$operadora = Operadoras::find($request->id);

		if($operadora == false){
			return redirect()
					->route('operadoras.index')
					->with('error', 'Não foi possivel encontrar esta operadora.');
		}

		return view('admin.operadoras.editar', compact('operadora'));
	}

	public function atualizar(Request $request)
	{
		$data = ['nome_operadora' => $request->nome_operadora,
				 'codigo_operadora' => $request->codigo_operadora,
				 'pais' => $request->pais,
            	 "updated_at" => \Carbon\Carbon::now()
				];

		$operadora = Operadoras::where('id', $request->id)->update($data);

		if($operadora){
			return redirect()
					->route('operadoras.index')
					->with('success', 'A operadora foi atualizada com sucesso.');
		}
		else redirect()
				->back()
				->with('error', 'Houve um problema na atualização da operadora.');
	}
}

?>