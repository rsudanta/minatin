@extends('layouts.psikolog.app_psikolog')

@section('title')
    Input Hasil
@endsection

@section('content')
    <div class="main">
        <!--Header-->
        <div class="fixed-top judul-page">
            <h1 class="title">
                Order
            </h1>
            <p> <a href="{{ route('psikolog.order', Auth::user()->id) }}">
                    Order
                </a> > <a href="" class="bread-nav">
                    {{ $order->user->name }}
                </a>
            </p>
        </div>
        <!--End Header-->
        <div class="content-home">
            <div class="container-profile-pemesan">
                <div class="content-profile-kiri">
                    <img src="/storage/avatars/{{ $order->user->avatar }}" alt="" class="rounded-circle img-detail-pemesan">
                </div>
                <div>
                    <div class="nama-pemesan"> {{ $order->user->name }}</div>
                    <div class="order-id">Order ID #{{ $order->id }}</div>
                </div>
            </div>
            <div class="container-input-hasil">
                @foreach ($items as $item)
                    <div class="soal pt-3">
                        <p>{{ $item->soal->soal }}</p>
                        <p class="answer">Answer : <span>{{ $item->opsi->opsi }}</span></p>
                    </div>
                @endforeach
                <a type="submit" class="btn btn-periksa" href="{{ route('psikolog.input_hasil', $order->user->id) }}" >Masukkan Hasil</a>
            </div>
        </div>
    </div>
@endsection
