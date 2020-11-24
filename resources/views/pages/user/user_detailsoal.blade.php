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
        <div class="row">
            <div class="col-8">
                <div class="content-detailsoal">
                    <div class="description">
                        <div class="col-30">
                            <div class="col-7">
                                <h3>Description</h3>
                                <p>{{ $items->deskripsi_psikotest }}</p>

                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="profile">
                        <div class="col-8">
                            <div class="card-profilepsiko">
                                <h3 class="h1-profilepsiko">Profile</h3>
                                <div class="row pt-4">
                                    <div class="col-4">
                                        <img src="/storage/avatars/{{ $items->user->avatar }}"
                                            class="rounded-circle pic-100" alt="">
                                    </div>
                                    <div class="col-8">
                                        <h3>{{ $items->user->name }}</h3>
                                        <p>{{ $items->user->bidang }}</p>
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="star"><i class="fas fa-star"></i>4.7</p>
                                            </div>
                                            <div class="col-7">
                                                <p class="star"><i class="fas fa-business-time"></i>
                                                    {{ $items->user->lama_kerja }}
                                                    tahun
                                                </p>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detailprofile">
                        <div>
                            <p>{{ $items->user->deskripsi }}</p>
                        </div>
                    </div>
                    <br>
                    <h3> Education </h3>
                    <div class="education mb-5">
                        <div>
                            <p>{{ $items->user->edukasi }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="content-detailsoal">
                    <h1>Detail</h1>
                    <p>{{ $items->jumlah_soal }} Soal</p>
                    <p> @money($items->harga)</p>
                    <form action="{{ route('sukses', $items->id) }}" method="POST">
                        @csrf
                        <button class="btn btn-primary">Beli</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
