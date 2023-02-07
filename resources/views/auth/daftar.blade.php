<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem | Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="background-color: teal">
    <main class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-6 mx-auto px-5 py-4 border border-info rounded-1 bg-white">
            <h3 class="mb-3">Daftar Akun</h3>
            <form method="POST" action="daftar_aksi">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label mb-2">Nama</label>
                    <input name="name" id="name" type="text" class="form-control"
                        placeholder="Nama lengkap..." required>
                </div>
                <div class="mb-3">
                    <label for="emailAddres" class="form-label mb-2">Email address</label>
                    <input name="email" type="email" class="form-control" id="emailAddres"
                        aria-describedby="emailHelp" placeholder="email@gmail.com" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label mb-2">Password</label>
                    <input name="password" type="password" class="form-control" id="pass"
                        placeholder="kata sandi (minimal 8 karakter)" required>
                </div>
                <button type="submit" class="btn btn-primary form-control">Daftar</button>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
