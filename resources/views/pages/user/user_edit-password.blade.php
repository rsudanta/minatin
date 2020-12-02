@extends('layouts.user.app')

@section('content')

    <div class="main">
        <div class="fixed-top judul-page">
            <h1 class="title">
                Edit Password
            </h1>
            <p> <a href="#">
                    Profile
                </a> > <a href="" class="bread-nav">Edit Password</a>
            </p>
        </div>
        <nav class="nav nav-edit">
                <a class="nav-link" href="#">Edit Profile</a>
                <a class="nav-link active" href="#">Edit Password</a>
        </nav>

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

        @foreach ($items as $item)
            <form method="post" action="{{ route('users.update', $item->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="content-edit-profileuser">
                    <div class="form-group">
                        <label for="pass">Password baru</label>
                        <input type="text" name="pass" class="form-control" id="pass" value="{{ $item->password }}"
                            aria-describedby="pass">
                    </div>
                    <button type="submit" class="btn btn-editprofileuser"><p><i class="fas fa-editprofileuser"></i> Submit</p></button>
                </div>
            </form>
            @endforeach

    @endsection
