@extends('plantilla_navbar')

@section('contenido')
<header>
    <div class="container-fluid slide">

    </div>
    <h1 class="title-img">Profile</h1>
</header>

<div class="container perfil">

    <div class="row">
        <div class="col-sm-2">
            <img src="{{ asset('img/perfil.png') }}" alt="" height="100px">
        </div>
        <div class="col-sm-10">
            <h3>Sergio Gómez</h3>
            <p>#6785</p>
        </div>
    </div>

</div>
<div class="container formulario">
            <form class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                      </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                      </div>
                </div>
                <button type="submit" class="btn btn-primary botonnn">Submit</button>
              </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection