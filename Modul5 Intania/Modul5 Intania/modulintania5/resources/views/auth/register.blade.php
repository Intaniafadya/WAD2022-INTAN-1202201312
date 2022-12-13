<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/styles/index.css" />

    <title>Register</title>
    <style>
        form {
            width: 100%;
        }

        .mb-3 {
            width: 100%;
        }
    </style>
</head>

<body>
    <main>
        <div class="row" style="max-width: 100%">
            <div class="col-6">
                <img src={{ asset('assets/img/foto3.jpg') }} alt="" width="100%" height="792" />
            </div>
            <div class="col d-flex justify-content-center align-items-center flex-column p-5">
                <h1>Register</h1>
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif
                <form action={{ route('register.action') }} method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email" />
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" />
                    </div>
                    <div class="mb-3">
                        <label for="no" class="form-label">Nomor Handphone</label>
                        <input type="text" name="no" id="no" class="form-control"
                            placeholder="08xxxxxxxxxx" />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Konfirmasi Password" />
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label">Konfirmasi Password</label>
                        <input type="password" name="password2" id="password2" class="form-control"
                            placeholder="Konfirmasi Password" />
                    </div>
                    <button class="btn btn-primary mb-3" type="submit" name="submit">Daftar</button>
                </form>
                <p class="align-self-start">
                    Anda Suda Punya Akun? <a href={{ route('login') }}>Login</a>
                </p>
            </div>
        </div>
    </main>
</body>

</html>
