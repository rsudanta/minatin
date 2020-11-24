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
<<<<<<< HEAD
                <img src="/storage/avatars/{{ Auth::user()->avatar }}" alt="" class="rounded-circle img-detail-pemesan">
            </div>
            <div>
                <div class="nama-pemesan">{{ Auth::User()->name }}</div>
                <div class="order-id">ID Psikolog #{{ Auth::User()->id }}</div>
=======
                <img src="{{ asset('storage/avatar/' . $psikologs->namaAvaPsikolog) }}" alt="" class="rounded-circle img-detail-pemesan">
            </div>
            <div>
                <div class="nama-pemesan">{{ $psikologs->namaPsikolog}}</div>
                <div class="order-id">ID Psikolog #{{ $psikologs->idPsikolog }}</div>
>>>>>>> 6c54f044fc7a1c5a18ca51d0bce3a7c72c4f648d
            </div>
        </div>
        <div class="container-detail-pemesan">
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Nama Penyelenggara</div>
                </div>
                <div class="col-8">
<<<<<<< HEAD
                    <div class="data-detail-pemesan-kanan">{{ $items->penyelenggara ? $items->penyelenggara : 'Data Kosong' }}</div>
=======
                    <div class="data-detail-pemesan-kanan">{{ $psikologs->namaPenyelenggara }}</div>
>>>>>>> 6c54f044fc7a1c5a18ca51d0bce3a7c72c4f648d
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Nama Psikolog</div>
                </div>
                <div class="col-8">
<<<<<<< HEAD
                    <div class="data-detail-pemesan-kanan">{{ $items->name ? $items->name : 'Data Kosong' }}</div>
=======
                    <div class="data-detail-pemesan-kanan">{{ $psikologs->namaPsikolog }}</div>
>>>>>>> 6c54f044fc7a1c5a18ca51d0bce3a7c72c4f648d
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Bidang Psikolog</div>
                </div>
                <div class="col-8">
<<<<<<< HEAD
                    <div class="data-detail-pemesan-kanan">{{ $items->bidang ? $items->bidang : 'Data Kosong' }}</div>
=======
                    <div class="data-detail-pemesan-kanan">{{ $psikologs->bidangPsikolog }}</div>
>>>>>>> 6c54f044fc7a1c5a18ca51d0bce3a7c72c4f648d
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Lama Kerja</div>
                </div>
                <div class="col-8">
<<<<<<< HEAD
                    <div class="data-detail-pemesan-kanan">{{ $items->lama_kerja ? $items->lama_kerja.' tahun' : 'Data Kosong' }} </div>
=======
                    <div class="data-detail-pemesan-kanan">{{ $psikologs->lamaKerja }} tahun</div>
>>>>>>> 6c54f044fc7a1c5a18ca51d0bce3a7c72c4f648d
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Edukasi</div>
                </div>
                <div class="col-8">
<<<<<<< HEAD
                    <div class="data-detail-pemesan-kanan">{{ $items->edukasi ? $items->edukasi : 'Data Kosong' }}</div>
=======
                    <div class="data-detail-pemesan-kanan">{{ $psikologs->edukasiPsikolog }}</div>
>>>>>>> 6c54f044fc7a1c5a18ca51d0bce3a7c72c4f648d
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="data-detail-pemesan-kiri">Deskripsi</div>
                </div>
                <div class="col-8">
<<<<<<< HEAD
                    <div class="data-detail-pemesan-kanan">{{ $items->deskripsi ? $items->deskripsi : 'Data Kosong' }}</div>
                </div>
            </div>
            <div class="text-right">
                <a href="{{ route('psikolog.profile.show') }}" class="btn btn-buat">Edit</a>
=======
                    <div class="data-detail-pemesan-kanan">{{ $psikologs->deskripsiPsikolog }}</div>
                </div>
            </div>
            <div class="text-right">
                <a href="{{ route('edit_profile', ['id'=> $psikologs->idPsikolog]) }}" class="btn btn-buat">Edit</a>
>>>>>>> 6c54f044fc7a1c5a18ca51d0bce3a7c72c4f648d
            </div>
         </div>
    </div>
</div>
@endsection