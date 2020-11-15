@extends('layouts.user.app')

@section('content')
    
<div class="main">
        <!--Header-->
        <div class="fixed-top judul-page">
            <h1 class="title">
                Edit Profile
            </h1>
            <p> <a href="#">
                    Profile
                </a> > <a href="" class="bread-nav">Edit Profile</a>
            </p>
        </div>
        <!--End Header-->
        <div class="content-edit-profileuser">
            <form class="edit-profileuser">
                <div class="option-edit">
                    <div class="col-12">
                        <p>Edit Profile     Edit Password
                            <div class="card-editprofileuser">
                                <p>Nama Lengkap</p>
                                <input type="text" class="form-control" id="editnama" placeholder="Nama Lengkap">
                                <p><br>Tanggal Lahir</p>
                                <input type="text" class="form-control" id="edittanggal" placeholder="Tanggal Lahir">
                                <p><br>Company name</p>
                                <input type="text" class="form-control" id="editcompany1" placeholder="Company 1">
                                <p><br>Company name</p>
                                <input type="text" class="form-control" id="editcompany2" placeholder="Company 2">
                            </div>
                            <br>
                            <a href="" class="btn btn-editprofileuser">
                                <p><i class="fas fa-editprofileuser"></i> Submit</p>
                            </a>
                    </div>        
                </div>
            </form>
        </div>
</div>
@endsection