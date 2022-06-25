@extends('layouts.backend')
@section('title',$module) @section('content')
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
                <h3 class="card-title">Category
                    <a href="{{route($base_route . 'index')}}" class="btn btn-info">List</a>
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
{{--            <form action="{{route($base_route.'store')}}" method="post">--}}
            {!! Form::open(['route'=>[$base_route.'store',],'method'=>'post']) !!}
{{--                @csrf--}}
                <div class="card-body">
                    <div class="form-group">
                        {!! Form::label('categories_id','Category') !!}
                            {!! Form::select('categories_id',$data['categories'], null, ['class' => 'form-control']) !!}
                        @include('backend.includes.single_field_error', ['field'=> 'category_id'])
                    </div>
                    <div class="form-group">
{{--                        <label for="title">Title</label>--}}
                        {!! Form::label('title','Title') !!}
{{--                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">--}}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        @include('backend.includes.single_field_error', ['field'=> 'title'])
                    </div>
                    <div class="form-group">
                        <label for="rank">Rank</label>
                        <input type="number" name="rank" class="form-control" id="rank" placeholder="Rank">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                        @include('backend.includes.single_field_error', ['field'=> 'slug'])
                    </div>
                    <div class="form-group">
                        <label for="Image">Image</label></br>
                        <input type="file" name="image" class="" id="image">
                    </div>
                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Meta Title">
                    </div>
                    <div class="form-group">
                        <label for="meta_keyword">Meta Keyword</label>
                        <input type="text" name="meta_keyword" class="form-control" id="meta_keyword" placeholder="Meta Keyword">
                    </div>
                    <div class="form-group">
                        <label for="meta_description">Meta Description</label><br>
                        <textarea name="meta_description" cols="40" rows="5" placeholder="Meta Description"></textarea>
                    </div>
                    <div class="form-group">
                        {!! Form::label('status','Status') !!}<br>
                        {!! Form::radio('status',1) !!} Active<br>
                        {!! Form::radio('status',0,true) !!} Deactive<br>
{{--                        <input type="radio" name="status" value="1"> Enable<br>--}}
{{--                        <input type="radio" name="status" value="2" checked> Disable<br>--}}
                    </div>

                    <input type="hidden" value="{{auth()->user()->id}}" name="created_by">


                </div>
                <div class="card-footer">
                    {!! Form::submit('Save ' . $module,['class' => 'btn btn-success']) !!}
                    {!! Form::reset('Clear ' . $module,['class' => 'btn btn-danger']) !!}
{{--                    <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                    <button type="reset" class="btn btn-danger">Clear</button>--}}
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
@section('js')
    <script>
        $("#title").keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $("#slug").val(Text);
        });
    </script>
@endsection
