@extends('layouts.user.app')

@section('content')

    <div class="main">
        <div class="fixed-top judul-page">
            <h1 class="title">
                Edit Profile
            </h1>
            <p> <a href="#">
                    Profile
                </a> > <a href="" class="bread-nav">Edit Profile</a>
            </p>
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

        <form method="post" action="{{ route('users.update', Auth::user()->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="content-edit-profileuser">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ Auth::user()->name }}"
                        aria-describedby="name">
                </div>
                <div class="form-group">
                    <label for="avatar">Foto Profil</label>
                    <input type="file" name="avatar" class="form-control" id="avatar" value="{{ Auth::user()->avatar }}"
                        aria-describedby="avatar">
                </div>
                <button type="submit" class="btn btn-editprofileuser">
                    <p><i class="fas fa-editprofileuser"></i> Submit</p>
                </button>
            </div>
        </form>


    @endsection
