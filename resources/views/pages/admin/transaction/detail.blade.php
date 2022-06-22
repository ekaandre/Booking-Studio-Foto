@extends('layouts.admin')

@section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      @foreach ($item->details as $detail)
      <h1 class="dashboard-title">Detail Transaksi {{ $detail->username ?? null}}</h1>
      @endforeach
      <p class="dashboard-subtitle">
        Look what you have made today!
      </p>
    </div>

    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <a href="{{route('transaction.index')}}" class="btn btn-add">Back</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-3">
          <div class="card">
            <div class="card-body">
              <table class="table table-bordered">
                <tr>
                  <th>ID</th>
                  <td>{{ $item->id }}</td>
                </tr>
                <tr>
                  <th>Pembeli</th>
                  @foreach ($item->details as $detail)
                  <td>{{ $detail->username ?? null}}</td>
                  @endforeach
                </tr>
                <tr>
                  <th>No Whatsapp</th>
                  @foreach ($item->details as $detail)
                  <td>{{ $detail->phone ?? null}}</td>
                  @endforeach
                </tr>
                <tr>
                  <th>Paket Jasa</th>
                  <td>{{ $item->reservation->title ?? null }}</td>
                </tr>
                <tr>
                  <th>Kategori Paket</th>
                  <td>{{ $item->reservation->category ?? null }}</td>
                </tr>
                <tr>
                  <th>Tanggal Jam</th>
                  @foreach ($item->details as $detail)
                  <td>{{ date('d-m-Y H:i', strtotime($detail->datetime ?? null)) }}</td>
                  @endforeach
                </tr>
                <tr>
                  <th>Total Transaksi</th>
                  <td>Rp. {{ $item->transaction_total }}</td>
                </tr>
                <tr>
                  <th>Status Transaksi</th>
                  <td>{{ $item->transaction_status }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>   
</div>
@endsection