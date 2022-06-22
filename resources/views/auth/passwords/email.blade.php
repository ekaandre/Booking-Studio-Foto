@extends('layouts.login')

@section('title', 'Reset Password')

@section('content')
    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                <div class="section-left col-12 col-md-6">
                    <h4 data-aos="fade-up">Moment Spesial Jarang Diabadikan?</h4>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Abadikan moment spesial anda bersama kami
                        <br>
                        karena setiap moment tidak akan terulang kembali
                    </p>
                    <img src="{{url('Frontend/images/Group 32@2x.jpg')}}" alt="" class="w-75 d-none d-sm-flex" data-aos="fade-up"
                        data-aos-delay="200">
                </div>
                <div class="section-right col-12 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{url('Frontend/images/Logo Candradimuka3@2x.png')}}" alt="" class="w-50 mb-4">
                            </div>

                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Masukan Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <ul class="button-login list-unstyled">
                                    <li>
                                         <button type="submit" class="btn btn-home-page mt-1 mb-3">
                                        Kirim Link Reset
                                        </button>
                                        <a href="{{ route('login') }}" class="mt-5">Kembali?</a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
