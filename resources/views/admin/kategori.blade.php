<!-- kategori.blade.php -->
@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="fw-semibold">Manage Product Categories</h1>
        <p class="fw-medium">This is the product category management page.</p>

        <!-- Button trigger modal -->
        <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addKategoriModal">
                Add Category
            </button>
        </div>

        <!-- Tabel Kategori -->
        <div class="card p-4">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategoris as $kategori)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $kategori->nama_kategori }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#editKategoriModal{{ $kategori->id }}">Edit</button>
                                    <form action="{{ route('kategori.delete', $kategori->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Add Kategori -->
        <div class="modal fade" id="addKategoriModal" tabindex="-1" role="dialog" aria-labelledby="addKategoriModalLabel"
            aria-hidden="true">
            <!-- Isi modal untuk menambahkan kategori -->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-between">
                        <h5 class="modal-title" id="addKategoriModalLabel">Add Kategori</h5>
                        <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="createKategori" action="{{ route('kategori.create') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Kategori -->
        @foreach ($kategoris as $kategori)
            <div class="modal fade" id="editKategoriModal{{ $kategori->id }}" tabindex="-1" role="dialog"
                aria-labelledby="editKategoriModalLabel{{ $kategori->id }}" aria-hidden="true">
                <!-- Isi modal untuk mengedit kategori -->
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between">
                            <h5 class="modal-title" id="editKategoriModalLabel{{ $kategori->id }}">Edit Kategori</h5>
                            <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="updateKategori" action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                                        value="{{ $kategori->nama_kategori }}" required>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        $('#createKategori').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: '/admin/kategori',
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
        $('#updateKategori').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: '/admin/kategori/' + {{ $kategori->id }},
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
