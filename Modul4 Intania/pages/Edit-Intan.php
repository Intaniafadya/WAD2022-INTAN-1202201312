<?php
session_start();
require "../config/connector.php";
require "../config/edit.php";

if($_SESSION["login"] != true){
  header("Location: ../index.php");
}

$datas = detail($_GET["id"])[0];
if(isset($_POST['submit'])){
    edit($_POST, $_FILES, $_GET["id"]);
}

if(!isset($_COOKIE['navbar'])){
  $navbar = 'bg-primary';
} else{
$navbar = $_COOKIE['navbar'];
}
?>

<!doctype html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/styles/index.css">

  <title>Edit Mobil</title>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark <?= $navbar ?> py-3">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="Home-Intan.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ListCar-Intan.php">MyCar</a>
            </li>
          </ul>
        </div>
        <div class="add-car">
            <a href="Add-Intan.php" class="btn btn-light text-primary">Add Car</a>
      </div>
      <div class="dropdown  ms-3">
        <a class="btn btn-light text-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?= $_SESSION["nama"]; ?>
        </a>

        <ul class="dropdown-menu ">
          <li><a class="dropdown-item text-primary" href="Profile-Intan.php">Profile</a></li>
          <li><a class="dropdown-item text-primary" href="../config/logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <div class="container mt-5 mb-3">
      <div class="header">
        <h2>Tambah Mobil</h2>
        <p>Tambah Mobil Baru Anda ke List Showroom</p>
         </div>
            <div class="row">
            <div class="col-md-10">
              <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $datas['id_mobil'] ?>">
                <div class="mb-3">
                    <label for="car" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="car" name="car" value="<?= $datas['nama_mobil']?>">
                </div>
                <div class="mb-3">
                    <label for="owner" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="owner" name="owner" value="<?= $datas['pemilik_mobil']?>">
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="brand" name="brand" value="<?= $datas['merk_mobil']?>">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal Beli</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?= $datas['tanggal_beli']?>">
                </div>
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $datas['deskripsi']?>">
                </div>
                <div class="mb-3">
                      <label for="foto" class="form-label">Foto</label>
                      <input type="file" class="form-control" id="foto" name="foto">
                  </div>
                <div class="d-flex mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status[]" id="status" value="Lunas" <?php if($datas['status_pembayaran'] == 'Lunas'){ echo 'checked';} ?>>
                  <label class="form-check-label" for="status">
                    Lunas
                  </label>
                </div>
                <div class="form-check ms-2">
                  <input class="form-check-input" type="radio" name="status[]" id="status" value="Belum Lunas" <?php if($datas['status_pembayaran'] == 'Belum Lunas'){ echo 'checked';} ?>
                  <label class="form-check-label" for="status">
                    Belum Lunas
                  </label>
                </div>
              </div>
              <button type="submit"  class='btn btn-primary px-5' name="submit">Update</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>