@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <painel titulo="Dashboard">
                <div class="col-md-4">
                  <painel titulo="Conteúdo 1">
                    Teste de conteúdo
                  </painel>
                </div>
                <div class="col-md-4">
                  <painel titulo="Conteúdo 2">
                    Teste de conteúdo
                  </painel>
                </div>
                <div class="col-md-4">
                  <painel titulo="Conteúdo 3">
                    Teste de conteúdo
                  </painel>
                </div>

              </painel>
          </div>
      </div>
  </div>
{{-- <example-component></example-component> --}}
@endsection
