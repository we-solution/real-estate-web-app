@extends('admin.layouts.main')
@section('admin')

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">Slide</li>
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
                <form role="form" enctype="multipart/form-data"  method="POST" action="{{ URL::to('/admin/slide/store') }}">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title Khmer" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Title En" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="desc" name="desc" placeholder="Description Khmer" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="desc_en" name="desc_en" placeholder="Description En" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <div class="row">
                            <div class="fileImage1" id="fileImage1">
                                <input type="file" name="image" accept="image/gif, image/jpeg, image/png">
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