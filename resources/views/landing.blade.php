<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Minatin!</title>
    <!-- CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('frontend/css/newlandingpage.css') }}">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img class="logoLP" src="{{ url('frontend/img/Logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <p>Tentang Kami</p>
                        </a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{Auth::user()->roles == 'ADMIN' ? route('admin.user') : route('user_home')}}">
                            <p>Dashboard Saya</p>
                        </a>
                    </li>
                    @endauth
                </ul>

                @guest                
                <div class="navbar-nav ml-auto">
                    <a class="btn btn-minatin mr-2" href="{{ route('register') }}">
                        <p>Daftar</p>
                    </a>
                    <a class="btn btn-minatin" href="{{ route('login') }}">
                        <p>Masuk</p>
                    </a>
                </div>
                @endguest    

                @auth
                <form class="navbar-nav ml-auto" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-minatin" type="submit">
                        <p>Logout</p>
                    </button>
                </form>   
                @endauth
            </div>
        </nav>
    </div>
    <!--baru neh-->
    <section class="section-top">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h1 class="title">MINATIN, helps you <span class="title orange">choose your future!</span>
                    </h1>
                    <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam quasi eum ipsum iure
                        corporis voluptas. Facere ipsa deleniti atque consectetur et velit necessitatibus doloremque?
                        Quisquam soluta amet atque ipsum tenetur?</p>
                    <a href="" class="mt-4 btn btn-minatin">
                        <p>Get Started</p>
                    </a>
                </div>
                <div class="col-5">
                    <img src="{{ url('frontend/img/success.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--END TopContent-->

    <section class="section-service">
        <div class="container">
            <h1 class="title text-center">Our Services</h1>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="{{ url('frontend/img/consul.jpg') }}" alt="">
                        <h2>
                            Professional Consultant
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et amet urna, parturient velit
                            ultrices integer a.
                        </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="{{ url('frontend/img/consul.jpg') }}" alt="">
                        <h2>
                            Professional Consultant
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et amet urna, parturient velit
                            ultrices integer a.
                        </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="{{ url('frontend/img/consul.jpg') }}" alt="">
                        <h2>
                            Professional Consultant
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et amet urna, parturient velit
                            ultrices integer a.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END CardTopContent-->

    <section class="section-mid">
        <div class="container-fluids">
            <img src="{{ url('frontend/img/Mid.png') }}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-3 text-left">
                        <h1 class="title white">85%</h1>
                        <h1 class="text white">Salah Kerjaan</h1>
                    </div>
                    <div class="col-5 text-mid">
                        <h1 class="title white">JANGAN SAMPAI SALAH JURUSAN</h1>
                        <p class="text white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sem in
                        </p>
                    </div>
                    <div class="col-3 text-right">
                        <h1 class="title white">91%</h1>
                        <h1 class="text white">Salah Jurusan</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END MiddleContent-->

    <section class="section-proof">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-6">
                            <img class="img-1" src="{{ url('frontend/img/stressedout.jpg ') }}" alt=" ">
                        </div>
                        <div class="col-6">
                            <img class="img-2" src="{{ url('frontend/img/stressedout2.png') }} " alt=" ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img class="img-3" src="{{ url('frontend/img/stressedout3.jpg') }} " alt=" ">
                        </div>
                        <div class="col-6">
                            <img class="img-4" src="{{ url('frontend/img/stressedout1.png') }} " alt=" ">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <h2 class="text bold">Get your <span class="orange">skill improve faster</span>, with confident</h2>

                    <h4 class="caption bold">Payment protection, guaranteed</h4>
                    <p class="caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sem in</p>

                    <h4 class="caption bold">Know the price up front</h4>
                    <p class="caption"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sem in</p>

                    <h4 class="caption bold">We’re here for you 24/7</h4>
                    <p class="caption ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sem in</p>
                </div>
            </div>
        </div>
    </section>

    <!--END TextMiddleContent-->
    <section class="section-testimoni">
        <div class="container">
            <h1 class="title text-center">Testimoni</h1>
            <div class="row">
                <div class="col-4">
                    <div class="card-bg"></div>
                    <div class="card-img">
                        <h2>John</h2>
                        <p>Siswa</p>
                    </div>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc iaculis sodales placerat cras
                            eget faucibus elementum pellentesque proin.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-bg">

                    </div>
                    <div class="card-img">
                        <h2>John</h2>
                        <p>Siswa</p>
                    </div>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc iaculis sodales placerat cras
                            eget faucibus elementum pellentesque proin.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-bg"></div>
                    <div class="card-img">
                        <h2>John</h2>
                        <p>Siswa</p>
                    </div>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc iaculis sodales placerat cras
                            eget faucibus elementum pellentesque proin.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END TestimoniContent-->
</body>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1>Minatin</h1>
                <p>We grant your wishes instantly</p>
            </div>

            <div class="col-2">
                <h5>For Beginners</h5>
                <a href="">New Account</a> <br>
                <a href="">Booking Now</a><br>
                <a href="">Use Payments</a>
            </div>

            <div class="col-2">
                <h5>Explore Us</h5>
                <a href="">Our Careers</a><br>
                <a href="">Privacy</a><br>
                <a href="">Terms & Conditions</a>
            </div>

            <div class="col-2">
                <h5>Connect Us</h5>
                <a href="">support@minatin.id</a><br>
                <a href="">022 - 5673 - 431</a><br>
                <a href="">Staycation, Kuningan Jakarta</a>
            </div>
        </div>
        <div class="text-center mb-3">
            <p>Copyright 2020 • All right reserved • Minatin</p>
        </div>
    </div>
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js "
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://kit.fontawesome.com/9923874ec2.js " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous ">
    </script>
</footer>
