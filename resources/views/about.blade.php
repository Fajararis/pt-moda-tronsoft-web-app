@extends('layouts.user')

@section('content')
    <section class="my-5 py-5">
        <div class="container" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="mb-8 mb-lg-0 me-lg-4">
                                <h3 class="mt-5 mb-2 text-black">
                                    PT. Moda Tronsoft Perkasa
                                </h3>
                                <p class="text-black-50 mb-4">Merupakan perusahaan nasional perseroan terbatas
                                    menyediakan tenaga profesional alih daya untuk memenuhi kebutuhan mitra. Perusahaan
                                    dikelola secara profesional dengan tenaga kerja yang kompeten. Tenaga kerja yang
                                    difungsikan sebagai tenaga alih daya direkrut secara profesional dengan
                                    mengedepankan etos kerja, etika dan selalu mengedepankan humanisme untuk menciptakan
                                    kenyamanan dan kekeluargaan dan rasa memiliki terhadap perusahaan. </p>
                                <p class="text-black-50 mb-0">PT. Moda Tronsoft Perkasa merupakan perusahan start up
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
    <section class="py-5 bg-dark" id="features">
        <div class="container px-5 my-5" data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000">
            <h2 class="text-center fw-semibold text-warning mb-5">Visi Misi</h2>
            <div class="row gx-5 text-white">
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
    <section class="py-5" id="about">
        <div class="text-center" data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">
            <h2 class="fw-semibold text-black">Tujuan Kami</h2>
            <p class="text-black-50 mb-5">PT. Moda Tronsoft Perkasa mempunyai tujuan untuk secara terus-menerus memperkuat
                posisinya sebagai perusahaan jasa
                <span id="span" class="d-block text-black-50"> yang mengutamakan kualitas dengan kuantitas yang
                    dapat bersaing di era globalisasi.</span>
            </p>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-inline-flex bg-dark px-4 py-3 rounded fs-2">
                                <i class="bi bi-people m-auto text-warning"></i>
                            </div>
                            <h4 class="mt-4">Menjebatani Industri dan Pencari Kerja</h4>
                            <p class="mb-0 text-black-50">Kami menyediakan tenaga kerja profesional dan berintegritas untuk
                                kebutuhan
                                perusahaan dalam bidang kebersihan, taman, keamanan, pengemudi, administrasi perkantoran,
                                dan teknisi tanpa perlu melalui proses rekrutmen.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 text-black">
                            <div class="d-inline-flex bg-dark px-4 py-3 rounded fs-2">
                                <i class="bi bi-diagram-3 m-auto text-warning"></i>
                            </div>
                            <h4 class="mt-4">Tantangan</h4>
                            <p class="mb-0 text-black-50">PT. Moda Tronsoft Perkasa berusaha
                                menghadirkan tenaga kerja profesional
                                dan berintegritas melalui proses
                                rekruitmen yang akuntabilitas dan
                                transparansi.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 text-black">
                            <div class="d-inline-flex bg-dark px-4 py-3 rounded fs-2">
                                <i class="bi bi-bar-chart m-auto text-warning"></i>
                            </div>
                            <h4 class="mt-4">Kekuatan</h4>
                            <p class="mb-0 text-black-50">PT. Moda Tronsoft Perkasa mempunyai
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
    <section class="py-5" id="galery" data-aos="fade-up" data-aos-delay="450" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="fw-semibold text-black">Galeri</h2>
                    <p class="text-black-50">Berikut adalah beberapa dokumentasi dari layanan PT. Moda Tronsoft Perkasa.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        @foreach ($galeris as $item)
                            <div class="col-lg-6 col-md-6 col-6">
                                <img src={{ asset('uploads/galeri/' . $item->foto) }} alt="Galeri"
                                    class="img-fluid rounded-3 w-100 mb-3">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
