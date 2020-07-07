@extends('admin.master')

@section('title') Inventory @endsection

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Inventory</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                @include('admin.includes.messages')
                    <!-- form start -->
                    <form action="{{route('categories.store')}}" class="form-horizontal" method="POST">
                        {{csrf_field()}}
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-plus"></i> &nbsp;Category Form</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    {{-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> --}}
                                </div>

                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="#"><i class="fas fa-plus-square"></i>&nbsp;Category Name</label>
                                        <input type="text" class="form-control" id="#" name="name" placeholder="Category Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="#"><i class="fas fa-file-word"></i>&nbsp;Category Description</label>
                                        <input type="text" class="form-control" id="#" name="description" placeholder="Description">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right" style="margin-left: 10px;">Submit</button>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                    </form>
                </div>

                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Categories</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="atkTable" class="table table-bordered table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Category Description</th>
                                        <th class="text-center"><i class="fas fa-bolt"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
                                        <td class="text-center"><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$category->id}}"><span class="fas fa-pen" style="color: grey"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->

@endsection
