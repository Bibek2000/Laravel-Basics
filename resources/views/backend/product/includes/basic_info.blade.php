<div class="card-body">
    <div class="form-group">
        {!!Form::label('categories_id ','Category')!!}
        {!!Form::select ('categories_id',$data['categories'],null,['class'=> 'form-control','placeholder'=> 'Select Category'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('subcategories_id ','Subcategory')!!}
        {!!Form::select ('subcategories_id',$data['subcategories'],null,['class'=> 'form-control', 'placeholder'=> 'Select Subcategory'])!!}
    </div>


    <div class="form-group">
        {!!Form::label('title','Title')!!}
        {!!Form::text ('title',null,['class'=> 'form-control','placeholder'=>'Title'])!!}
        @include('backend.includes.single_field_error',['field'=>'title'])
    </div>
    <div class="form-group">
        {!!Form::label('slug','Slug')!!}
        {!!Form::text ('slug',null,['class'=> 'form-control','placeholder'=>'Slug'])!!}
        @include('backend.includes.single_field_error',['field'=>'slug'])
    </div>
    <div class="form-group">
        {!!Form::label('rank','Rank')!!}
        {!!Form::number('rank',null,['class'=> 'form-control'])!!}
        @include('backend.includes.single_field_error',['field'=>'rank'])
    </div>

    <div class="form-group">
        {!!Form::label('price','Price')!!}
        {!!Form::number('price',null,['class'=> 'form-control'])!!}
        @include('backend.includes.single_field_error',['field'=>'price'])
    </div>

    <div class="form-group">
        {!!Form::label('discount','Discount')!!}
        {!!Form::number('discount',null,['class'=> 'form-control'])!!}
        @include('backend.includes.single_field_error',['field'=>'quantity'])
    </div>

    <div class="form-group">
        {!!Form::label('quantity','Quantity')!!}
        {!!Form::number('quantity',null,['class'=> 'form-control'])!!}
        @include('backend.includes.single_field_error',['field'=>'quantity'])
    </div>

    <div class="form-group">
        {!!Form::label('specification','Specification')!!}
        {!!Form::textarea('specification',null,['class'=> 'form-control', 'rows' => 5])!!}
        @include('backend.includes.single_field_error',['field'=>'specification'])
    </div>

    <div class="form-group">
        {!!Form::label('hot_key','Hot Product')!!} <br>
        {!! Form::radio('hot_key', 1) !!} Active<br/>
        {!! Form::radio('hot_key', 0, true) !!} Deactive<br/>
    </div>

    <div class="form-group">
        {!!Form::label('flash_key','Flash Product')!!} <br>
        {!! Form::radio('flash_key', 1) !!} Active<br/>
        {!! Form::radio('flash_key', 0, true) !!} Deactive<br/>
    </div>


    <div class="form-group">
        {!!Form::label('status','Status')!!} <br>
        {!! Form::radio('status', 1) !!} Active<br/>
        {!! Form::radio('status', 0, true) !!} Deactive<br/>
    </div>
</div>
    <div class="card-footer">
        {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
        {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!} <br>
    </div>
