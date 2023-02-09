@extends('layouts.app')
@section('title', 'Users')
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Update User</h3>
                            <a href="{{route('user')}}" class="btn btn-primary btn-sm" style="float:right"><i class="fa fa-undo"></i>
                                Back</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{route('user.update', $user->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        value="{{$user->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Email</label>
                                    <input type="email" name="email" class="form-control" id="emailAddress"
                                        value="{{$user->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="type">Role</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="admin" @if($user->type == 'admin') selected @endif>Admin</option>
                                        <option value="user" @if($user->type == 'user') selected @endif>User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-sm float-end">Update</button>
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@push('scripts')
@endpush
