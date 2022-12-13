@extends('template.layout')
@section('content')
    <h1 class="text-center">Profile</h1>

    @foreach ($user as $data)
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        <form action={{ route('profile.update') }} class="mt-5" method="post">
            @csrf
            <div class="mb-3 mt-3 d-flex justify-content-between align-items-center">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control border border-0"
                    value={{ $data->email }} readonly>
            </div>
            <div class="mb-3 mt-3 d-flex justify-content-between align-items-center">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value={{ $data->name }}>
            </div>
            <div class="mb-3 mt-3 d-flex justify-content-between align-items-center">
                <label for="no" class="form-label">Nomor Handphone</label>
                <input type="text" name="no" id="no" class="form-control" value={{ $data->no_hp }}>
            </div>
            <hr>
            <div class="mb-3 mt-3 d-flex justify-content-between align-items-center">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Konfirmasi Password"
                    required />
            </div>
            <div class="mb-3 mt-3 d-flex justify-content-between align-items-center">
                <label for="password2" class="form-label">Konfirmasi Password</label>
                <input type="password" name="password2" id="password2" class="form-control"
                    placeholder="Konfirmasi Password" required />
            </div>
            <div class="mb-3 mt-3 d-flex justify-content-between align-items-center">
                <label for="password2" class="form-label">Tema Navbar</label>
                <select class="form-select" aria-label="Default select example" name="navbar">
                    <option selected>Open this select menu</option>
                    <option value="1">Merah</option>
                    <option value="2">Hijau</option>
                    <option value="3">Biru</option>
                </select>
            </div>
            <center>
                <button type="submit" class="btn btn-primary px-5" name="submit">Update</button>
            </center>
        </form>
    @endforeach
@endsection
