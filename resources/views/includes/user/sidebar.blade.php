<script src="https://kit.fontawesome.com/9923874ec2.js" crossorigin="anonymous"></script>

<div class="sidenav">
    <div class="row">
        <div class="col-12"><img class="navbar-brand" src="{{ url('frontend/img/Logo.png') }}" alt=""></div>
    </div>
    <img class="mx-auto d-block rounded-circle" src="/storage/avatars/{{ Auth::user()->avatar }}" alt="">
    <h2 class="text-center">{{ Auth::user()->name }}</h2>
    <a href="{{ route('user_home') }}" class="{{ $active['dashboard'] }}"><i class="fas fa-home"></i>Home</a>
    <a href="{{ route('user_order', Auth::user()->id) }}" class="{{ $active['order'] }}"><i class="fas fa-shopping-cart"></i>Order</a>
    <a href="{{ route('user_profile') }}" class="{{ $active['profile'] }}"><i class="fas fa-user-alt"></i>Profile</a>
    <form action="{{ url('logout') }}" method="post">
        @csrf
        <button class="btn"><i class="fas fa-sign-out-alt"></i>Logout</button>
    </form>
</div>
