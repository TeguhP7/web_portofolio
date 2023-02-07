<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="background-color: teal">
    <main class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-4 mx-auto px-3 py-3 text-center border border-info rounded-4 bg-white">
            <h3>Login</h3>
            <form action="auth/login" method="POST">
                @csrf
                <div class="mb-2 text-start">
                    <label class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="email@gmail.com" required>
                </div>
                <div class="mb-2 text-start">
                    <label class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" placeholder="*******" required>
                </div>
                <button name="submit" type="submit" class="btn btn-primary btn-sm form-control">Masuk</button>
            </form>
            <p style="margin-block: 2%">Atau</p>
            <a href='{{ url('auth/redirect') }}' class="btn border border-primary border-opacity-50 mb-2">
                <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                Login dengan Google
            </a>
            <br>
            <a href="auth/daftar">Belum punya akun? Daftar disini</a>
            @if (Session::has('error'))
                <div class="alert alert-danger" style="margin-top: 20px">
                    {{ Session::get('error') }}
                </div>
            @elseif (Session::has('message'))
                <div class="alert alert-success" style="margin-top: 20px">
                    {{ Session::get('message') }}
                </div>
            @endif
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
