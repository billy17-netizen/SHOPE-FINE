@extends('layouts.success')

@section('title', 'Store Register Success Page')

@section('content')
    <div class="page-content page-success">
        <div class="section-success" data-aos="zoom-in">
            <div class="container">
                <div class="row align-items-center row-login justify-content-center">
                    <div class="col-lg-6 text-center">
                        <img alt="" class="mb-4" src="{{asset('images/success.png')}}">
                        <h2>Welcome TO sStore</h2>
                        <p>
                            Kamu sudah berhasil terdaftar bersama kami. Let,s grow up together.
                        </p>
                        <div>
                            <a class="btn btn-success w-50 mt-4" href="/dashboard.html">
                                My Dashboard
                            </a>
                            <a class="btn btn-sign-up w-50 mt-2" href="/index.html">
                                Go To Shopping
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
