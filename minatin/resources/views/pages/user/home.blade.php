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
            <div class="col-6">
                <a href="">
                    <div class="card-psikotest">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ url('frontend/img/profile.png') }}" class="rounded-circle" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Psikotest Minat dan Bakat</h2>
                                <p>Ronald Richards</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-3">
                                <p class="star"><i class="fas fa-star"></i>4.7</p>
                            </div>
                            <div class="col-6">
                                <p class="star"><i class="fas fa-business-time"></i> 4 tahun</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>
@endsection
