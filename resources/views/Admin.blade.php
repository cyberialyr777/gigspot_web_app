@extends ('AdminGeneral')

@section ('contenido')
<body style="background-color: #ffffffff;">
    <div class="contenedor-principal" style="background-color: #ffffffff; width: 100%; max-width: 1200px; margin: 0 auto; padding: 80px; margin-top: 145px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <div class="icon-button-container" style="margin-top: 20px; margin-bottom: 50px; display: flex; justify-content: center; align-items: center; gap: 150px; padding: 10px; box-sizing: border-box;">
            <span style="font-weight: bold; font-size: 24px;">
                <i class="fa-solid fa-user fa-4x" style="color: #3B3486;"></i>  Administrador
            </span>
            <button class="btn btn-primary" style="background-color: #3B3486; border-color: #3B3486;">Solicitudes Pendientes</button>
        </div>
        <!-- Tabla con dos columnas -->
        <table class="table table-hover table-striped" style="margin-top: 40px; margin: auto;">
            <thead>
                <tr>
                    <th style="text-align: center;">Usuarios Registrados</th>
                    <th style="text-align: center;">Bandas Registradas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center; font-size: 50px;">7326417565</td>
                    <td style="text-align: center; font-size: 50px;">3215632423</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%; margin: auto; margin-top: 20px;"> <!-- Ajusta el margin-top para separar los botones -->
            <tr>
                <td style="text-align: center;">
                    <button class="btn btn-primary" style="background-color: #3B3486; color: #ffffffff">Ver Bandas</button>
                </td>
                <td style="text-align: center;">
                    <button class="btn btn-primary" style="background-color: #3B3486; color: #ffffffff">Ver Usuarios</button>
                </td>
            </tr>
        </table>

    </div>
</body>

@endsection

