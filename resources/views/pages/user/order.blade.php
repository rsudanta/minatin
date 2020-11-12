@extends('layouts.user.app')

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
            <p class="info">Tidak ada psikotes yang sedang menunggu pembayaran</p>
        </div>
        <!--Sudah dibayar-->
        <div class="paid">
            <h1 class="h1-content">SUDAH DIBAYAR</h1>
            <div class="row">
                <div class="col-6">
                    <div class="card-order">
                        <div class="row">
                            <div class="col-3">
                                <img src="img/profile.png" class="rounded-circle" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Psikotest Minat dan Bakat</h2>
                                <p>Ronald Richards</p>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <a href="" class="join-card btn btn-card">
                            <p>Kerjakan</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="finish">
            <h1 class="h1-content">SUDAH DIBAYAR</h1>
            <div class="row">
                <div class="col-6">
                    <div class="card-order">
                        <div class="row">
                            <div class="col-3">
                                <img src="img/profile.png" class="rounded-circle" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Psikotest Minat dan Bakat</h2>
                                <p>Ronald Richards</p>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <a href="" class="join-card btn btn-card">
                            <p>Kerjakan</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection