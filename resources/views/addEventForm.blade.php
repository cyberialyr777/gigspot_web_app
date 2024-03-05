@extends('plantilla_navbar')

@section('contenido')
<header>
    <div class="container-fluid slide">

    </div>
    <h1 class="title-img">Add Event</h1>
</header>

<div class="container mt-5">
    <form>
        <div class="form-group">
            <label for="productName">Name</label>
            <input type="text" class="form-control" id="productName" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="productDescription">Description</label>
            <textarea class="form-control" id="productDescription" rows="3" placeholder="Enter description" required></textarea>
        </div>
        <div class="form-group">
            <label for="productPrice">Price</label>
            <input type="number" class="form-control" id="productPrice" placeholder="Enter price" required>
        </div>
        <div class="form-group">
            <label for="productCategory">Music genre</label>
            <select class="form-control" id="Category" required>
                <option value="" disabled selected>Select
                    <option value="" disabled selected> </option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""> </option>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <label for="hora">Hora:</label>
                <input type="time" class="form-control" id="hora" name="hora" required>
            </div>
            <div class="form-group col-sm-4">
                <label for="hora">Date</label>
                <input type="date" class="form-control" id="date">
            </div>
            <br>
            <button type="submit" class="btn">Add Event</button>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection