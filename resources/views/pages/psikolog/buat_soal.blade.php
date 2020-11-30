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
                <form class="form-input-hasil" action="{{ route('psikolog.psikotest.soal.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="soal"> Soal</label>
                        <input type="text" class="form-control" name="soal" placeholder="Soal.." value="">
                    </div>
                    <div class="form-group">
                        <label for="opsi_1"> Opsi A</label>
                        <input type="text" class="form-control" name="opsi_1" placeholder="Opsi A.." value="">
                    </div>
                    <div class="form-group">
                        <label for="opsi_2"> Opsi B</label>
                        <input type="text" class="form-control" name="opsi_2" placeholder="Opsi B.." value="">
                    </div>
                    <div class="form-group">
                        <label for="opsi_3"> Opsi C</label>
                        <input type="text" class="form-control" name="opsi_3" placeholder="Opsi C.." value="">
                    </div>
                    <div class="form-group">
                        <label for="opsi_4"> Opsi D</label>
                        <input type="text" class="form-control" name="opsi_4" placeholder="Opsi D.." value="">
                    </div>

                    <button type="submit" class="btn btn-buat">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
