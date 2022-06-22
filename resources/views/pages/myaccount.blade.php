@extends('layouts.app')

@section('title', 'Profile')

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
                                My Account
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
                        <h1 data-aos="fade-up" data-aos-delay="200">Detail Akun Saya</h1>
                        <p data-aos="fade-up" data-aos-delay="300">Di sini kamu bisa mengedit detail akunmu.</p>
                        @if($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </div>
                        @endif
                        <div class="attendee">
                            <form method="POST" action="{{ route('myaccount-update')}}">
                            @method("put")
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" type="text"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username', Auth::user()->username)}}" required autocomplete="username" autofocus>
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Nomer Whatsapp</label>
                                <input id="phone" type="text"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ old('phone', Auth::user()->phone)}}" required autocomplete="phone" autofocus>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    required autocomplete="email" value="{{ old('email', Auth::user()->email )}}" disabled>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-edit-account mt-2 px-5">
                                Simpan
                            </button>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- Right Content -->
                <div class="col-lg-4">
                    <div class="card card-details1" data-aos="fade-up" data-aos-delay="100">
                        <h2 data-aos="fade-up" data-aos-delay="200">Member Studio Foto</h2>
                        <h1>{{Auth::user()->username}}</h1>
                        <p class="mt-0">{{Auth::user()->phone}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection