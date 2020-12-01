<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('frontend/css/admin.css') }}">


</head>

<body>
    <!-- Sidebar -->
    <div class="sidenav">
        <div class="row">
            <div class="col-12"> <img class="navbar-brand" src="{{ url('frontend/img/Logo.png') }}" alt="">
            </div>
        </div>
        <img class="mx-auto d-block rounded-circle" src="/storage/avatars/{{ Auth::user()->avatar }}" alt="">
        <h2 class="text-center">{{ Auth::user()->name }}</h2>
        <a href="{{ route('admin.user') }}" class="{{ $active['admin-user'] }}"><i class="fas fa-user-alt"></i>User</a>
        <a href="{{ route('admin.order') }}" class="{{ $active['admin-order'] }}"><i
                class="fas fa-shopping-cart"></i>Order</a>
        <form action="{{ url('logout') }}" method="post">
            @csrf
            <button class="btn"><i class="fas fa-sign-out-alt"></i>Logout</button>
        </form>
    </div>
    <!-- End Sidebar -->

    <!-- Content-->
    <div class="main">
        <!--Header-->
        <div class="fixed-top judul-page">
            <h1 class="title">
                User
            </h1>
            <p> <a class="bread-nav" href="#">
                    User
                </a>
            </p>
        </div>
        <!--End Header-->
        <div class="content-admin">
            <div class="row">
                <div class="col-sm-12">
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
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Role</th>
                                        </tr>
                                    </thead>
                                    @forelse ($items as $item)
                                        <form action="{{ route('admin.user.update', $item->id) }}" method="POST">
                                            @csrf
                                            <tbody>
                                                <tr>
                                                    <th scope="row">{{ $item->id }}</th>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <select class="custom-select" id="roles" name="roles">
                                                                <option value="{{ $item->roles }}">
                                                                    {{ $item->roles }} (Current Role)
                                                                </option>
                                                                <option value="USER">USER</option>
                                                                <option value="PSIKOLOG">PSIKOLOG</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary" type="submit">Submit</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @empty
                                            <p>Tidak ada user</p>
                                        </form>
                                    @endforelse
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--End Content-->

</body>

<footer>
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/9923874ec2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</footer>

</html>
