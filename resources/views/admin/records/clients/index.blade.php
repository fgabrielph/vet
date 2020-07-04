@extends('admin.master')

@section('title') Clients @endsection

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Records</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Clients</li>
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
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-plus"></i>&nbsp;Client Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="#"><i class="fas fa-hashtag"></i>&nbsp;Client's ID</label>
                                        <input type="text" class="form-control" id="#" value="" disabled placeholder="Unique Number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="#"><i class="fas fa-user"></i>&nbsp;First name</label>
                                        <input type="text" class="form-control" id="#" placeholder="First mame">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="#"><i class="fas fa-user"></i>&nbsp;Middle initial</label>
                                        <input type="text" class="form-control" id="#" placeholder="Middle initial">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="#"><i class="fas fa-user"></i>&nbsp;Last name</label>
                                        <input type="text" class="form-control" id="#" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="start"><i class="fas fa-birthday-cake"></i>&nbsp;Birthdate</label>
                                        <input type="date" class="form-control" id="#">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="#"><i class="fas fa-transgender"></i>&nbsp;Gender</label>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="#" name="gender" value="#">
                                            <label for="#" class="custom-control-label">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="#" name="gender" value="#">
                                            <label for="#" class="custom-control-label">Female</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="start"><i class="fas fa-phone"></i>&nbsp;Contact No.</label>
                                        <input type="tel" class="form-control" id="#" placeholder="e.g. 09231312415">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="#"><i class="fas fa-address-book"></i>&nbsp;Address</label>
                                        <input type="text" class="form-control" id="#">
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right" style="margin-left: 10px;">Submit</button>
                                <button type="submit" class="btn btn-danger float-right">Cancel</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
