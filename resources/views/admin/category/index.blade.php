@extends('admin.layouts.main')
@section('admin')

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">Category</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <a href="{{ URL::to('/admin/category/create') }}">
                    <button type="button" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>Add</button>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>USER</th>
                        <th>CATEGORY NAME</th>
                        <th>CATEGORY NAME EN</th>
                        <th>PARENT CATEGORY</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category-> id }}</td>
                            <td>
                                <img src="{{ asset('images/category/')}}/{{ $category-> image }}" class="img-responsive img-circle" alt="Cinque Terre" width="40" height="40" style="margin-left: 10px">
                            </td>
                            <td>{{ \App\User::find($category->user_id)->name}}</td>
                            <td>{{ $category-> name }}</td>
                            <td>{{ $category-> name_en }}</td>
                            <td>{{ $category-> parent_id != null ? \App\Category::find($category-> parent_id)->name_en : ""}}</td>
                            <td>
                                <a href="{{ URL::to('/admin/category')."/show/".$category-> id }}">
                                    <button type="button" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </a>
                                <a href="{{ URL::to('/admin/category')."/edit/".$category-> id }}">
                                    <button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                </a>
                                <a href="{{ URL::to('/admin/category')."/delete/".$category-> id }}">
                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <ul class="pagination" style="text-align: center;width: 100%;">
                    {{
                        $categories->links()
                    }}
                </ul>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>


@endsection