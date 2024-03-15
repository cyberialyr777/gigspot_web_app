@extends('plantilla_navbar')

@section('contenido')
    <header>
        <div class="container-fluid slide">

        </div>
        <h1 class="title-img">Selecting Ticket</h1>
    </header>

    <div class="container tickets">
        <div class="row">
            <div class="col-sm-7">
                <img src="{{ asset('img/venue4.png') }}" alt="">
            </div>
            <div class="col-sm-5">
                <div class="container arriba">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6>Section</h6>
                        </div>
                        <div class="col-sm-2">
                            <h6>Row</h6>
                        </div>
                        <div class="col-sm-3">
                            <h6>Available</h6>
                        </div>
                        <div class="col-sm-3">
                            <h6>Price</h6>
                        </div>
                    </div>
                </div>
                <div class="container borrder">
                    <div class="row marrgin">
                        <div class="col-sm-3 texto">
                            <p class="texto">106</p>
                        </div>
                        <div class="col-sm-2 texto">
                            <p class="texto">7</p>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>5</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-sm-2">
                            <p class="fw-bold precio">
                                $750 
                            </p>
                        </div>
                        <div class="col-sm-1 icono">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 1.5C0 1.22386 0.223858 1 0.5 1H2C2.22943 1 2.42943 1.15615 2.48507 1.37873L2.89039 3H14.5C14.6487 3 14.7898 3.06622 14.8848 3.18068C14.9797 3.29514 15.0188 3.44595 14.9914 3.59214L13.4914 11.5921C13.4471 11.8286 13.2406 12 13 12H12H5H4C3.75939 12 3.55291 11.8286 3.50856 11.5921L2.01131 3.6068L1.60961 2H0.5C0.223858 2 0 1.77614 0 1.5ZM5 12C3.89543 12 3 12.8954 3 14C3 15.1046 3.89543 16 5 16C6.10457 16 7 15.1046 7 14C7 12.8954 6.10457 12 5 12ZM12 12C10.8954 12 10 12.8954 10 14C10 15.1046 10.8954 16 12 16C13.1046 16 14 15.1046 14 14C14 12.8954 13.1046 12 12 12ZM5 13C5.55228 13 6 13.4477 6 14C6 14.5523 5.55228 15 5 15C4.44772 15 4 14.5523 4 14C4 13.4477 4.44772 13 5 13ZM12 13C12.5523 13 13 13.4477 13 14C13 14.5523 12.5523 15 12 15C11.4477 15 11 14.5523 11 14C11 13.4477 11.4477 13 12 13Z" fill="#6962B9"/>
                                </svg>
                                
                                
                        </div>
                    </div>
                </div>
                <div class="container borrder">
                    <div class="row marrgin">
                        <div class="col-sm-3 texto">
                            <p class="texto">106</p>
                        </div>
                        <div class="col-sm-2 texto">
                            <p class="texto">7</p>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>5</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-sm-2">
                            <p class="fw-bold precio">
                                $750 
                                    
                            </p>
                        </div>
                        <div class="col-sm-1 icono">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 1.5C0 1.22386 0.223858 1 0.5 1H2C2.22943 1 2.42943 1.15615 2.48507 1.37873L2.89039 3H14.5C14.6487 3 14.7898 3.06622 14.8848 3.18068C14.9797 3.29514 15.0188 3.44595 14.9914 3.59214L13.4914 11.5921C13.4471 11.8286 13.2406 12 13 12H12H5H4C3.75939 12 3.55291 11.8286 3.50856 11.5921L2.01131 3.6068L1.60961 2H0.5C0.223858 2 0 1.77614 0 1.5ZM5 12C3.89543 12 3 12.8954 3 14C3 15.1046 3.89543 16 5 16C6.10457 16 7 15.1046 7 14C7 12.8954 6.10457 12 5 12ZM12 12C10.8954 12 10 12.8954 10 14C10 15.1046 10.8954 16 12 16C13.1046 16 14 15.1046 14 14C14 12.8954 13.1046 12 12 12ZM5 13C5.55228 13 6 13.4477 6 14C6 14.5523 5.55228 15 5 15C4.44772 15 4 14.5523 4 14C4 13.4477 4.44772 13 5 13ZM12 13C12.5523 13 13 13.4477 13 14C13 14.5523 12.5523 15 12 15C11.4477 15 11 14.5523 11 14C11 13.4477 11.4477 13 12 13Z" fill="#6962B9"/>
                                </svg>
                                
                                
                        </div>
                    </div>
                </div>
                <div class="container borrder">
                    <div class="row marrgin">
                        <div class="col-sm-3 texto">
                            <p class="texto">106</p>
                        </div>
                        <div class="col-sm-2 texto">
                            <p class="texto">7</p>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>5</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-sm-2">
                            <p class="fw-bold precio">
                                $750 
                                    
                            </p>
                        </div>
                        <div class="col-sm-1 icono">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 1.5C0 1.22386 0.223858 1 0.5 1H2C2.22943 1 2.42943 1.15615 2.48507 1.37873L2.89039 3H14.5C14.6487 3 14.7898 3.06622 14.8848 3.18068C14.9797 3.29514 15.0188 3.44595 14.9914 3.59214L13.4914 11.5921C13.4471 11.8286 13.2406 12 13 12H12H5H4C3.75939 12 3.55291 11.8286 3.50856 11.5921L2.01131 3.6068L1.60961 2H0.5C0.223858 2 0 1.77614 0 1.5ZM5 12C3.89543 12 3 12.8954 3 14C3 15.1046 3.89543 16 5 16C6.10457 16 7 15.1046 7 14C7 12.8954 6.10457 12 5 12ZM12 12C10.8954 12 10 12.8954 10 14C10 15.1046 10.8954 16 12 16C13.1046 16 14 15.1046 14 14C14 12.8954 13.1046 12 12 12ZM5 13C5.55228 13 6 13.4477 6 14C6 14.5523 5.55228 15 5 15C4.44772 15 4 14.5523 4 14C4 13.4477 4.44772 13 5 13ZM12 13C12.5523 13 13 13.4477 13 14C13 14.5523 12.5523 15 12 15C11.4477 15 11 14.5523 11 14C11 13.4477 11.4477 13 12 13Z" fill="#6962B9"/>
                                </svg>
                                
                                
                        </div>
                    </div>
                </div>
                <div class="container borrder">
                    <div class="row marrgin">
                        <div class="col-sm-3 texto">
                            <p class="texto">106</p>
                        </div>
                        <div class="col-sm-2 texto">
                            <p class="texto">7</p>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>5</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-sm-2">
                            <p class="fw-bold precio">
                                $750 
                                    
                            </p>
                        </div>
                        <div class="col-sm-1 icono">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 1.5C0 1.22386 0.223858 1 0.5 1H2C2.22943 1 2.42943 1.15615 2.48507 1.37873L2.89039 3H14.5C14.6487 3 14.7898 3.06622 14.8848 3.18068C14.9797 3.29514 15.0188 3.44595 14.9914 3.59214L13.4914 11.5921C13.4471 11.8286 13.2406 12 13 12H12H5H4C3.75939 12 3.55291 11.8286 3.50856 11.5921L2.01131 3.6068L1.60961 2H0.5C0.223858 2 0 1.77614 0 1.5ZM5 12C3.89543 12 3 12.8954 3 14C3 15.1046 3.89543 16 5 16C6.10457 16 7 15.1046 7 14C7 12.8954 6.10457 12 5 12ZM12 12C10.8954 12 10 12.8954 10 14C10 15.1046 10.8954 16 12 16C13.1046 16 14 15.1046 14 14C14 12.8954 13.1046 12 12 12ZM5 13C5.55228 13 6 13.4477 6 14C6 14.5523 5.55228 15 5 15C4.44772 15 4 14.5523 4 14C4 13.4477 4.44772 13 5 13ZM12 13C12.5523 13 13 13.4477 13 14C13 14.5523 12.5523 15 12 15C11.4477 15 11 14.5523 11 14C11 13.4477 11.4477 13 12 13Z" fill="#6962B9"/>
                                </svg>
                                
                                
                        </div>
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
