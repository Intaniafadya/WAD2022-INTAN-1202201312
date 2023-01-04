<?php
session_start();
if (isset($_POST['submit'])) {
    $booking = rand();
    $namaRent = $_POST['nameRent'];
    $namaBook = $_POST['nameBook'];
    $kodeBook = $_POST['kodeBook'];
    $check_in = $_POST['bookDate'] . ' ' . $_POST['startTime'];
    
    $check_out = date('Y-m-d', strtotime($_POST['bookDate'] . ' + ' . $_POST['durationDay'] .  ' days')) . ' ' . $_POST['startTime'];
    $total_day = strtotime($check_out) - strtotime($check_in);
    $total_day = $total_day / 60 / 60 / 24;

    $date = $_POST['bookDate'];
    $time = $_POST['startTime'];
    $day = $_POST['durationDay'];
    $category = $_POST['categoryBook'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $price_service = 0;
    foreach ($service as $val) {
        if ($val == "Cover Book")
            $price_service += 5000;
        else if ($val == "Delay Tolerance")
            $price_service += 10000;
        else if ($val == "One Read One Happiness")
            $price_service += 1000;
    }
    // var_dump($total_day);
    $total = 0;
    $total = ($_POST['harga'] *$total_day) + $price_service;

    $data = [
        'booking' => $booking,
        'namaRent' => $namaRent,
        'kodeBook' => $kodeBook,
        'namaBook' => $namaBook,
        'date' => $date,
        'time' => $time,
        'day' => $day,
        'category' => $category,
        'phone' => $phone,
        'check_in' => $check_in,
        'check_out' => $check_out,
        'service' => $service,
        'total' => $total
    ];
    // var_dump($service);
    //save session array
    
    if (isset($_SESSION['data'])) {
        $key = array_key_first($_SESSION['data']);
        // var_dump($key);
        array_push($_SESSION['data'][$key++], [
            'booking' => $booking,
            'namaRent' => $namaRent,
            'kodeBook' => $kodeBook,
            'namaBook' => $namaBook,
            'date' => $date,
            'time' => $time,
            'day' => $day,
            'category' => $category,
            'phone' => $phone,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'service' => $service,
            'total' => $total
        ]);
    } else {
        $_SESSION['data'][0] = [
            'booking' => $booking,
            'namaRent' => $namaRent,
            'kodeBook' => $kodeBook,
            'namaBook' => $namaBook,
            'date' => $date,
            'time' => $time,
            'day' => $day,
            'category' => $category,
            'phone' => $phone,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'service' => $service,
            'total' => $total
        ];
    }

    // var_dump($_SESSION['data']);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAD Rental Buku</title>
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
                        <a class="nav-link" href="Intania_Mybooking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <section>
        <?php 
            if(isset($_SESSION['data'])) :
        ?>
            <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name Rent</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Category</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service(s)</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($_SESSION['data'] as $key => $val) : ?>
                    <tr class="">
                        <td scope="row"><?= $val['booking'] ?></td>
                        <td scope="row"><?= $val['namaRent'] ?></td>
                        <td scope="row"><?= $val['namaBook'] ?></td>
                        <td scope="row"><?= $val['check_in'] ?></td>
                        <td scope="row"><?= $val['check_out'] ?></td>
                        <td scope="row"><?= $val['category'] ?></td>
                        <td scope="row"><?= $val['phone'] ?></td>
                        <td>
                            <ul>
                                <?php foreach ($val['service'] as $services) : ?>
                                    <li><?= $services ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </td>
                        <td scope="row"><?= $val['total'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php else : ?>
            <div>Data not found</div>
        <?php
        endif;
        ?>
        

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