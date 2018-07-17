@extends('admin.layouts.main')
@section('admin')

<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">Home</li>
    </ol>
    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-list"></i>
                    </div>
                    <div class="mr-5">{{ $categories }} Categories </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-product-hunt" aria-hidden="true"></i>
                    </div>
                    <div class="mr-5">{{ $products }} Products </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="mr-5">{{ $users }}  Users</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-sliders" aria-hidden="true"></i>
                    </div>
                    <div class="mr-5">{{ $slides }} Slide </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                </a>
            </div>
        </div>
    </div>
    <!-- Area Chart Example-->
    {{--<div class="card mb-3">--}}
        {{--<div class="card-header">--}}
            {{--<i class="fa fa-area-chart"></i> Area Chart Example</div>--}}
        {{--<div class="card-body">--}}
            {{--<canvas id="myAreaChart" width="100%" height="30"></canvas>--}}
        {{--</div>--}}
        {{--<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>--}}
    {{--</div>--}}
    <!-- Example Bar Chart Card-->
    {{--<div class="card mb-3">--}}
        {{--<div class="card-header">--}}
            {{--<i class="fa fa-bar-chart"></i> Bar Chart Example</div>--}}
        {{--<div class="card-body">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-8 my-auto">--}}
                    {{--<canvas id="myBarChart" width="100" height="50"></canvas>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4 text-center my-auto">--}}
                    {{--<div class="h4 mb-0 text-primary">$34,693</div>--}}
                    {{--<div class="small text-muted">YTD Revenue</div>--}}
                    {{--<hr>--}}
                    {{--<div class="h4 mb-0 text-warning">$18,474</div>--}}
                    {{--<div class="small text-muted">YTD Expenses</div>--}}
                    {{--<hr>--}}
                    {{--<div class="h4 mb-0 text-success">$16,219</div>--}}
                    {{--<div class="small text-muted">YTD Margin</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>--}}
    {{--</div>--}}
</div>
<!-- /.container-fluid-->


@endsection