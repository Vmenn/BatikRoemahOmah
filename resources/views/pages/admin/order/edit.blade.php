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
                            <form method="post" action="{{route('order.update',$order->id)}}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="status">Status :</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="">--Select Status--</option>
                                        <option value="new" {{(($order->status=='new')? 'selected' : '')}}>New</option>
                                        <option value="process" {{(($order->status=='process')? 'selected' : '')}}>
                                            process</option>
                                        <option value="selesai" {{(($order->status=='selesai')? 'selected' : '')}}>
                                            Selesai</option>
                                        <option value="cancel" {{(($order->status=='cancel')? 'selected' : '')}}>Cancel
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
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
***********


*****
            Content body end
        ***********************************-->
@endsection
