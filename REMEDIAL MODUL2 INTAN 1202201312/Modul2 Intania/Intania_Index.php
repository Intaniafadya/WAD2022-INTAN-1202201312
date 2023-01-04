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

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAD Book Rent</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <style>
        .img-fluid {
            max-height: 200px !important;
            width: auto;
        }
    </style>
</head>


<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="navbar-collapse justify-content-center">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#Intania_Index.php"> Home <span class="sr-only"></span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Intania_Mybooking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <section id="jeniskendaraan" class="py-5">
        <div class="container text-center">
            <h2>WELCOME TO EAD BOOK RENT</h2>
            <p> Find Your dream book, here! </p>

            <div class="row justify-content-center">
                <?php foreach ($datas as $data) : ?>
                    <div class="col-lg-3 mb-3">
                        <div class="card" style="width: 15.8rem;">
                            <img src="<?= $data['image'] ?> " class="" width="250" height="300">
                            <h4><?= $data['nama'] ?></h4>
                            <p>Kode <?= $data['kode'] ?>

                            <div class="<?= $data['stok'] > 0 ? 'text-primary' : "text-danger" ?>"><?= $data['stok'] > 0 ? 'In Stock' : "kosong" ?> : <?= $data['stok'] ?></div>
                            <div class="text-primary"><?= $data['kategori'] ?></div>
                            </p>
                            <div class="card-footer">
                                <a href="Intania_Booking.php?id=<?= $data['kode'] ?>" class="btn btn-success">Book Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
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