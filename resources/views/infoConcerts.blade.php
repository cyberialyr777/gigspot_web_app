@extends('plantilla_navbar')

@section('contenido')
<header>
  <div class="container-fluid slide">

  </div>
  <h1 class="title-img">Event</h1>
</header>

<div class="container mt-4 jutify" style="width: 80%;">
    <div class="d-flex justify-content-evenly">
        <!-- Product Image on the left side -->
        <div class="col-md-4">
            <img src="{{asset('img/img1.png')}}" class="img-fluid rounded" alt="Band Image">
        </div>
        <!-- Product Information on the right side -->
        <div class="col-md-5">
            <h2 class="d-flex justify-content-center fw-bold">Nirvana Concert</h2>
            <br>
            <ul class="list-unstyled">
                <li class="fs-5"><strong><i class="bi bi-geo-alt-fill"></i></strong> Product Location</li>
                <br>
                <li class="fs-5"><strong><i class="bi bi-calendar"></i></strong> Product Date</li>
                <br>
                <li class="fs-5"><strong><i class="bi bi-clock-fill"></i></strong> Product Time</li>
                <br>
                <li class="fs-5"><strong><i class="bi bi-currency-dollar"></i></strong> 100.00</li>
            </ul>
        </div>
    </div>

    <br>

    <div class="container jutify" style="width: 85%;">
      <div class="d-flex justify-content-between">
        <div class="" style="width: 40%;">
          <div class="d-flex justify-content-between">
            <div class="card-body">
              <p>  Nirvana</p>
            </div>
            <button class="btn">follow</button>
          </div>
        </div>
        <div class="d-flex">
          <div class="card-body">
            <a href="#" class="btn">Buy Tickets</a>
            <p></p>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="container mt-4 jutify" style="width: 70%;">
  <div class="d-flex justify-content-between">

    <div class="" style="width: 40%;">
      <div class="card-body">
        <h5 class="card-title">Aboute</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary fst-italic">Card subtitle</h6>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  
    <div class="" style="width: 50%;">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h5 class="card-title">Reviews</h5>
          <h3 class="card-title"> 4.5<i class="bi bi-stars"></i></h3>
        </div>
        <br>
        <div>
          <ul class="list-unstyled">
            <li class="fs-5"><strong><i class="bi bi-person-check"></i></strong> User Name</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
            <li>Rating: <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></li>
          </ul>
        </div>
        <div>
          <ul class="list-unstyled">
            <li class="fs-5"><strong><i class="bi bi-person-check"></i></strong> User Name</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
            <li>Rating: <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
