@extends('layouts.master')

@section('content')
    <div class="registro_bienvenida">
      <h2>Resetea tu contraseña</h2>
    </div>
@endsection 

@section('form')

<div class="contenedor_ingresar">
  <div class="wrap">

     <form class="ingresar" method="POST" action="{{ route('password.request') }}" name="formulario_recuperar_pass">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

            <div class="input_group_ingresar ingresar_email">
                  <label class="label" for="correo">Correo:</label>
                  <input type="email" id="email" name="email" value="{{ $email or old('email') }}" required autofocus>
                            
                  <span class="haserror" id="error_email"></span>
                  {!! $errors->first('email', "<span id='register_name_errorloc' class='error'>:message</span>") !!}

             </div>


              <div class="input_group_ingresar ingresar_password">
                
                <input type="password" id="password" name="password" required>
                <label class="label" for="password">Contraseña:</label>
                <span class="haserror" id="error_password"></span>
                {!! $errors->first('password', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
              
              </div>

              <div class="input_group_ingresar ingresar_password">
                  <input class="inputs" type="password" id="password_confirm" name="password_confirmation" required>
                  <label class="label" for="password-confirm">Confirmar Contraseña:</label>
                  <span class="haserror" id="error_password2"></span>
                  {!! $errors->first('password_confirmation', "<span id='register_name_errorloc' class='error'>:message</span>") !!}              
              </div>

              <input type="submit" id="btn_submit_login" value="Cambiar">



            </form>
        </div>
    </div>

@endsection

                    

