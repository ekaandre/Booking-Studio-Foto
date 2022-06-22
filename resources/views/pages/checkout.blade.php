@extends('layouts.checkout')

@section('title', ' checkout')

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
                        <ol class="breadcrumb ml-1" data-aos="fade-up">
                            <li class="breadcrumb-item">
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('reservasi')}}">Reservasi</a>  
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('detail',  $item->reservation->slug)}}">Details</a>  
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- details content -->
            <div class="row">
                <!-- Images Content -->
                <div class="col-lg-8 pl-lg-0" data-aos="fade-up">
                    <div class="card card-details">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h1 data-aos="fade-up" data-aos-delay="100">Pastikan Paket Anda!</h1>
                        <p data-aos="fade-up" data-aos-delay="200">{{ $item->reservation->title}} {{ $item->reservation->category}} </p>
                        <!-- input orang -->
                        <div class="member">
                            @forelse ($item->details as $detail)
                            <a href="{{ route('checkout-remove', $detail->id )}}" class="btn btn-edit-confrim" data-aos="fade-up" data-aos-delay="300">Ganti Jadwal Pesan</a>
                            @empty
                            <h2 data-aos="fade-up" data-aos-delay="300">Pilih Tanggal dan Jam Pesan</h2>
                            <form class="form-inline mt-3" method="POST" action="{{ route('checkout-create', $item->id )}}" data-aos="fade-up" data-aos-delay="400">
                                @csrf
                                <label class="sr-only" for="username">Username</label>
                                <input type="hidden" name="username" required class="form-control mb-2 mr-sm-2"
                                    id="username" value="{{Auth::user()->username}}" readonly>

                                <label class="sr-only" for="phone">Name</label>
                                <input type="hidden" name="phone" required class="form-control mb-2 mr-sm-2"
                                    id="phone" value="{{Auth::user()->phone}}" readonly>
                                
                                <input class="form-control" type="datetime"
                                    placeholder="Pilih Tanggal dan Jam" for="datetime" name="datetime" id="datetime" required>
                                <button type="submit" class="btn btn-add-now mb-0 ml-2 px-4">
                                    Pesan
                                </button>
                            </form>
                            @endforelse
                        </div>
                        <!-- daftar orang -->
                        <div class="attendee mt-4">
                            <h2 data-aos="fade-up" data-aos-delay="500">Data Diri dan Jadwal Pesan</h2>
                            <table class="table table-responsive-sm text-center mt-3" data-aos="fade-up"
                                data-aos-delay="600" >
                                <thead>
                                    <tr>
                                        <td>Gambar</td>
                                        <td>Nama</td>
                                        <td>Nomer Whatsapp</td>
                                        <td>Jadwal Pesan</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($item->details as $detail)
                                    <tr>
                                        <td>
                                                <img src="https://ui-avatars.com/api/?name={{ $detail->username}}" height="60" class="rounded-circle"/>
                                        </td>
                                        <td class="align-middle">{{ $detail->username}}</td>
                                        <td class="align-middle">{{ $detail->phone}}</td>
                                        <td class="align-middle">{{ \Carbon\Carbon::create($detail->datetime)}}</td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="NoOrder text-center">
                                                <img src="{{url('Frontend/images/ToOrder.png')}}" alt="NoOrder">
                                                <h2 class="mt-4 font-weight-bold">Pilih Tanggal dan Jam Pesan Studio Dulu!</h2>
                                                <p class="caption">Kamu bisa melihat daftar pesanan di sini.</p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclaimer mb-0">
                                Sebelum Checkout pastikan jam dan tanggal yang anda pilih sudah benar.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Right Content -->
                <div class="col-lg-4">
                    <div class="card card-details card-right" data-aos="fade-up">
                        <h2 data-aos="fade-up" data-aos-delay="100">Information Paket</h2>
                        <table class="paket-informations" data-aos="fade-up" data-aos-delay="200">
                            <tr>
                                <th width="50%">Paket</th>
                                <td width="50%" class="text-right">
                                    {{ $item->reservation->title}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Kategori Paket</th>
                                <td width="50%" class="text-right">
                                    {{ $item->reservation->category}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Total Dibayar</th>
                                <td width="50%" class="text-right">
                                    <span class="text-blue">Rp. {{ $item->reservation->price }}.000</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h2 Instruksi data-aos="fade-up" data-aos-delay="300">Instruksi Pembayaran</h2>
                        <p class="payment-instruction" data-aos="fade-up" data-aos-delay="400">
                            Silahkan transfer melalui rekening dibawah ini sesuai total dibayar anda
                        </p>
                        <div class="bank" data-aos="fade-up" data-aos-delay="500">
                            <div class="bank-item pb-3">
                                <img src="{{url('Frontend/images/ic_bank.png')}}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>Eka Andreansyah</h3>
                                    <p>
                                        3066096814
                                        <br> Bank Jateng
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    @forelse ($item->details as $detail)
                    <div class="book-container">
                        <a href="{{route('checkout-success', $item->id)}}" class="btn btn-block btn-book-now mt-3 pb-2 pt-3 ">
                            Saya Sudah Bayar
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{route('detail',  $item->reservation->slug)}}" class="text-muted">
                            Batalkan Pemesanan
                        </a>
                    </div>
                    @empty
                    <div class="book-container" data-aos="fade-up">
                        <a href="#" class="btn btn-block btn-book-now mt-3 py-2 disabled">
                            Saya Sudah Bayar
                        </a>
                    </div>
                    <div class="text-center mt-3"data-aos="fade-up" data-aos-delay="200"> 
                        <a href="{{route('detail',  $item->reservation->slug)}}" class="text-muted">
                            Batalkan Pemesanan
                        </a>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</main>
@endsection