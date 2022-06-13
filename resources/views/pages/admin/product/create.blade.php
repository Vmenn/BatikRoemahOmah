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
                            <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input value="{{old('title')}}" type=" text" class="form-control input-default "
                                        id="title" name="title" placeholder="Product Name" require>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea value="{{old('title')}}" name="description" id="description" rows="8px"
                                        class="form-control input-default "></textarea>
                                </div>

                                <div class="from-group">
                                    <label for="price" class="col-form-label">Price(NRS) <span
                                            class="text-danger">*</span></label>
                                    <input id="price" type="number" name="price" placeholder="Enter price"
                                        value="{{old('price')}}" class="form-control input-default">
                                    @error('price')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="color">Color<span class="text-danger">*</span></label>
                                    <input value="{{old('color')}}" type=" text" class="form-control input-default "
                                        id="color" name="color" placeholder="Color" require>
                                </div>

                                <div class="form-group">
                                    <label for="stock">Quantity <span class="text-danger">*</span></label>
                                    <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity"
                                        value="{{old('stock')}}" class="form-control">
                                    @error('stock')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="condition">Condition</label>
                                    <select name="condition" class="form-control">
                                        <option value="">--Select Condition--</option>
                                        <option value="default">Default</option>
                                        <option value="new">New</option>
                                        <option value="hot">Hot</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    <input type="file" class="form-control input-default " id="image" name="image"
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
<script>
$('#cat_id').change(function() {
    var cat_id = $(this).val();
    // alert(cat_id);
    if (cat_id != null) {
        // Ajax call
        $.ajax({
            url: "/admin/category/" + cat_id + "/child",
            data: {
                _token: "{{csrf_token()}}",
                id: cat_id
            },
            type: "POST",
            success: function(response) {
                if (typeof(response) != 'object') {
                    response = $.parseJSON(response)
                }
                // console.log(response);
                var html_option = "<option value=''>----Select sub category----</option>"
                if (response.status) {
                    var data = response.data;
                    // alert(data);
                    if (response.data) {
                        $('#child_cat_div').removeClass('d-none');
                        $.each(data, function(id, title) {
                            html_option += "<option value='" + id + "'>" + title +
                                "</option>"
                        });






















                    } else {}












     } else {
                    $('#child_cat_div').addClass('d-none');
                }
                $('#child_cat_id').html(html_option);

            }
        });
    } else {}
})
</script>

@endsection
