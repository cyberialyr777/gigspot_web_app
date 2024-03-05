<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
  </head>


  <body>
    <header>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/concierto1.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/concierto2.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/concierto3.png') }}" class="d-block w-100" alt="...">
          </div>
          <button type="button" class="btn btn-carrusel">Buy tickets</button>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <header>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/concierto1.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/concierto2.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/concierto3.png') }}" class="d-block w-100" alt="...">
          </div>
          <button type="button" class="btn btn-carrusel">Buy tickets</button>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="#">GigSpot</a>
          <a class="navbar-brand fw-bold" href="#">GigSpot</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Events
                </a>
              </li>
              
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item sign-in">
              <a class="nav-link sign-in" href="loginView">Sign in
              <a class="nav-link sign-in" href="#">Sign in
              </a>
                  
            </li>
            <li class="nav-item sign-up">
              <a type="button" href="registerSclectionView" class="btn sign-up">Sign up</a>
              <a type="button" class="btn sign-up">Sign up</a>
              </a>
            </li>
          </ul>
            
          </div>
        </div>
      </nav>

      

      

      <div class="text-recent-concerts">
        <h1>Latest Concerts</h1>
      </div>
      <div class="container-fluid cards">
        <div class="row justify-content-center">
            <div class="card col-sm-4 derecha" style="width: 18rem;">
                <img src="{{ asset('img/imagen1.png') }}" class="card-img-top" alt="...">
                <img src="{{ asset('img/imagen1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5>Lorem Ipsum</h5>
                  <h5>Lorem Ipsum</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card col-sm-4 derecha" style="width: 18rem;">
                <img src="{{ asset('img/imagen2.png') }}" class="card-img-top" alt="...">
                <img src="{{ asset('img/imagen2.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5>Morat Concert</h5>
                  <h5>Morat Concert</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card col-sm-4" style="width: 18rem;">
                <img src="{{ asset('img/imagen3.png') }}" class="card-img-top" alt="...">
                <img src="{{ asset('img/imagen3.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5>Lorem Ipsum</h5>
                  <h5>Lorem Ipsum</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 anuncio1">
                <h3 class="text-anuncio">Want to go to some cool gigs?</h3>
                <a class="p-anuncio btn" >Click here</a>
                <h3 class="text-anuncio">Want to go to some cool gigs?</h3>
                <a class="p-anuncio btn" >Click here</a>
            </div>
            <div class="col-sm-6 anuncio2">
                <h3 class="text-anuncio">Tired of playing in your garage?</h3>
                <h6 class="p-anuncio btn">Sign up</h6>
                <h3 class="text-anuncio">Tired of playing in your garage?</h3>
                <h6 class="p-anuncio btn">Sign up</h6>
            </div>

        </div>

      </div>
      
    
  </body>

  <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="container foter">
    <section class="container foter">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>GigSpot
              <i class="fas fa-gem me-3"></i>GigSpot
            </h6>
            <p>
              Lorem ipsum
              Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Sign in</a>
              <a href="#!" class="text-reset">Sign in</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Sign up</a>
              <a href="#!" class="text-reset">Sign up</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Buy tickets</a>
              <a href="#!" class="text-reset">Buy tickets</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Vhsa, Tab 86453, Mexico</p>
            <p><i class="fas fa-home me-3"></i> Vhsa, Tab 86453, Mexico</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              gigspot@gmail.com
              gigspot@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> 01 234 567 89</p>
            <p><i class="fas fa-phone me-3"></i> 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">GigSpot.com</a>
      © 2024 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">GigSpot.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script>
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function(){
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
      } else {
        nav.classList.remove('bg-dark', 'shadow');
      }
    });
  </script>

  <script>
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function(){
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
      } else {
        nav.classList.remove('bg-dark', 'shadow');
      }
    });
  </script>
</html>