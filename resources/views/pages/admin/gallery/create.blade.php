@extends('layouts.admin')

@section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h1 class="dashboard-title">Tambah Galery Jasa</h1>
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
            <a href="{{route('gallery.index')}}" class="btn btn-add">Back</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mt-3">
            <div class="card">
              <div class="card-body">
                <form action="{{ route('gallery.store' )}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-row">
                    <div class="col-md-12 mb-3">
                      <label for="reservations_id" class="input">Nama Paket</label>
                      <select class="form-control" name="reservations_id" required>
                        <option selected>Pilih Paket Jasa</option>
                        @foreach ($reservations as $reservation)
                          <option value="{{ $reservation->id }}">
                          {{ $reservation->title }} {{ $reservation->category }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="image" class="input">Pilih Foto</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input"
                            name="image">
                        <label class="custom-file-label" for="image">Pilih
                            file</label>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-add col-md-12 mb-3" type="submit">Simpan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>   
</div>
@endsection