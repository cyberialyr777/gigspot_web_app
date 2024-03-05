@extends('plantilla_navbar')

@section('contenido')
<header>
    <div class="container-fluid slide">

    </div>
    <h1 class="title-img">Events</h1>
</header>
    <div class="container buscador">
        <div class="row justify-content-center">
            <form action="" class="row ">
                <div class="form-group col-sm-4 artista">
                    <input type="text" class="form-control" id="artist" placeholder="Nombre del artista">
                </div>
                <div class="form-group col-sm-4">
                    <input type="date" class="form-control" id="date">
                </div>
                <div class="col-sm-3 boton">
                    <button type="submit" class="btn btn-primary find-tickets">Find tickets</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container objetos">
        <div class="row">
            <div class="col-sm-3">
                <h5 class="title-filter">Filter Results</h5>
                <h6 class="categoria">All categories</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Alternative
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Rock
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        R&B
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Jazz
                    </label>
                </div>
                <h6 class="categoria">Price range</h6>
                <input type="range" class="form-range" min="0" max="5" id="customRange2">
                <h6 class="categoria">Venues</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Palenque de Gallos
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Teatro Esperanza Iris
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Teatro del Pueblo
                    </label>
                </div>
            </div>
            <div class="col-sm-9 eventos">
                <div class="container eventos border border-primary">
                    <div class="row">
                        <div class="col-sm-2 img-evento">
                            <img src="{{ asset('img/evento5.png') }}" alt="">
                        </div>
                        <div class="col-sm-2 nombre">
                            <h5>Nirvana</h5>
                        </div>
                        <div class="col-sm-2 fecha text-center">
                            <p class="dia fw-bold">MON</p>
                            <h6 class="dia-num">20</h6>
                            <h6 class="mes">JUN</h6>
                            <p class="dia fw-bold">16:00</p>
                        </div>
                        <div class="col-sm-3 venue">
                            <h6 class="venue">Palenque de Gallos</h6>
                            <p class="lugar">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.1658 8.93977C11.6418 10.0015 10.9325 11.0601 10.2058 12.01C9.48132 12.957 8.75442 13.7768 8.20768 14.3605C8.13503 14.438 8.06566 14.5113 8 14.5801C7.93434 14.5113 7.86497 14.438 7.79232 14.3605C7.24558 13.7768 6.51868 12.957 5.79425 12.01C5.06754 11.0601 4.35825 10.0015 3.83423 8.93977C3.3048 7.86708 3 6.86191 3 6C3 3.23858 5.23858 1 8 1C10.7614 1 13 3.23858 13 6C13 6.86191 12.6952 7.86708 12.1658 8.93977ZM8 16C8 16 14 10.3137 14 6C14 2.68629 11.3137 0 8 0C4.68629 0 2 2.68629 2 6C2 10.3137 8 16 8 16Z"
                                        fill="#686868" />
                                    <path
                                        d="M8 8C6.89543 8 6 7.10457 6 6C6 4.89543 6.89543 4 8 4C9.10457 4 10 4.89543 10 6C10 7.10457 9.10457 8 8 8ZM8 9C9.65685 9 11 7.65685 11 6C11 4.34315 9.65685 3 8 3C6.34315 3 5 4.34315 5 6C5 7.65685 6.34315 9 8 9Z"
                                        fill="#686868" />
                                </svg>

                                Villahermosa, Tab
                            </p>
                        </div>
                        <div class="col-sm-1 from ">From</div>
                        <div class="col-sm-2 price">
                            <h4>$700
                                <svg width="19" height="19" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1.5C0 1.22386 0.223858 1 0.5 1H2C2.22943 1 2.42943 1.15615 2.48507 1.37873L2.89039 3H14.5C14.6487 3 14.7898 3.06622 14.8848 3.18068C14.9797 3.29514 15.0188 3.44595 14.9914 3.59214L13.4914 11.5921C13.4471 11.8286 13.2406 12 13 12H12H5H4C3.75939 12 3.55291 11.8286 3.50856 11.5921L2.01131 3.6068L1.60961 2H0.5C0.223858 2 0 1.77614 0 1.5ZM5 12C3.89543 12 3 12.8954 3 14C3 15.1046 3.89543 16 5 16C6.10457 16 7 15.1046 7 14C7 12.8954 6.10457 12 5 12ZM12 12C10.8954 12 10 12.8954 10 14C10 15.1046 10.8954 16 12 16C13.1046 16 14 15.1046 14 14C14 12.8954 13.1046 12 12 12ZM5 13C5.55228 13 6 13.4477 6 14C6 14.5523 5.55228 15 5 15C4.44772 15 4 14.5523 4 14C4 13.4477 4.44772 13 5 13ZM12 13C12.5523 13 13 13.4477 13 14C13 14.5523 12.5523 15 12 15C11.4477 15 11 14.5523 11 14C11 13.4477 11.4477 13 12 13Z" fill="#6962B9"/>
                                    </svg>
                                    
                            </h4>
                        </div>


                    </div>
                </div>
                <div class="container eventos border border-primary">
                    <div class="row">
                        <div class="col-sm-2 img-evento">
                            <img src="{{ asset('img/evento5.png') }}" alt="">
                        </div>
                        <div class="col-sm-2 nombre">
                            <h5>Nirvana</h5>
                        </div>
                        <div class="col-sm-2 fecha text-center">
                            <p class="dia fw-bold">MON</p>
                            <h6 class="dia-num">20</h6>
                            <h6 class="mes">JUN</h6>
                            <p class="dia fw-bold">16:00</p>
                        </div>
                        <div class="col-sm-3 venue">
                            <h6 class="venue">Palenque de Gallos</h6>
                            <p class="lugar">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.1658 8.93977C11.6418 10.0015 10.9325 11.0601 10.2058 12.01C9.48132 12.957 8.75442 13.7768 8.20768 14.3605C8.13503 14.438 8.06566 14.5113 8 14.5801C7.93434 14.5113 7.86497 14.438 7.79232 14.3605C7.24558 13.7768 6.51868 12.957 5.79425 12.01C5.06754 11.0601 4.35825 10.0015 3.83423 8.93977C3.3048 7.86708 3 6.86191 3 6C3 3.23858 5.23858 1 8 1C10.7614 1 13 3.23858 13 6C13 6.86191 12.6952 7.86708 12.1658 8.93977ZM8 16C8 16 14 10.3137 14 6C14 2.68629 11.3137 0 8 0C4.68629 0 2 2.68629 2 6C2 10.3137 8 16 8 16Z"
                                        fill="#686868" />
                                    <path
                                        d="M8 8C6.89543 8 6 7.10457 6 6C6 4.89543 6.89543 4 8 4C9.10457 4 10 4.89543 10 6C10 7.10457 9.10457 8 8 8ZM8 9C9.65685 9 11 7.65685 11 6C11 4.34315 9.65685 3 8 3C6.34315 3 5 4.34315 5 6C5 7.65685 6.34315 9 8 9Z"
                                        fill="#686868" />
                                </svg>

                                Villahermosa, Tab
                            </p>
                        </div>
                        <div class="col-sm-1 from ">From</div>
                        <div class="col-sm-2 price">
                            <h4>$700
                                <svg width="19" height="19" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1.5C0 1.22386 0.223858 1 0.5 1H2C2.22943 1 2.42943 1.15615 2.48507 1.37873L2.89039 3H14.5C14.6487 3 14.7898 3.06622 14.8848 3.18068C14.9797 3.29514 15.0188 3.44595 14.9914 3.59214L13.4914 11.5921C13.4471 11.8286 13.2406 12 13 12H12H5H4C3.75939 12 3.55291 11.8286 3.50856 11.5921L2.01131 3.6068L1.60961 2H0.5C0.223858 2 0 1.77614 0 1.5ZM5 12C3.89543 12 3 12.8954 3 14C3 15.1046 3.89543 16 5 16C6.10457 16 7 15.1046 7 14C7 12.8954 6.10457 12 5 12ZM12 12C10.8954 12 10 12.8954 10 14C10 15.1046 10.8954 16 12 16C13.1046 16 14 15.1046 14 14C14 12.8954 13.1046 12 12 12ZM5 13C5.55228 13 6 13.4477 6 14C6 14.5523 5.55228 15 5 15C4.44772 15 4 14.5523 4 14C4 13.4477 4.44772 13 5 13ZM12 13C12.5523 13 13 13.4477 13 14C13 14.5523 12.5523 15 12 15C11.4477 15 11 14.5523 11 14C11 13.4477 11.4477 13 12 13Z" fill="#6962B9"/>
                                    </svg>
                            </h4>
                        </div>


                    </div>
                </div>
            </div>



        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
