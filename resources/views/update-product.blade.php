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
                    <form action="{{ route('product.update', $productdetails->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="body">
                            <h2 class="card-inside-title">Add New Product</h2>
                            <div class="row clearfix">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Prodcut Category</label>
                                        <select class="form-control show-tick ms select2" name="category_id"
                                            data-placeholder="Select Category">
                                            <option></option>
                                            @foreach (App\Models\Category::all() as $item)

                                                <option value="{{ $item->id }}" @if ($productdetails->category_id == $item->id)
                                                    selected
                                            @endif>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Prodcut Name</label>
                                        <input type="text" name="product_name" value="{{ $productdetails->product_name }}"
                                            class="form-control" placeholder="Product Name" />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Prodcut BarCode</label>
                                        <input type="number" name="barcode" class="form-control"
                                            value="{{ $productdetails->barcode }}" placeholder="BarCode" />
                                    </div>
                                </div>

                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Prodcut Price</label>
                                        <input type="number" name="price" class="form-control"
                                            value="{{ $productdetails->price }}" placeholder="Price" />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Prodcut Stock</label>
                                        <input type="number" name="stock" value="{{ $productdetails->stock }}"
                                            class="form-control" placeholder="Stock" />
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <input type="submit" class="btn btn-primary float-right" value="Update">
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
