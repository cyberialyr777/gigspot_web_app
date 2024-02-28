<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    body {
      display: flex;
      height: 100vh;
      margin: 0;
    }

    .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
    }

    .form-container {
      width: 40%;
      padding: 20px;
      box-sizing: border-box;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    input {
      margin-bottom: 10px;
      padding: 8px;
      font-size: 16px;
    }

    .image-container {
      width: 50%;
      overflow: hidden;
    }

    img {
      width: 100%;
      height: auto;
    }
  </style>

<body>

  <div class="container">
    <div class="form-container">
      <form action="#" method="post">
        <label for="emailOrUsername">Email/Usuario:</label>
        <input type="text" id="emailOrUsername" name="emailOrUsername" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Iniciar sesión</button>
      </form>
    </div>

    <div class="image-container">
      <img src="tu_imagen.jpg" alt="Imagen de fondo">
    </div>
  </div>

</body>
</html>
