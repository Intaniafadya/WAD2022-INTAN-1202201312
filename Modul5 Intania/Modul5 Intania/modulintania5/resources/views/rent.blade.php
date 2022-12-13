@extends('template.layout')
@section('content')
    <div class="header">
        <h2>My Showroom</h2>
        <p>List Showroom Intania-1202201312</p>
    </div>
    <div class="row gap-4">
        <?php foreach($user as $data):?>
        <div class="col-md-5">
            <div class="card">
                <img src={{ asset('assets/img/rent/' . $data->image) }} class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->name }}</h5>
                    <p class="card-text">{{ $data->description }}</p>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center gap-4">
                        <div class="col-md-5"><a href={{ route('rent.detail', ['id' => $data->id]) }}
                                class="btn btn-danger rounded-pill w-100">Detail</a></div>
                        <div class="col-md-5"><a href={{ route('rent.hapus', ['id' => $data->id]) }}
                                class="btn btn-danger rounded-pill w-100">Delete</a> </div>
                    </div>

                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
@endsection
