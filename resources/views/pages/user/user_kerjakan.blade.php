@extends('layouts.user.kerjakan')

@section('content')

    <div class="pengerjaansoal">
        <div class="logo">
            <h1>MINATIN</h1><br>
        </div>
        <div class="waktu-pengerjaan">
            <h3>
                {{ $order->detail_psikotest->judul }}
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
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card border-0 shadow">
                                    <div class="card-body p-5">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <tr>
                                            <td scope="row">{{ $item->soal }}</th>
                                                <input type="hidden" name="detail_id" value="{{ $item->detail_id }}">
                                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                <input type="hidden" name="soal_id[]" value="{{ $item->id }}">
                                            </td>
                                        </table>
                                    @foreach ($item->opsi as $opsi)
                                        <div class="pt-2">
                                        <input type="radio" name="opsi[{{ $item->id }}]" value="{{ $opsi->id }}">
                                            {{ $opsi->opsi }}
                                        </div>
                                        <br><br>
                                    @endforeach
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        @endforeach
                        <br><br><br>
            <button class="btn btn-submitsoal">
                <p>Submit</p>
            </button>
        </form>
    </div>
    </div>
@endsection
