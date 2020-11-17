@extends('layouts.psikolog.app_psikolog')

@section('title')
Buat Psikotest
@endsection

@section('content')
<div class="main">
    <!--Header-->
    <div class="fixed-top judul-page">
        <h1 class="title">
            Psikotest
        </h1>
        <p> <a href="#">
            Psikotest
        </a> > <a href="" class="bread-nav">Buat Psikotest</a>
    </p>
    </div>
    <!--End Header-->
    <div class="content-home">
        <div class="container-input-hasil">
            <form class="form-input-hasil">
                <div class="form-group">
                    <label for="judulPsikotest">Judul Psikotest</label>
                    <input type="text" class="form-control" id="judulPsikotest" placeholder="Judul Psikotest">
                </div>
                <div class="form-group">
                    <label for="deskripsiPsikotest">Deskripsi</label>
                    <textarea class="form-control" id="deskripsiPsikotest" rows="3" placeholder="Deskripsi Psikotest"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Harga">Harga</label>
                        <input type="number" class="form-control" id="Harga" placeholder="Harga">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="jumlahSoal">Jumlah Soal</label>
                        <input type="number" class="form-control" id="jumlahSoal" placeholder="Jumlah Soal">    
                    </div>
                </div>
                <div class="form-group">
                    <label for="fileSoal">Upload File Soal</label>
                    <input type="file" class="form-control-file" id="fileSoal">
                </div>
                <a href="" class="btn btn-buat">Submit</a>
            </form>
        </div>    
    </div>
</div>
@endsection