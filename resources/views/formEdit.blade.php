<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>



    <!-- Form Section -->
    <section class="container mt-3 mb-3">
        <div class="row justify-content-center align-items-center">
            <div class="card pt-4 bg-info" style="width: 45%;">
                <h1 class="fs-3 fw-bold text-center">Edit Data Produk</h1>
                <div class="p-4">
                    <form action="{{ route('updateData', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Produk</label>
                            <input placeholder="Masukkan gambar produk" type="file" id="gambar" name="gambar"
                                class="form-control @error('gambar') is-invalid @enderror"
                                aria-describedby="emailHelp" value="{{ $product->gambar }}">
                            @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input placeholder="Masukkan gambar produk" type="text" id="nama" name="nama"
                                class="form-control @error('nama') is-invalid @enderror"
                                aria-describedby="emailHelp" value="{{ $product->nama }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input placeholder="Masukkan nama produk" type="text"
                                class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                                aria-describedby="emailHelp" value="{{ $product->harga }}">
                            @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input placeholder="Masukkan berat produk" type="number"
                                class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok"
                                value="{{ $product->stok }}">
                            @error('stok')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="berat" class="form-label">Berat</label>
                            <input placeholder="Masukkan harga produk" type="number"
                                class="form-control @error('berat') is-invalid @enderror" id="berat" name="berat"
                                value="{{ $product->berat }}">
                            @error('berat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex flex-column mb-3">
                            <label for="kondisi" class="fw-bold">Kondisi</label>
                            <select name="kondisi" id="kondisi" class="form-select @error('kondisi') is-invalid @enderror">
                                  <option value="Pilih Kondisi barang" {{ old('kondisi', $product->kondisi) == 'Pilih Kondisi barang' ? 'selected' : '' }}>Pilih Kondisi barang</option>
                                  <option value="baru" {{ old('kondisi', $product->kondisi) == 'baru' ? 'selected' : '' }}>Baru</option>
                                  <option value="bekas" {{ old('kondisi', $product->kondisi) == 'bekas' ? 'selected' : '' }}>Bekas</option>
                            </select>
                            @error('kondisi')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea placeholder="Tuliskan deskripsi produk yang akan dijual" name="deskripsi" id="deskripsi" cols="5"
                                rows="5" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $product->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="align-items-center text-center">  
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                            <button type="submit" class="btn btn-warning">
                                <a class="text-decoration-none text-white" href="{{ route('admin-table') }}">Kembali</a>
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