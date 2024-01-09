@extends('layouts.app')

@section('content')
<section class="checkout">
    <div class="container">
        <div class="text-center row">
            <div class="col-lg-12 col-12">
                <img src="{{ asset('images/ill_register.png') }}" height="400" class="mb-5" alt=" ">
            </div>
            <div class="mt-4 col-lg-12 col-12 header-wrap">
                <p class="story">
                    WHAT A DAY!
                </p>
                <h2 class="primary-header ">
                    Berhasil Checkout
                </h2>
                <p>
                    Silahkan menuju halaman Dashboard dan lakukan pembayaran
                </p>
                <a href="{{ route('dashboard') }}" class="mt-3 btn btn-primary">
                    My Dashboard
                </a>
            </div>
        </div>
    </div>
</section>
@endsection