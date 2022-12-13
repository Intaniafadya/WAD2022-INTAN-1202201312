@extends('template.layout')
@section('content')
    <div class="header">
        <h2>Tambah Mobil</h2>
        <p>Tambah Mobil Baru Anda ke List Showroom</p>
    </div>
    <div class="row">
        <div class="col-md-10">

            @foreach ($mobil as $datas)
                <div class="mb-3">
                    <label for="car" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="car" name="car" readonly value={{ $datas->name }}>
                </div>
                <div class="mb-3">
                    <label for="owner" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="owner" name="owner" readonly
                        value={{ $datas->owner }}>
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="brand" name="brand" readonly
                        value={{ $datas->brand }}>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal Beli</label>
                    <input type="date" class="form-control" id="date" name="date" readonly
                        value={{ $datas->purchase_date }}>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" readonly
                        value={{ $datas->description }}>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="text" class="form-control" id="foto" name="foto" readonly
                        value={{ $datas->image }}>
                </div>
                <div class="d-flex mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                            <?php if ($datas->status == 'Lunas') {
                                echo 'checked';
                            } ?>>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Lunas
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            <?php if ($datas['status_pembayaran'] == 'Belum Lunas') {
                                echo 'checked';
                            } ?> <label class="form-check-label" for="flexRadioDefault2">
                        Belum Lunas
                        </label>
                    </div>
                </div>
                <a href={{ route('rent.edit', ['id' => $datas->id]) }} class='btn btn-primary px-5'>Edit</a>
            @endforeach

        </div>
    </div>
    </div>
@endsection
