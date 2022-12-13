@extends('template.layout')
@section('content')
    <div class="row align-items-center mt-5">
        <div class="col">
            <h1 class="fw-bold">Selamat Datang Di Show Room Intania</h1>

            <div class="description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex exercitationem eius veniam
                    molestias
                    accusantium labore</p>
            </div>

            <a href="ListCar-Intan.php" type="button" class="btn btn-primary">MyCar</a>

            <div class="about mt-5">
                <div class="d-flex gap-4">
                    <img src={{ asset('assets/img/logo-ead.png') }} alt="logo-ead" width="100" height="25">
                    <p>Intan_1202201312</p>
                </div>
            </div>
        </div>

        <div class="col">
            <img src={{ asset('assets/img/foto4.jpg') }} width="600" height="320" class="rounded" alt="static car">
        </div>
    </div>
@endsection
