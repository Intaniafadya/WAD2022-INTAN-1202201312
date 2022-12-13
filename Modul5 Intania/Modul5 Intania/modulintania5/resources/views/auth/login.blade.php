<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/styles/index.css" />

    <title>Login</title>
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
                <h1>Login</h1>
                @if (session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif
                <form action={{ route('login.action') }} method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email" />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="password" />
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <button class="btn btn-primary mb-3" type="submit" name="submit">Login</button>
                </form>
                <p class="align-self-start">
                    Anda Belum Punya Akun? <a href={{ route('register') }}>Daftar</a>
                </p>
            </div>
        </div>
    </main>
</body>

</html>
