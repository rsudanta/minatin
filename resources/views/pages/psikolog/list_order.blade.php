@extends('layouts.psikolog.app_psikolog') @section('title') Order @endsection @section('content')
<div class="main">
    <!--Header-->
    <div class="fixed-top judul-page">
        <h1 class="title">
            Order
        </h1>
        <p> <a href="#" class="bread-nav">
                    Order
                </a>
        </p>
    </div>
    <!--End Header-->
    <div class="content-order">
        <h1 class="h1-content">MENUNGGU PENILAIAN</h1>
        <div class="row mb-4">
            @forelse ($finish as $item)
            <div class="col-4 mb-4">
                <a href="{{ route('psikolog.hasil', $item->id) }}">
                    <div class="card-pemesan text-center ">
                        <img src="/storage/avatars/{{ $item->user->avatar }}" alt="" class="rounded-circle img-pemesan">
                        <div class="nama-pemesan">{{ $item->user->name }}</div>
                        <div class="order-id">Order ID #{{ $item->id }}</div>
                        <hr>
                        <button class="status-nilai belum" disabled>Beri penilaian</button>
                    </div>
                </a>
            </div>
            @empty
            <p style="margin-left: 15px">Belum ada order</p>
            @endforelse
        </div>
    </div>
    <div class="content-paid">
        <h1 class="h1-content">BELUM DIKERJAKAN</h1>
        <div class="row">
            @forelse ($paid as $item)
            <div class="col-4 mb-4">
                <div class="card-pemesan-paid text-center ">
                    <img src="/storage/avatars/{{ $item->user->avatar }}" alt="" class="rounded-circle img-pemesan">
                    <div class="nama-pemesan">{{ $item->user->name }}</div>
                    <div class="order-id">Order ID #{{ $item->id }}</div>
                </div>
            </div>
            @empty
            <p style="margin-left: 15px">Belum ada order</p>
            @endforelse
        </div>
    </div>
</div>
@endsection