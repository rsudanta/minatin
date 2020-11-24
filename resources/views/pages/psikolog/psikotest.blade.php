@extends('layouts.psikolog.app_psikolog')

@section('title')
<<<<<<< HEAD
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
        <div class="content-order">
            <div class="row">
                @forelse ($items as $item)
                    <div class="col-6 pt-4">
                        <div class="card-order">
                            <div class="row">
                                <div class="col-3">
                                    <img src="/storage/avatars/{{ $item->user->avatar }}" class="rounded-circle" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>{{ $item->judul }}</h2>
                                    <p>{{ $item->user->name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="parent">
                            <a href="" class="join-card btn btn-card">
                                <p>Buat Soal</p>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="">
                        <p>
                            Kamu belum membuat psikotest!
                        </p>
                        <a href="{{ route('psikolog.psikotest.show', Auth::user()->id) }}" class="btn btn-submit">Buat</a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
=======
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
>>>>>>> 6c54f044fc7a1c5a18ca51d0bce3a7c72c4f648d