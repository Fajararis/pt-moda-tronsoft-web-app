<!-- galeri.blade.php -->
@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="fw-semibold">Manage Gallery</h1>
        <p class="fw-medium">This is the gallery management page.</p>

        <!-- Button trigger modal -->
        <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFotoModal">
                Add Foto
            </button>
        </div>

        <!-- Tampilan Galeri -->
        <div class="row">
            @foreach ($galeris as $galeri)
                <div class="col-md-3">
                    <div class="d-flex flex-column position-relative">
                        <img src="{{ asset('uploads/galeri/' . $galeri->foto) }}" class="img-fluid rounded-3"
                            alt={{ $galeri->foto }}>
                        <div class="d-flex justify-content-end mt-2">
                            <form action="{{ route('galeri.delete', $galeri->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Modal Add Foto -->
        <div class="modal fade" id="addFotoModal" tabindex="-1" role="dialog" aria-labelledby="addFotoModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-between">
                        <h5 class="modal-title" id="addFotoModalLabel">Add Foto</h5>
                        <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="createGaleri" action="{{ route('galeri.create') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto" required>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#createGaleri').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: '/admin/galeri',
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
