@extends('layouts.psikolog.app_psikolog')

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
        <p> <a href="#" class="bread-nav">
                Order
            </a>
        </p>
    </div>
    <!--End Header-->
    <div class="content-order">
        <div class="row">
            <div class="col-4">
                <a href="">
                    <div class="card-pemesan text-center">
                        <img src="img/profile.png" alt="" class="rounded-circle img-pemesan">
                        <div class="nama-pemesan">Vania</div>
                        <div class="order-id">Order ID #00011012</div>
                        <hr>
                        <button class="status-nilai sudah" disabled>Sudah Dinilai</button>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <div class="card-pemesan text-center">
                        <img src="img/profile.png" alt="" class="rounded-circle img-pemesan">
                        <div class="nama-pemesan">Danta</div>
                        <div class="order-id">Order ID #00011013</div>
                        <hr>
                        <button class="status-nilai belum" disabled>Belum Dinilai</button>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <div class="card-pemesan text-center">
                        <img src="img/profile.png" alt="" class="rounded-circle img-pemesan">
                        <div class="nama-pemesan">Vania</div>
                        <div class="order-id">Order ID #00011014</div>
                        <hr>
                        <button class="status-nilai sudah" disabled>Sudah Dinilai</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection