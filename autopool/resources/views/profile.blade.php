<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home Usuario</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/paleta.css" id="paleta">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://use.fontawesome.com/d83e440824.js"></script>
    <link rel="icon"
      type="images/ico"
      href="images/favicon_autopool_16x16.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  </head>
  <body>
    @include('_header')
    

		<div class="registro_bienvenida">
				<h1>Bienvenido {{Auth::user()->name}}</h1>
		</div>
			<div class="img">
				@if(Auth::user()->profile_picture != null) 
					<img class="img-responsive" src="{{ asset('storage/uploads/files/'.Auth::user()->profile_picture) }} ">
				@endif
			</div> 
		



		<div class="contenedor_formulario">
    		<div class="wrap">
					<div class="">
						<p>Cambia tu contraseña</p>

					</div>
    			<form action="" class="formulario" name="formulario-registro" method="post">
    				<div>
    					<div class="input_group">
    						<input class="inputs" type="password" id="nombre" name="passwordOld">

    						<label class="label" for="nombre">Tu contraseña:</label>

								 <!-- <?php // if (isset($_POST['password'])): ?>
									<?php // if (!isset($validador['pass'])): ?>
										<span id='register_password_errorloc' class='error'>
											 <?php // echo 'Su contraseña fue cambiada con exito' ;?>
										</span>
									<?php // endif; ?>
								<?php // endif; ?> -->

							<!-- <?php // if (isset($_POST['password'])): ?>
									<?php // if (isset($validador['pass'])): ?>
										<span id='register_password_errorloc' class='error'>
										 <?php //echo $validador['pass'] ;?>
										</span>
									 <?php // endif; ?>
								<?php // endif; ?> -->

    					</div>

              <div class="input_group">
                <input class="inputs" type="password" id="apellido" name="password">
                <label class="label" for="apellido">Nueva Contraseña:</label>

								<!-- <?php // if (isset($_POST['password2'])): ?>
									<?php // if (isset($validador['pass'])): ?>
										<span id='register_password_errorloc' class='error'>
										 <?php //  echo $validador['pass'] ;?>
										</span>
									 <?php // endif; ?>
								<?php // endif; ?> -->

              </div>

							<div class="input_group">
                <input class="inputs" type="password" id="apellido" name="password2">
                <label class="label" for="apellido">Confirmar Contraseña:</label>

								 <!-- <?php // if (isset($_POST['nuevapassword2'])): ?>
									<?php // if (isset($validador['pass'])): ?>
										<span id='register_password_errorloc' class='error'>
										 <?php // $validador['pass'] ;?>
										</span>
									 <?php // endif; ?>
								<?php // endif; ?> -->

              </div>




							<!-- <div class="input_group checkbox">
								<?php //if ($_SESSION['accion']['conductor'] != NULL ): ?>
									<input type="checkbox" name="accion[conductor]" id="conductor" value="conductor" checked=''>
								<?php// else: ?>
									<input type="checkbox" name="accion[conductor]" id="conductor" value="conductor">
								<?php //endif; ?>
									<label for="conductor">Conductor</label>

								<?php //if ($_SESSION['accion']['acompanante'] != NULL): ?>
									<input type="checkbox" name="accion[acompanante]" id="acompanante" value="acompanante" checked=''>
								<?php //else: ?>
									<input type="checkbox" name="accion[acompanante]" id="acompanante" value="acompanante">
								<?php //endif; ?>


								<label for="acompanante">Acompanante</label>
							</div> -->

							 <input type="submit" id="btn_submit" value="Enviar" name='submit'>
						</div>
					</form>
			</div>
		</div>







    @include('_footer')
        <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
  </body>
</html>
