@extends('layouts.login')

@section('title', 'Login')

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
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                                <ul class="button-login list-unstyled">
                                    <li>
                                         <button type="submit" class="btn btn-home-page mt-1 px-5">
                                        Masuk
                                        </button>
                                        <a href="{{ route('register') }}">Daftar Akun?</a>
                                    </li>
                                </ul>
                               
                                <p class="p-lupa">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Lupa password?
                                    </a>
                                    @endif
                                </p>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
