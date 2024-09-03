@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="fw-semibold">Welcome to the Admin Panel</h1>
        <p class="fw-medium">This is the admin dashboard.</p>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card p-4">
                    <div class="card-body">
                        <h3 class="fw-semibold">Total Products</h3>
                        <p class="fw-medium">Total number of products</p>
                        {{-- Display the total number of products --}}
                        <h1 class="fw-bold">{{ $totalProduk }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <div class="card-body">
                        <h3 class="fw-semibold">Total Gallery</h3>
                        <p class="fw-medium">Total number of gallery images</p>
                        {{-- Display the total number of gallery images --}}
                        <h1 class="fw-bold">{{ $totalGaleri }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <div class="card-body">
                        <h3 class="fw-semibold">Total Banner</h3>
                        <p class="fw-medium">Total number of banners</p>
                        {{-- Display the total number of banners --}}
                        <h1 class="fw-bold">{{ $totalBanner }}</h1>
                    </div>
                </div>
        </div>

        <div class="card p-4">
            <div class="card-body">
                <h3 class="fw-semibold">Upload Banner</h3>
                <form action="{{ route('admin.upload.banner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="foto1" class="form-label">Hero Banner</label>
                        <input type="file" class="form-control" id="foto1" name="foto1" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto2" class="form-label">Section Banner</label>
                        <input type="file" class="form-control" id="foto2" name="foto2" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection
