<script src="https://kit.fontawesome.com/9923874ec2.js" crossorigin="anonymous"></script>

<div class="sidenav">
    <div class="row">
        <div class="col-12"> <img class="navbar-brand" src="{{ url('frontend/img/Logo.png') }}" alt="">
        </div>
    </div>
    <img class="mx-auto d-block rounded-circle" src="img/Profile.png" alt="">
    <h2 class="text-center">Floyd Miles</h2>
    <a href="{{ route('edit_profile') }}" class="active"><i class="fas fa-user-alt"></i>Profil</a>
    <a href="{{ route('list_order') }}"><i class="fas fa-shopping-cart"></i>Order</a>
    <a href="#contact"><i class="fas fa-edit"></i>Buat Soal</a>
    <button class="btn"><i class="fas fa-sign-out-alt"></i>Logout</button>
</div>