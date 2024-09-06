<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?> </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="/css/base.css">
</head>

<body class="body">
  <main class="container-form">

    <header class="header-module">
      <div class="header-module__logo">
        <img src="assets/Logo-proyecto(1).png" alt="Hotel Logo">
        <h1>Hotel San Jose Real</h1>
      </div>

      <nav class="nav-container">
        <ul class="horizontal-list">
          <li>
            <a class="item">
              <span class="material-symbols-outlined item__icon">
                home
              </span>
              <p class="item__label">Home</p>
            </a>
          </li>
          <li>
            <a class="item">
              <span class="material-symbols-outlined tem__icon">
                person
              </span>
              <p class="item__label">Iniciar sesion</p>
            </a>
          </li>
          <li>
            <a class="item" href="registro.php">
              <span class="material-symbols-outlined tem__icon">
                person_check
              </span>
              <p class="item__label">Registro</p>
            </a>
          </li>
          <li>
            <a class="item">
              <span class="material-symbols-outlined tem__icon">
                checkbook
              </span>
              <p class="item__label">Reservas</p>
            </a>
          </li>
        </ul>

        <ul class="horizontal-list">
          <li>
            <a class="item">
              <span class="material-symbols-outlined tem__icon">
                open_in_new
              </span>
              <p class="item__label">Sobre</p>
            </a>
          </li>
          <li>
            <a class="item">
              <span class="material-symbols-outlined tem__icon">
                bed
              </span>
              <p class="item__label">Habitaciones</p>
            </a>
          </li>
          <li>
            <a class="item">
              <span class="material-symbols-outlined tem__icon">
                loyalty
              </span>
              <p class="item__label">Planes</p>
            </a>
          </li>
          <li>
            <a class="item">
              <span class="material-symbols-outlined tem__icon">
                rate_review
              </span>
              <p class="item__label">Opiniones</p>
            </a>
          </li>
        </ul>
      </nav>
    </header>

    <?=$output?>

  </main>
  <footer class="footer-section">
    <div class="container">
      <div class="footer-cta pt-5 pb-5 d-flex">
        <div class="single-cta">
          <i class="fas fa-map-marker-alt"></i>
          <div class="cta-text">
            <h4>Ubicación</h4>
            <span>Sibate</span>
          </div>
        </div>
        <div class="single-cta">
          <i class="fas fa-phone"></i>
          <div class="cta-text">
            <h4>Teléfono</h4>
            <span>00000000000</span>
          </div>
        </div>
        <div class="single-cta">
          <i class="far fa-envelope-open"></i>
          <div class="cta-text">
            <h4>Correo</h4>
            <span>sjrealgmail.com</span>
          </div>
        </div>
      </div>
      <div class="footer-content pt-5 pb-5">
        <div class="footer-widget">
          <div class="footer-logo">
            <img src="Logo-proyecto(1).png" class="img-fluid" alt="Logooo">
          </div>
          <div class="footer-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          </div>
          <div class="footer-social-icon">
            <span>Redes Sociales</span>
            <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
            <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
          </div>
        </div>

        <div class="footer-widget">
          <div class="footer-widget-heading">
            <h3>Menu</h3>
          </div>
          <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Experiencias</a></li>
            <li><a href="#">Habitaciones</a></li>
            <li><a href="#">Ofertas</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Experiencias</a></li>
            <li><a href="#">Sección</a></li>
            <li><a href="#">Sección</a></li>
          </ul>
        </div>

        <div class="footer-widget">
          <div class="footer-widget-heading">
            <h3>Contáctanos</h3>
          </div>
          <div class="footer-text mb-25">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a enim nec nisl ullamcorper eleifend. Praesent risus leo, fringilla et ipsum.</p>
          </div>
          <div class="subscribe-form">
            <form action="#">
              <input type="text" placeholder="Email Address">
              <button><i class="fab fa-telegram-plane"></i></button>
            </form>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 text-center text-lg-left">
            <div class="copyright-text">
              <p>&copy; 2024, All Rights Reserved <a href="https://codepen.io/anupkumar92/">SENA</a></p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>