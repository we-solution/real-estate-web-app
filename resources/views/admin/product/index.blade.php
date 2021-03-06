@extends('admin.layouts.main')
@section('admin')

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
            <div class="card-header">
                <a href="{{ URL::to('/admin/product/create') }}">
                    <button type="button" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>Add</button>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGE</th>
                            <th>USER</th>
                            <th>TITLE</th>
                            <th>TITLE EN</th>
                            <th>DESC</th>
                            <th>DESC EN</th>
                            <th>PRICE</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product-> id }}</td>
                                <td>
                                    <img src="{{ asset('images/product/')}}/{{ $product-> images[0] }}" class="img-responsive img-circle" alt="Cinque Terre" width="40" height="40" style="margin-left: 10px">
                                </td>
                                <td>{{ \App\User::find($product->user_id)->name}}</td>
                                <td><span class="text">{{ $product-> title }}</span></td>
                                <td><span class="text">{{ $product-> title_en }}</span></td>
                                <td><span class="text">{{ $product-> desc }}</span></td>
                                <td><span class="text">{{ $product-> desc_en }}</span></td>
                                <td>{{ $product-> price }}</td>
                                <td>{{ $product-> status == 1 ? "TRUE" : "FALSE" }}</td>
                                <td>
                                    <a href="{{ URL::to('/admin/product')."/show/".$product-> id }}">
                                        <button type="button" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="{{ URL::to('/admin/product')."/edit/".$product-> id }}">
                                          <button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="{{ URL::to('/admin/product')."/delete/".$product-> id }}">
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>


@endsection