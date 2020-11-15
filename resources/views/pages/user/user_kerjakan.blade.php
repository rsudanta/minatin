@extends('layouts.user.kerjakan')

@section('content')
    
<div class="pengerjaansoal">
        <div class="logo">
            <h1>MINATIN</h1><br> 
        </div>
        <div class="waktu-pengerjaan">
            <h3>
                Psikotest Minat dan Bakat   
            </h3>
        </div>
        <br>
        <form class="soal">
            <div class="card-soal">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant consectetur quis interdum.</p>
                <input type="radio" id="option1" name="soal1" value="1">
                <label for="option1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant consectetur quis interdum.</label><br>
                <input type="radio" id="option2" name="soal1" value="2">
                <label for="option2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant consectetur quis interdum.</label><br>
                <input type="radio" id="option3" name="soal1" value="3">
                <label for="option3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant consectetur quis interdum.</label><br>
                <input type="radio" id="option4" name="soal1" value="4">
                <label for="option4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant consectetur quis interdum.</label>
            </div>
            <br>
            <div class="card-soal">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant consectetur quis interdum.</p>
                <input type="radio" id="option2-1" name="soal2" value="1">
                <label for="option2-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant consectetur quis interdum.</label><br>
                <input type="radio" id="option2-2" name="soal2" value="2">
                <label for="option2-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant consectetur quis interdum.</label><br>
                <input type="radio" id="option2-3" name="soal2" value="3">
                <label for="option2-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant consectetur quis interdum.</label><br>
                <input type="radio" id="option2-4" name="soal2" value="4">
                <label for="option2-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant consectetur quis interdum.</label>
            </div>
            <br>
            <a href="" class="btn btn-submitsoal">
                <p><i class="fas fa-submitsoal"></i> Submit</p>
            </a>
        </div>
</div>
@endsection