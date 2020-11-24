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

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <nav class="nav nav-edit">
                <a class="nav-link active" href="#">Edit Profile</a>
                <a class="nav-link" href="#">Edit Password</a>
            </nav>
            <div class="container-input-hasil">
                <form class="form-input-hasil" action="{{ route('psikolog.profile.update', Auth::user()->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="penyelenggara">Nama Penyelenggara</label>
                        <input type="text" class="form-control" name="penyelenggara" placeholder="Nama Penyelenggara" value="{{ $items->penyelenggara }}" 
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Psikolog</label>
                        <input type="text" class="form-control" name="name" placeholder="Nama Psikolog" value="{{ $items->name }}">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="bidang">Bidang Psikolog</label>
                            <input type="text" class="form-control" name="bidang" placeholder="Bidang Psikolog" value="{{ $items->bidang }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lama_kerja">Lama Kerja (tahun)</label>
                            <input type="number" class="form-control" name="lama_kerja" placeholder="Lama Kerja" value="{{ $items->lama_kerja }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edukasi">Riwayat Edukasi</label>
                        <input type="text" class="form-control" name="edukasi" placeholder="Riwayat Edukasi" value="{{ $items->edukasi }}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Tentang Saya</label>
                        <textarea class="form-control" name="deskripsi" rows="3" placeholder="Deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="avatar">Ganti Avatar</label>
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
