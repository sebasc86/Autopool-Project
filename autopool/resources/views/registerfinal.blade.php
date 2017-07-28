@extends('layouts.master')

@section('content')

    <div class="registro_bienvenida">
      <h2>Estas a Un Solo Paso</h2>
    </div>

@endsection

@section('form')


    <div class="contenedor_ingresar">
    		<div class="wrap">
    			<form action="" class="ingresar" name="formulario_ingreso" method="post">
          {{csrf_field()}}
    				<div>

    					<div class="input_group_ingresar ingresar_email">
                
                  			<input type="text" id="document" name="document" value="{{old('document')}}">
      						<label class="label" for="document">Documento:</label>
                  			<span class="haserror" id="error_document"></span>
                  			{!! $errors->first('document', "<span id='register_name_errorloc' class='error'>:message</span>") !!}

    					</div>

    					<div class="input_group_ingresar ingresar_password">
    						
                			<input type="text" id="phone" name="phone">
    						<label class="label" for="phone">Telefono:</label>
               				<span class="haserror" id="error_password"></span>
                			{!! $errors->first('phone', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
              
             		 </div> 

             		 {{-- completar formulario con autos --}}

                
					
    					<input type="submit" id="btn_submit_login" value="Enviar">
    				</div>
    			</form>

     
    		
        </div>
    	</div>

@endsection