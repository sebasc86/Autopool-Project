@extends('layouts.master')

@section('content')

    <div class="registro_bienvenida">
      <h2>Cambia tus datos</h2>
    </div>

@endsection

@section('form')
    <div class="contenedor_formulario">
    		<div class="wrap">
    			<form action="" class="formulario" name="formulario_modificacion " method="post" enctype="multipart/form-data">
            <div>
              {{csrf_field()}}
      				<div class="input_group">


    						<div class="input_group ingresar_password">
    							<input class="inputs" type="text" id="phone" name="phone" placeholder="Telefono" value="{{old('name')}}"/>
               		<span class="haserror" id="error_phone"></span>
                	{!! $errors->first('phone', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
              
             		 </div> 

             			<div class="input_group ingresar_email_reg">
             			<input class="inputs" type="email" id="email" name="email" placeholder="Correo" value="{{old('name')}}"/>
			            <span class="haserror" id="error_email"></span>
			            {!! $errors->first('email', "<span id='register_name_errorloc' class='error'>:message</span>") !!}

      					</div>

      					<div class="input_group ingresar_password_reg">
      						<input class="inputs" type="password" id="pass" name="password" placeholder="Contraseña:" value="{{old('name')}}"/>
                  <span class="haserror" id="error_password"></span>
                  {!! $errors->first('password', "<span id='register_name_errorloc' class='error'>:message</span>") !!}

                </div>

      					<div class="input_group ingresar_password2_reg">
      						<input class="inputs" type="password" id="password_confirmation" name="password_confirmation" placeholder="Repetir Contraseña" value="{{old('name')}}"/>
                  <span class="haserror" id="error_password2"></span>
                  {!! $errors->first('password_confirmation', "<span id='register_name_errorloc' class='error'>:message</span>") !!}              
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


              <div class="file-upload">
              			<p>*Cambia tu foto de perfil*<p>
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