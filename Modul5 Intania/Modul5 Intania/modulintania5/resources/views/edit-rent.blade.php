@extends('template.layout')
@section('content')
    <div class="header">
        <h2>Tambah Mobil</h2>
        <p>Tambah Mobil Baru Anda ke List Showroom</p>
    </div>
    <div class="row">
        <div class="col-md-10">
            @foreach ($mobil as $datas)
                <form action={{ route('rent.edit.action') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="<?= $datas['id'] ?>">
                    <div class="mb-3">
                        <label for="car" class="form-label">Nama Mobil</label>
                        <input type="text" class="form-control" id="car" name="car" value={{ $datas->name }}>
                    </div>
                    <div class="mb-3">
                        <label for="owner" class="form-label">Nama Pemilik</label>
                        <input type="text" class="form-control" id="owner" name="owner" value={{ $datas->owner }}>
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Merk</label>
                        <input type="text" class="form-control" id="brand" name="brand" value={{ $datas->brand }}>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal Beli</label>
                        <input type="date" class="form-control" id="date" name="date"
                            value={{ $datas->purchase_date }}>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                            value={{ $datas->description }}>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <div class="d-flex mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status[]" id="status" value="Lunas"
                                <?php if ($datas['status'] == 'Lunas') {
                                    echo 'checked';
                                } ?>>
                            <label class="form-check-label" for="status">
                                Lunas
                            </label>
                        </div>
                        <div class="form-check ms-2">
                            <input class="form-check-input" type="radio" name="status[]" id="status"
                                value="Belum Lunas" <?php if ($datas['status'] == 'Belum Lunas') {
                                    echo 'checked';
                                } ?> <label class="form-check-label" for="status">
                            Belum Lunas
                            </label>
                        </div>
                    </div>
                    <button type="submit" class='btn btn-primary px-5' name="submit">Update</button>
                </form>
            @endforeach

        </div>
    </div>
    </div>
@endsection
