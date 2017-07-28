@extends('layouts.master')

@section('content')

    <div class="registro_bienvenida">
      <h2>Estas a Un Solo Paso</h2>
    </div>

@endsection

@section('form')


    <div class="contenedor_ingresar">
    		<div class="wrap">
    			<form action="" class="ingresar" name="formulario_ingreso2" method="post">
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
               				<span class="haserror" id="error_phone"></span>
                			{!! $errors->first('phone', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
              
             		 	</div> 

             		 	<div class="input_group_ingresar ingresar_password">
    						
                			<input type="text" id="trademark" name="trademark">
    						<label class="label" for="trademark">Marca:</label>
               				<span class="haserror" id="error_trademark"></span>
                			{!! $errors->first('trademark', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
              
             		 	</div> 

             		 	<div class="input_group_ingresar ingresar_password">
    						
                			<input type="text" id="model" name="model">
    						<label class="label" for="model">Modelo:</label>
               				<span class="haserror" id="error_model"></span>
                			{!! $errors->first('model', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
              
             		 	</div> 

             		 	<div class="input_group_ingresar ingresar_password">
    						
                			<input type="text" id="year" name="year">
    						<label class="label" for="year">Año:</label>
               				<span class="haserror" id="error_year"></span>
                			{!! $errors->first('year', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
              
             		 	</div> 

             		 	<div class="input_group_ingresar ingresar_password">
    						
                			<input type="text" id="color" name="color">
    						<label class="label" for="color">Color:</label>
               				<span class="haserror" id="error_year"></span>
                			{!! $errors->first('color', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
              
             		 	</div> 

						<div class="input_group_ingresar ingresar_password">
    						
                			<input type="text" id="license_plate" name="license_plate">
    						<label class="label" for="license_plate">Dominio:</label>
               				<span class="haserror" id="error_license_plate"></span>
                			{!! $errors->first('license_plate', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
              
             		 	</div>

 						<div class="input_group_ingresar ingresar_password">
    						
                			<input type="text" id="capacity" name="capacity">
    						<label class="label" for="capacity">Capacidad Pasajeros:</label>
               				<span class="haserror" id="error_capacity"></span>
                			{!! $errors->first('capacity', "<span id='register_name_errorloc' class='error'>:message</span>") !!}
              
             		 	</div>  

             		 {{-- completar formulario con autos --}}

                
					
    					<input type="submit" id="btn_submit_login" value="Enviar">
    				</div>
    			</form>

     
    		
        </div>
    	</div>

@endsection