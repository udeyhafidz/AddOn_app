@extends('layouts.template')

@section('title', 'Dashboard')
@section('page-title', $page_title)

@section('content')
    {{-- <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="dtCategory" class="tbData table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Category</th>
                        <th>Icon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">

                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><b>Users</b></span>
                            <span class="info-box-number">
                                <h6>{{ $jumlah_user }} Person</h6>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
            </div>
            <!-- /.row -->
        </div>

        {{-- Data User --}}
        <div class="row">
            <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Members</h3>

                        <div class="card-tools">

                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <ul class="users-list clearfix">
                            <li>
                                <img src="{{ asset('img/user1-128x128.jpg') }}" alt="User Image" />
                                <a class="users-list-name" href="#">Alexander Pierce</a>
                                <span class="users-list-date">Today</span>
                            </li>
                            <li>
                                <img src="{{ asset('img/user8-128x128.jpg') }}" alt="User Image" />
                                <a class="users-list-name" href="#">Norman</a>
                                <span class="users-list-date">Yesterday</span>
                            </li>
                            <li>
                                <img src="{{ asset('img/user7-128x128.jpg') }}" alt="User Image" />
                                <a class="users-list-name" href="#">Jane</a>
                                <span class="users-list-date">12 Jan</span>
                            </li>
                            <li>
                                <img src="{{ asset('img/user6-128x128.jpg') }}" alt="User Image" />
                                <a class="users-list-name" href="#">John</a>
                                <span class="users-list-date">12 Jan</span>
                            </li>
                            <li>
                                <img src="{{ asset('img/user2-160x160.jpg') }}" alt="User Image" />
                                <a class="users-list-name" href="#">Alexander</a>
                                <span class="users-list-date">13 Jan</span>
                            </li>
                            <li>
                                <img src="{{ asset('img/user5-128x128.jpg') }}" alt="User Image" />
                                <a class="users-list-name" href="#">Sarah</a>
                                <span class="users-list-date">14 Jan</span>
                            </li>
                            <li>
                                <img src="{{ asset('img/user4-128x128.jpg') }}" alt="User Image" />
                                <a class="users-list-name" href="#">Nora</a>
                                <span class="users-list-date">15 Jan</span>
                            </li>
                            <li>
                                <img src="{{ asset('img/user3-128x128.jpg') }}" alt="User Image" />
                                <a class="users-list-name" href="#">Nadia</a>
                                <span class="users-list-date">15 Jan</span>
                            </li>
                        </ul>
                        <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <a href="javascript:">View All Users</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!--/.card -->
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Latest Orders</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Item</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="pages/examples/invoice.html">OR9842</a>
                                        </td>
                                        <td>Call of Duty IV</td>
                                        <td>
                                            <span class="badge badge-success">Shipped</span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="pages/examples/invoice.html">OR1848</a>
                                        </td>
                                        <td>Samsung Smart TV</td>
                                        <td>
                                            <span class="badge badge-warning">Pending</span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="pages/examples/invoice.html">OR7429</a>
                                        </td>
                                        <td>iPhone 6 Plus</td>
                                        <td>
                                            <span class="badge badge-danger">Delivered</span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="pages/examples/invoice.html">OR7429</a>
                                        </td>
                                        <td>Samsung Smart TV</td>
                                        <td>
                                            <span class="badge badge-info">Processing</span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="pages/examples/invoice.html">OR1848</a>
                                        </td>
                                        <td>Samsung Smart TV</td>
                                        <td>
                                            <span class="badge badge-warning">Pending</span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="pages/examples/invoice.html">OR7429</a>
                                        </td>
                                        <td>iPhone 6 Plus</td>
                                        <td>
                                            <span class="badge badge-danger">Delivered</span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="pages/examples/invoice.html">OR9842</a>
                                        </td>
                                        <td>Call of Duty IV</td>
                                        <td>
                                            <span class="badge badge-success">Shipped</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
