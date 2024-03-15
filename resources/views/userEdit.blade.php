@extends('plantilla_navbar')

@section('contenido')
<header>
    <div class="container-fluid slide">

    </div>
    <h1 class="title-img">Update User</h1>
</header>

<div class="container mt-5">
    <form>
        <div class="form-group">
            <label for="productName">Name</label>
            <input type="text" class="form-control" id="productName" placeholder="Enter name" required>
        </div>
        <br>
        <div class="form-group">
            <label for="productName">Last Name</label>
            <input type="text" class="form-control" id="productName" placeholder="Enter last name" required>
        </div>
        <br>
        <div class="form-group">
            <label for="productName">Username</label>
            <input type="text" class="form-control" id="productName" placeholder="Enter username" required>
        </div>
        <br>
        <div class="form-group">
            <label for="productPrice">E-mail</label>
            <input type="number" class="form-control" id="productPrice" placeholder="Enter e-mail" required>
        </div>
        <br>
        <div class="form-group">
            <label for="productName">Password</label>
            <input type="text" class="form-control" id="productName" placeholder="Enter Password" required>
        </div>
        <br>
        <div class="form-group">
            <label for="productName">Repeat password</label>
            <input type="text" class="form-control" id="productName" placeholder="Enter Password" required>
        </div>
        <br>
            <button type="submit" class="btn">Update User</button>
        </form>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection