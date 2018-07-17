@extends('admin.layouts.main')
@section('admin')

    <link href="{{ asset('css/image_upload.css')}}" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQfW76o6gBozk-7VMRR4oLZK5Qe7nJ5_w&callback=initialize&sensor=false"></script>
    {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/map.js')}}"></script>
    <script src="{{ asset('js/image_upload.js')}}"></script>


    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">Product</li>
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
                <form role="form" enctype="multipart/form-data"  method="POST" action="{{ URL::to('/admin/product/store') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_en">Title (En):</label>
                                <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Title En" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sel1">Category (select one):</label>
                                <select class="form-control" id="sel1" name="cat_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">
                                            @if(Cookie::get('lang') == 'kh')
                                                {{ $category->name  }}
                                            @else
                                                {{ $category->name_en  }}
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Price" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Tel 1:</label>
                                <input type="text" class="form-control" id="phone" name="phones[]" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Tel 2:</label>
                                <input type="text" class="form-control" id="phone" name="phones[]" placeholder="Phone" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">Description:</label>
                                <textarea class="form-control" type="textarea" id="desc" name="desc" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc_en">Description (En):</label>
                                <textarea class="form-control" type="textarea" id="desc_en" name="desc_en" placeholder="Message"S></textarea>
                            </div>
                        </div>
                    </div>

                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="image">Image</label>--}}
                                {{--<div class="field" align="left">--}}
                                    {{--<input type="file" id="files" name="files[]" multiple accept="image/gif, image/jpeg, image/png"/>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="fileImage1" id="fileImage1">
                                    <input type="file" name="images[]"  multiple accept="image/gif, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="fileImage2" id="fileImage2">
                                    <input type="file" name="images[]" multiple accept="image/gif, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="fileImage3" id="fileImage3">
                                    <input type="file" name="images[]" multiple accept="image/gif, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="fileImage4" id="fileImage4">
                                    <input type="file" name="images[]" multiple accept="image/gif, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="fileImage5" id="fileImage4">
                                    <input type="file" name="images[]" multiple accept="image/gif, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Map</label>
                                <div id="myMap" style="height: 350px;"></div>
                                {{--<input id="address" type="text" style="width:600px;"/><br/>--}}
                                <input type="text" id="latitude" name="latitude" placeholder="Latitude"/>
                                <input type="text" id="longitude" name="longitude" placeholder="Longitude"/>
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