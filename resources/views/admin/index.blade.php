@extends('admin.layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> </h1>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            <div class="row">


                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Categories</div>
                                </div>
                                <a href="{{ route('show.category') }}" class="small-box-footer"><span
                                        class="badge bg-secondary"><i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Products</div>
                                </div>
                                <a href="{{ route('show.product') }}" class="btn btn-primary" style="color: #1cc88a"><i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- /.container-fluid -->
    @stop
