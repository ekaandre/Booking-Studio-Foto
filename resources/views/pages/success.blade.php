@extends('layouts.success')

@section('title', 'checkout-success')
    
@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img class="mt-5" src="{{url('Frontend/images/ic_mail.png')}}" alt="Gambar-Studio" data-aos="zoom-in-down">
            <h1 class="mt-4" data-aos="fade-up" data-aos-delay="100">Yey! Pemesanan Sukses</h1>
            <p data-aos="fade-up" data-aos-delay="200">
                Silahkan konfirmasi Pembayaran Transfer Anda melalui tombol <strong>My Order</strong> 
            </p>
            <a href="{{route('home')}}" class="btn btn-home-page mt-2 px-5" data-aos="fade-up" data-aos-delay="300">
                Home Page
            </a>
            <a href="{{route('myorder')}}" class="btn btn-myorder mt-2 px-5" data-aos="fade-up" data-aos-delay="300">
                My Order
            </a>
        </div>
    </div>
</main>
@endsection