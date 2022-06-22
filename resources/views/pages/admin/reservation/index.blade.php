@extends('layouts.admin')

@section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h1 class="dashboard-title">Paket Jasa</h1>
      <p class="dashboard-subtitle">
        Look what you have made today!
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <a href="{{route('reservation.create')}}" class="btn btn-add">
            Tambah Paket Jasa</a>
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
                    <th>Jenis Paket</th>
                    <th>Harga</th>
                    <th>Duration</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no=1
                  @endphp
                  @forelse ($items as $item)
                    <tr>
                      <th scope="row">{{ $no++ }}</th>
                      <td>{{ $item->title ?? null}}</td>
                      <td>{{ $item->category ?? null}}</td>
                      <td>{{ $item->price ?? null}}</td>
                      <td>{{ $item->duration ?? null}}</td>
                      <td>
                        <a href="{{route('reservation.edit', $item->id)}}" class="logo-action">
                        <img src="{{url('Backend/images/edit.png')}}" alt="Logo Edit" class="logo h-25">
                        </a>
                        <form action="{{route('reservation.destroy', $item->id)}}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="button-action">
                            <img src="{{url('Backend/images/trash.png')}}" class="img-action" alt="Logo Hapus">
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