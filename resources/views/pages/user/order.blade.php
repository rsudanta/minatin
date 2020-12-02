@extends('layouts.user.app')

@section('title')
Order
@endsection

@section('content')

    <div class="main">
        <!--Header-->
        <div class="fixed-top judul-page">
            <h1 class="title">
                Order
            </h1>
            <p> <a class="bread-nav" href="#">
                    Order
                </a>
            </p>
        </div>
        <!--End Header-->
        <div class="content-order">
            <!--Menunggu Pembayaran-->
            <div class="pending">
                <h1 class="h1-content">MENUNGGU PEMBAYARAN</h1>
                <div class="row">
                    @forelse ($pending as $item)
                        <div class="col-6 pt-4">
                            <div class="card-order">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="/storage/avatars/{{ $item->detail_psikotest->user->avatar }}"
                                            class="rounded-circle" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h2>{{ $item->detail_psikotest->judul }}</h2>
                                        <p>{{ $item->detail_psikotest->user->name }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="parent">
                                <a href="{{ route('pembayaran') }}" class="join-card btn btn-card">
                                    <p>Bayar</p>
                                </a>
                            </div>
                        </div>
                    @empty
                    </div>
                    <p class="info">Tidak ada psikotes yang sedang menunggu pembayaran</p>
                @endforelse
            </div>
            <!--Sudah dibayar-->
            <div class="paid">
                <h1 class="h1-content">SUDAH DIBAYAR</h1>
                <div class="row">
                    @forelse ($paid as $item)
                        <div class="col-6 pt-4">
                            <div class="card-order">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="/storage/avatars/{{ $item->detail_psikotest->user->avatar }}"
                                            class="rounded-circle" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h2>{{ $item->detail_psikotest->judul }}</h2>
                                        <p>{{ $item->detail_psikotest->user->name }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="parent">
                                <a href="{{ route('user.kerjakan', $item->detail_psikotest->id )}}" class="join-card btn btn-card">
                                    <p>Kerjakan</p>
                                </a>
                            </div>
                        </div>
                    @empty
                    </div>
                    <p class="info">Tidak ada psikotes yang sudah dibayar</p>
                @endforelse
            </div>
            <div class="finish">
                <h1 class="h1-content">SUDAH SELESAI</h1>
                <div class="row">
                    @forelse ($finish as $item)
                        <div class="col-6 pt-4">
                            <div class="card-order">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="/storage/avatars/{{ $item->detail_psikotest->user->avatar }}"
                                            class="rounded-circle" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h2>{{ $item->detail_psikotest->judul }}</h2>
                                        <p>{{ $item->detail_psikotest->user->name }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="parent">
                                <a href="{{ route('user.kerjakan', $item->detail_psikotest->id )}}" class="join-card btn btn-card">
                                    <p>Lihat Hasil</p>
                                </a>
                            </div>
                        </div>
                    @empty
                    </div>
                    <p class="info">Tidak ada psikotes yang sudah selesai</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
