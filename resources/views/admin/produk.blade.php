<!-- produk.blade.php -->
@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="fw-semibold">Manage Products</h1>
        <p class="fw-medium">This is the product management page.</p>

        <div class="d-flex justify-content-between mt-5 mb-3">
            <form action="{{ route('produk') }}" method="GET" class="d-flex align-items-center">
                <input type="text" name="keyword" placeholder="Search here..." class="form-control me-2">
                <button type="submit" class="btn btn-outline-primary">Cari</button>
            </form>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProdukModal">Add
                Product</button>
        </div>

        <!-- Tabel Produk -->
        <div class="card p-4">
            <div class="card-body">
                <table id="productTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $produk)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    <img class="img-fluid" src="{{ asset('uploads/produk/' . $produk->foto) }}"
                                        alt="{{ $produk->nama }}" style="width: 100px;">
                                </td>
                                <td>{{ $produk->nama }}</td>
                                <td>{{ $produk->harga }}</td>
                                <td>{{ $produk->deskripsi }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target="#editProdukModal{{ $produk->id }}">Edit</button>
                                        <form action="{{ route('produk.delete', $produk->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <!-- Modal Edit Produk -->
                            <div class="modal fade" id="editProdukModal{{ $produk->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="editProdukModalLabel{{ $produk->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header justify-content-between">
                                            <h5 class="modal-title" id="editProdukModalLabel{{ $produk->id }}">Edit
                                                Produk</h5>
                                            <button class="btn-close" type="button" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Form Edit Produk -->
                                            <form id="updateProduct" action="{{ route('produk.update', $produk->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group mb-3">
                                                    <label for="nama" class="col-form-label">Nama</label>
                                                    <input type="text" class="form-control" id="nama" name="nama"
                                                        value="{{ $produk->nama }}" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="harga" class="col-form-label">Harga</label>
                                                    <input type="number" class="form-control" id="harga" name="harga"
                                                        value="{{ $produk->harga }}" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="deskripsi" class="col-form-label">Deskripsi</label>
                                                    <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $produk->deskripsi }}</textarea>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="foto" class="col-form-label">Foto</label>
                                                    <input type="file" class="form-control" id="foto"
                                                        name="foto">
                                                </div>
                                                <div class="form-group
                                                    <label for="kategori"
                                                    class="col-form-label">Kategori</label>
                                                    <select class="form-control" id="kategori" name="id_kategori" required>
                                                        @foreach ($kategoris as $kategori)
                                                            <option value="{{ $kategori->id }}"
                                                                {{ $produk->id_kategori == $kategori->id ? 'selected' : '' }}>
                                                                {{ $kategori->nama_kategori }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Add Produk -->
        <div class="modal fade" id="addProdukModal" tabindex="-1" role="dialog" aria-labelledby="addProdukModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-between">
                        <h5 class="modal-title" id="addProdukModalLabel">Add Product</h5>
                        <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Isi form penambahan produk disini -->
                        <!-- Contoh form -->
                        <form id="createProduct" action="{{ route('produk.create') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nama" class="col-form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga" class="col-form-label">Harga</label>
                                    <input type="number" class="form-control" id="harga" name="harga" required>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi" class="col-form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="col-form-label">Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto" required>
                                </div>
                                <div class="form-group">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <select class="form-control" id="kategori" name="id_kategori" required>
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Create operation
        $('#createProduct').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: '/admin/produk',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    
                    if (response.redirect) {
                        window.location.href = response.redirect;
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        // Update operation
        $('#updateProduct').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: '/admin/produk/' + {{ $produk->id }},
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    
                    if (response.redirect) {
                        window.location.href = response.redirect;
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
