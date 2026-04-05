@extends('layouts.install', ['no_header' => 1])
@section('title', 'Welcome - POS Installation')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="page-header text-center">Sistemas Estrategicos</h1>

        <div class="col-md-8 col-md-offset-2">
          <h3 class="text-success">Great! <br/>La aplicación se ha instalado correctamente.</h3>
          <hr>
          <p>Todos los datos de la solicitud se guardan en <b>.env</b> Puede cambiarlos en cualquier momento allí.</p>

          <p>Empieza por registrar tu empresa <a href="{{route('business.getRegister')}}">here</a>.</p>
        </div>
    </div>
</div>
@endsection
