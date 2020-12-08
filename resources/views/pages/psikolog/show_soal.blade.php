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
                </a> > <a href="" class="bread-nav">Lihat Soal</a>
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
            <div class="pb-5">
                <a class="btn btn-primary" href="{{ route('psikolog.psikotest.soal') }}" type="submit">Buat Soal</a>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Soal</th>
                                            <th scope="col">Opsi</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $item)
                                            <tr>
                                                <th scope="row">{{ $item->soal->id }}</th>
                                                <td>{{ $item->soal->soal }}</td>
                                                <td>{{ $item->opsi }}</td>
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('psikolog.psikotest.soal.edit', $item->soal->id) }}"
                                                        type="submit">Edit Soal</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('psikolog.psikotest.opsi.edit', $item->id) }}"
                                                        type="submit">Edit Opsi</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('psikolog.psikotest.soal.destroy', $item->soal->id) }}"
                                                        type="submit">Hapus Soal</a>
                                                </td>
                                            </tr>
                                    </tbody>
                                    </form>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
