<?php
if (isset($_POST['submit'])) {
    $booking = rand();
    $name = $_POST['nama'];
    $check_in = $_POST['date'] . ' ' . $_POST['time'];
    $check_out = date('Y-m-d', strtotime($_POST['date'] . ' + ' . $_POST['duration'] .  ' days')) . ' ' . $_POST['time'];
    $mobil = $_POST['type'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $price_service = 0;
    foreach ($service as $val) {
        if ($val = "Health protocol")
            $price_service += 25000;
        else if ($val = "Driver")
            $price_service += 100000;
        else if ($val = "Fuel Filled")
            $price_service += 250000;
    }
    // var_dump($service);
    $total = 0;
    if ($mobil == 'Toyota Rush') {
        $total = (325000 * (int) $_POST['time']) + $price_service;
        $img = "https://romeltea.com/wp-content/uploads/2019/01/toyota-rush-1280x720.jpg";
    } elseif ($mobil == 'Daihatsu Ayla') {
        $total = (275000 * (int) $_POST['time']) + $price_service;
        $img = "https://awsimages.detik.net.id/customthumb/2014/10/09/1207/aylamerahin.jpg?w=700&q=90";
    } elseif ($mobil == 'Honda Brio') {
        $total = (250000 * (int) $_POST['time']) + $price_service;
        $img = "https://static.rajamobil.com/resize/600x600/media/images/databasemobil/mobilbaru/color/1613981961-Carnival%20Yellow.png";
    }
}
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
    <section>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Car Type</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service(s)</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row"><?= $booking ?></td>
                        <td><?= $name ?></td>
                        <td><?= $check_in ?></td>
                        <td><?= $check_out ?></td>
                        <td><?= $mobil ?></td>
                        <td><?= $phone ?></td>
                        <td>
                            <ul>
                                <?php foreach ($service as $val) : ?>
                                    <li><?= $val ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </td>
                        <td><?= $total ?></td>
                    </tr>
                </tbody>
            </table>
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