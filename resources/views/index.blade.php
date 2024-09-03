@extends('layouts.user')

@section('content')
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="font-semibold mb-3 text-light" data-aos="fade-right" data-aos-delay="50"
                            data-aos-duration="1000">
                            INNOVATIVE & COLLABORATIVE
                        </h1>
                        <p class="fw-normal text-muted mb-5 fs-5" data-aos="fade-right" data-aos-delay="150"
                            data-aos-duration="1000">
                            Memperkuat sebagai perusahaan
                            jasa yang mengutamakan kualitas
                            dengan kuantitas yang dapat
                            bersaing di era globalisasi.
                        </p>
                        <div class="d-flex flex-column flex-lg-row align-items-center" data-aos="fade-right"
                            data-aos-delay="250" data-aos-duration="1000">
                            <button class="btn btn-warning rounded-pill px-4 me-lg-4 mb-3 mb-lg-0 fw-semibold">Get
                                Started</button>
                            <a class="small text-warning text-decoration-none" href="/">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="img-fluid mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
                        @if ($banner)
                            <img class="img-fluid rounded" src={{ asset('uploads/banner/' . $banner->foto1) }}
                                alt="Tim" />
                        @else
                            <img class="img-fluid" src={{ asset('images/no-image.jpg') }} alt="Tim" />
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5" id="features" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <div class="container px-5 my-5">
            <h2 class="text-center fw-semibold text-dark mb-5">Visi Misi</h2>
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h3 class="mb-4">Visi</h3>
                    <p class="mb-0">Menjadi perusahaan unggul dalam bidang penyedia tenaga alih daya yang
                        profesional dan inovatif.</p>
                </div>
                <div class="col-lg-8">
                    <h3 class="mb-4">Misi</h3>
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-warning bg-gradient text-dark rounded-3 mb-3">01</div>
                            <p class="mb-0">Membangun proses rekruitmen
                                sumber daya manusia secara
                                profesional.
                            </p>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-warning bg-gradient text-dark rounded-3 mb-3">02</div>
                            <p class="mb-0">Memahami keberagaman kebutuhan
                                sumber daya manusia perusahaan
                                mitra.
                            </p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-warning bg-gradient text-dark rounded-3 mb-3">03</div>
                            <p class="mb-0">Menciptakan kondisi terbaik bagi
                                karyawan sebagai tempat
                                kebanggaan untuk berkarya.</p>
                        </div>
                        <div class="col h-100">
                            <div class="feature bg-warning bg-gradient text-dark rounded-3 mb-3">04</div>
                            <p class="mb-0">Meningkatkan kepedulian dan tanggung
                                jawab kepada lingkungan dan
                                masyarakat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-dark" id="about">
        <div class="text-center" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
            <h2 class="fw-semibold text-warning">Tujuan Kami</h2>
            <p class="text-white-50 mb-5">PT. Moda Tronsoft Perkasa mempunyai tujuan untuk secara terus-menerus memperkuat
                posisinya sebagai perusahaan jasa
                <span id="span" class="d-block text-white-50"> yang mengutamakan kualitas dengan kuantitas yang
                    dapat bersaing di era globalisasi.</span>
            </p>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 text-white">
                            <div class="features-icons-icon d-flex"><i class="bi bi-person m-auto text-warning"></i></div>
                            <h4>Menjebatani Industri dan Pencari Kerja</h4>
                            <p class="mb-0 text-white-50">Kami menyediakan tenaga kerja profesional dan berintegritas untuk
                                kebutuhan
                                perusahaan dalam bidang kebersihan, taman, keamanan, pengemudi, administrasi perkantoran,
                                dan teknisi tanpa perlu melalui proses rekrutmen.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 text-white">
                            <div class="features-icons-icon d-flex"><i class="bi bi-diagram-3 m-auto text-warning"></i>
                            </div>
                            <h4>Tantangan</h4>
                            <p class="mb-0 text-white-50">PT. Moda Tronsoft Perkasa berusaha
                                menghadirkan tenaga kerja profesional
                                dan berintegritas melalui proses
                                rekruitmen yang akuntabilitas dan
                                transparansi.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 text-white">
                            <div class="features-icons-icon d-flex"><i class="bi bi-bar-chart m-auto text-warning"></i>
                            </div>
                            <h4>Kekuatan</h4>
                            <p class="mb-0 text-white-50">PT. Moda Tronsoft Perkasa mempunyai
                                kekuatan pada pelayanan yang diberikan
                                kepada mitra dan tenaga kerja alih daya
                                didasarkan pada kepuasan yang semakin
                                meningkat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <!-- container -->
        <div class="container">
            <div class="row">
                <!-- col -->
                <div class="col-md-12 col-12">
                    <div class="row text-center mb-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="col-md-12 px-lg-8 mb-8 mt-6">
                            <!-- text -->

                            <span class="text-uppercase text-warning fw-semibold ls-md">Browse Products
                            </span>
                            <!-- heading -->

                            <h2 class="fw-bold mt-3">
                                Discover the most popular of our products
                            </h2>
                            <!-- text -->

                            <p class="mb-0 fs-5">
                                We have a wide range of products that will help you improve your skills
                            </p>

                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        @foreach ($produks->take(3) as $produk)
                            <div class="col">
                                <!-- Card -->
                                <div class="card card-hover border-0">
                                    <img src="{{ asset('uploads/produk/' . $produk->foto) }}" alt="{{ $produk->nama }}"
                                        class=" card-img-top">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2 ">
                                            <span class="text-inherit text-decoration-none">
                                                {{ $produk->nama }}
                                            </span>
                                        </h4>
                                        <!-- Desc -->
                                        <p class="text-truncate-2 mb-0 text-muted">
                                            {{ $produk->deskripsi }}
                                        </p>
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
                                                <a href="https://wa.me/085213282270"
                                                    class="text-inherit text-decoration-none">
                                                    <i class="bi bi-cart text-primary align-middle me-2"></i>Order Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row mt-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <div class="col text-center">
                            <a href="{{ route('product') }}" class="btn btn-warning">View All Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-dark">
        <div class="container mb-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                    <div class="row text-center">
                        <div class="col-md-12 mb-8 mt-6">
                            <h2 class="fw-semibold mt-3 mb-2 text-white">
                                Tentang Kami
                            </h2>
                        </div>
                    </div>
                    <div class="row align-items-center text-white">
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="mb-8 mb-lg-0 me-lg-4">
                                <h3 class="mt-5 mb-2 text-warning">
                                    PT. Moda Tronsoft Perkasa
                                </h3>
                                <p class="text-white-50 mb-4">Merupakan perusahaan nasional perseroan terbatas
                                    menyediakan tenaga profesional alih daya untuk memenuhi kebutuhan mitra. Perusahaan
                                    dikelola secara profesional dengan tenaga kerja yang kompeten. Tenaga kerja yang
                                    difungsikan sebagai tenaga alih daya direkrut secara profesional dengan
                                    mengedepankan etos kerja, etika dan selalu mengedepankan humanisme untuk menciptakan
                                    kenyamanan dan kekeluargaan dan rasa memiliki terhadap perusahaan. </p>
                                <p class="text-white-50 mb-0">PT. Moda Tronsoft Perkasa merupakan perusahan start up
                                    yang didirikan tahun 2023 dengan domisili di Banyuwangi. Perusahaan dikelola anak
                                    muda yang energik, semangat kerja tinggi dan penuh tanggung jawab untuk memberikan
                                    layanan kepada perusahaan mitra maupun tenaga kerja alih daya untuk maju dan
                                    berkembang bersama.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="mt-5 mt-lg-0">
                                @if ($banner)
                                    <img src={{ asset('uploads/banner/' . $banner->foto2) }} alt="Tim"
                                        class="img-fluid rounded-3 w-100">
                                @else
                                    <img class="img-fluid mt-5" src={{ asset('images/no-image.jpg') }} alt="Tim" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" id="contact" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <div class="container px-5 my-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="h3 fw-semibold">Contact us</div>
                                <p class="text-muted mb-5">Contact us for more information about our products and
                                    services</p>
                            </div>
                            <!-- Contact form-->
                            <form id="contactForm" action="{{route('maildata')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="name">Nama</label>
                                            <input class="form-control" id="name" name="name" type="text"
                                                placeholder="Enter your name" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label " for="email">Email</label>
                                            <input class="form-control" id="email" name="email" type="email"
                                                placeholder="Enter your email" required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <p class="text-dark">Template Proposal Pengajuan Kerjasama</p>
                                            <a href="" class="text-primary text-decoration-none"><i class="bi bi-file-earmark-text"></i> Download</a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label " for="subject">Subject</label>
                                            <input class="form-control" id="subject" name="subject" type="text"
                                                placeholder="Enter the subject" required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label " for="file">File</label>
                                            <input class="form-control" id="file" name="file" type="file" required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label " for="message">Message</label>
                                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Enter your message"
                                                required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-warning">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
