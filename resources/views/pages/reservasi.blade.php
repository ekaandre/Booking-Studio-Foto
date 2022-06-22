@extends('layouts.app')

@section('title', 'Reservasi')

@section('content')
<main>
    <section class="section-paket mt-0" id="paket">
        <div class="container">
            <div class="row">
                <div class="col text-center section-paket-heading">
                    <h2 data-aos="fade-up" data-aos-delay="100">Paket Studio Foto</h2>
                    <p data-aos="fade-up" data-aos-delay="200">
                        Kami memiliki studio dan proprety penunjang untuk anda
                        <br>
                        booking dan datang ke studio kita
                    </p>
                </div>
            </div>
        </div>
    </section>
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
</main>
@endsection