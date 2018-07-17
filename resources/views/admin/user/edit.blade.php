@extends('admin.layouts.main')
@section('admin')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">User</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">

            @if (Session::has('message'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{ session('message') }}</strong>.
                </div>
            @endif

            <div class="card-header">
                Create
            </div>
            <div class="card-body">
                <form role="form" method="post" action="{{ URL::to('/admin/user/update/'.$user->id) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" value="{{$user->name}}" placeholder="title" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="title_en" value="{{$user->email}}" name="title_en" placeholder="title en" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                        <a href="{{ URL::to('/admin/user') }}"><button type="button" value="Reset" class="btn btn-info">Cancel</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
