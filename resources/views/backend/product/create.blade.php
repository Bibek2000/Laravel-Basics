 @extends('layouts.backend') @section('title','Product') @section('content')
<!-- Content Header (Page header) -->
@include('backend.includes.breadcrumb')

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Product</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
            </div>
        </div>
        {!!Form::open(['route' => [$base_route.'store'],'method'=>'post'])!!}
            <div class="card-body">
                <div class="card">
                    <div class="card-header d-flex p-0">
                        <h3 class="card-title p-3">Product Details</h3>
                        <ul class="nav nav-pills ml-auto p-2">
                            <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Basic Info</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Meta Info</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Image</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Attribute</a></li>
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">--}}
{{--                                    Dropdown <span class="caret"></span>--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu">--}}
{{--                                    <a class="dropdown-item" tabindex="-1" href="#">Action</a>--}}
{{--                                    <a class="dropdown-item" tabindex="-1" href="#">Another action</a>--}}
{{--                                    <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>--}}
{{--                                    <div class="dropdown-divider"></div>--}}
{{--                                    <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                @include($base_view.'includes.basic_info',['button'=>'Save'])
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                                @include($base_view.'includes.meta')
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">
                                @include($base_view.'includes.image')
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_4">
                                @include($base_view.'includes.attribute')
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                    <div class="card-footer">
                        <button class="btn btn-success">Save Product</button>
                    </div>
                </div>
                <!-- ./card -->
            </div>
{{--                <div class="form-group">--}}
{{--                    <label for="title">Product</label>--}}
{{--                    <select class="form-control" id="product" name="title">--}}
{{--                        @foreach($data['products'] as $record)--}}
{{--                        <option>{{$record->title}}</option>--}}
{{--                        @endforeach--}}

{{--                    </select>--}}
{{--                </div>--}}
{{--                <input type="hidden" value="{{auth()->user()->id}}" name="created_by">--}}
        {{Form::close()}}

        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection @section('js')
<script>
    $("#title").keyup(function() {
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
        $("#slug").val(Text);
    });
</script>
@endsection
