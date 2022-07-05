@extends('layouts.backend') @section('title',$module) @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$module}} Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{$module}}</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{$module}} Details</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>


                    <tr>
                        <th>Site Name</th>
                        <td>{{$data['record']->site_name}}</td>
                    </tr>

                    <tr>
                        <th>Site Slogan</th>
                        <td>{{$data['record']->site_slogan}}</td>
                    </tr>
                    <tr>
                        <th>Site Logo</th>
                        <td>{{$data['record']->site_logo}}</td>
                    </tr>
                    <tr>
                        <th>Site Favicon</th>
                        <td>{{$data['record']->site_favicon}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$data['record']->email}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{$data['record']->phone}}</td>
                    </tr>
                    <tr>
                        <th>Google Map</th>
                        <td>{{$data['record']->google_map_link}}</td>
                    </tr>
                    <tr>
                        <th>Facebook</th>
                        <td>{{$data['record']->facebook_link}}</td>
                    </tr>
                    <tr>
                        <th>Instagram</th>
                        <td>{{$data['record']->instagram_link}}</td>
                    </tr>
                    <tr>
                        <th>Twitter</th>
                        <td>{{$data['record']->twitter_link}}</td>
                    </tr>




                    <tr>
                        <th>Created At</th>
                        <td>{{$data['record']->created_at}}</td>

                    </tr>

                    </thead>

                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
