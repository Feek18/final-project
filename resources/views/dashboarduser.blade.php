<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard User | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    @if (Auth::user())
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('dashUser') }}">Profile</a></li>
                                <li><a class="dropdown-item text-decoration-none" href="/logout">Logout</a></li>
                            </ul>
                        </div>
                    @else
                        <button class="btn btn-primary">
                            <a class="text-decoration-none text-white fw-bold" href="">Login</a>
                        </button>
                    @endif
                </nav>
            </div>
        </div>
    </header>

    {{-- card dashboard --}}
    <section class="d-flex justify-content-center align-items-center mt-5">
        <div class="card p-3" style="width: 350px">
            <h1 class="fs-4 text-center">Halaman Dashboard User</h1>
            <div class="mt-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="fs-4">Nama Akun</h3>
                    <span>{{ $u->name }}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="fs-4">Email</h3>
                    <span>{{ $u->email }}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="fs-4">Gender</h3>
                    <span>{{ $u->gender }}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="fs-4">Umur</h3>
                    <span>{{ $u->umur }}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="fs-4">Tanggal Lahir</h3>
                    <span>{{ $u->tgl_lahir }}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="fs-4">Alamat</h3>
                    <span>{{ $u->alamat }}</span>
                </div>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>