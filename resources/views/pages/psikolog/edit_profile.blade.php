@extends('layouts.psikolog.app_psikolog')

@section('title')
Edit Profile
@endsection

@section('content')
<div class="main">
    <!--Header-->
    <div class="fixed-top judul-page">
        <h1 class="title">
            Edit Profile
        </h1>
        <p> <a href="#">
                Profile
            </a> > <a href="" class="bread-nav">
                Edit Profile
            </a>
        </p>
    </div>
    <!--End Header-->
    <div class="content-home">

        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif    

        <nav class="nav nav-edit">
            <a class="nav-link active" href="#">Edit Profile</a>
            <a class="nav-link" href="#">Edit Password</a>
        </nav>
        
        <div class="container-input-hasil">
            <form class="form-input-hasil" action="{{ route('update_profile', ['id'=>$psikologs->idPsikolog]) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="hidden" name="idPsikolog" value="{{ $psikologs->idPsikolog }}">
                <div class="form-group">
                    <label for="namaPenyelenggara">Nama Penyelenggara</label>
                    <input type="text" class="form-control" name="namaPenyelenggara" placeholder="Nama Penyelenggara" value="{{ $psikologs->namaPenyelenggara }}">
                </div>
                <div class="form-group">
                    <label for="namaPsikolog">Nama Psikolog</label>
                    <input type="text" class="form-control" name="namaPsikolog" placeholder="Nama Psikolog" value="{{ $psikologs->namaPsikolog }}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="bidangPsikolog">Bidang Psikolog</label>
                      <input type="text" class="form-control" name="bidangPsikolog" placeholder="Bidang Psikolog" value="{{ $psikologs->bidangPsikolog}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lamaKerja">Lama Kerja (tahun)</label>
                        <input type="number" class="form-control" name="lamaKerja" placeholder="Lama Kerja" value="{{ $psikologs->lamaKerja }}">    
                    </div>
                </div>
                <div class="form-group">
                    <label for="edukasi">Riwayat Edukasi</label>
                    <input type="text" class="form-control" name="edukasiPsikolog" placeholder="Riwayat Edukasi" value="{{ $psikologs->edukasiPsikolog }}">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsiPsikolog" rows="3" placeholder="Deskripsi">{{ $psikologs->deskripsiPsikolog }}</textarea>
                </div>
                <div class="form-group">
                    <label for="fileHasilTes">Ganti Avatar</label>
                    <input type="file" name="avatar" class="form-control-file" placeholder="Pilih avatar baru">
                @error('avatar')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-buat">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
