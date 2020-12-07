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
            <p> <a href="{{ route('psikolog.order', Auth::user()->id) }}">
                    Order
                </a> > <a href="{{ route('psikolog.hasil', $order->user->id) }}">
                    {{ $order->user->name }}
                </a> > <a href="" class="bread-nav">
                    Masukkan Hasil
                </a>
            </p>
        </div>
        <!--End Header-->
        <div class="content-home">
            <div class="container-profile-pemesan">
                <div class="content-profile-kiri">
                    <img src="/storage/avatars/{{ $order->user->avatar }}" alt="" class="rounded-circle img-detail-pemesan">
                </div>
                <div>
                    <div class="nama-pemesan">{{ $order->user->name }}</div>
                    <div class="order-id">Order ID #{{ $order->id }}</div>
                </div>
            </div>
            <div class="container-input-hasil">
                <form class="form-input-hasil" action="{{ route('psikolog.input_hasil.store') }}"
                    enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    <input type="hidden" name="user_id" value="{{ $order->user->id }}">
                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label for="jurusan1">Rekomendasi Jurusan 1</label>
                        <input type="text" name="jurusan1" class="form-control" id="jurusan1"
                            placeholder="Rekomendasi Jurusan 1">
                    </div>
                    <div class="form-group">
                        <label for="jurusan2">Rekomendasi Jurusan 2</label>
                        <input type="text" name="jurusan2" class="form-control" id="jurusan2"
                            placeholder="Rekomendasi Jurusan 2">
                    </div>
                    <div class="form-group">
                        <label for="jurusan3">Rekomendasi Jurusan 3</label>
                        <input type="text" name="jurusan3" class="form-control" id="jurusan3"
                            placeholder="Rekomendasi Jurusan 3">
                    </div>
                    <div class="form-group">
                        <label for="alasan">Alasan</label>
                        <textarea class="form-control" id="alasan" name="alasan" rows="3"
                            placeholder="Alasan dari rekomendasi jurusan yang diberikan"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="hasil">Upload File Hasil</label>
                        <input type="file" class="form-control-file" id="hasil" name="hasil">
                    </div>
                    <button type="submit" class="btn btn-periksa">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
