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
                    <label for="namaLengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaLengkap" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="tglLahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tglLahir" placeholder="Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label for="jurusanIngin">Jurusan yang diinginkan</label>
                    <input type="text" class="form-control" id="jurusanIngin" placeholder="Jurusan yang diinginkan">
                </div>
                <button type="submit" class="btn btn-periksa">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
