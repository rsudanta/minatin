@extends('layouts.user.kerjakan')

@section('content')

    <div class="pengerjaansoal">
        <div class="logo">
            <h1>MINATIN</h1><br>
        </div>
        <div class="waktu-pengerjaan">
            <h3>
                {{ $judul->judul }}
            </h3>
        </div>
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
        <br>
        <form class="soal" action="{{ route('user.kerjakan.store') }}" method="post">
            @csrf
            @foreach ($items as $item)
                <div class="card-soal">
                    <p>{{ $item->soal }}</p>
                    <input type="hidden" name="detail_id" value="{{ $item->detail_id }}">
                    <input type="hidden" name="soal_id[]" value="{{ $item->id }}">
                    @foreach ($item->opsi as $opsi)
                        <div>
                            <input type="radio" name="opsi[{{ $item->id }}][{{ $opsi->id }}]" value="{{ $opsi->id }}">
                            {{ $opsi->opsi }}
                        </div>
                    @endforeach

                </div>
                <br>
            @endforeach
            <button class="btn btn-submitsoal">
                <p>Submit</p>
            </button>
        </form>
    </div>
    </div>
@endsection
