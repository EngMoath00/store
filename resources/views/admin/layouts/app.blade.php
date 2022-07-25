<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> dashboard</title>
    <!--icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo.png') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('dist/font-awesome/css/font-awesome.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/adminlte/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="{{ asset('dist/adminlte/css/bootstrap-ltr.min.css') }}">
    <!-- template rtl version -->
    {{-- <link rel="stylesheet" href="{{ asset('dist/adminlte/css/custom-style.css') }}"> --}}

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">الصفحة الرئيسية</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">اتصل بنا</a>
                </li> --}}
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="بحث..."
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav mr-auto">
                <!-- Messages Dropdown Menu -->

                <li class="nav-item dropdown">

                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-comments-o"></i>
                        @foreach ($contacts as $key => $contact)
                            <span class="badge badge-danger navbar-badge">{{ ++$key }}</span>
                        @endforeach
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                        <a href="#" class="dropdown-item">
                        </a>
                        @foreach ($contacts as $contact)
                            <div class="dropdown-divider"></div>

                            <a href="{{ route('message.Users') }}" class="dropdown-item">
                                <!-- Message Start -->

                                <div class="media">

                                    <img src="{{ asset('dist/img/user8-128x128.jpg') }}" alt="User Avatar"
                                        class="img-size-50 img-circle ml-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            {{ $contact->name }}
                                            <span class="float-left text-sm text-muted"><i
                                                    class="fa fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">{{ $contact->subject }}</p>
                                        <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>
                                            {{ $contact->created_at }}</p>
                                    </div>

                                </div>

                                <!-- Message End -->
                            </a>

                            <div class="dropdown-divider"></div>
                        @endforeach
                        <a href="#" class="dropdown-item dropdown-footer">عرض جميع الرسائل</a>
                    </div>
                </li>

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                        <span class="dropdown-item dropdown-header">15 اشعار</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-envelope ml-2"></i> 4 رسائل جديدة
                            <span class="float-left text-muted text-sm">3 دقائق</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-users ml-2"></i> 8 طلبات صداقة
                            <span class="float-left text-muted text-sm">12 ساعة</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-file ml-2"></i> 3 تقارير جديدة
                            <span class="float-left text-muted text-sm">2 يوم</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">عرض جميع الإخطارات</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                            class="fa fa-th-large"></i></a>
                </li>

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('dashboard.index') }}" class="brand-link">
                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">dashboard </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div>
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset('profile.jpg') }}" class="img-circle elevation-2" alt="User Image">

                        </div>
                        <div class="info">
                            <a href="#" class="d-block"> {{ auth()->user()->name }}</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                        category
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('create.category') }}" class="nav-link active">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p> Add category</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('show.category') }}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>show all category</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                        products
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('create.product') }}" class="nav-link active">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>products Add</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('show.product') }}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>show all products</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                        informations page
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('create.Informa') }}" class="nav-link active">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p> Add informations</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('show.Informa') }}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>All informations</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                        Users
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    {{-- <li class="nav-item">
                                        <a href="{{ route('create.category') }}" class="nav-link active">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p> Add category</p>
                                        </a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a href="{{ route('show.users') }}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>show all users</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                        Messages
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('message.Users') }}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>All Messages users</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>CopyLeft &copy; 2018 <a href="http://github.com/badranawad/">بدران عوض</a>.</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('dist/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('dist/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/adminlte/js/adminlte.min.js') }}"></script>
</body>
