@extends('layouts.admin')
@section("head_title", "Product")
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Tambahkan User Baru</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input  type=" text" class="form-control input-default " value="{{$product->title}}"
                                        id="title" name="title" placeholder="Product Name" require>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea  name="description" id="description" rows="8px" value="{{$product->description}}"
                                        class="form-control input-default "></textarea>
                                </div>

                                <div class="from-group">
                                    <label for="price" class="col-form-label">Price(NRS) <span
                                            class="text-danger">*</span></label>
                                    <input id="price" type="number" name="price" placeholder="Enter price" value="{{$product->price}}"
                                        class="form-control input-default">
                                    @error('price')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="color">Color<span class="text-danger">*</span></label>
                                    <input  type=" text" class="form-control input-default " value="{{$product->color}}"
                                        id="color" name="color" placeholder="Color" require>
                                </div>

                                <div class="form-group">
                                    <label for="stock">Quantity <span class="text-danger">*</span></label>
                                    <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity" value="{{$product->stock}}"
                                        class="form-control">
                                    @error('stock')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="condition">Condition</label>
                                    <select name="condition" class="form-control">
                                        <option value="{{$product->condition}}">--Old Condition({{$product->condition}})--</option>
                                        <option value="default">Default</option>
                                        <option value="new">New</option>
                                        <option value="hot">Hot</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    <input type="file" class="form-control input-default " id="image" name="image" value="{{$product->image}}"
                                        placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-form-label">Status <span
                                            class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    @error('status')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <button class="btn btn-danger" type="submit"> Submit </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--*******
***********
****************
            Content body end
        ***********************************-->
@endsection
