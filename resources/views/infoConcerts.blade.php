<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

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
            <a class="nav-link sign-in" href="#">Sign in
            </a>
                
          </li>
          <li class="nav-item sign-up">
            <a type="button" class="btn sign-up">Sign up</a>
            </a>
          </li>
        </ul>
          
        </div>
      </div>
      </nav>


<body>
<div class="container mt-4 jutify" style="width: 80%;">
    <div class="d-flex justify-content-between">
        <!-- Product Image on the left side -->
        <div class="card col-md-5">
            <img src="{{asset('img/concert1.jpg')}}" class="img-fluid rounded" alt="Product Image">
        </div>
        <!-- Product Information on the right side -->
        <div class="col-md-5">
            <h2 class="d-flex justify-content-center">Product Name</h2>
            <ul class="list-unstyled">
                <li><strong><i class="bi bi-geo-alt-fill"></i></strong> Product Location</li>
                <br>
                <li><strong><i class="bi bi-calendar"></i></strong> Product Date</li>
                <br>
                <li><strong><i class="bi bi-clock-fill"></i></strong> Product Time</li>
                <br>
                <li><strong><i class="bi bi-currency-dollar"></i></strong> 100.00</li>
            </ul>
            <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
    </div>
</div>

<div class="container jutify" style="width: 80%;">
  <div class="d-flex">
    <div class="card">
      <div class="card-body">
        Nirvana
        <a href="#" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        This is some text within a card body.
      </div>
    </div>
  </div>
</div>


<div class="container mt-4 jutify" style="width: 80%;">
  <div class="d-flex justify-content-between">
      <!-- Product Image on the left side -->
      <div class="card col-md-5">
          <img src="{{asset('img/concert1.jpg')}}" class="img-fluid rounded" alt="Product Image">
      </div>
      <!-- Product Information on the right side -->
      <div class="col-md-5">
          <h2 class="d-flex justify-content-center">Product Name</h2>
          <ul class="list-unstyled">
              <li><strong><i class="bi bi-geo-alt-fill"></i></strong> Product Location</li>
              <br>
              <li><strong><i class="bi bi-calendar"></i></strong> Product Date</li>
              <br>
              <li><strong><i class="bi bi-clock-fill"></i></strong> Product Time</li>
              <br>
              <li><strong><i class="bi bi-currency-dollar"></i></strong> 100.00</li>
          </ul>
          <a href="#" class="btn btn-primary">Buy Now</a>
      </div>
  </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
