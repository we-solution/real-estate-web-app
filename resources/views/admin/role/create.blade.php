@extends('admin.layouts.main')
@section('admin')

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">Role</li>
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
                <form role="form" method="post" action="{{ URL::to('/admin/role/store') }}">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="name" placeholder="title" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="title_en" name="desc" placeholder="title en" required>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Status:</label>
                        <select class="form-control" id="sel1">
                            <option>ACTIVE</option>
                            <option>IN ACTIVE</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Save</button>
                        <button type="reset" value="Reset" class="btn btn-info">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection