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
            <div class="card-header">
                <a href="{{ URL::to('/admin/slide/create') }}">
                    <button type="button" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>Add</button>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGE</th>
                            <th>USER</th>
                            <th>TITLE</th>
                            <th>TITLE EN</th>
                            <th>DESC</th>
                            <th>DESC EN</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($slides as $slide)
                            <tr>
                                <td>{{ $slide-> id }}</td>
                                <td>
                                    <img src="{{ asset('images/slide/')}}/{{ $slide-> image }}" class="img-responsive img-circle" alt="No Image" width="40" height="40" style="margin-left: 10px">
                                </td>
                                <td>{{ \App\User::find($slide->user_id)->name}}</td>
                                <td>{{ $slide-> title_kh }}</td>
                                <td>{{ $slide-> title_en }}</td>
                                <td>{{ $slide-> desc_kh }}</td>
                                <td>{{ $slide-> desc_en }}</td>
                                <td>
                                    <a href="{{ URL::to('/admin/slide')."/show/".$slide-> id }}">
                                        <button type="button" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="{{ URL::to('/admin/slide')."/edit/".$slide-> id }}">
                                          <button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="{{ URL::to('/admin/slide')."/delete/".$slide-> id }}">
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>


@endsection