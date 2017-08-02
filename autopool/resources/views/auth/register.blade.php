@extends('layouts.master')

@section('content')

    <div class="registro_bienvenida">
      <h2>Registro de nuevo usuario</h2>
      <p class="registro_welcome_txt">¡Estás a solo un paso de ser parte de una Comunidad de héroes que luchan contra la congestión vial, los retrasos, la polución y los gastos redundantes!</p>
    </div>

@endsection

@section('form')
    <div class="contenedor_formulario">
    		<div class="wrap">
    			<form action="" class="formulario" name="formulario_registro" method="post" enctype="multipart/form-data">
            <div>
              {{csrf_field()}}
      				<div class="input_group ingresar_nombre_reg">
      						<input class="inputs" type="text" id="name" name="name" placeholder="Nombre" value="{{old('name')}}"/>
                    <span class="haserror" id="error_name"></span>
                  {!! $errors->first('name', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
     					</div>

                <div class="input_group ingresar_apellido_reg">
                  <input class="inputs" type="text" id="lastname" name="lastname" placeholder="Apellido" value="{{old('lastname')}}"/>
                  <span class="haserror" id="error_surname"></span>
                  {!! $errors->first('lastname', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
                </div>

      					<div class="input_group ingresar_email_reg">
      						<input class="inputs" type="email" id="email" name="email" placeholder="Correo" value="{{old('email')}}">
                  <span class="haserror" id="error_email"></span>
                  {!! $errors->first('email', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
      					</div>


      					<div class="input_group ingresar_password_reg">
      						<input class="inputs" type="password" id="pass" placeholder="Contraseña" name="password">
                  <span class="haserror" id="error_password"></span>
                  {!! $errors->first('password', "<span id='register_name_errorloc' class='error'>:message</span>") !!}

                </div>

      					<div class="input_group ingresar_password2_reg">
      						<input class="inputs" type="password" id="password_confirmation" placeholder="Repetir Contraseña" name="password_confirmation">
                  <span class="haserror" id="error_password2"></span>
                  {!! $errors->first('password_confirmation', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
      					</div>



                <div class="input_group ingresar_edad_reg">
                    <input class="inputs" type="text" id="age" name="age" placeholder="Edad" value="{{old('age')}}">
                    <span class="haserror" id="error_edad"></span>
                    {!! $errors->first('age', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
                </div>



                <div class="input_group checkbox">
                  <input type="radio" name="sex" id="man" value="1"
                  {{old('sex') == '1' ? 'checked="checked"' : ''}}
                  />
                  <label for="man">Hombre</label>
                  <input type="radio" name="sex" id="woman" value="2"
                  {{old('sex') == '2' ? 'checked="checked"' : ''}}
                  />
                  <label for="woman">Mujer</label><br>
                  <span class="haserror" id="error_sexo"></span>
                  {!! $errors->first('sex', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
                  {!! $errors->first('sex.1', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
                </div>


                <div class="input_group checkbox">
                  <input type="checkbox" name="accion[driver]" id="driver" value="1"
                  {{old('accion.driver') == '1' ? 'checked="checked"' : ''}}
                  />
                  <label for="driver">Conductor</label>
                  <input type="checkbox" name="accion[co-driver]" id="co-driver" value="2"
                  {{old('accion.co-driver') == '2' ? 'checked="checked"' : ''}}
                  />
                  <label for="co-driver">Acompañante</label><br>
                  <span class="haserror" id="error_conductor_acomp"></span>
                  {!! $errors->first('accion.driver', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
                  {!! $errors->first('accion.co-driver', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
                </div>

                <div class="input_group checkbox">
                  <input type="checkbox" name="terminos" id="terminos" value="1"
                  {{old('terminos') == '1' ? 'checked="checked"' : ''}}
                  />
                  <label for="terminos">Acepto los Términos y Condiciones</label><br>
                  <span class="haserror" id="error_acepte"></span>
                  {!! $errors->first('terminos', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
                </div>


               <div class="file-upload">
                    <label for="upload" class="file-upload__label">Subir Imagen</label>
                    <input id="upload" class="file-upload__input" type="file" name="profile_picture">
                    <span id='register_password_errorloc' class='permitido'> Solamente se permiten fotos jpg, jpeg, gif y png con un maximo de 2Mb</span>
                    {!! $errors->first('profile_picture', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
              </div>


    					<input type="submit" id="btn_submit_reg" value="Enviar" name='submit_reg'>


      			</div>
    			</form>
    		</div>
    	</div>
@endsection
