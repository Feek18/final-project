<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    {{-- navbar --}}
    <header class="navbar bg-body-tertiary">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="">
                    <img src="https://amandemy.co.id/images/amandemy-logo.png" width="15%" alt="">
                </a>
                <nav class="d-flex align-items-center gap-4">
                    <a class="text-decoration-none text-dark" href="">Home</a>
                    <a class="text-decoration-none text-dark" href="{{ route('product-view') }}">Products</a>
                    <button class="btn btn-primary">
                        <a class="text-decoration-none text-white fw-bold" href="{{ route('login') }}">Login</a>
                    </button>
                </nav>
            </div>
        </div>
    </header>

    {{-- login --}}
    <section class="mt-5">
        <div class="d-flex flex-column justify-content-center align-items-center">
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div class="card p-4" style="500%">
                <h1 class="fs-2">Halaman Login Pengguna</h1>
                <div class="mt-3">
                    <form action="{{ route('login_user') }}" method="POST"">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email Kamu" required>
                            @error('email')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password Kamu" required>
                            @error('password')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                            <p>Belum punya akun? <strong><a class="text-dark" href="{{ route('register') }}">Daftar Sekarang</a></strong></p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center mt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <p class="mt-2">atau</p>
                            <button class="btn btn-success">
                                <a class="text-decoration-none text-white" href="{{ route('login_google') }}">Login Google</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
