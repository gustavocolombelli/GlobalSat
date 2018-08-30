@extends('adminlte::page')

@section('title', ' - Novo veículo')

@section('content_header')
 
@stop

@section('content')
@include('admin.includes.mensagens')
     <div class="row">
        <div class="col-md-4">
             <a class="btn btn-success" href="{{ route('veiculos.cadastrar') }}" role="button">Adicionar Novo</a>
        </div>
        
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Veículos</h3>
            </div>
            
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Placa</th>
                  <th>Chassi</th>
                  <th>Ano Fabricação</th>
                  <th>Nome rastreador</th>
                  <th>Serial</th>
                  <th>Operadora</th>
                  <th>Código</th>
                  <th>Pais Operadora</th>
                  <th>Ação</th>
                </tr>
                @forelse($veiculos as $veiculo)
                  <tr>
                      <td>{{$veiculo->placa}}</td>
                      <td>{{$veiculo->chassi}}</td>
                      <td>{{$veiculo->ano_fabricacao}}</td>
                      <td>{{$veiculo->nome}}</td>
                      <td>{{$veiculo->serial}}</td>
                      <td>{{$veiculo->nome_operadora}}</td>
                      <td>{{$veiculo->codigo_operadora}}</td>
                      <td>{{$veiculo->pais}}</td>
                      <td>
                        <div>
                          <a class="btn btn-warning btn-xs" href="{{ url('/editar-veiculo/'.$veiculo->placa) }}" role="button">Editar</a>  
                          <a class="btn btn-danger btn-xs"href="{{ url('/excluir-veiculo/'.$veiculo->placa) }}" role="button">Excluir</a>  
                        </div>
                      </td>
                  </tr>
                @empty
                @endforelse
              </table>
            </div>

            <div class="box-footer clearfix">
              {{ $veiculos->links() }}
            </div>
          </div>

        </div>

      </div>
@stop