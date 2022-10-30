<?php
// ini untuk dummy data yang ditampung dalam multiple array atau bisa disebut array of array
$datas = [
    [
        "nama" => "Toyota Rush",
        "harga" => "325.000/hari",
        "kursi" => "7",
        "CC" => "1,496",
        "Tipe" => "Manual/Matic",
        "image" => "https://romeltea.com/wp-content/uploads/2019/01/toyota-rush-1280x720.jpg"
    ],
    [
        "nama" => "Daihatsu Ayla",
        "harga" => "275.000/hari",
        "kursi" => "5",
        "CC" => "1,198",
        "Tipe" => "Manual",
        "image" => "https://awsimages.detik.net.id/customthumb/2014/10/09/1207/aylamerahin.jpg?w=700&q=90"
    ],
    [
        "nama" => "Honda Brio",
        "harga" => "250.000/hari",
        "kursi" => "4",
        "CC" => "1,199",
        "Tipe" => "Manual/Matic",
        "image" => "https://static.rajamobil.com/resize/600x600/media/images/databasemobil/mobilbaru/color/1613981961-Carnival%20Yellow.png"
    ]
];;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAD Rental</title>
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
    <!-- Menampilkan tampilan header atas -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="navbar-collapse justify-content-center">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#Home"> Home <span class="sr-only"></span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Intania_Booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <section id="jeniskendaraan" class="py-5">
        <div class="container text-center">
            <h2>WELCOME TO EAD RENT</h2>
            <p> Find Your best deal, here! </p>

            <div class="row justify-content-center">
                <!-- Setiap data yang bersifat array terutama bersifat objek dapat diakses dengan mudah menggunakan foreach. 
                     Foreach bertujuan untuk mempermudah pengaksesan data pada array tanpa perlu menulis indeksnya sepertia
                     $data[0]["nama"], dengan foreach cukup dengan mengaksesnya menjadi $data ["nama"]
                -->
                <!-- Foreach memiliki fungsi yang sama seperti for yaitu melakukan perulangan -->
                <?php foreach ($datas as $data) : ?>
                    <div class="col-lg-4 mb-3">
                        <div class="card">
                            <img src="<?= $data['image'] ?> " class="img-fluid">
                            <h4><?= $data['nama'] ?></h4>
                            <p>IDR <?= $data['harga'] ?>
                            <div class="text-primary"><?= $data['kursi'] ?> Kursi </div>
                            <div class="text-primary"><?= $data['CC'] ?> CC</div>
                            <div class="text-primary"><?= $data['Tipe'] ?></div>
                            </p>
                            <div class="card-footer">
                                <a href="Intania_Booking.php" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    
    <!-- Menampilkan tampilan footer atau Copyright-->
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