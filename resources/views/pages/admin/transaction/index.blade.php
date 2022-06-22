@extends('layouts.admin')

@section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h1 class="dashboard-title">Transaksi</h1>
      <p class="dashboard-subtitle">
        Look what you have made today!
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <a href="{{route('exportpdf')}}" class="btn btn-secondary">
            Download PDF</a>
          <a href="{{route('exportexcel')}}" class="btn btn-primary">
            Download Excel</a>
          <a href="https://docs.google.com/spreadsheets/d/1PvCy5odba8j6PvYzZBTWu0XfWU-OaUNVNFqKKOhZoSg/edit?resourcekey#gid=263276354" target="_blank" class="btn btn-add">
            Data Refund</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-3">
          <div class="card">
            <div class="card-body">
              <table id="table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Paket</th>
                    <th>Nama Customer</th>
                    <th>Nomer Whatsapp</th>
                    <th>Tanggal Pesan</th>
                    <th>Status Pesan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no=1
                  @endphp
                  @forelse ($items as $item)
                    <tr>
                      <td scope="row">{{ $no++ }}</td>
                      <td>{{ $item->reservation->title ?? null}}</td>
                      @foreach ($item->details as $detail)
                      <td>{{ $detail->username ?? null}}</td>
                      <td>{{ $detail->phone ?? null}}</td>
                      <td>{{ date('d-m-Y H:i', strtotime($detail->datetime ?? null)) }}</td>
                      @endforeach
                      <td>{{ $item->transaction_status }}</td>
                      <td>
                        <a href="{{route('transaction.show', $item->id)}}" class="logo-action">
                        <img src="{{url('Backend/images/eyes.png')}}" alt="Logo Edit" class="logo h-25">
                        </a>
                        <a href="{{route('transaction.edit', $item->id)}}" class="logo-action">
                        <img src="{{url('Backend/images/edit.png')}}" alt="Logo Edit" class="logo h-25">
                        </a>
                        <form action="{{route('transaction.destroy', $item->id)}}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="button-action">
                            <img src="{{url('Backend/images/trash.png')}}" alt="Logo Hapus">
                          </button>
                        </form>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="7" class="text-center">
                        Data Kosong
                      </td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection