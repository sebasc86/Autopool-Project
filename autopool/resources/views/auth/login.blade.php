<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>autopool - Comparte tu viaje</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/paleta.css" id="paleta">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://use.fontawesome.com/d83e440824.js"></script>
    <link rel="icon"
      type="images/ico"
      href="images/favicon_autopool_16x16.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    @include('_header')

    <div class="registro_bienvenida">
      <h2>Ingresá a tu cuenta</h2>
    </div>

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

      @include('_footer')




    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>


  </body>

</html>
