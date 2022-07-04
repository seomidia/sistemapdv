@extends('layouts.install', ['no_header' => 1])
@section('title', 'Instalação do PDV')

@section('content')
<div class="container">
    
    <div class="row">
      <h3 class="text-center">{{ config('app.name', 'POS') }} Instalação <small>Passo 1 de 3</small></h3>

        <div class="col-md-8 col-md-offset-2">
          <hr/>
          @include('install.partials.nav', ['active' => 'install'])

          <div class="box box-primary active">
            <!-- /.box-header -->
            <div class="box-body">
              <h3 class="text-success">
                Bem-vindo à instalação do PDV!
              </h3>
              <p><strong class="text-danger">[IMPORTANTE]</strong> Antes de iniciar a instalação, certifique-se de ter as seguintes informações prontas com você:</p>

              <ol>
                <li>
                  <b>Nome da Aplicação</b> - Algo curto e significativo.
                </li>
                <li>
                  <b>Informações do banco de dados:</b>
                  <ul>
                    <li> Nome de usuário </li>
                     <li> senha </li>
                     <li> Nome do banco de dados </li>
                     <li> Host de banco de dados </li>
                  </ul>
                </li>
                <li>
                  <b>Configuração de Email</b> - Detalhes SMTP (opcional)
                </li>
                
              </ol>

              @include('install.partials.e_license')
              
              <a href="{{route('install.details')}}" class="btn btn-primary pull-right">Eu concordo, vamos lá!</a>
            </div>
          <!-- /.box-body -->
          </div>

        </div>

    </div>
</div>
@endsection
