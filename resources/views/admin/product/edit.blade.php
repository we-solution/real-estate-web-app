@extends('admin.layouts.main')
@section('admin')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">Post</li>
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
                <form role="form" method="post" action="{{ URL::to('/admin/product/update/'.$post->id) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" placeholder="title" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="title_en" value="{{$post->title_en}}" name="title_en" placeholder="title en" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="desc" name="desc"  placeholder="Message" maxlength="20" rows="3">{{$post->desc}}</textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="desc_en" name="desc_en" placeholder="Message" maxlength="20" rows="3">{{$post->desc_en}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" id="image" name="image" placeholder="image " required>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                        <a href="{{ URL::to('/admin/product') }}"><button type="button" value="Reset" class="btn btn-info">Cancel</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
