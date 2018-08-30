@extends('adminlte::page')

@section('title', ' - Nova Operadora')

@section('content_header')
 
@stop

@section('content')
@include('admin.includes.mensagens')
     <div class="row">
        <div class="col-md-4">
             <a class="btn btn-success" href="{{ route('rastreadores.cadastrar')}}" role="button">Adicionar Novo</a>
        </div>
        
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Rastreadores</h3>
            </div>
            
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Serial</th>
                  <th>Nome</th>
                  <th>Operadora</th>
                  <th>Pais operadora</th>
                  <th>Ação</th>
                </tr>
                @forelse($rastreadores as $rastreador)
                <tr>
                  <td>{{$rastreador->serial}}</td>
                  <td>{{$rastreador->nome}}</td>
                  <td>{{$rastreador->nome_operadora}}</td>
                  <td>{{$rastreador->pais}}</td>
                  <td>
                    <div>
                      <a class="btn btn-warning btn-xs" href="{{ url('/editar-rastreador/'.$rastreador->serial) }}" role="button">Editar</a>  
                      <a class="btn btn-danger btn-xs" href="{{ url('/excluir-rastreador/'.$rastreador->serial) }}" role="button">Excluir</a>  
                    </div>
                </td>
                </tr>
                @empty
                @endforelse
              </table>
            </div>

          </div>

        </div>

      </div>
@stop