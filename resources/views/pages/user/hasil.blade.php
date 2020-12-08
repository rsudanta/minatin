@extends('layouts.user.app')

@section('title')
Hasil Psikotest
@endsection

@section('content')
    <div class="main">
        <!--Header-->
        <div class="fixed-top judul-page">
            <h1 class="title">
                Order
            </h1>
            <p> <a href="{{ route('user_order', Auth::user()->id) }}">
                    Order
                </a> > <a href="" class="bread-nav">
                    {{ $items->user->name }}
                </a>
            </p>
        </div>
        <!--End Header-->
        <div class="content-home">
            <div class="container-profile-pemesan">
                <div class="content-profile-kiri">
                    <img src="/storage/avatars/{{ $items->user->avatar }}" alt="" class="rounded-circle img-detail-pemesan">
                </div>
                <div>
                    <div class="nama-pemesan"> {{ $items->user->name }}</div>
                    <div class="order-id">Order ID #{{ $items->order_id }}</div>
                </div>
            </div>
            <div class="container-detail-pemesan">
                <div class="row">
                    <div class="col-4">
                        <div class="data-detail-pemesan-kiri">Rekomendasi Jurusan 1</div>
                    </div>
                    <div class="col-8">
                        <div class="data-detail-pemesan-kanan">{{ $items->jurusan1}}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="data-detail-pemesan-kiri">Rekomendasi Jurusan 2</div>
                    </div>
                    <div class="col-8">
                        <div class="data-detail-pemesan-kanan">{{ $items->jurusan2}}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="data-detail-pemesan-kiri">Rekomendasi Jurusan 3</div>
                    </div>
                    <div class="col-8">
                        <div class="data-detail-pemesan-kanan">{{ $items->jurusan3}}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="data-detail-pemesan-kiri">Alasan</div>
                    </div>
                    <div class="col-8">
                        <div class="data-detail-pemesan-kanan">{{ $items->alasan}}</div>
                    </div>
                </div>
                <a href="{{ route('user.hasil.download',$items->order_id) }}" type="submit" class="btn btn-periksa" href="">Download Hasil</a>
             </div>
        </div>
    </div>
@endsection
