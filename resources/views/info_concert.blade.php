@extends('plantilla_navbar')
<head>
    <link rel="stylesheet" href="css/info_concert.css">

</head>
@section('contenido')
    <div class="contenedor">
    <div class="columna">
        <div class="img">
            <img src="{{asset("img/band-bg.png")}}" alt="concert">
        </div>
        <div class="actions">
            <h3>nirvana</h3>
            <button
                type="button"
                class="btn btn-primary"
            >
                Follow
            </button>
        </div>
        <div class="texto">
            <h3>About</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa ducimus enim sunt iure vero repudiandae laborum minus corrupti nostrum quam quibusdam commodi accusamus, ad repellat tempore temporibus, in facilis officiis!</p>
        </div>
    </div>
    <div class="columna">
        <div class="actions">
            <h2>Nirvana Concert</h2>
            Save in favorites <i class="fa-solid fa-heart"></i>
        </div>
        <div class="info">
            <div class="details"><div class="icon"><i class="fa-solid fa-location-dot"></i></div> Villahermosa, Tabasco</div>
            <div class="details"><div class="icon"><i class="fa-solid fa-calendar-days"></i></div> 1 de febrero</div>
            <div class="details"><div class="icon"><i class="fa-solid fa-clock"></i></div> 10:00 pm</div>
            <div class="details"><div class="icon"><i class="fa-solid fa-dollar-sign"></i></div> $500-$5000</div>
        </div>
        <div class="buyticket">
            <button type="button" class="btn btn-outline-primary">
            Buy ticket
        </button>
        </div>
        <div class="tittle">
            <h2>Reviews</h2>
        </div>
        <div class="reviews">
            <h4>Jane Doe</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, mollitia quibusdam at ex veritatis, autem placeat fugiat nisi similique facilis omnis dicta adipisci consequuntur cumque explicabo, nulla nobis et dolore.</p>
            <h4>Jane Doe</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, obcaecati, aut impedit sequi repellendus alias necessitatibus placeat corporis sed modi provident quibusdam assumenda, magni ab nulla veniam! Nobis, iure rem.</p>
        </div>
    </div>
    </div>
    <script src="https://kit.fontawesome.com/4a9c34eacf.js" crossorigin="anonymous"></script>
@endsection