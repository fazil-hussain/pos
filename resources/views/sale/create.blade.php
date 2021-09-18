@extends('layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" />

@endsection
@section('heading')
    Generate Sale
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Select Category</label>
                                        <select class="form-control show-tick ms select2" id="selectcategoryy" name="cat_id"
                                            data-placeholder="Select Category">
                                            <option></option>
                                            @foreach (App\Models\Category::all() as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Select Prodcut</label>
                                        <select class="form-control show-tick ms select2" id="productlist" name="pro_id"
                                            data-placeholder="Select Prodcut">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Select BarCode</label>
                                        <select class="form-control show-tick ms select2" id="barcodelist" name="pro_id"
                                            data-placeholder="Select Prodcut">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Quantity</label>
                                        <input type="number" name="pro-quantity" class="form-control"
                                            placeholder="Enter Quantity" />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Discount</label>
                                        <input type="number" name="pro-discount" class="form-control"
                                            placeholder="Discount" />
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Stock</label>
                                        <input type="number" readonly class="form-control" id="stock" placeholder="Stock" />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="number" readonly class="form-control" id="price" placeholder="Price" />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Total</label>
                                        <input type="number" name="pro-total" class="form-control" placeholder="Total" />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">

                                        <button class="btn btn-primary btn-lg align-items-center mt-4">Add To
                                            Invoice</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-3">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <button class="btn btn-success btn-lg">Save Invoice</button>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <button class="btn btn-info btn-lg">Save & Print</button>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                    </div>
                    <div class="body">
                        <p>Invoice List</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Lemon</td>
                                        <td>200</td>
                                        <td>3</td>
                                        <td>500</td>
                                        <td><Button class="btn btn-danger">Delete</Button></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
    @include('script');
@endsection
