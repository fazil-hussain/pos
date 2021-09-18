@extends('layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" />

@endsection
@section('heading')
    Add Product
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="card">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="body">
                            {{-- <h2 class="card-inside-title">Add New Product</h2> --}}
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Prodcut Category</label>
                                        <select class="form-control show-tick ms select2" name="category_id" data-placeholder="Select Category">
                                            <option></option>
                                            @foreach (App\Models\Category::all() as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Prodcut Name</label>
                                        <input type="text" name="product_name" class="form-control" placeholder="Product Name" />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Prodcut BarCode</label>
                                        <input type="number" name="barcode" class="form-control" placeholder="BarCode" />
                                    </div>
                                </div>

                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Prodcut Price</label>
                                        <input type="number" name="price" class="form-control" placeholder="Price" />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Prodcut Stock</label>
                                        <input type="number" name="stock" class="form-control" placeholder="Stock" />
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control" />
                                    </div>
                                </div> --}}

                            </div>

                            {{-- <h2 class="card-inside-title">Description</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" name="description" class="form-control no-resize"
                                                placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                </div>
                <input type="submit" class="btn btn-primary float-right" value="add">
                </form>

            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
   @include('script');

    <!-- Select2 Js -->

@endsection
