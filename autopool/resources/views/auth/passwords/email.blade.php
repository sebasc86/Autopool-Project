@extends('layouts.master')

@section('content')
    <div class="registro_bienvenida">
      <h2>Recuperá tu cuenta</h2>
    </div>
@endsection

@section('form')

<div class="contenedor_ingresar">
  <div class="wrap">
    <form class="ingresar" method="POST" action="{{ route('password.email') }}" name="formulario_recuperar_pass">
           {{ csrf_field() }}

            <div class="input_group_ingresar ingresar_email">
                <label class="label" for="correo">Correo:</label>
                  <input type="email" id="email" name="email" value="{{old('email')}}">
                            
                  <span class="haserror" id="error_email"></span>
                  {!! $errors->first('email', "<span id='register_name_errorloc' class='error'>:message</span>") !!}

             </div>

          <input type="submit" id="btn_submit_login" value="Enviar Por Mail">
  </div>
</div>      
        
@endsection
