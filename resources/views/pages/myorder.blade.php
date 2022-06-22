@extends('layouts.app')

@section('title', 'My Order')

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
                            <li class="breadcrumb-item active">
                                My Order
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- details content -->
            <div class="row">
                <!-- Data Content -->
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details" data-aos="fade-up" data-aos-delay="100">
                        <h1 data-aos="fade-up" data-aos-delay="200">Transaksi {{Auth::user()->username}}</h1>
                        <p data-aos="fade-up" data-aos-delay="300">Terima kasih, dibawah ini merupakan transaksi
                            anda!</p>
                        <!-- daftar orang -->
                        <div class="attendee  mt-3">
                            <table id="table" class="table table-responsive-sm text-center" data-aos="fade-up"
                                data-aos-delay="400">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Kategori Paket</td>
                                        <td>Tanggal Pesan</td>
                                        <td><strong>Status Pesan</strong></td>
                                        <td><strong>E-Tiket</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no=1
                                    @endphp
                                    @forelse ($myorder as $myorders)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $myorders->transaction->reservations_title ?? null }} {{ $myorders->transaction->reservation->category ?? null}}</td>
                                        <td>{{ date('d-m-Y H:i', strtotime($myorders->datetime ?? null)) }}</td>
                                        <td>{{ $myorders->transaction->transaction_status ?? null}}</td>
                                        <td>
                                            <a href="{{ route('myorder-show', $myorders->id)}}" target="_blank" class="btn btn-edit-etiket">
                                                Lihat E-Tiket
                                            </a>
                                        </td> 
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="NoOrder text-center">
                                                <img src="{{url('Frontend/images/NoOrder.png')}}" alt="NoOrder">
                                                <h2 class="mt-4 font-weight-bold">Ayo foto-foto, Kamu belum Pesan Jasa!</h2>
                                                <p class="caption">Setelah memesan, kamu bisa melihat daftar pesanan di sini.</p>
                                                <a href="{{ route('reservasi')}}" class="btn btn-get-started px-4 mt-2" data-aos="fade-up">
                                                Pesan Studio
                                                </a>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <h3 class="mt-4 mb-0">Keterangan Status Pesan</h3>
                            <p class="disclaimer mb-0">
                                <strong>Pending</strong> : Customer harap melakukan konfirmasi Pembayaran<br>
                                <strong>Active</strong> : Paket pemesanan berhasil customer bisa datang sesuai jadwal pesan<br>
                                <strong>Success</strong> : Customer telah selesai melakukan sesi foto<br>
                                <strong>Cancel</strong> : Customer membatalkan transaksi<br>
                            </p>
                            <h3 class="mt-4 mb-0">Note</h3>
                            <p class="disclaimer mb-0">
                                Pastikan status pesan ACTIVE sebelum datang ke studio
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Right Content -->
                <div class="col-lg-4">
                    <div class="card card-details1" data-aos="fade-up" data-aos-delay="100">
                        <h1 data-aos="fade-up" data-aos-delay="200"> Hallo {{Auth::user()->username}}</h1>
                        <p data-aos="fade-up" data-aos-delay="300">Jika Status Pesan Belum <strong>Active</strong> Silahkan Konfirmasi Pembayaran Anda <br><br> Melalui tombol dibawah ini</p>
                        <a href="https://wa.me/+6285936672808?text=Hallo%20Kak%3F%20%0AKak%20Mau%20Konfirmasi%20Pembayaran%20Nih" target="_blank">
                            <button type="submit" class="btn btn-edit-confrim px-4">
                                Konfirmasi Pembayaran
                            </button>
                        </a>
                        <a href="https://forms.gle/HZE9feXqwA2sJ82QA" target="_blank" class="batal">Batalkan Pesanan?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection