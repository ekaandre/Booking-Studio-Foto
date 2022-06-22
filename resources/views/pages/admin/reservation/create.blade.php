@extends('layouts.admin')

@section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h1 class="dashboard-title">Tambah Paket Jasa</h1>
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
          <a href="{{route('reservation.index')}}" class="btn btn-add">Back</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-3">
          <div class="card">
            <div class="card-body">
              <form action="{{ route('reservation.store' )}}" method="POST">
                @csrf
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="title" class="input">Nama Paket</label>
                    <input type="text" class="form-control" name="title" placeholder="Nama Paket" value="{{ old('title')}}">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="category" class="input">Kategori Paket</label>
                    <input type="text" class="form-control" name="category" placeholder="Kategori Paket" value="{{ old('category')}}">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="about" class="input">Tentang Paket</label>
                    <textarea class="form-control" id="about" name="about" row="3" placeholder="Tentang Paket">{{ old('about')}}</textarea>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="person" class="input">Jumlah Orang</label>
                    <input type="text" class="form-control" name="person" placeholder="Jumlah Orang" value="{{ old('person')}}">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="price" class="input">Harga</label>
                    <input type="text" class="form-control" name="price" placeholder="Harga" value="{{ old('price')}}">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="duration" class="input">Durasi Foto</label>
                    <input type="text" class="form-control" name="duration" placeholder="Durasi Foto" value="{{ old('duration')}}">
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

@push('addon-script')
<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
<script>
      ClassicEditor
      .create( document.querySelector( '#about' ) )
      .then( editor => {
        console.log( editor );
      } )
      .catch( error => {
        console.error( error );
      } );
</script>
@endpush