@extends('admin.master')

@section('title') History @endsection

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">History Records</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Patient's Records</li>
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
                            <h3 class="card-title"><i class="fas fa-plus"></i> &nbsp;Patient Record Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="#"><i class="fas fa-hashtag"></i>&nbsp;Record ID</label>
                                        <input type="text" class="form-control" id="#" value="" disabled placeholder="Unique Number">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="#">Veterinarian on-duty</label>
                                        <select name="bloodType" class='form-control'>
                                            <option name="default">Choose your veterinarian in-charge</option>
                                            <option value="1">First</option>
                                            <option value="2">Second</option>
                                            <option value="3">Third</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="#">Patient's Name</label>
                                        <select name="bloodType" class='form-control'>
                                            <option name="default">Whose your patient</option>
                                            <option value="1">First</option>
                                            <option value="2">Second</option>
                                            <option value="3">Third</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <h5>Physical Examination</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="#">Weight</label>
                                        <input type="text" class="form-control" value="" id="#" placeholder="Patient's weight">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="#">Temperature</label>
                                        <input type="text" class="form-control" value="" id="#" placeholder="Patient's temperature">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="#">Complaint</label>
                                        <input type="text" class="form-control" value="" id="#" placeholder="Patient's Complaint">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="#">Diagnosis</label>
                                        <input type="text" class="form-control" value="" id="#" placeholder="Veternarian Diagnose">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="#"><i class="fas fa-image"></i>&nbsp;Lab result</label>
                                        <input name="image" type="file">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
