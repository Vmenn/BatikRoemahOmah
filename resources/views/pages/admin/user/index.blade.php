@extends('layouts.admin')
@section('title')
Admin-User
@endsection
@section('content')

<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
        Preloader end
    ********************-->

<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">


    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <span>Datatable</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Staff</h4>
                            <a href="{{route('user.create')}}" class="btn btn-primary"> Tambah </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example5" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Status</th>
                                            <th>Joining Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user )
                                            <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->name}}</td>
                                            <td><a href="javascript:void(0);"><strong>{{$user->email}}</strong></td>
                                            <td>
                                                {{$user->level->name}}</a>
                                            </td>
                                            <td>
                                                @if($user->status=='active')
                                                <span> <i
                                                        class="fa fa-circle text-success mr-1"></i>{{$user->status}}</span>
                                                @else
                                                <span><i
                                                        class="fa fa-circle text-danger mr-1"></i>{{$user->status}}</span>
                                                @endif
                                            </td>
                                            <td>{{$user->created_at}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('user.edit',$user->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                            <form method="POST" action="{{route('user.destroy',$user->id)}}">
                                                                @csrf
                                                                @method('delete')
                                                                <button  class="btn btn-danger shadow btn-xs sharp" data-id={{$user->id}}><i
                                                                    class="fa fa-trash"></i></button>
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
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        *******
***************
*************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Slowin Coffe</a> 2021</p>
        </div>
    </div>
    @endsection
