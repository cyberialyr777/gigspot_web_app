@extends ('AdminGeneral')

@section ('contenido')
<body style="background-color: #6962b9;">
<div class="contenedor-principal" style="background-color: #ffffffff; width: 100%; max-width: 1200px; margin: 0 auto; padding: 80px; margin-top: 145px;">
    <div class="icon-button-container" style="margin-top: 0px; margin-bottom: 30px; display: flex; justify-content: flex-start; align-items: flex-start; gap: 150px; padding: 10px; box-sizing: border-box;">
            <span style="font-weight: bold; font-size: 24px;">
                <i class="fa-solid fa-user fa-4x" style="color: #3B3486;"></i> Administrador
            </span>
    </div>
        <button class="btn btn-primary" style="background-color: #3B3486; border-color: #3B3486; margin-bottom: 50px;">Solicitudes Pendientes</button>
<!-- Tabla con cuatro columnas usando Bootstrap -->
<div class="table-responsive">
<table class="table table-striped table-hover table-bordered" style="margin:  0 auto; ">
    <thead class="table" style="background-color: #3B3486; color: white;">
        <tr>
            <th style="text-align: center;">Solicitud</th>
            <th style="text-align: center;">Bandas</th>
            <th style="text-align: center;">Fecha</th>
            <th style="text-align: center;">Actions</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>Dato  1</td>
        <td>Dato  2</td>
        <td>Dato  3</td>
        <td>Dato  4</td>
    </tr>
    <tr>
        <td>Dato  1</td>
        <td>Dato  2</td>
        <td>Dato  3</td>
        <td>Dato  4</td>
    </tr>
    <!-- Puedes agregar más filas según sea necesario -->
    </tbody>
</table>
</div>f
@endsection
