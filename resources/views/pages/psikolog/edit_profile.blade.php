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
        <nav class="nav nav-edit">
            <a class="nav-link active" href="#">Edit Profile</a>
            <a class="nav-link" href="#">Edit Password</a>
        </nav>
        <div class="container-input-hasil">
            <form class="form-input-hasil">
                <div class="form-group">
                    <label for="namaPenyelenggara">Nama Penyelenggara</label>
                    <input type="text" class="form-control" id="namaPenyelenggara" placeholder="Nama Penyelenggara">
                </div>
                <div class="form-group">
                    <label for="namaPsikolog">Nama Psikolog</label>
                    <input type="text" class="form-control" id="namaPsikolog" placeholder="Nama Psikolog">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="bidangPsikolog">Bidang Psikolog</label>
                      <input type="text" class="form-control" id="bidangPsikolog4" placeholder="Bidang Psikolog">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lamaKerja">Lama Kerja</label>
                        <input type="number" class="form-control" id="lamaKerja" placeholder="Lama Kerja">    
                    </div>
                </div>
                <div class="form-group">
                    <label for="edukasi">Riwayat Edukasi</label>
                    <input type="text" class="form-control" id="edukasi" placeholder="Riwayat Edukasi">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" rows="3" placeholder="Deskripsi"></textarea>
                </div>
                <button type="submit" class="btn btn-buat">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
