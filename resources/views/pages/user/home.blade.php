@extends('layouts.user.app')

@section('content')
    <div class="main">
        <!--Header-->
        <div class="fixed-top judul-page">
            <h1 class="title">
                Home
            </h1>
            <p> <a href="#" class="bread-nav">
                    Home
                </a>
            </p>

        </div>
        <!--End Header-->
        <div class="content-home">
            <h1>POPULAR PSIKOTEST</h1>
            <div class="row">
                @forelse ($items as $item)
                    <div class="col-6 pt-4">
                        <a href="{{ route('detail.psikotest',$item->slug) }}">
                            <div class="card-psikotest">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="/storage/avatars/{{ $item->user->avatar }}" class="rounded-circle" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h2>{{ $item->judul }}</h2>
                                        <p>{{ $item->user->name }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-3">
                                        <p class="star"><i class="fas fa-star"></i>4.7</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="star"><i
                                                class="fas fa-business-time"></i>{{ $item->user->lama_kerja . ' tahun' }}</p>
                                    </div>
                                </div>
                            </div> 
                        </a>
                    </div>
                @empty
                    <p style="font-size: 18px">Tidak ada psikotest</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
