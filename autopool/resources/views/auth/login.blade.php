@extends('layouts.master')

@section('content')

    <div class="registro_bienvenida">
      <h2>Ingresá a tu cuenta</h2>
    </div>

@endsection

@section('form')

    <div class="contenedor_ingresar">
    		<div class="wrap">
    			<form action="" class="ingresar" name="formulario_ingreso" method="post">
          {{csrf_field()}}
    				<div>

    					<div class="input_group_ingresar ingresar_email">
                
                  <input type="email" id="email" name="email" value="{{old('email')}}">
      						<label class="label" for="correo">Correo:</label>
                  <span class="haserror" id="error_email"></span>
                  {!! $errors->first('email', "<span id='register_name_errorloc' class='error'>:message</span>") !!}

    					</div>

    					<div class="input_group_ingresar ingresar_password">
    						
                <input type="password" id="pass" name="password">
    						<label class="label" for="pass">Contraseña:</label>
                <span class="haserror" id="error_password"></span>
                {!! $errors->first('password', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
              
              </div>

                
              <div class="input_group_ingresar checkbox">

                  <input type="checkbox" name="remember" id='remember' {{ old('remember') ? 'checked' : '' }}>
                  <label for="remember">Recordarme</label>
              
    					</div>
    					<input type="submit" id="btn_submit_login" value="Enviar">
    				</div>
    			</form>

          <a class="recuperar" href="{{ route('password.request') }}">Recuperar contraseña </a>

    		
        </div>
    	</div>

@endsection


