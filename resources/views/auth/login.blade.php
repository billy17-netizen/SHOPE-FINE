@extends('layouts.auth')

@section('content')
    <div class="page-content page-auth">
        <div class="section-store-auth" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center row-login">
                    <div class="text-center col-lg-6">
                        <img alt="" class="w-50 mb-4 mb-lg-none" src="images/login%20placeholder.png">
                    </div>
                    <div class="col-lg-5">
                        <h2>Belanja Kebutuhan Utama, <br> menjadi lebih muda </h2>
                        <form method="POST" class="mt-3" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label>Email Address</label>
                                <input id="email" type="email"
                                       class="form-control  w-75 @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" type="password"
                                       class="form-control w-75 @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class=" btn btn-success btn-block w-75 mt-4">
                                Sign In to My Account
                            </button>
                            <a class="btn btn-signup btn-block w-75 mt-4" href="{{route('register')}}">Sign Up</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
