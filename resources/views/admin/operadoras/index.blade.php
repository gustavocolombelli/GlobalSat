@extends('adminlte::page')

@section('title', ' - Nova Operadora')

@section('content_header')
 
@stop

@section('content')
@include('admin.includes.mensagens')
     <div class="row">
        <div class="col-md-4">
             <a class="btn btn-success" href="{{ route('operadoras.cadastrar')}}" role="button">Adicionar Novo</a>
        </div>
        
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Operadoras</h3>
            </div>
            
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">Código</th>
                    <th>Nome</th>
                    <th>País</th>
                    <th>Ação</th>
                   </tr>
                </thead>

                <tbody>
                @forelse($operadoras as $operadora)
                  <tr>
                    <td>{{$operadora->codigo_operadora}}</td>
                    <td>{{$operadora->nome_operadora}}</td>
                    <td>{{$operadora->pais}}</td>
                    <td>
                      <div>
                        <a class="btn btn-warning btn-xs" href="{{ url('/editar-operadora/'.$operadora->id) }}" role="button">Editar</a>  
                        <a class="btn btn-danger btn-xs" href="{{ url('/excluir-operadora/'.$operadora->id) }}" role="button">Excluir</a>  
                      </div>
                   </td>
                  </tr>
                @empty
                @endforelse
                </tbody>

              </table>
            </div>

            <div class="box-footer clearfix">
              
                     {{ $operadoras->links()}}
           
            </div>
          </div>

        </div>

      </div>


@stop