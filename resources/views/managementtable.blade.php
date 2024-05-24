<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table View | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                    @if ($user->hasRole('admin'))
                        <a class="nav-link active text-gray" href="{{ route('admin-table') }}">Manage</a>
                    @endif
                    @if (Auth::user())
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
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

    {{-- table --}}
    <section class="bg-info mt-5">
        <div class="container pt-3">
            <div class="d-flex justify-content-between align-items-center pt-2">
                <h1 class="fs-3">List Product</h1>
                <div>
                    <button class="btn btn-primary">
                        <a class="text-decoration-none text-white" href="">Lihat Profil</a>
                    </button>
                    <button class="btn btn-dark">
                        <a class="text-decoration-none text-white" href="{{ route('form') }}">Tambah Produk</a>
                    </button>
                    <button class="btn btn-success">
                        <a class="text-decoration-none text-white" href="">Import Produk</a>
                    </button>
                    <button class="btn btn-warning">
                        <a class="text-decoration-none text-dark" href="">Export Produk</a>
                    </button>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-2">
                <form action="{{ route('filter-data') }}" method="GET" class="d-flex">
                    <select name="" class="form-control" id="" style="width: 100%">
                        <option value="">Pilih Kondisi Barang</option>
                        <option value="">Baru</option>
                        <option value="">Bekas</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="container mt-3 py-4">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Berat</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->stok }}</td>
                        <td>{{ $data->berat }} gr</td>
                        <td>Rp. {{ $data->harga }}</td>
                        <td>
                            @if ($data->kondisi == 'baru')
                                <button class="btn btn-success">{{ $data->kondisi }}</button>
                            @else
                                <button class="btn btn-secondary">{{ $data->kondisi }}</button>
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-warning">
                                <a class="text-decoration-none text-dark" href="{{ route('editData', $data->id) }}">Update</a>
                            </button>
                            <form action="{{ route('deleteData', $data->id) }}" method="POST" class="d-inline">
                                @method('PUT')
                                @csrf
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure delete this data?');">
                                   Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
