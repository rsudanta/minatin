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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="container-input-hasil">
                <form class="form-input-hasil" method="POST" action="{{ route('psikolog.psikotest.create') }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::User()->id }}">
                    <div class="form-group">
                        <label for="judul">Judul Psikotest</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul Psikotest" >
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_psikotest">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi_psikotest" rows="3"
                            placeholder="Deskripsi Psikotest"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Harga">Harga</label>
                            <input type="number" class="form-control" name="harga" placeholder="Harga">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jumlah_soal">Jumlah Soal</label>
                            <input type="number" class="form-control" name="jumlah_soal" 
                                placeholder="Jumlah Soal">
                        </div>
                    </div>
                    <button href="" class="btn btn-buat">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
