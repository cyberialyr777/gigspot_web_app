@extends('plantilla_navbar')
@section('contenido')
<head>
    <link rel="stylesheet" href="css/add_event.css">
</head>

<div class="container">
    <form>
        <div class="form-group"> 
            <label for="name_event" class="control-label">Nombre del evento</label>
            <input type="text" class="form-control" id="name_event" name="name_event">
        </div>    
    
        <div class="form-location mt-3"> 
            <label for="street1_id" class="control-label">Ubicacion</label>
            <input type="text" class="form-control" id="location" name="location">
        </div>                    
                                
        <div class="form-group mt-3">
            <label for="date" class="control-label">Fecha y Hora</label>
            <input type="datetime-local" class="form-control"cid="date" name="date">
        </div>   

    
        <div class="form-group mt-3"> 
            <label for="precio" class="control-label">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio">
        </div>       
        
        <div class="form-group mt-5 mx-auto d-flex align-items-center justify-content-center"> 
            <button type="submit" class="btnAdd">Add</button>
        </div>     
        
    </form>
</div>
@endsection