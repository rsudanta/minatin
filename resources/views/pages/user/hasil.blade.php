@extends('layouts.psikolog.app_psikolog')

@section('title')
    Input Hasil
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
            <div class="container-input-hasil">
                <table class="table-hasil">
                    <tr>
                        <td>Rekomendasi Jurusan 1</td>
                        <td>:</td>
                        <td></td>
                        <td>{{ $items->jurusan1 }}</td>
                    </tr>
                    <tr>
                        <td>Rekomendasi Jurusan 2</td>
                        <td>:</td>
                        <td></td>
                        <td>{{ $items->jurusan2 }}</td>
                    </tr>
                    <tr>
                        <td>Rekomendasi Jurusan 3</td>
                        <td>:</td>
                        <td></td>
                        <td>{{ $items->jurusan3 }}</td>
                    </tr>
                    <tr>
                        <td>Alasan</td>
                        <td>:</td>
                        <td></td>
                        <td>{{ $items->alasan }}</td>
                    </tr>
                </table>
                <a href="{{ route('user.hasil.download',$items->order_id) }}" type="submit" class="btn btn-periksa" href="">Download Hasil</a>
            </div>
        </div>
    </div>
@endsection
