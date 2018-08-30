@extends('adminlte::page')

@section('title', ' - Novo veículo')

@section('content_header')
 
@stop

@section('content')
     <div class="row">
        
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Editar veículo</h3>
            </div>
            
            <div class="box-body">
              	<form method="POST" action="{{ route('veiculos.atualizar')}}">

              		{!! csrf_field() !!}
                	<input type="hidden" name="oldPlaca" value="{{ $veiculo->placa }}">
              		<div class="row">
	              		<div class="form-group col-md-6">
	              			<label for="chassi">Número do chassi</label>
	                  		<input name="chassi" type="text" class="form-control" id="chassi" value="{{ $veiculo->chassi}}" maxlength="17" required="">
	              		</div>	 
	              			<div class="form-group col-md-6">
    	              			<label for="ano_fabricacao">Ano de fabricação</label>
    	              			<input name="ano_fabricacao" type="text" class="form-control" id="ano_fabricacao" value="{{ $veiculo->ano_fabricacao}}" 
                                 maxlength="4" required="">	
    	              	</div>
	              			              		
	              	</div>

              		<div class="row">
                  		<div class="form-group col-md-4">
    	              			<label for="placa">Placa</label>
    	              			<input name="placa" type="text" class="form-control" id="placa" value="{{ $veiculo->placa}}" maxlength="10" required="">	
    	              	</div>    				
                  </div>
                  <div class="row">
                  	   <div class="form-group col-md-4">
	              			<label for="chassi"></label>
	                  		<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
			                Rastreadores
			              </button>
	              		</div>
                  </div>
            </div>

            <div class="col-md-6">
		             <button type="submit" class="btn btn-success">Salvar</button>
		             <a class="btn btn-primary" href="{{ route('veiculos.index')}}" role="button">Voltar</a>
		        </div>
            </form>

            <div class="box-footer clearfix">
            	
            </div>
          </div>

        </div>

      </div>

<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Rastreadores</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
</div>

@stop