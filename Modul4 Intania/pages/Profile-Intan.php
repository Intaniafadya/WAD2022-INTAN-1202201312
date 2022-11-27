<?php
session_start();
require '../config/connector.php';
require '../config/profile.php';

if($_SESSION["login"] != true){
    header("Location: ../index.php");
  }

$data = getuser($_SESSION["nama"]);

if(!isset($_COOKIE['navbar'])){
  $navbar = 'bg-primary';
} else{
$navbar = $_COOKIE['navbar'];
}

if(isset($_POST['submit'])){
  if($_POST['password'] == $_POST['password2'] && $_POST['password']  == $data['password']){
      edit($_POST);
      header("Location: Profile-Intan.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/styles/index.css">
    <title>Profile</title>
    <style>
        label{
            width: 250px;
        }
    </style>
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
    <div class="cotaniner mt-3 p-5">
        <h1 class="text-center">Profile</h1>
        <form action="" class="mt-5" method="post">
            <div class="mb-3 mt-3 d-flex justify-content-between align-items-center">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control border border-0" value="<?= $data['email'] ?>" readonly>
            </div>
            <div class="mb-3 mt-3 d-flex justify-content-between align-items-center">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama'] ?>">
            </div>
            <div class="mb-3 mt-3 d-flex justify-content-between align-items-center">
                <label for="no" class="form-label">Nomor Handphone</label>
                <input type="text" name="no" id="no" class="form-control" value="<?= $data['no_hp'] ?>">
            </div>
            <hr>
            <div class="mb-3 mt-3 d-flex justify-content-between align-items-center">
              <label for="password" class="form-label">Password</label>
              <input
                type="password"
                name="password"
                id="password"
                class="form-control"
                placeholder="Konfirmasi Password"
                required
              />
            </div>
            <div class="mb-3 mt-3 d-flex justify-content-between align-items-center">
              <label for="password2" class="form-label"
                >Konfirmasi Password</label
              >
              <input
                type="password"
                name="password2"
                id="password2"
                class="form-control"
                placeholder="Konfirmasi Password"
                required
              />
            </div>
            <div class="mb-3 mt-3 d-flex justify-content-between align-items-center">
              <label for="password2" class="form-label"
                >Tema Navbar</label
              >
              <select class="form-select" aria-label="Default select example" name="navbar">
                <option selected>Open this select menu</option>
                <option value="1">Merah</option>
                <option value="2">Hijau</option>
                <option value="3">Biru</option>
            </select>
            </div>
            <center>
                <button type="submit" class="btn btn-primary px-5" name="submit">Update</button>
            </center>
        </form>
    </div>
  </main>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>