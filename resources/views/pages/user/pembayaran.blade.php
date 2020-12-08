@extends('layouts.user.app')

@section('title')
    Pembayaran
@endsection

@section('content')
    <div class="main">
        <!--Header-->
        <div class="fixed-top judul-page">
            <h1 class="title">
                Order
            </h1>
            <p> <a href="#">
                    Order
                </a> > <a href="" class="bread-nav">Pembayaran</a>
            </p>
        </div>
        <!--End Header-->
        <div class="content-order">
            <div class="total-harga">
                <div class="row">
                    <div class="total-psikotest">Total Pembayaran</div>
                    <div class="total-bayar">@money('150000')</div>
                </div>
            </div>
            <div class="content-pembayaran">
                <h4>Pembayaran</h4>
                <div class="row mt-4">
                    <div class="col-sm detail-rek">
                        <img src="{{ url('frontend/img/bni.png') }}" alt="">
                        <div>Bank BNI</div>
                        <div>No. Rekening</div>
                        <div class="no-rek">0260376326</div>
                        <div>a/n M. Risqullah</div>
                    </div>
                    <div class="col-sm detail-rek">
                        <img src="{{ url('frontend/img/bca.png') }}" alt="">
                        <div>Bank BNI</div>
                        <div>No. Rekening</div>
                        <div class="no-rek">0260376326</div>
                        <div>a/n M. Risqullah</div>
                    </div>
                    <div class="col-sm detail-rek">
                        <img src="{{ url('frontend/img/bni.png') }}" alt="">
                        <div>Bank BNI</div>
                        <div>No. Rekening</div>
                        <div class="no-rek">0260376326</div>
                        <div>a/n M. Risqullah</div>
                    </div>
                    <div class="col-sm detail-rek">
                        <img src="{{ url('frontend/img/bca.png') }}" alt="">
                        <div>Bank BNI</div>
                        <div>No. Rekening</div>
                        <div class="no-rek">0260376326</div>
                        <div>a/n M. Risqullah</div>
                    </div>
                </div>
            </div>
            <div class="content-pembayaran">
                <h4>Tata Cara Pembayaran</h4>
                <div class="accordion mt-4 mr-4" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Pembayaran lewat ATM
                                </button>
                            </h2>
                        </div>
                        {{-- <div id="collapseOne" class="collapse"
                            aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div> --}}
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Pembayaran lewat Mobile Banking
                                </button>
                            </h2>
                        </div>
                        {{-- <div id="collapseTwo" class="collapse"
                            aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="content-pembayaran">
                <h4>Upload Bukti Pembayaran</h4>
                <div class="form-group mt-4 mr-4">
                    <form action="{{ route('upload.bukti', $items->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="bukti" class="form-control" id="bukti" aria-describedby="bukti">
                        </div>
                        <button type="submit" class="btn btn-submit ">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    @endsection
