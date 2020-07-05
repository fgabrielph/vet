@extends('admin.master')

@section('title') Patients @endsection

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
                        <li class="breadcrumb-item active">Patients</li>
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
                            <h3 class="card-title"><i class="fas fa-plus"></i>&nbsp;Patient's Form</h3>
                        </div>
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="#"><i class="fas fa-hashtag"></i>&nbsp;Patient's ID</label>
                                        <input type="text" class="form-control" id="#" value="" disabled placeholder="Unique Number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="#"><i class="fas fa-user"></i>&nbsp;Client's name</label>
                                        <select name="bloodType" class = 'form-control'>
                                            <option name="default">Owner's name</option>
                                            <option value="1">First</option>
                                            <option value="2">Second</option>
                                            <option value="3">Third</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="#"><i class="fas fa-cat"></i>&nbsp;Patient's name</label>
                                        <input type="text" class="form-control" id="#" value="" placeholder="Pet's name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="#"><i class="fas fa-dog"></i>&nbsp;Breed</label>
                                        <input type="text" class="form-control" id="#" value="" placeholder="Patient's breed">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="#"><i class="fas fa-birthday-cake"></i>&nbsp;Date of Birth</label>
                                        <input type="date" class="form-control" id="#" value="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="gender"><i class="fas fa-transgender"></i>&nbsp;Gender</label>
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
                                        <label for="#"><i class="fas fa-arrow-alt-circle-up"></i>&nbsp;Weight</label>
                                        <input type="text" class="form-control" id="#" value="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="#"><i class="fas fa-image"></i>&nbsp;Patient's Image</label>
                                        <input name="image" type="file">
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
    </div>
@endsection
