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
        <p> <a href="#">
                Order
            </a> > <a href="#">
                Delanika Olympiani
            </a> > <a href="" class="bread-nav">
                Masukkan Hasil 
            </a>
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
        <div class="container-input-hasil">
            <form class="form-input-hasil">
                <div class="form-group">
                    <label for="rekomendasiJurusan1">Rekomendasi Jurusan 1</label>
                    <input type="text" class="form-control" id="rekomendasiJurusan1" placeholder="Rekomendasi Jurusan 1">
                </div>
                <div class="form-group">
                    <label for="rekomendasiJurusan2">Rekomendasi Jurusan 2</label>
                    <input type="text" class="form-control" id="rekomendasiJurusan2" placeholder="Rekomendasi Jurusan 2">
                </div>
                <div class="form-group">
                    <label for="rekomendasiJurusan3">Rekomendasi Jurusan 3</label>
                    <input type="text" class="form-control" id="rekomendasiJurusan3" placeholder="Rekomendasi Jurusan 3">
                </div>
                <div class="form-group">
                    <label for="alasanRekomendasiJurusan">Alasan</label>
                    <textarea class="form-control" id="alasanRekomendasiJurusan" rows="3" placeholder="Alasan dari rekomendasi jurusan yang diberikan"></textarea>
                </div>
                <div class="form-group">
                    <label for="fileHasilTes">Upload File Hasil</label>
                    <input type="file" class="form-control-file" id="fileHasilTes">
                </div>
                <button type="submit" class="btn btn-periksa">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
