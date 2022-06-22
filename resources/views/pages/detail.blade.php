@extends('layouts.app')

@section('title', ' Detail Jasa')

@section('content')
<main>
    <!-- header content -->
    <section class="section-details-header"></section>

    <!-- section details content -->
    <section class="section-details-content">
        <div class="container">
            <!-- breadcrumb -->
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb ml-1" data-aos="fade-up" data-aos-delay="100">
                            <li class="breadcrumb-item">
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('reservasi')}}">Reservasi</a> 
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- details content -->
            <div class="row">
                <!-- Images Content -->
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details" data-aos="fade-up">
                        <h1 data-aos="fade-up" data-aos-delay="100">{{ $item->title }}</h1>
                        <p data-aos="fade-up" data-aos-delay="200">{{ $item->category }}</p>
                        @if($item->galleries->count())
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ Storage::url($item->galleries->first()->image )}}" class="xzoom" id="xzoom-default"
                                    xoriginal="{{ Storage::url($item->galleries->first()->image )}}">
                            </div>
                            <div class="xzoom-thumbs">
                                @foreach ($item->galleries as $galery)
                                <a href="{{ Storage::url($galery->image )}}">
                                    <img src="{{ Storage::url($galery->image )}}" class="xzoom-gallery" width="128" height="90"
                                        xpreview="{{ Storage::url($galery->image )}}"
                                        />
                                </a>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <p data-aos="fade-up" data-aos-delay="400">
                            {!! $item->about !!}
                        </p>
                    </div>
                </div>
                <!-- Right Content -->
                <div class="col-lg-4">
                    <div class="card card-details card-right" data-aos="fade-up">
                        <h2 data-aos="fade-up" data-aos-delay="100">Informasi Paket</h2>
                        <table class="paket-informations" data-aos="fade-up" data-aos-delay="200">
                            <tr>
                                <th width="50%">Max Orang</th>
                                <td width="50%" class="text-right">
                                    Max {{ $item->person }}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Harga</th>
                                <td width="50%" class="text-right">
                                    Rp. {{ $item->price }}.000
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Durasi Foto</th>
                                <td width="50%" class="text-right">
                                    {{ $item->duration }} Menit
                                </td>
                            </tr>

                        </table>
                    </div>
                    <div class="book-container" data-aos="fade-up">
                        @auth
                        <form action="{{ route('checkout-process', $item->id) }}" method="post">
                            @csrf
                            <button class="btn btn-block btn-book-now mt-3 py-2" type="submit">
                                Booking Now
                            </button>
                        </form>
                        @endauth
                        @guest
                        <a href="{{ route ('login')}}" class="btn btn-block btn-book-now mt-2 pb-2 pt-3" >
                            Login to Booking
                        </a> 
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection