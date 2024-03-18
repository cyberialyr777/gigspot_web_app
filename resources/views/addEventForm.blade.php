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
            <label for="productName">Nombre</label>
            <input type="text" class="form-control" id="productName" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="productDescription">Comentarios</label>
            <textarea class="form-control" id="productDescription" rows="3" placeholder="Enter description" required></textarea>
            <br
        </div>

        <div class="container">
            <div class="row">
               <!-- Primer dropdown -->
               <div class="col">
                 <div class="input-group mb-3">
                   <label class="input-group-text" for="inputGroupSelect01">Pais</label>
                   <select class="form-select" id="inputGroupSelect01">
                     <option selected>Choose...</option>
                     <option value="1">One</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                   </select>
                 </div>
               </div>

               <!-- Segundo dropdown -->
               <div class="col">
                 <div class="input-group mb-3">
                   <label class="input-group-text" for="inputGroupSelect02">Estados</label>
                   <select class="form-select" id="inputGroupSelect02">
                     <option selected>Choose...</option>
                     <option value="1">One</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                   </select>
                 </div>
               </div>

               <!-- Tercer dropdown -->
               <div class="col">
                 <div class="input-group mb-3">
                   <label class="input-group-text" for="inputGroupSelect03">Municipio</label>
                   <select class="form-select" id="inputGroupSelect03">
                     <option selected>Choose...</option>
                     <option value="1">One</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                   </select>
                 </div>
               </div>
            </div>
           </div>
        <div class="form-group">
            <label for="productName">Lugar</label>
            <input type="text" class="form-control" id="productName" placeholder="Enter name" required>
            <br
        </div>
        <div class="mb-4 d-flex justify-content-center">
            <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" alt="placeholder" style="width: 300px;" class="rounded" />
           </div>
           <div class="d-flex justify-content-center">
            <div class="btn btn-primary btn-rounded">
               <label class="form-label text-white m-1" for="customFile1">Subir Imagen</label>
               <input type="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
            </div>
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
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="hora">Hora:</label>
                    <input type="time" class="form-control" id="hora" name="hora" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date">
                </div>
            </div>

            <br>
            <button type="submit" class="btn">Add Event</button>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
