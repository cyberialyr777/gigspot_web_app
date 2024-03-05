@extends ('plantilla_navbar')

@section ('contenido')

<header>
    <div class="container-fluid slide">
    </div>
    <h1 class="title-img">Administrador de Bandas</h1>
</header>

<body>
    <div class="contenedor-principal" style="background-color: #ffffffff; width: 100%; max-width: 1200px; margin: 0 auto; padding: 80px; margin-top: 40px; border-radius: 100px;">
        <div class="icon-button-container" style="margin-top: 0px; margin-bottom: 30px; display: flex; justify-content: flex-start; align-items: flex-start; gap: 150px; padding: 10px; box-sizing: border-box;">
            <span style="font-weight: bold; font-size: 24px;">
                <i class="fa-solid fa-user fa-4x" style="color: #3B3486;"></i>
                </span>
            </div>
    <button class="btn btn-primary" style="background-color: #3B3486; border-color: #3B3486; margin-bottom: 50px;">Ver Bandas</button>
<!-- Tabla con cuatro columnas usando Bootstrap -->
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered" style="margin:  0 auto; ">
        <thead class="table" style="background-color: #3B3486; color: white;">
            <tr>
            <th style="text-align: center;">Name</th>
            <th style="text-align: center;">Status</th>
            <th style="text-align: center;">Followers</th>
            <th style="text-align: center;">Actions</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>Dato  1</td>
        <td>Dato  2</td>
        <td>Dato  3</td>
        <td>
            <button><i class = "fa-solid fa-trash"></i></button> <button><i class = "fa-solid fa-pen"> </td> </button>
    </tr>
    <tr>
        <td>Dato  1</td>
        <td>Dato  2</td>
        <td>Dato  3</td>
        <td>
            <button><i class = "fa-solid fa-trash"></i></button> <button><i class = "fa-solid fa-pen"> </td> </button>
    </tr>
    <!-- Puedes agregar más filas según sea necesario -->
    </tbody>
</table>
</div>
</div>
<br>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
