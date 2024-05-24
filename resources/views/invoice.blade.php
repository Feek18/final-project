<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice View | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .card-head {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            margin: 24px;
        }

        section {
            margin-top: 102px;
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
                    @if (Auth::user())
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('dashUser') }}">Profile</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <a class="text-decoration-none text-dark" href="{{ route('logout') }}">Logout</a>
                                        </button>
                                    </form>
                                </li>
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

    {{-- invoice detail --}}
    <section>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="card mb-3" style="width: 750px;">
                    <h1 class="text-center mt-2">Invoice Transaksi</h1>
                    <div class="p-3">
                        <h3>Detail Transaksi</h3>
                        <hr>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>No. Invoice</h4>
                            <span>{{ $i->no_invoice }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Admin Fee</h4>
                            <span>{{ $i->admin_fee }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Kode Unik</h4>
                            <span>{{ $i->kode_unik }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Total</h4>
                            <span>{{ $i->total }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Metode Pembayaran</h4>
                            <span>{{ $i->payement }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Status</h4>
                            <span>{{ $i->status }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Tanggal Kadaluarsa</h4>
                            <span>{{ $i->tgl_expired }}</span>
                        </div>
                        
                    </div>
                    <div class="container p-3">
                        <h3>Produk yang Dibeli</h3>
                        <hr>

                        <div class="d-flex align-items-center gap-4 p-4">
                            @if (isset($product->gambar))
                                <img src="{{ Storage::url($product->gambar) }}" width="300px" alt="Gambar Produk">
                            @else
                                <p>Tidak ada gambar</p>
                            @endif
                            <div>
                                <h1 class="fs-1">{{ $product->nama }}</h1>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="opacity-75">Stok: {{ $product->stok }}</span>
                                    <button class="btn btn-info">Rp. {{ $product->harga }}</button>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <p class="opacity-75">Kondisi: {{ $product->kondisi }}</p>
                                    <p class="">{{ $product->berat }}gr</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <h3>Data Pembeli</h3>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Nama</h4>
                            <span>{{ $user->name }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Email</h4>
                            <span>{{ $user->email }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Handphone</h4>
                            <span>081xxxxxxx</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Alamat</h4>
                            <span>{{ $user->alamat }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
