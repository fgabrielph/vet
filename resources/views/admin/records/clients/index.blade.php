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
                    <form class="form-horizontal">
                        <div class="card card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Client Form</h3>

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
                                            <input class="custom-control-input" type="radio" id="male" name="gender" value="male">
                                            <label for="male" class="custom-control-label">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="female" name="gender" value="female">
                                            <label for="female" class="custom-control-label">Female</label>
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
                        </div>
                    </form>
                </div>

                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Clients</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="atkTable" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
