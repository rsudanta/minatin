@extends('layouts.psikolog.app_psikolog')

@section('title')
    Order
@endsection

@section('content')
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
            <div class="row">
                <div class="col-4 mr-4">
                    @forelse ($finish as $item)
                        <a href="{{ route('psikolog.hasil', $item->user->id) }}">
                            <div class="card-pemesan text-center ">
                                <img src="/storage/avatars/{{ $item->user->avatar }}" alt="" class="rounded-circle img-pemesan">
                                <div class="nama-pemesan">{{ $item->user->name }}</div>
                                <div class="order-id">Order ID #{{ $item->id }}</div>
                                <hr>
                                <button class="status-nilai belum" disabled>Beri peniliaan</button>
                            </div>
                        </a>
                    </div>
                @empty
                    <p>Belum ada order</p>
                @endforelse
            </div>
        </div>
        <div class="content-paid">
            <h1 class="h1-content">BELUM DIKERJAKAN</h1>
            <div class="row">
                <div class="col-4 mr-4">
                    @forelse ($paid as $item)
                        <div class="card-pemesan text-center ">
                            <img src="/storage/avatars/{{ $item->user->avatar }}" alt="" class="rounded-circle img-pemesan">
                            <div class="nama-pemesan">{{ $item->user->name }}</div>
                            <div class="order-id">Order ID #{{ $item->id }}</div>
                            <hr>
                            <button class="status-nilai sudah" disabled>Beri peniliaan</button>
                        </div>
                    </div>
                @empty
                    <p>Belum ada order</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
