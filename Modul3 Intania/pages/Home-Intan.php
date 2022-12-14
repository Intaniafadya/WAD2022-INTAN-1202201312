<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- My Css -->
  <link rel="stylesheet" href="../assets/styles/index.css">

  <title>Home</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3">
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
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
      <div class="row align-items-center mt-5">
        <div class="col">
          <h1 class="fw-bold">Selamat Datang Di Show Room Intania</h1>

          <div class="description">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex exercitationem eius veniam molestias
              accusantium labore</p>
          </div>

          <a href="ListCar-Intan.php" type="button" class="btn btn-primary">MyCar</a>

          <div class="about mt-5">
            <div class="d-flex gap-4">
              <img src="../assets/images/logo-ead.png" alt="logo-ead" width="100" height="25">
              <p>Intan_1202201312</p>
            </div>
          </div>
        </div>

        <div class="col">
          <img src="../assets/images/foto2.jpg" width="600" height="320" class="rounded" alt="static car">
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>