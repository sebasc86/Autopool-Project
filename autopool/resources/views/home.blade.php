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
    

    <div class="home_content_1">
      <div class="home_main_image">
        <div class="bg_text">
          <h2>Un conductor, un pasajero, un auto menos en la calle ¡Llegó autopool!</h2>
        </div>

      </div>
    </div>

    <div class="home_content_2" id="anchor_content_2">
      <h2>Qué es autopool</h2>
      <p>¿Alguna vez pensaste en el tiempo y la energía que nos ahorraríamos si tuviésemos una forma eficiente de ir y venir desde nuestros hogares hacia el trabajo y viceversa?</p>
      <p> El transporte público todavía no es lo que debería. Los costos de tener un vehículo partciular parecen pensados más para su capacidad de 4 ocupantes que para 1 persona de uso urbano.</p>
      <p>Ni hablar del tiempo que requiere desplazarse en hora pico o el consumo de combustible.</p>
      <p>¡Por todo esto es que nace autopool! Una plataforma que busca unir personas con y sin automóvil para que compartan trayectos, costos, y lo más importante, la compañía y la conversación.</p>
      <section class="home_benefits">
        <div class="home_benefits_1">
          <img class="home_benef_img" src="images/home_benef_1_img.png" alt="Ayudarse los unos a los otros">
          <div class="home_benefits_txt home_benefits_1_txt">
          Ayudarse los unos a los otros de manera organizada y segura.
          </div>
        </div>
        <div class="home_benefits_2">
          <img class="home_benef_img" src="images/home_benef_2_img.png" alt="Ahorrar juntos">
          <div class="home_benefits_txt home_benefits_2_txt">
          Compartir con otros es ahorrar en tiempo y combustible.
          </div>
        </div>
        <div class="home_benefits_3">
          <img class="home_benef_img" src="images/home_benef_3_img.png" alt="Aprovechemos lo inevitable">
          <div class="home_benefits_txt home_benefits_3_txt">
          Haremos el viaje de todas manera. ¿Por qué no aprovecharlo para sumar?
          </div>
        </div>
        <div class="home_benefits_4">
          <img class="home_benef_img" src="images/home_benef_4_img.png" alt="Menos autos es más aire puro">
          <div class="home_benefits_txt home_benefits_4_txt">
          Menos vehículos en la calle son menos emisiones que contaminan y menos ruido.
          </div>
        </div>
      </section>

    </div>

    <div class="home_content_3" id="anchor_content_3">
      <h2>Cómo funciona</h2>
      <iframe width="853" height="480" src="https://www.youtube.com/embed/OiCRM2c4T84" frameborder="0" allowfullscreen></iframe>
      <!-- <video src="video/home_video.webm" width="800px" controls poster>
        <p>Lo sentimos pero la versión de su navegador no permite reproducir este formato de video.</p>
      </video> -->
      <p class="home_content_3_txt">¿Qué estás esperando para viajar de forma más inteligente?</p>
      <button class="home_button" type="submit" name="registrarte"><a class="button_video_link" href="registro.php">Registrate</a></button>
    </div>

    <div class="home_content_4" id="anchor_content_4">
      <h2>Algunas preguntas frecuentes</h2>
      <p class="home_content_4_txt">Estas son algunas de las preguntas más comunes de nuestros usuarios:</p>
      <div class="home_content_4_faq">
          <section class="home_content_4_faq_1">
            <div class="home_content_4_faq_1_icon">
              <img src="images/favicon_autopool_16x16.png" alt="autobullet">
            </div>
            <h3 class="faq">Pregunta 1</h3>
            <p class="home_content_4_faq_1_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </section>
          <section class="home_content_4_faq_2">
            <div class="home_content_4_faq_1_icon">
              <img src="images/favicon_autopool_16x16.png" alt="autobullet">
            </div>
            <h3 class="faq">Pregunta 2</h3>
            <p class="home_content_4_faq_2_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </section>
          <section class="home_content_4_faq_3">
            <div class="home_content_4_faq_1_icon">
              <img src="images/favicon_autopool_16x16.png" alt="autobullet">
            </div>
            <h3 class="faq">Pregunta 3</h3>
            <p class="home_content_4_faq_3_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </section>
      </div>
    </div>
    <div class="cant_usuarios">
        <p></p>
    </div>
    @include('_footer')
    
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    
  </body>
</html>