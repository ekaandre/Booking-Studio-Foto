@extends('layouts.login')

@section('title', 'Daftar')

@section('content')
    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                <div class="section-left col-12 col-md-6">
                    <h4 data-aos="fade-up">Gabung menjadi member kami?</h4>
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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus autofocus placeholder="Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus autofocus placeholder="username">
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
                                        value="{{ old('phone') }}" required autocomplete="phone" autofocus autofocus placeholder="Nomer Whatsapp">
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
                                        value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
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
                                        required autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">Confrim Password</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                                <ul class="button-login list-unstyled">
                                    <li>
                                        <button type="submit" class="btn btn-home-page mt-1 px-5">
                                        Daftar
                                        </button>
                                        <a href="{{ route('login') }}">Punya Akun?</a>
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
