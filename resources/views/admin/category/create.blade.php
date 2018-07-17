@extends('admin.layouts.main')
@section('admin')

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Category</li>
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
                <form role="form" enctype="multipart/form-data"  method="POST" action="{{ URL::to('/admin/category/store') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Name :</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name_en">Name (En) :</label>
                                <input type="text" class="form-control" id="name_en" name="name_en" placeholder="Name En" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sel1">Select Parent Category :</label>
                                <select class="form-control" name="parent_id">
                                    <option></option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name  }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Icon</label>
                                <div class="row">
                                    <div class="fileImage1" id="fileImage1">
                                        <input type="file"  name="image" accept="image/gif, image/jpeg, image/png">
                                    </div>
                                </div>
                            </div>
                        </div>
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