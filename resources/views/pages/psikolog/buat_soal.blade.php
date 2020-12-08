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
            <p> <a href="{{ route('psikolog.psikotest',Auth::user()->id) }}">
                    Psikotest
                </a> > <a href="" class="bread-nav">Buat Soal</a>
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
                <form action="{{ route('psikolog.psikotest.soal.store') }}" method="post">
                    @csrf
                    <div class="table-responsive">
                        <h2 class="mt-2" align="center">Add question to quiz</h2>
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <input type="hidden" name="detail_id" value="{{ $items->id }}" />
                                <td>
                                    <input type="text" name="soal" placeholder="Soal.."
                                        class="form-control question_list" required />
                                <td>
                                    <input type="text" name="opsi[]" placeholder="Opsi.."
                                        class="form-control options_list" required />
                                </td>
                                </td>
                                <td>
                                    <button type="button" name="addAnswer" id="addAnswer" class="btn btn-success mb-2">
                                        Add Answer
                                    </button>
                                </td>
                            </tr>
                        </table>
                        <input type="submit" name="addQuestion" id="addQuestion" class="btn btn-success mb-2 mr-2"
                            value="Add Question" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var n = 1;

            $('#addAnswer').click(function() {
                n++;
                $('#dynamic_field').append('' +
                    '<tr id="row' + n + '" class="dynamic-added">' +
                    '<td>' +
                    '</td>' +
                    '<td>' +
                    '<input type="text" name="opsi[]" required placeholder="Opsi.." class="form-control question_list" />' +
                    '</td>' +
                    '<td>' +
                    '<button type="button" name="remove" id="' + n +
                    '" class="btn btn-danger btn_remove">X</button>' +
                    '</td>' +
                    '</tr>');
            });


            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });

        });

    </script>
@endsection
