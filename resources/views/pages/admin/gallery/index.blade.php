@extends('layouts.admin')

@section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h1 class="dashboard-title">Galery Jasa</h1>
        <p class="dashboard-subtitle">
          Look what you have made today!
        </p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <a href="{{route('gallery.create')}}" class="btn btn-add">
              Tambah Galery Jasa</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mt-3">
            <div class="card">
              <div class="card-body">
                <table id="table" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Paket</th>
                      <th scope="col">Kategori Paket</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no=1
                      @endphp
                    @forelse ($items as $item)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $item->reservation->title ?? null }}</td>
                      <td>{{ $item->reservation->category ?? null }}</td>
                      <td>
                        <img src="{{ Storage::url($item->image)}}" alt="" style="width: 150px" class="img-thumbnail" />
                      </td>
                      <td>
                        <a href="{{route('gallery.edit', $item->id)}}" class="logo-action">
                        <img src="{{url('Backend/images/edit.png')}}" alt="Logo Edit" class="logo h-25">
                        </a>
                        <form action="{{route('gallery.destroy', $item->id)}}" method="POST" class="d-inline">
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

