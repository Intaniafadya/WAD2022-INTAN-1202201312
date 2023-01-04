<!DOCTYPE html>
<html lang="en">
<?php
$datas = [
    [
        "kode" => "A101",
        "nama" => "Kancil & Buaya",
        "stok" => "7",
        "harga" => "10000",
        "kategori" => "comic",
        "image" => "https://i.ytimg.com/vi/KUrlU6WW7ZI/maxresdefault.jpg"
    ],
    [
        "kode" => "A102",
        "nama" => "Legenda timun mas",
        "stok" => "2",
        "harga" => "12000",
        "kategori" => "comic",
        "image" => "https://i.ytimg.com/vi/l3NlcLafVa4/maxresdefault.jpg"
    ],
    [
        "kode" => "B101",
        "nama" => "IPA kelas 10",
        "stok" => "10",
        "harga" => "15000",
        "kategori" => "pelajaran",
        "image" => "https://cdn.eurekabookhouse.co.id/ebh/product/all/IPA_BISMEN4.jpg"
    ],
    [
        "kode" => "B102",
        "nama" => "Matematika Dasar",
        "stok" => "10",
        "harga" => "8000",
        "kategori" => "pelajaran",
        "image" => "https://id-test-11.slatic.net/p/47f61edcf69f8e9cb24067dad8ca0b22.png"
    ]
];

// if (!isset($_GET['id'])) {
//     header("Location: Intania_Index.php");
// } else {
//     $id = $_GET['id'];
//     // $data = $datas[$id];
//     $filtered_data = array_filter($datas, function ($data) use ($id) {
//         return $data['kode'] == $id;
//     });
// }

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // $data = $datas[$id];
    $filtered_data = array_filter($datas, function ($data) use ($id) {
        return $data['kode'] == $id;
    });
    $filtered_data = array_values($filtered_data);
    // var_dump($filtered_data);
}
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAD Rental</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="navbar-collapse justify-content-center">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="Intania_Index.php"> Home <span class="sr-only"></span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Intania_Booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <div id="awal">
        <div class="text-center">
            <div>
                <p>
                <h3>Rent Your Book Now!</h3>
                </p>
            </div>
        </div>
    </div>

    <section id="about" class="py-5" style="background: color white;;">
        <div class="container-fluid mt-3">
            <div class="row align-items-center">
                <div class="col-6">
                    <div>
                        <img src="<?= $filtered_data[0]["image"] ?>" class="img-fluid">
                    </div>
                </div>

                <div class="col-6">
                    <form action="Intania_Mybooking.php" method="post">
                        <div class="form-group">
                            <label for="nameRent">Name of Rent</label>
                            <input type="text" class="form-control" name="nameRent" id="nameRent" placeholder="Intania_1202201312">
                        </div>
                        <div class="form-group">
                            <label for="kode">Code of Book</label>
                            <input type="text" class="form-control" name="kodeBook" id="kodeBook" placeholder="" <?= isset($_GET['id']) ? 'readonly' : '' ?> value="<?= $filtered_data[0]["kode"] ?>">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Name of Book</label>
                            <input type="text" class="form-control" name="nameBook" id="nameBook" placeholder="Type your book" <?= isset($_GET['id']) ? 'readonly' : '' ?> value="<?= $filtered_data[0]["nama"] ?>">

                        </div>
                        <div class="form-group">
                            <label for="date">Price Rent / Day</label>
                            <input type="number" class="form-control" id="date" name="harga" placeholder="" <?= isset($_GET['id']) ? 'readonly' : '' ?> value="<?= $filtered_data[0]["harga"] ?>">
                        </div>
                        <div class="form-group">
                            <label for="date">Book Date</label>
                            <input type="date" class="form-control" id="date" name="bookDate" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="time">Start Time</label>
                            <input type="time" class="form-control" id="time" name="startTime" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="day">Duration/day</label>
                            <input type="text" class="form-control" id="duration" name="durationDay" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="day">Book Categori</label>
                            <select class="form-select" id="choice" name="categoryBook">
                                <?php if (!isset($_GET['id'])) : ?>
                                    <?php foreach ($data as $datas) : ?>
                                        <option value="<?= $datas['kategori'] ?>"><?= $datas['kategori'] ?></option>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <?php foreach ($filtered_data as $data) : ?>
                                        <option value="<?= $data['kategori'] ?>"><?= $data['kategori'] ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="input" class="form-control" id="phone" name="phone" placeholder="">
                        </div>
                        <br>
                        <p>Add Service(s)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="service[]" value="Cover Book" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Cover Book/Rp5.000</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="service[]" value="Delay Tolerance" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Delay Tolerance/Rp10.000</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="service[]" value="One Read One Happiness" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">One Read One Happiness/Rp 1.000</label>
                        </div>
                        <div class="button">
                            <div class="d-grid gap-2">
                                <input type="submit" name="submit" class="btn btn-success" value="Book Now">
                            </div>
                        </div>
                    </form>

    </section>

    <footer class="text-center">
        <a data-bs-toggle="modal" data-bs-target="#exampleModal">Created by Intania_1202201312</a>
    </footer>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Created</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Nama: Intania Fadya Safitri<br />
                    NIM: 1202201312<br />
                    Kelas: SI4406
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>