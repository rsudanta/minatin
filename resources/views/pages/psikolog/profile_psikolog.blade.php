@extends('layouts.psikolog.app_psikolog')

@section('title')
Profile Psikolog
@endsection

@section('content')
<div class="main">
    <!--Header-->
    <div class="fixed-top judul-page">
        <h1 class="title">
            Profile
        </h1>
        <p> <a href="#" class="bread-nav">
            Profile
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
                <div class="nama-pemesan">Floyd Miles</div>
                <div class="order-id">ID #0011022</div>
            </div>
        </div>
        <div class="container-detail-pemesan">
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Nama Penyelenggara</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">Sehat Mental</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Nama Psikolog</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">Floyd Miles</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Bidang Psikolog</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">Psikolog Anak</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Lama Kerja</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">4 tahun</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Edukasi</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">S3 Psikolog Anak</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Deskripsi</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo eligendi aspernatur assumenda! Provident, quas accusantium corporis, ipsam odit quidem aut ipsa maiores eligendi veritatis suscipit aspernatur harum voluptatum consequuntur quibusdam?</div>
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
                <a href="{{ route('edit_profile') }}" class="btn btn-buat">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection