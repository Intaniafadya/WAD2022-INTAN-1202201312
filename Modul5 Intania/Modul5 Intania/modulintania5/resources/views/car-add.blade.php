@extends('template.layout')
@section('content')
    <div class="header">
        <h2>Tambah Mobil</h2>
        <p>Tambah Mobil Baru Anda ke List Showroom</p>
    </div>
    <div class="row">
        <div class="col-md-10">
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action={{ route('rent.store') }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="car" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="car" name="car">
                </div>
                <div class="mb-3">
                    <label for="owner" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="owner" name="owner">
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="brand" name="brand">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal Beli</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
                <div class="d-flex mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status[]" id="status" value="Lunas">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Lunas
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="status[]" id="status" value="Belum Lunas">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Belum Lunas
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
