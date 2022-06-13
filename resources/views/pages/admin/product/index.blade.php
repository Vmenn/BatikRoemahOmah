@extends('layouts.admin')
@section("head_title", "Product")
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span>Muhamad Firmansyah</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Product</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Product</h4>
                        <a href="{{route('product.create')}}" class="btn btn-primary"> Tambah </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Stock</th>
                                        <th>Color</th>
                                        <th>Condition</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ( $products as $product )
                                <tbody>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="" alt="">
                                            {{$loop->iteration}}
                                        </td>
                                        <td>{{$product->title}}</td>

                                        <td> {!!$description = (strlen($product->description) > 100) ?
                                            substr($product->description, 0, 100) .
                                            "..." : $product->description; !!}
                                        </td>
                                        <td><img class="" width="70" src="{{Storage::url($product->image)}}" alt="">
                                        </td>
                                        <td>@if($product->stock>0)
                                            <span class="badge badge-primary">{{$product->stock}}</span>
                                            @else
                                            <span class="badge badge-danger">{{$product->stock}}</span>
                                            @endif
                                        </td>
                                        <td>{{$product->color}}</td>
                                        <td>{{$product->condition}}</td>
                                        <td>@if($product->status=='active')
                                            <span> <i
                                                    class="fa fa-circle text-success mr-1"></i>{{$product->status}}</span>
                                            @else
                                            <span><i
                                                    class="fa fa-circle text-danger mr-1"></i>{{$product->status}}</span>
                                            @endif</strong></a>
                                        </td>
                                        <td>Rp {{number_format($product->price)}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('product.edit',$product->id)}}"
                                                    class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <form action="{{route('product.destroy',$product->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class='btn btn-danger shadow btn-xs sharp'><i
                                                            class="fa fa-trash"></i></a></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    </d
 iv>
                    </d iv>
                    </d iv>
                </div>
            </div>
            @endsection
