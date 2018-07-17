<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Real Estate</title>
    <link rel="shortcut icon" href="{{url('/images/logo/logo.PNG')}}" rel="shortcut icon"><title>Real Estate Admin</title>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin.css')}}" rel="stylesheet">
    <link href="{{ asset('css/admin.css')}}" rel="stylesheet">

</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/">Welcome {{ Auth::user()->name }}</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{ URL::to('/admin/index') }} ">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="nav-link-text">Home</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Product">
                <a class="nav-link" href="{{ URL::to('/admin/product') }} ">
                    <i class="fa fa-product-hunt" aria-hidden="true"></i>
                    <span class="nav-link-text">Product</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
                <a class="nav-link" href="{{ URL::to('/admin/category') }} ">
                    <i class="fa fa-object-group" aria-hidden="true"></i>
                    <span class="nav-link-text">Category</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slide">
                <a class="nav-link" href="{{ URL::to('/admin/slide') }} ">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                    <span class="nav-link-text">Slide</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User">
                <a class="nav-link" href="{{ URL::to('/admin/user') }} ">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span class="nav-link-text">User</span>
                </a>
            </li>
           {{-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Role">
                <a class="nav-link" href="{{ URL::to('/admin/role') }} ">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <span class="nav-link-text">Role</span>
                </a>
            </li>--}}
            {{--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Components</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="../navbar.html">Navbar</a>
                    </li>
                    <li>
                        <a href="../cards.html">Cards</a>
                    </li>
                </ul>
            </li>--}}
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
        @yield('admin')
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Real Estate 2018</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->

    <!-- Page level plugin JavaScript-->
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ asset('js/admin.js')}}"></script>
</div>
</body>
</html>
