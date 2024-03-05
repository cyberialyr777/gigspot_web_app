
@extends('plantilla_navbar')
<head>
    <link rel="stylesheet" href="css/profile_band.css">
</head>
@section('contenido')
    

<main class="text-center">
    <div class="container mb-5">
        <div class="row profile justify-content-center">
            <div class="col-md-6">
                <div class="profile-sidebar">
                    <div class="profile-userpic">
                        <img src="{{asset('img/user.png')}}" alt="Profile Image" class="img-fluid rounded-circle" style="width: 25%;">
                    </div>
                    <div class="profile-usertitle">
                            Banda
                    </div>
                    <div class="mt-4 d-flex justify-content-center">
                        <div class="mb-4 main-text">
                            Followers
                            <div class="additional-text">13</div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="mb-4 text-with-background">Texto 1</p>
                    <p class="mb-4 text-with-background">Texto 2</p>
                    <p class="mb-4 text-with-background">Texto 3</p>
                </div>
            </div>
        </div>
    </div>
</main>




@endsection