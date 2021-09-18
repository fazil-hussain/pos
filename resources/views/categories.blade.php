@extends('layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
@endsection
@section('heading')
    Categories
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="card">
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="body">
                            <h2 class="card-inside-title">Add New Category</h2>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Category Name" />
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group float-left ">
                                        <input type="submit" class="btn btn-primary float-right " value="add">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>All Categories</strong> </h2>
                            {{-- <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i
                                            class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul> --}}
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Products</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Products</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($categories as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->name }}</td>
                                                {{-- <td><Button class="btn btn-info">Prodcuts</Button></td> --}}
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" id="{{ $item->id }}" class="btn btn-success  updbtn"
                                                            data-toggle="modal" data-target="#updatecategoryform">Update</button>
                                                        <form action="{{ route('category.destroy', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger ">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Update Category Modal -->
    <div class="modal fade " id="updatecategoryform" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <form id="updatecategory" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="title" id="smallModalLabel">Update Category</h4>
                    </div>
                    <div class="modal-body">
                        <input class="form-control" name="name" type="text" placeholder="Category Name">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success waves-effect">Update</button>
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('script')
@include('script');

@endsection
