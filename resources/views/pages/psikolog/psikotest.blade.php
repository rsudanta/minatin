@extends('layouts.psikolog.app_psikolog')

@section('title')
Psikotest
@endsection

@section('content')
<div class="main">
    <!--Header-->
    <div class="fixed-top judul-page">
        <h1 class="title">
            Psikotest
        </h1>
        <p> <a href="#" class="bread-nav">
                Psikotest
            </a>
        </p>
    </div>
    <!--End Header-->
    <div class="content-missing">
        <div class="icon-exclamation">
            <i class="fas fa-exclamation-circle"></i>
        </div>
        <div>Kamu belum membuat psikotest!</div>
        <a href="{{ route('buat_psikotest', ['id'=> $psikologs->idPsikolog]) }}" class="btn btn-buat">Buat</a>
    </div>
</div>
@endsection