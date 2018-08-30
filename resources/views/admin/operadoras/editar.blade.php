@extends('adminlte::page')

@section('title', ' - Editar Operadora')

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
              <h3 class="box-title">Editar operadora</h3>
            </div>
            
            <div class="box-body">
              	<form method="POST" action="{{ route('operadoras.atualizar') }}">

              		{!! csrf_field() !!}

              		<div class="row">

                      <input type="hidden" name="id" value="{{ $operadora->id }}">
	              		<div class="form-group col-md-12">
	              			<label for="nome_operadora">Nome da Operadora</label>
	                  		<input name="nome_operadora" type="text" class="form-control" id="nome_operadora" placeholder="Nome da Operadora" maxlength="100" required="" value="{{ $operadora->nome_operadora }}">
	              		</div>	              		
	              	</div>

              		<div class="row">
              			<div class="form-group col-md-6">
	              			<label for="codigo_operadora">Código da Operadora</label>
	              			<input name="codigo_operadora" type="text" class="form-control" id="codigo_operadora" placeholder="Código da Operadora" onkeypress="return somenteNumero(event)" max="25" required="" value="{{ $operadora->codigo_operadora }}">	
	              		</div>
	              		<div class="form-group col-md-6">
	              			<label for="pais">País</label>
	                  		<input name="pais" type="text" class="form-control" id="pais" placeholder="País" maxlength="85" required="" value="{{ $operadora->pais }}">
	              		</div>	              		
	              	</div>

	              

            </div>

            <div class="col-md-6">
		             <button type="submit" class="btn btn-success">Salvar</button>
		             <a class="btn btn-primary" href="{{ route('operadoras.index')}}" role="button">Voltar</a>
		        </div>
            </form>

            <div class="box-footer clearfix">
            	
            </div>
          </div>

        </div>

      </div>

      <script type="text/javascript">
      	function somenteNumero(evt){
		    var charCode = (evt.which) ? evt.which : event.keyCode
		    if (charCode > 31 && (charCode < 48 || charCode > 57))
		        return false;
		    return true;
		}
      </script>
@stop