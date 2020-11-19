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
                <img src="{{ asset('storage/avatar/' . $psikologs->namaAvaPsikolog) }}" alt="" class="rounded-circle img-detail-pemesan">
            </div>
            <div>
                <div class="nama-pemesan">{{ $psikologs->namaPsikolog}}</div>
                <div class="order-id">ID Psikolog #{{ $psikologs->idPsikolog }}</div>
            </div>
        </div>
        <div class="container-detail-pemesan">
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Nama Penyelenggara</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">{{ $psikologs->namaPenyelenggara }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Nama Psikolog</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">{{ $psikologs->namaPsikolog }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Bidang Psikolog</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">{{ $psikologs->bidangPsikolog }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Lama Kerja</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">{{ $psikologs->lamaKerja }} tahun</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Edukasi</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">{{ $psikologs->edukasiPsikolog }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Deskripsi</div>
                </div>
                <div class="col-8">
                    <div class="data-detail-pemesan-kanan">{{ $psikologs->deskripsiPsikolog }}</div>
                </div>
            </div>
            <div class="text-right">
                <a href="{{ route('edit_profile', ['id'=> $psikologs->idPsikolog]) }}" class="btn btn-buat">Edit</a>
            </div>
         </div>
    </div>
</div>
@endsection