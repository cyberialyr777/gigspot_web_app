@extends('plantillaLogins')

@section('Contenido')

<body>

  <div class="container">
    <div class="image-container">
    </div>
    
    <div class="form-container-button">
      <div>
        <h1 class="title">GigSpot</h1>
        <br>
        <div class="text">
          <p>Escoja un tipo de usuario</p> 
        </div>
        <br>
      </div>
      <form action="registerUserView" method="GET">
        <button class="rounded-button-special" type="submit">Registrate como Usuario</button>
        <br>
      </form>
      <form action="registerBandView" method="GET">
        <button class="rounded-button-special" type="submit">Registrate como Banda</button>
      </form>
      <br>
    </div>
  </div>

</body>
@endsection
