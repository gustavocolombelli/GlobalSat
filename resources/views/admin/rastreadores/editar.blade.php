@extends('adminlte::page')

@section('title', ' - Novo rastreador')

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
              <h3 class="box-title">Editar rastreador</h3>
            </div>
            
            <div class="box-body">
              	<form method="POST" action="{{ route('rastreadores.atualizar') }}">

              		{!! csrf_field() !!}
                  <input type="hidden" name="oldSerial" value="{{ $rastreador->serial }}">
              		<div class="row">
	              		<div class="form-group col-md-12">
	              			<label for="serial">Serial</label>
	                  		<input name="serial" type="text" class="form-control" id="serial" value="{{ $rastreador->serial }}" maxlength="30" required="">
	              		</div>	              		
	              	</div>

              		<div class="row">
                  		<div class="form-group col-md-6">
    	              			<label for="nome">Nome</label>
    	              			<input name="nome" type="text" class="form-control" id="nome" value="{{ $rastreador->nome }}" 
                                 maxlength="100" required="">	
    	              		</div>
    	
                        <div class="col-md-6">
                        <div class="form-group">
                          <label>Operadora</label>
                          <select name="id_operadora" class="form-control select2" style="width: 100%;">
                            <option selected="selected" value="{{$rastreador->id_operadora}}">{{$rastreador->nome_operadora}} - {{$rastreador->pais_operadora}}</option>
                            @foreach($operadoras as $operadora)
                                <option value="{{ $operadora->id }}">{{$operadora->nome_operadora}} - {{$operadora->pais }}</option>
                            @endforeach
                          </select>
                        </div>
    	              	</div>
                  </div>
            </div>

            <div class="col-md-6">
		             <button type="submit" class="btn btn-success">Salvar</button>
		             <a class="btn btn-primary" href="{{ route('rastreadores.index')}}" role="button">Voltar</a>
		        </div>
            </form>

            <div class="box-footer clearfix">
            	
            </div>
          </div>

        </div>

      </div>

@stop