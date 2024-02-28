@extends ('AdminGeneral')

@section ('contenido')
<div class="icon-button-container" style="margin-top:   100px; display: flex; justify-content: center; align-items: center; gap:   150px; padding:   10px; box-sizing: border-box;">
    <span>
        <i class="fa-solid fa-user fa-3x" style="color: #3B3486;"></i>Admin
    </span>
    <button class="btn btn-primary" style="background-color: #3B3486; border-color: #3B3486; box-sizing: border-box;">Solicitudes Pendientes</button>
</div>

<!-- Tabla con dos columnas -->
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th style="text-align: center;">Usuarios Registrados</th>
            <th style="text-align: center;">Bandas Registradas</th>
        </tr>
    </thead>
    <tbody>
        <!-- Aquí puedes agregar las filas con los datos -->
        <tr>
            <td style="text-align: center; font-size:  50px;">7326417565</td>
            <td style="text-align: center; font-size:  50px;">3215632423</td>
        </tr>x
        <!-- Agrega más filas según sea necesario -->
    </tbody>
</table>
<table style="width:  100%;">
    <tr>
        <td style="text-align: center;">
            <button class="btn btn-primary" style="background-color:  #3B3486; color: #ffffffff">Ver Bandas</button>
        </td>
        <td style="text-align: center;">
            <button class="btn btn-secondary" style="background-color:  #3B3486; color: #ffffffff">Ver Usuarios</button>
        </td>

    </tr>
</table>
@endsection
