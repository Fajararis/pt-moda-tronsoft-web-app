@extends('layouts.user')

@section('content')
    <section class="my-5">
        <!-- container -->
        <div class="container">
            <div class="row">
                <!-- col -->
                <div class="col-md-12 col-12">
                    <div class="row text-center mb-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="col-md-12 px-lg-8 mb-8 mt-6">
                            <!-- heading -->
                            <h2 class="fw-bold mt-3">
                                Discover the most popular of our <span class="text-warning">Products</span>
                            </h2>
                            <!-- text -->
                            <p class="mb-0">
                                We have a wide range of products that will help you improve your skills
                            </p>
                        </div>
                    </div>

                    <!-- Search Bar -->
                    <div class="mb-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <form action="{{ route('product') }}" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keyword" placeholder="Search for products"
                                    value="{{ request()->query('keyword') }}">
                                <input type="hidden" name="kategori" value="{{ request()->query('kategori') }}">
                                <button class="btn btn-warning" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Category Dropdown -->
                    <div class="mb-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <div class="dropdown d-inline-block">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Filter by Category
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('product') }}">All</a></li>
                                @foreach ($kategoris as $kategori)
                                    <li><a class="dropdown-item"
                                            href="{{ route('product', ['kategori' => $kategori->id]) }}">
                                            {{ $kategori->nama_kategori }}
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 g-4" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="1000">
                        @foreach ($produks as $produk)
                            <div class="col">
                                <!-- Card -->
                                <div class="card card-hover border-0">
                                    <img src="{{ asset('uploads/produk/' . $produk->foto) }}" alt="{{ $produk->nama }}"
                                        class="card-img-top">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2">
                                            <span class="text-inherit text-decoration-none">
                                                {{ $produk->nama }}
                                            </span>
                                        </h4>
                                        <!-- Desc -->
                                        {{-- <p class="text-truncate-2 mb-0 text-muted">
                                    {{ $produk->deskripsi }}
                                </p> --}}
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer border-0">
                                        <div class="row align-items-center g-0">
                                            <div class="col">
                                                <h5 class="mb-0">
                                                    Rp {{ number_format($produk->harga, 0, ',', '.') }}
                                                </h5>
                                            </div>

                                            <div class="col-auto">
                                                <!-- Trigger modal -->
                                                <button type="button"
                                                    class="btn btn-link text-inherit text-decoration-none"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#productDetailModal{{ $produk->id }}">
                                                    <i class="bi bi-eye text-primary align-middle me-2"></i>View Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="productDetailModal{{ $produk->id }}" tabindex="-1"
                                aria-labelledby="productDetailModalLabel{{ $produk->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="productDetailModalLabel{{ $produk->id }}">
                                                {{ $produk->nama }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="{{ asset('uploads/produk/' . $produk->foto) }}"
                                                        alt="{{ $produk->nama }}" class="img-fluid">
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="mb-3">{{ $produk->nama }}</h4>
                                                    <p>{{ $produk->deskripsi }}</p>
                                                    <h5 class="mb-0">Rp {{ number_format($produk->harga, 0, ',', '.') }}
                                                    </h5>
                                                    <a href="https://wa.me/087785668394" class="btn btn-primary my-3">
                                                        <i class="bi bi-cart text-white align-middle me-2"></i>Order Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
