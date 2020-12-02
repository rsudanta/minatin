@extends('layouts.user.app')

@section('content')

    <div class="main">
        <!--Header-->
        <div class="fixed-top judul-page">
            <h1 class="title">
                {{ $items->judul }}
            </h1>
            <p> <a href="{{ route('user_home') }}">
                    Home
                </a> > <a href="" class="bread-nav">{{ $items->judul }}</a>
            </p>
        </div>
        <!--End Header-->
        <div class="content-detailsoal">
            <div class="content-atas">
                <div class="row">
                    <div class="col-8">
                        <h3>Description</h3>
                        <p>{{ $items->deskripsi_psikotest }}</p>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-6 pt-4">
                                <div class="card-join-test">
                                    <h3>Detail</h3>
                                    <div class="pl-4">
                                        <table class="table table-borderless">
                                            <th scope="row">Jumlah Soal</th>
                                            <td>{{ $items->jumlah_soal }} soal</td>
                                        </table>
                                    </div>
                                    <div class="text-center">
                                        <h3>@money($items->harga)</h3>
                                    </div>
                                </div>
                                <div class="parent">
                                    <form action="{{ route('sukses', $items->id) }}" method="POST">
                                        @csrf
                                        <div class="join-test-card">
                                            <button class="btn btn-join-test-card">Join Test</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3>Profile</h3>
            <div class="row">
                <div class="col-2 content-profile-kiri-psikolog">
                    <img src="/storage/avatars/{{ $items->user->avatar }}" class="rounded-circle img-detail-pemesan" alt="">
                </div>
                <div class="col-8">
                    <h3>{{ $items->user->name }}</h3>
                    <p>{{ $items->user->bidang }}</p>
                    <div class="row">
                        <div class="col-2">
                            <p class="star"><i class="fas fa-star"></i>4.7</p>
                        </div>
                        <div class="col-4">
                            <p class="star"><i class="fas fa-business-time"></i>
                                {{ $items->user->lama_kerja }} tahun
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="deskripsi">
                {{ $items->user->deskripsi }}
            </div>
            <div class="education">
                <h3>Edukasi</h3>
                <div class="deskripsi">
                    {{ $items->user->edukasi }}
                </div>
            </div>
        </div>
    </div>
@endsection
