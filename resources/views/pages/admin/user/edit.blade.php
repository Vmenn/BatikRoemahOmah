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
                            <form method="post" enctype="multipart/form-data" action="{{route('user.update',$user->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control input-default " id="name" name="name" value="{{ $user->name }}"
                                        placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control input-default " id="email" name="email" value="{{ $user->email }}"
                                        placeholder="Your email">
                                </div>
                                <div class="form-group">
                                    <label for="email">Roles</label>
                                    <select name="role" id="role" class="form-control">
                                        @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control input-default " id="password"
                                        name="password" placeholder="input-default">
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-form-label">Status <span
                                            class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="active" {{(($user->status=='active') ? 'selected' : '')}}>Active</option>
                                        <option value="inactive" {{(($user->status=='inactive') ? 'selected' : '')}}>Inactive</option>
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


<!--**********************************
            Content body end
        ***********************************-->
@endsection
