@extends('layouts.install')
@section('title', 'Installation/Update')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <br/><br/>

            <div class="box box-primary active">
                <!-- /.box-header -->
                <div class="box-body">

              @if(session('error'))
                <div class="alert alert-danger">
                    {!! session('error') !!}
                </div>
              @endif

              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                </div>
              @endif

              <form class="form" id="details_form" method="post" 
                      action="{{$action_url}}">
                    {{ csrf_field() }}

                    <h2> Detalles de la licencia - <code>{{$module_display_name}} Module</code><br/><small class="text-danger"> Asegúrese de proporcionar la información correcta sobre la licencia</small></h2>
                    <hr/>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="license_code">Código de licencia:*</label>
                            <input type="text" name="license_code" required class="form-control" id="license_code" value="8584555848574">

                            @if($intruction_type == 'uf')
                                <p class="help-block"><a href="https://kosari.net" target="_blank">¿Dónde está mi clave de licencia?</a></p>
                            @endif

                            @if($intruction_type == 'cc')
                                <p class="help-block"><a href="https://kosari.net" target="_blank">¿Dónde está mi clave de licencia?</a></p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="login_username">Usuario Login:*</label>
                            <input type="text" name="login_username" required class="form-control" id="login_username" value="kosari">

                            @if($intruction_type == 'uf')
                                <p class="help-block"><a href="https://kosari.net" target="_blank" class="text-success">¿Dónde está mi nombre de usuario?</a></p>
                            @endif

                            @if($intruction_type == 'cc')
                                <p class="help-block">Introduzca el nombre de usuario que utiliza para iniciar sesion</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="envato_email">Tu Email:</label>
                          <input type="email" name="ENVATO_EMAIL" class="form-control" id="envato_email" placeholder="optional" value="kosaricorp@gmail.com">
                          <p class="help-block">Boletín y asistencia</p>
                        </div>
                    </div>

                    @if($intruction_type == 'cc')
                        @include('install.partials.e_license')
                    @endif

                    <div class="col-md-12">
                        <button type="submit" id="install_button" class="btn btn-primary pull-right">Acepto, ENVIAR</button>
                    </div>
              </form>
            </div>
          <!-- /.box-body -->
          </div>

            
        </div>

    </div>
</div>
@endsection

@section('javascript')
  <script type="text/javascript">
    $(document).ready(function(){
      $('form#details_form').submit(function(){
        $('button#install_button').attr('disabled', true).text('Installing...');
        $('div.install_msg').removeClass('hide');
        $('.back_button').hide();
      });
    })
  </script>
@endsection