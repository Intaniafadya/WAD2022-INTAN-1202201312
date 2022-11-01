<?php
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
];

// $image = array_filter($datas, function ($val) use ($name) {
//     return $val["nama"] == $name;
// });
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
                <h3>Rent Your Car Now!</h3>
                </p>
            </div>
        </div>
    </div>

    <section id="about" class="py-5" style="background: color white;;">
        <div class="container-fluid mt-3">
            <div class="row align-items-center">
                <div class="col-6">
                    <div>
                        <?php
                        $name = $_GET['image'];
                        $data = array_filter($datas, function ($val) use ($name) {
                            return $val["nama"] == $name;
                        });
                        foreach ($data as $val) :
                        ?>
                            <img src=<?= $val['image'] ?> class="img-fluid">
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="col-6">
                    <form action="Intania_Mybooking.php" method="post">
                        <div class="form-group">
                            <label for="Nama">Name</label>
                            <input type="text" class="form-control" id="Nama" name="nama" placeholder="Intania_1202201312">
                            <div class="form-group">
                                <label for="date">Book Date</label>
                                <input type="date" class="form-control" id="date" name="date" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="time">Start Time</label>
                                <input type="time" class="form-control" id="time" name="time" placeholder="">
                                <div class="form-group">
                                    <label for="day">Duration/day</label>
                                    <input type="text" class="form-control" id="duration" name="duration" placeholder="">
                                    <div class="form-group">
                                        <label for="day">Type Car</label>
                                        <select class="form-select" id="choice" name="type">
                                            <?php foreach ($datas as $data) : ?>
                                                <option value="<?= $data['nama'] ?>" <?= ($data['nama'] == $_GET['image'] ? 'selected' : '') ?>><?= $data['nama'] ?></option>
                                            <?php endforeach; ?>
                                            <!-- <?php if (!isset($_GET['image'])) : ?>
                                                <?php foreach ($cars as $car) : ?>
                                                    <option value="<?= $car['nama'] ?>"><?= $car['nama'] ?></option>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <option value="<?= $_GET['image'] ?>"><?= $_GET['image'] ?></option>
                                            <?php endif; ?> -->
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="input" class="form-control" id="phone" name="phone" placeholder="">
                                        <br>
                                        <p>Add Service(s)
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="service[]" value="Health protocol">
                                            <label class="form-check-label" for="exampleCheck1">Health protocol/Rp25.000</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="service[]" value="Driver">
                                            <label class="form-check-label" for="exampleCheck1">Driver/Rp100.000</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="service[]" value="Fuel Filled">
                                            <label class="form-check-label" for="exampleCheck1">Fuel Filled/Rp 250.000</label>
                                        </div>
                                        <div class="button">
                                            <div class="d-grid gap-2">
                                                <input type="submit" name="submit" class="btn btn-success" value="Book Now">
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