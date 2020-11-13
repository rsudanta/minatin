@extends('layouts.psikolog.app_psikolog')

@section('title')
Profile Pemesan
@endsection

@section('content')
<div class="main">
    <!--Header-->
    <div class="fixed-top judul-page">
        <h1 class="title">
            Order
        </h1>
        <p> <a href="#">
                Order
            </a> > <a href="" class="bread-nav">Delanika Olympiani</a>
        </p>
    </div>
    <!--End Header-->
    <div class="content-home">
        <div class="container-profile-pemesan">
            <div class="content-profile-kiri">
                <img src="img/profile.png" alt="" class="rounder-circle img-detail-pemesan">
            </div>
            <div>
                <div class="nama-pemesan">Delanika Olympiani</div>
                <div class="order-id">Order ID #0011022</div>
            </div>
        </div>
        <div class="container-detail-pemesan">
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Nomor Telpon</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">082245567911</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Tanggal Lahir</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">08-10-2000</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Jurusan yang diinginkan</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">You</div>
                </div>
            </div>
            <div class="text-right">
                <a href="" class="btn btn-periksa">Periksa</a>
                <a href="" class="btn btn-hasil">Masukkan Hasil</a>
            </div>
        </div>
    </div>
</div>
    
@endsection