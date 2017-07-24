  <body>

    <div class="container">

        <header class="main-header">

          <ul class="login">

            @if(Auth::check())
            <li><a id="none" href="register">Registrarme</a></li>
            <li><a href="/login">Ingresar</a></li>
            <li><a href="/profile">Mi Cuenta</a></li>
            <li><a href="/logout">Desloguear</a></li>
            

            @else
            <li><a id="none" href="/register">Registrarme</a></li>
            <li><a href="/login">Ingresar</a></li>
            <li><a href="/profile">Mi Cuenta</a></li>
            @endif
            <li><a href="#" class="icon"><span><i class="fa fa-asterisk" aria-hidden="true"></i></span></a></li>
          </ul>
          <a href="home">
          <img class="imagen" src="/images/autopool_v2_w200.png" alt="autopool">
          </a>
          <nav class="main-nav">
            <ul>
              <li><a href="#anchor_content_2">Qué es autopool</a></li>
              <li><a href="#anchor_content_3">Como funciona</a></li>
              <li><a href="#">Pasajeros</a></li>
              <li><a href="#">Conductores</a></li>
              <li><a href="faq">Preguntas Frecuentes</a></li>
            </ul>
          </nav>
        </header>
      </div>