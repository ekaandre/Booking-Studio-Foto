@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Header -->
<header class="text-center">
    <h1 data-aos="fade-up">
        Abadikan Moment Spesial Anda
        <br>
        Bersama Kami
    </h1>
    <p class="mt-3" data-aos="fade-up">
        your precious moment, immortalize with us
    </p>
    <a href="{{ route('reservasi')}}" class="btn btn-get-started px-4 mt-4" data-aos="fade-up">
        Get Started
    </a>
</header>

<!-- content -->
<main>
    <!-- popular -->
    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading" data-aos="fade-up">
                    <h2>Paket Paling Populer</h2>
                    <p>
                        Something that you never try
                        <br>
                        before in this world
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- section popular content -->
    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-paket row justify-content-center">
                @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-paket text-center d-flex flex-column"
                        style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                        <div class="paket-category">{{ $item->title }}</div>
                        <div class="paket-subcategory">{{ $item->category }}</div>
                        <div class="paket-button mt-auto">
                            <a href="{{route('detail', $item->slug)}}" class="btn btn-paket-details px-4">
                                BOOKING
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- feature -->
    <section class="section-feature-heading" id="featureHeading" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>Kenapa Candradimuka Production?</h2>
                    <p data-aos="fade-up" data-aos-delay="200">
                        Abadikan moment spesial anda bersama kami
                        <br>
                        karena setiap moment tidak akan terulang kembali
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- section feature content -->
    <section class="section-feature-content" id="featureContent">
        <div class="container">
            <div class="section-popular-paket row justify-content-center">
                <!-- gambar1 -->
                <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card card-feature text-center">
                        <div class="feature-content">
                            <img src="{{url('frontend/images/Group 2@2x.png')}}" alt="feature1" class="mb-4">
                            <h3 class="mb-4">Harga Bersahabat</h3>
                            <p class="feature">
                                Harga jasa kami sesuai kantong anda
                            </p>
                        </div>
                    </div>
                </div>
                <!-- gambar2 -->
                <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="card card-feature text-center">
                        <div class="feature-content">
                            <img src="{{url('frontend/images/Icon awesome-shipping-fast@2x.png')}}" alt="feature1" class="mb-4 ">
                            <h3 class="mb-4">Proses Cepat</h3>
                            <p class="feature">
                                Pelayanan kami cepat dan tepat
                            </p>
                        </div>
                    </div>
                </div>
                <!-- gambar3 -->
                <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="card card-feature text-center">
                        <div class="feature-content">
                            <img src="{{url('frontend/images/Group 3@2x.png')}}" alt="feature1" class="mb-4">
                            <h3 class="mb-4">Simple Booking</h3>
                            <p class="feature">
                                Pemesanan tanpa ribet dimanapun
                            </p>
                        </div>
                    </div>
                </div>
                <!-- gambar4 -->
                <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                    <div class="card card-feature text-center">
                        <div class="feature-content">
                            <img src="{{url('frontend/images/Group 1@2x.png')}}" alt="feature1" class="mb-4 ">
                            <h3 class="mb-4">Banyak Portofolio</h3>
                            <p class="feature">
                                Sudah banyak hasil job kami
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- text -->
    <section class="section-text" id="text">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3 data-aos="fade-up" data-aos-delay="100">Segera Abadikan Moment Anda!</h3>
                </div>
            <div class="col-12 text-center">
                <a href="https://wa.wizard.id/14354e" target="_blank" class="btn btn-need-help px-4 mt-4 mx-1" data-aos="fade-up">
                        Butuh Bantuan
                </a>
                <a href="{{ route('reservasi')}}" class="btn btn-get-started px-4 mt-4" data-aos="fade-up">
                Get Started
                </a>
            </div>
            </div>
        </div>
    </section>
</main>
@endsection