<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>

  <link href="/css/style.css" as="style" rel="preload">
  <link href="/css/style.css" rel="stylesheet">

</head>

<body>
  
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">
    
    <div class="header">
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="white nav-link scrollto">Inicio</a></li>
          <li><a href="#" class="white nav-link scrollto active">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
  
    </div>

  </header>

  <!-- <section id="hero">
    <div class="hero-container">
      <h1 class="no-margin centrar-texto white">Moisés Martínez Sánchez</h1>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>

  </section> -->

  <!-- <header class="header">

    <div class="contenedor">

      <div class="barra">
        <div>
          <h1 class="no-margin centrar-texto white">Moisés Martínez Sánchez</h1>
        </div>
        <nav class="nav">
          <a href="index.php" class="white">Inicio</a>
          <a href="#" class="white">Contacto</a>
        </nav>

      </div>

    </div>

  </header> -->

  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <span>Contáctame</span>
        <h2>Contáctame</h2>
        <p>Cualquier duda, puedes contactarme a <a href="mailto:">moises.martinez6605@alumnos.udg.mx</a></p>
      </div>

      <div class="row contenedor">

        <div class="col-lg-6">
          @if( $errors->any() )
            <ul>
              @foreach($errors->all() as $error)
                  <li class="text-center text-sm-center fs-5 fw-semibold">{{ $error }}</li>
              @endforeach
            </ul>
          @endif
          <form action="/contact" method="POST" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" value="{{ $name }}" required>
              </div>
              <br>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" value="{{ $email }}" required>
              </div>
              <br>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="6" placeholder="Comentario" required>{{ $message }}</textarea>
            </div>
            <br>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Tu comentario ha sido enviado. Gracias!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
          </form>
        </div>

      </div>
  </section>

</body>

</html>