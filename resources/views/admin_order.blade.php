<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('frontend/css/admin.css') }}">


</head>

<body>
    <!-- Sidebar -->
    <div class="sidenav">
        <div class="row">
            <div class="col-12"> <img class="navbar-brand" src="img/Logo.png" alt="">
            </div>
        </div>
        <h2 class="text-center" style="">Admin</h2>
        <a href="#contact"><i class="fas fa-user-alt"></i>User</a>
        <a href="#services" class="active"><i class="fas fa-shopping-cart"></i>Order</a>
        <button class="btn"><i class="fas fa-sign-out-alt"></i>Logout</button>
    </div>
    <!-- End Sidebar -->

    <!-- Content-->
    <div class="main">
        <!--Header-->
        <div class="fixed-top judul-page">
            <h1 class="title">
                Order
            </h1>
            <p> <a class="bread-nav" href="#">
                    Order
                </a>
            </p>
        </div>
        <!--End Header-->
        <div class="content-admin">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Status
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Pending</a>
                                                  <a class="dropdown-item" href="#">Paid</a>
                                                </div>
                                              </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Status
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Pending</a>
                                                  <a class="dropdown-item" href="#">Paid</a>
                                                </div>
                                              </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>Bird</td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Status
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Pending</a>
                                                  <a class="dropdown-item" href="#">Paid</a>
                                                </div>
                                              </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Martin</td>
                                            <td>Williams</td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Status
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Pending</a>
                                                  <a class="dropdown-item" href="#">Paid</a>
                                                </div>
                                              </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/9923874ec2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</footer>

</html>