@extends('plantilla_navbar')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha256-w6NINviF6R4FsbX2b8S8+pHvnlTtlcW0szfLw+/0dtM=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/info.css">
    <style>
        .background-image {
            height: 50vh;
            background-image: url('{{ asset("img/band-bg.png") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }
    </style>
</head>
<body>

<div class="background-image"></div>

<div class="container mt-3">
    <div class="center-content mb-3 pl-0">
        <div class="col-md-2">
            <img src="{{asset('img/user.png')}}" alt="Profile Image" class="img-fluid rounded-circle" style="width: 55%;"> 
        </div>
        <div class="col-md-4 pl-0">
            <h2>Nombre de la Banda</h2> 
            <h4>Seguidores</h4>
            <h4>12345</h4>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-md-6">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci odit expedita praesentium hic sunt molestiae accusamus, quaerat quidem libero, voluptas culpa provident. Recusandae quaerat reiciendis officia alias tempore ex nemo.</p>
        </div>
        <div class="col-md-6 center-content social-icons">
            <img src="{{asset('img/facebook.png')}}" alt="Profile Image" style="width: 8%; margin-right:3;"> 
            <img src="{{asset('img/instagram.png')}}" alt="Profile Image" style="width: 8%; margin-right:3;">
            <img src="{{asset('img/gorjeo.png')}}" alt="Profile Image" style="width: 8%; margin-right:3;">
            <img src="{{asset('img/youtube.png')}}" alt="Profile Image" style="width: 8%; margin-right:3;">
            <img src="{{asset('img/spotify.png')}}" alt="Profile Image" style="width: 8%; margin-right:3;">
            <img src="{{asset('img/whatsapp.png')}}" alt="Profile Image" style="width: 8%; margin-right:3;">
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/4a9c34eacf.js" crossorigin="anonymous"></script>

</body>

