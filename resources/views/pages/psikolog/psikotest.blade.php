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
                            <a href="{{ route('psikolog.psikotest.soal.show', $item->id) }}" class="join-card btn btn-card">
                                <p>Lihat Soal</p>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="psikotest-kosong">
                        <div class="icon-exclamation">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <p>Kamu belum membuat psikotest!</p>
                        <a href="{{ route('psikolog.psikotest.show', Auth::user()->id) }}" class="btn btn-submit">Buat</a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
