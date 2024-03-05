@extends('plantillaLogins')

@section('Contenido')

<body>
  <div class="container">
    <div class="image-container">
      
    </div>
    
    <div class="form-container">
        <div>
          <h1 class="title">GigSpot</h1>
          <br>
          <div class="text">
            <p>Please enter your login information or</p> 
            <p>here for registration</p>
          </div>
          <br>
        </div>

        <form action="" method="post">
          <label class="textInput" for="emailOrUsername">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
            </svg>
            Email/Usuario:
          </label>
          <input class="input" type="text" id="emailOrUsername" name="emailOrUsername" required>

          <label class="textInput" for="password">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
              <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
            </svg>
            Contraseña:
          </label>
          <input type="password" id="password" name="password" required>

          <button class="rounded-button" type="submit">Iniciar sesión</button>
        </form>
        <br>
        <p class="text">no tienes una cuenta? <a href="registerSclectionView">registrate</a></p>
    </div>
  </div>

@endsection
