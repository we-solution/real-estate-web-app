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
            <div class="card-header">
                <a href="{{ URL::to('/admin/role/create') }}">
                    <button type="button" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>Add</button>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>DESC</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ $role-> id }}</td>
                                <td>{{ $role-> name }}</td>
                                <td>{{ $role-> desc }}</td>
                                <td>{{ $role-> status }}</td>
                                <td>
                                    <a href="{{ URL::to('/admin/role')."/show/".$role-> id }}">
                                        <button type="button" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="{{ URL::to('/admin/role')."/edit/".$role-> id }}">
                                        <button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="{{ URL::to('/admin/role')."/delete/".$role-> id }}">
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