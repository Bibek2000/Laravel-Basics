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
                <h3 class="card-title"> {{$module}}
                    <a href="{{route($base_route . 'create')}}" class="btn btn-info">Create</a>

                </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            {!! Form::model($data['record'],['route'=>[$base_route.'store',],'method'=>'post']) !!}
            {{--                @csrf--}}

            <div class="card-body">



                <div class="form-group">
                    {!!Form::label('site_name','Site Name')!!}
                    {!!Form::text ('site_name',null,['class'=> 'form-control','placeholder'=>'Site Name'])!!}

                </div>
                <div class="form-group">
                    {!!Form::label('site_slogan','Site Slogan')!!}
                    {!!Form::text ('site_slogan',null,['class'=> 'form-control','placeholder'=>'Site Slogan'])!!}

                </div>
                <div class="form-group">
                    {!!Form::label('site_logo','Site Logo')!!}
                    {!!Form::file ('site_logo',null,['class'=> 'form-control','placeholder'=>'Site Logo'])!!}

                </div>
                <div class="form-group">
                    {!!Form::label('site_favicon','Site Favicon')!!}
                    {!!Form::file ('site_favicon',null,['class'=> 'form-control','placeholder'=>'Site Favicon'])!!}

                </div>
                <div class="form-group">
                    {!!Form::label('email','Email')!!}
                    {!!Form::email ('email',null,['class'=> 'form-control','placeholder'=>'Email'])!!}

                </div>
                <div class="form-group">
                    {!!Form::label('phone','Phone')!!}
                    {!!Form::number('phone',null,['class'=> 'form-control','placeholder'=>'Phone'])!!}

                </div>
                <div class="form-group">
                    {!!Form::label('google_map_link','Google Map Link')!!}
                    {!!Form::url('google_map_link',null,['class'=> 'form-control','placeholder'=>'Google Map Link'])!!}

                </div>
                <div class="form-group">
                    {!!Form::label('facebook_link','Facebook Link')!!}
                    {!!Form::url('facebook_link',null,['class'=> 'form-control','placeholder'=>'facebook_linkk'])!!}

                </div>
                <div class="form-group">
                    {!!Form::label('instagram_link','Instagram Link')!!}
                    {!!Form::url('instagram_link',null,['class'=> 'form-control','placeholder'=>'instagram_link'])!!}

                </div>
                <div class="form-group">
                    {!!Form::label('twitter link','Twitter Link')!!}
                    {!!Form::url('twitter_link',null,['class'=> 'form-control','placeholder'=>'Twitter Link'])!!}

                </div>

            </div>
            <div class="card-footer">
                {!!Form::submit('Save' .''.$module,['class'=>'btn btn-success'])!!}
                {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!} <br>
            </div>

            </form>
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
