<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product View | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .card-head {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            margin: 24px;
        }
    </style>
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
                    <a class="text-decoration-none text-dark" href="{{ route('home') }}">Home</a>
                    <a class="text-decoration-none text-dark" href="{{ route('product-view') }}">Products</a>
                    @if ($user->hasRole('admin'))
                        <a class="nav-link active text-gray" href="{{ route('admin-table') }}">Manage</a>
                    @endif
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

    {{-- product section --}}
    <section class="bg-info py-3 mt-5">
        <div class="container">
            <div class="text-center pt-4">
                <h1 class="text-dark">Products</h1>
                <p class="text-dark">Produk yang kami miliki memiliki kualitas terbaik dan terbaru</p>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3">
                <div class="card-head gap-3">
                    @foreach ($product as $data)
                        <div class="card border-0 shadow-md" style="width: 330px">
                            @if (isset($data->gambar))
                                <img src="{{ Storage::url($data->gambar) }}" alt="Gambar Produk">
                            @else
                                <p>Tidak ada gambar</p>
                            @endif
                            <div class="p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h1 class="fs-4">{{ $data->nama }}</h1>
                                    <button class="btn btn-success">{{ $data->kondisi }}</button>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <button class="btn btn-success">{{ $data->stok }}</button>
                                    <button class="btn btn-info">Rp. {{ $data->harga }}</button>
                                    <button class="btn btn-secondary">{{ $data->berat }} gr</button>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At culpa provident delectus
                                    dolore neque inventore!</p>
                                <button class="btn btn-primary" style="width: 100%">
                                    <a class="text-decoration-none text-white"
                                        href="{{ route('detail-data', ['id' => $data->id]) }}">Pesan Sekarang</a>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
