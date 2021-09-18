@extends('layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
@endsection
@section('heading')
    All Prodcuts
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Input -->

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        {{-- <h2><strong>All Categories</strong> </h2> --}}

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Barcode</th>
                                        <th>Category</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Barcode</th>
                                        <th>Category</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($products as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->barcode }}</td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>{{ $item->product_name }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->stock }}</td>
                                            <td> @if ($item->status==1)
                                                <span class="text-primary">In-Stock</span>
                                            @else
                                            <span class="text-danger">Out-Stock</span>
                                            @endif</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('product.show', $item->id) }}"
                                                        class="btn btn-success">Update</a>
                                                    <form action="{{ route('product.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger ">Delete</button>
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
