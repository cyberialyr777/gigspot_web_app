@extends('plantilla_navbar')
@section('contenido')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha256-w6NINviF6R4FsbX2b8S8+pHvnlTtlcW0szfLw+/0dtM=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/search_bar.css">
</head>

<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <form class="d-flex mx-auto w-100" role="search">
            <input class="form-control form-control-icon" type="search" placeholder="Search all events" aria-label="Search" style="border-radius: 10px; border: 2px solid #3498db; padding: 8px;">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
</nav>
</div>

<div class="container mt-5">
    <div class="mx-auto d-flex align-items-center justify-content-center">
        <button class="btn-add" type="button">Add event</button>
    </div>
</div>
<div class="container mt-5">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Hora</th>
            <th scope="col">Lugar</th>
            <th scope="col">Precio</th>
            <th scope="col">Accion</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Concierto 1</td>
            <td>12:00</td>
            <td>$500</td>
            <td><i class="fa-solid fa-trash"></i> <i class="fa-solid fa-pen"></i></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Concierto 1</td>
            <td>12:00</td>
            <td>$500</td>
            <td><i class="fa-solid fa-trash"></i> <i class="fa-solid fa-pen"></i></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Concierto 1</td>
            <td>12:00</td>
            <td>$500</td>
            <td><i class="fa-solid fa-trash"></i> <i class="fa-solid fa-pen"></i></td>
        </tr>
        </tbody>
</table>
</div>

<script src="https://kit.fontawesome.com/4a9c34eacf.js" crossorigin="anonymous"></script>

@endsection