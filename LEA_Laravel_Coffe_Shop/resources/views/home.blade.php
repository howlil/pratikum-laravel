@extends('layout.app')

@section('title')
    Sakara Coffe
@endsection

@section('header')
    <nav class="navbar sticky-top bg-body-tertiary" style="padding: 0%">
        <div class="container-fluid" style="background-color: #532C11;">
            <a class="navbar-brand" href="#"style="margin-left: 32px;">
                <img src="/img/logo.png" alt="Bootstrap" width="50%">
            </a>
            <ul class="d-flex align-items-center ml-auto list-unstyled" style="margin-top: 12px;">
                <li class="nav-item" style="margin-right: 40px;">
                    <a class="nav-link text-white" href="home">Home</a>
                </li>
                <li class="nav-item" style="margin-right: 40px;">
                    <a class="nav-link text-white" href="#">Produk</a>
                </li>
                <li class="nav-item" style="margin-right: 40px;">
                    <a class="nav-link text-white" href="#">About</a>
                </li>
                <li class="nav-item" style="margin-right: 40px;">
                    <a class="nav-link text-white" href="user.profile">Profile</a>
                </li>
        </div>
    </nav>
@endsection



@section('hero')
    <div class="hero">
        <img src="/img/hero.png" class="img-fluid" alt="kopi"
            style=" background-size: cover; background-position: center center; height: 100vh;filter:brightness(50%);">
        <div class="hero-content"
            style="position :absolute;left:120px; bottom :0px;display: flex; justify-content:space-between; align-items: center; color: white; height: 100%; max-width: 1200px; margin: 0 auto;">
            <img src="/img/kopi.png" class="img-fluid" alt="kopi" style="max-width: 100%; margin-right: 5rem;">
            <div class="hero-teks" style="padding-left:50px;max-width: 600px;">
                <h1 class="display-4"
                    style="font-family: 'Roboto', sans-serif; font-size: 60px; font-weight: bold; margin-top: 1rem; text-align: left;line-height: 60px;">
                    FRESHLY ROASTED COFFEE</h1>
                <p class="lead"
                    style="font-family: 'Montserrat', sans-serif; font-size: 24px; font-weight: 400; margin-top: 1.1rem; text-align: left; line-height: 25px;">
                    Perfect coffee for consumption in the morning before you go to work. Good coffee to make your day better
                    and happier.</p>
                <a href="#" class="btn btn-primary"
                    style="background-color: #8B4513; border-color: #8B4513; padding: 0.75rem 1.5rem; margin-top: 1.1rem;font-size: 1rem; width: 140px; border-radius:15px ;height: 50px;">More</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="teks-center" style="  text-align: center;padding-top:50px;">
        <h1 style="font-size: 30px;font-family:montserrat;font-weight:600">OUR TOP MENU</h1>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 " style="padding-top: 15px; ">

        <div class="col">
            <div class="card">
                <img src="/img/amerikano.jpg" class="object-fit-cover border rounded"" alt="kopi1"
                    style="filter :brightness(50%); background-size:cover; width: 100%; height: 150px;">
                <h5 class="card-title"
                    style="color:white ;position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                    Americano</h5>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/img/mocha.jpg" class="object-fit-cover border rounded"" alt="kopi2"
                    style="filter :brightness(50%); background-size:cover; width: 100%; height: 150px;">
                <h5 class="card-title"
                    style="color:white ;position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">CAPUCINO
                </h5>
            </div>
        </div>
        <div class="col ">
            <div class="card ">
                <img src="/img/lll.jpg" class="object-fit-cover border rounded"" alt="kopi3"
                    style="filter :brightness(50%); background-size: contain; width: 100%; height: 150px;">
                <h5 class="card-title"
                    style="color:white ;position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">CREAMY
                    LATTE</h5>
            </div>
        </div>

    </div>


    <div class="position-relative" style=" margin-top:60px;">
        <div class="position-absolute top-0 start-0">
            <p style="font-family: montserrat;font-weight:500;"><strong>Our Product</strong></p>
        </div>
        <div class="position-absolute top-0 end-0">
            <a hre style="font-family: montserrat;font-weight:400;color:#bebcbc">Show More</a>
        </div>
    </div>



    <div class="card-body overflow-auto">
        <div class="row flex-nowrap flex-row scroll-horizontal">
            <div class="row row-cols-1 row-cols-md-5 g-4 " style=" padding-bottom:40px; ">
                <div class="col">
                    <div class="card" style="height: 90%;">
                        <img src="/img/product1.jpeg" class="object-fit-cover border rounded" alt="/img/product.jpg"
                            style="filter: brightness(50%); background-size: contain; width: 100%; height: 150px;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="padding-bottom:20px;">
                                <div class="ratings">
                                    <i class="fa fa-shopping-basket" aria-hidden="true" style="font-size:32px;"></i>
                                </div>
                                <div class="teks">
                                    <h5 class="position-absolute end-0"
                                        style="bottom:20px; left:70px; font-family: montserrat;font-weight:bold;">Kopi Susu
                                    </h5>
                                    <p class="position-absolute end-0"
                                        style="bottom:-7px; left:70px;font-family: montserrat;font-weight:bold; font-size:14px; color:rgb(115, 115, 115); font-weight:600;">
                                        Rp. 99.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tambahkan card lainnya disini -->
                <div class="col">
                    <div class="card" style="height: 90%;">
                        <img src="/img/product1.jpeg" class="object-fit-cover border rounded" alt="/img/product.jpg"
                            style="filter: brightness(50%); background-size: contain; width: 100%; height: 150px;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="padding-bottom:20px;">
                                <div class="ratings">
                                    <i class="fa fa-shopping-basket" aria-hidden="true" style="font-size:32px;"></i>
                                </div>
                                <div class="teks">
                                    <h5 class="position-absolute end-0"
                                        style="bottom:20px; left:70px; font-family: montserrat;font-weight:bold;">Kopi Susu
                                    </h5>
                                    <p class="position-absolute end-0"
                                        style="bottom:-7px; left:70px;font-family: montserrat;font-weight:bold; font-size:14px; color:rgb(115, 115, 115); font-weight:600;">
                                        Rp. 99.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="height: 90%;">
                        <img src="/img/product1.jpeg" class="object-fit-cover border rounded" alt="/img/product.jpg"
                            style="filter: brightness(50%); background-size: contain; width: 100%; height: 150px;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="padding-bottom:20px;">
                                <div class="ratings">
                                    <i class="fa fa-shopping-basket" aria-hidden="true" style="font-size:32px;"></i>
                                </div>
                                <div class="teks">
                                    <h5 class="position-absolute end-0"
                                        style="bottom:20px; left:70px; font-family: montserrat;font-weight:bold;">Kopi Susu
                                    </h5>
                                    <p class="position-absolute end-0"
                                        style="bottom:-7px; left:70px;font-family: montserrat;font-weight:bold; font-size:14px; color:rgb(115, 115, 115); font-weight:600;">
                                        Rp. 99.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="height: 90%;">
                        <img src="/img/product1.jpeg" class="object-fit-cover border rounded" alt="/img/product.jpg"
                            style="filter: brightness(50%); background-size: contain; width: 100%; height: 150px;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="padding-bottom:20px;">
                                <div class="ratings">
                                    <i class="fa fa-shopping-basket" aria-hidden="true" style="font-size:32px;"></i>
                                </div>
                                <div class="teks">
                                    <h5 class="position-absolute end-0"
                                        style="bottom:20px; left:70px; font-family: montserrat;font-weight:bold;">Kopi Susu
                                    </h5>
                                    <p class="position-absolute end-0"
                                        style="bottom:-7px; left:70px;font-family: montserrat;font-weight:bold; font-size:14px; color:rgb(115, 115, 115); font-weight:600;">
                                        Rp. 99.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="height: 90%;">
                        <img src="/img/product1.jpeg" class="object-fit-cover border rounded" alt="/img/product.jpg"
                            style="filter: brightness(50%); background-size: contain; width: 100%; height: 150px;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="padding-bottom:20px;">
                                <div class="ratings">
                                    <i class="fa fa-shopping-basket" aria-hidden="true" style="font-size:32px;"></i>
                                </div>
                                <div class="teks">
                                    <h5 class="position-absolute end-0"
                                        style="bottom:20px; left:70px; font-family: montserrat;font-weight:bold;">Kopi Susu
                                    </h5>
                                    <p class="position-absolute end-0"
                                        style="bottom:-7px; left:70px;font-family: montserrat;font-weight:bold; font-size:14px; color:rgb(115, 115, 115); font-weight:600;">
                                        Rp. 99.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <div class="container-fluid " style=" height: 150px; width:100%; background-color:rgb(31, 27, 27);">
        <div class="container" ">
                <div class="row">
                  <div class="col">
                    <div class="mt-3">
                        <img src="/img/logo.png" alt="Bootstrap" width="50%">

                    </div>
                    <div class="sosmed mx-2 mt-3">
                        <i class="fa fa-instagram text-light fs-4 mx-2" aria-hidden="true"></i>
                        <i class="fa fa-facebook-square text-light fs-4 mx-2" aria-hidden="true" ></i>
                        <i class="fa fa-youtube-play text-light fs-4 mx-2" aria-hidden="true"></i>
                    </div>

                  </div>
                  <div class="col">
                    <h1 class="text-light fs-4 mt-3 fw-medium">Contact Info</h1>
                    <p class="text-light lh-1 fw-light ">008302380 </br> jalan koto tuo</p>


                  </div>
                  <div class="col">
                    <h1 class="text-light fs-4 mt-3 fw-medium">Contact Info</h1>
                    <p class="text-light lh-1 fw-light ">Terms & Conditions </br> About Us </br> Provacy Policy</p>

                  </div>

                  <div class="col">
                    <h1 class="text-light fs-4 mt-3 fw-medium">Account</h1>
                    <p class="text-light lh-1 fw-light ">My Account</br> Setting</br> FAQ</br> History</p>

                  </div>
                </div>
              </div>
        </div>
@endsection
