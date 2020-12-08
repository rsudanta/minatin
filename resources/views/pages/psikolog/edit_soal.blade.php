@extends('layouts.psikolog.app_psikolog')

@section('title')
    Buat Psikotest
@endsection

@section('content')
    <div class="main">
        <!--Header-->
        <div class="fixed-top judul-page">
            <h1 class="title">
                Psikotest
            </h1>
            <p> <a href="{{ route('psikolog.psikotest', Auth::user()->id) }}">
                    Psikotest
                </a> > <a href="" class="bread-nav">Edit Soal</a>
            </p>
        </div>
        <!--End Header-->
        <div class="content-home">
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

            <div class="container-input-hasil">
                <h2 class="mt-2">Edit</h2>
                <form action=" {{ route('psikolog.psikotest.soal.update', $items->id) }}" method="post">
                    @csrf
                    <input type="text" name="soal" placeholder="Soal.." class="form-control question_list"
                        value="{{ $items->soal }}" required />
                    <div class="pt-2">
                        <button type="submit" name="addAnswer" id="addAnswer" class="btn btn-success mb-2">
                            Edit Soal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
