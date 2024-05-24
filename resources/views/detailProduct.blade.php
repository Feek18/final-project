<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail View | Page</title>
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
                                <i class="fa-solid fa-user"></i> {{ Auth::user()->nama }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
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

    {{-- card detail --}}
    <section>
        <div class="container">
            <div class="card" style="height: 100%">
                <h1 class="text-center mt-2">Detail Product</h1>
                <div class="">

                    <div class="d-flex align-items-center gap-4 p-4">
                        @if (isset($product->gambar))
                            <img src="{{ Storage::url($product->gambar) }}" width="730px" alt="Gambar Produk">
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
                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium
                                velit eos, sint dolorem error esse distinctio ab delectus quibusdam voluptatem optio
                                consequatur tempore aliquid voluptas, nesciunt iste possimus rerum aspernatur
                                consequuntur, quos id unde. Eligendi natus repudiandae quaerat praesentium ab laborum
                                distinctio aut iure nostrum ad, magni iste provident veniam.</p>
                            <div class="d-flex justify-content-center align-items-center mt-3">
                                <button class="btn btn-dark">
                                    <a class="text-decoration-none text-white"
                                        href="{{ route('invoice', ['id' => $product->id]) }}">Checkout</a>
                                </button>
                            </div>
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
