<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin'], function(){

	// --- Operadoras --- 
	$this->get('operadoras', 'OperadorasController@index')->name('operadoras.index');
	
	$this->get('cadastrar-operadora', 'OperadorasController@cadastrarOperadora')->name('operadoras.cadastrar');
	$this->post('cadastrar-operadora', 'OperadorasController@realizaCadastro')->name('realiza.cadastro.operadora');


	$this->get('editar-operadora/{id}', 'OperadorasController@editar')->name('operadoras.editar');
	$this->post('editar-operadora', 'OperadorasController@atualizar')->name('operadoras.atualizar');

	$this->get('excluir-operadora/{id}', 'OperadorasController@excluir')->name('operadoras.excluir');

	// --- Rastreadores --- 
	$this->get('rastreadores', 'RastreadoresController@index')->name('rastreadores.index');

	$this->get('cadastrar-rastreador', 'RastreadoresController@cadastrar')->name('rastreadores.cadastrar');
	$this->post('rastreador-inserir', 'RastreadoresController@inserir')->name('rastreador.inserir');

	$this->get('editar-rastreador/{serial}', 'RastreadoresController@editar')->name('rastreadores.editar');
	$this->post('atualizar-rastreador', 'RastreadoresController@atualizar')->name('rastreadores.atualizar');

	$this->get('excluir-rastreador/{serial}', 'RastreadoresController@excluir')->name('rastreadores.excluir');
	$this->get('todos-rastreadores', 'RastreadoresController@rastreadores')->name('rastreadores.todos');


	// --- Veículos ---
	$this->get('veiculos', 'VeiculosController@index')->name('veiculos.index');

	$this->get('cadastrar-veiculo', 'VeiculosController@cadastrar')->name('veiculos.cadastrar');
	$this->post('inserir-veiculo', 'VeiculosController@inserir')->name('veiculos.inserir');

	$this->get('editar-veiculo/{placa}', 'VeiculosController@editar')->name('veiculos.editar');
	$this->post('editar-veiculo', 'VeiculosController@atualizar')->name('veiculos.atualizar');
	$this->get('excluir-veiculo/{placa}', 'VeiculosController@excluir')->name('veiculos.excluir');

	//
	$this->get('/home', 'HomeController@index');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
