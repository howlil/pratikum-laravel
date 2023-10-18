@extends('layout.apps')

@section('title')
    Sakara Coffe
@endsection

@section('nav')
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

@section('konten')
    <div class="d-flex justify-content-star">
        <div class="col-3   shadow  ">
            <div class="gambar text-center ">
                <img src="/img/prof.jpg" alt="prf" class="mx-auto mt-5" width="40%">
                <h3 class="fs-5 fw-medium" style="font-family: roboto">
                    ryukatsu
                </h3>
            </div>
            <div class="container-fluid mt-5 ">
                <div class="h6 pb-1  mx-4 fw-medium  text-black border-2 border-bottom border-black"
                    style="font-family: montserrat; ">
                    Mhd Ulil Abshar
                </div>
                <div class="h6 pb-1  mx-4 fw-medium  text-black border-2 border-bottom border-black"
                    style="font-family: montserrat; ">
                    2211521003
                </div>
                <div class="h6 pb-1  mx-4 fw-medium  text-black border-2 border-bottom border-black"
                    style="font-family: montserrat; ">
                    Laboratory Enterprise Apps
                </div>
                <div class="h6 pb-1  mx-4 fw-medium  text-black border-2 border-bottom border-black"
                    style="font-family: montserrat; ">
                    Sistem Informasi
                </div>
                <div class="h6 pb-1  mx-4 fw-medium  text-black border-2 border-bottom border-black"
                    style="font-family: montserrat; ">
                    Jalan Koto Tuo
                </div>
                <div class="h6 pb-1  mx-4 fw-medium  text-black border-2 border-bottom border-black"
                    style="font-family: montserrat; ">
                    mhdulilabshar27@mail.com
                </div>

                <div class="h6 pb-1 mb-5  mx-4 fw-medium  text-black border-2 border-bottom border-black"
                    style="font-family: montserrat; ">
                    ryu.github.io
                </div>


            </div>
            <div class="footer bg-black   ">
                <div class="sosmed text-center p-4  ">
                    <i class="fa fa-instagram text-light fs-4 mx-4" aria-hidden="true"></i>
                    <i class="fa fa-facebook-square text-light fs-4 mx-4" aria-hidden="true"></i>
                    <i class="fa fa-youtube-play text-light fs-4 mx-4" aria-hidden="true"></i>
                </div>
            </div>
        </div>


        <div class="col-8 ms-5">
            <div class="container  mt-4 shadow p-3 rounded w-100">

                <div class="d-flex justify-content-around">
                    <div class="d-flex justify-content-center">
                        <div class="icon">
                            <i class="fa fa-credit-card-alt fs-1" aria-hidden="true"></i>
                        </div>
                        <div class="cont ps-3">
                            <div class="h6 fw-bold">
                                Rp.999.999
                            </div>
                            <p style="color:rgb(170, 170, 170); position:absolute ;top:110px;"> saldo</p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="icon">
                            <i class="fa fa-coffee fs-1" aria-hidden="true"></i>
                        </div>
                        <div class="cont ps-3">
                            <div class="h6 fw-bold">
                                999
                            </div>
                            <p style="color:rgb(170, 170, 170); position:absolute ;top:110px;"> transaksi</p>

                        </div>

                    </div>


                    <div class="d-flex justify-content-center">
                        <div class="icon">
                            <i class="fa fa-check-circle fs-1" aria-hidden="true"></i>
                        </div>
                        <div class="cont ps-3">
                            <div class="h6 fw-bold">
                                Member
                            </div>
                            <p style=" color:rgb(170, 170, 170);position:absolute ;top:110px;"> Premium</p>

                        </div>

                    </div>
                </div>

            </div>

            <div class="position-relative" style=" margin-top:30px;">
                <div class="position-absolute top-0 start-0">
                    <p style="font-family: montserrat;font-weight:500;"><strong>Riwayat Transaksi</strong></p>
                </div>
                <div class="position-absolute top-0 end-0">
                    <a hre style="font-family: montserrat;font-weight:400;color:#bebcbc">Show More</a>
                </div>
            </div>



            <div class="row flex-nowrap flex-row ">
                <div class="row row-cols-1 row-cols-md-4 g-4 ">
                    <div class="col">
                        <div class="card" style="height: 90%;">
                            <img src="/img/product1.jpeg" class="object-fit-cover border " alt="/img/product.jpg"
                                style="filter: brightness(50%); background-size: contain; width: 100%; height: 150px;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between" style="padding-bottom:20px;">
                                    <div class="ratings">
                                        <i class="fa fa-shopping-basket" aria-hidden="true" style="font-size:32px;"></i>
                                    </div>
                                    <div class="teks">
                                        <h6 class="position-absolute end-0"
                                            style="font-size:18px;bottom:20px; left:70px; font-family: montserrat;font-weight:bold;">
                                            Kopi Susu</h6>
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
                            <img src="/img/product1.jpeg" class="object-fit-cover border " alt="/img/product.jpg"
                                style="filter: brightness(50%); background-size: contain; width: 100%; height: 150px;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between" style="padding-bottom:20px;">
                                    <div class="ratings">
                                        <i class="fa fa-shopping-basket" aria-hidden="true" style="font-size:32px;"></i>
                                    </div>
                                    <div class="teks">
                                        <h6 class="position-absolute end-0"
                                            style="font-size:18px;bottom:20px; left:70px; font-family: montserrat;font-weight:bold;">
                                            Kopi Susu</h6>
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
                            <img src="/img/product1.jpeg" class="object-fit-cover border " alt="/img/product.jpg"
                                style="filter: brightness(50%); background-size: contain; width: 100%; height: 150px;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between" style="padding-bottom:20px;">
                                    <div class="ratings">
                                        <i class="fa fa-shopping-basket" aria-hidden="true" style="font-size:32px;"></i>
                                    </div>
                                    <div class="teks">
                                        <h6 class="position-absolute end-0"
                                            style="font-size:18px;bottom:20px; left:70px; font-family: montserrat;font-weight:bold;">
                                            Kopi Susu</h6>
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
                            <img src="/img/product1.jpeg" class="object-fit-cover border " alt="/img/product.jpg"
                                style="filter: brightness(50%); background-size: contain; width: 100%; height: 150px;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between" style="padding-bottom:20px;">
                                    <div class="ratings">
                                        <i class="fa fa-shopping-basket" aria-hidden="true" style="font-size:32px;"></i>
                                    </div>
                                    <div class="teks">
                                        <h6 class="position-absolute end-0"
                                            style="font-size:18px;bottom:20px; left:70px; font-family: montserrat;font-weight:bold;">
                                            Kopi Susu</h6>
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

            <div class="position-relative" style=" margin-top:0px;">
                <div class="position-absolute top-0 start-0">
                    <p style="font-family: montserrat;font-weight:500;"><strong>Detail Akun</strong></p>
                </div>

            </div>
            <div class="d-flex justify-content-between mt-5">
                <div class="faq">
                    <div class="h6 pb-1   fw-medium  text-black border-2 border-bottom border-black"
                        style="font-family: montserrat; ">
                        Change Profile
                    </div>
                    <div class="h6 pb-1   fw-medium  text-black border-2 border-bottom border-black"
                        style="font-family: montserrat; ">
                        Privasy Policy
                    </div>
                    <div class="h6 pb-1   fw-medium  text-black border-2 border-bottom border-black"
                        style="font-family: montserrat; ">
                        FAQ
                    </div>

                </div>
                <div class="faq2 ">
                    <div class="h6 pb-1   fw-medium  text-black border-2 border-bottom border-black"
                        style="font-family: montserrat; ">
                        About Us
                    </div>
                    <div class="h6 pb-1   fw-medium  text-black border-2 border-bottom border-black"
                        style="font-family: montserrat; ">
                        Term and Condition
                    </div>
                    <div class="h6 pb-1   fw-medium  text-black border-2 border-bottom border-black"
                        style="font-family: montserrat; ">
                        order History
                    </div>

                </div>

                <div class="faq3 ">
                    <div class="h6 pb-1   fw-medium  text-black border-2 border-bottom border-black"
                        style="font-family: montserrat; ">
                        Payment
                    </div>
                    <div class="h6 pb-1   fw-medium  text-black border-2 border-bottom border-black"
                        style="font-family: montserrat; ">
                        Saran dan Masukan
                    </div>
                    <div class="h6 pb-1   fw-medium  text-black border-2 border-bottom border-black"
                        style="font-family: montserrat; ">
                        Rating
                    </div>

                </div>
                <div class="faq3 ">
                    <div class="h6 pb-1   fw-medium  text-black border-2 border-bottom border-black"
                        style="font-family: montserrat; ">
                        Lokasi
                    </div>
                    <div class="h6 pb-1   fw-medium  text-black border-2 border-bottom border-black"
                        style="font-family: montserrat; ">
                        Partnert
                    </div>
                    <div class="h6 pb-1   fw-medium  text-black border-2 border-bottom border-black"
                        style="font-family: montserrat; ">
                        Achievment
                    </div>

                </div>
            </div>


        </div>
    </div>
    </div>
    </div>
@endsection
