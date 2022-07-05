<div class="card-body">
    <div class="form-group">
        {!!Form::label('categories_id ','Category')!!}
        {!!Form::select ('categories_id',$data['categories'],null,['class'=> 'form-control'])!!}
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
        {!!Form::number('rank',null,['class'=> 'form-control','placeholder'=>'Rank'])!!}
        @include('backend.includes.single_field_error',['field'=>'rank'])
    </div>
    <div class="form-group">
        {!!Form::label('image','Image')!!}
        {!!Form::file('image',null,['class'=> 'form-control','placeholder'=>'Image'])!!}

    </div>
    <div class="form-group">
        {!!Form::label('meta_title','Meta Title')!!}
        {!!Form::text('meta_title',null,['class'=> 'form-control','placeholder'=>'Meta Title'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('meta_keyword','Meta Keyword')!!}
        {!!Form::text('meta_keyword',null,['class'=> 'form-control','placeholder'=>'Meta Keyword'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('meta_description','Meta Description')!!}
        {!!Form::textarea('meta_description',null,['class'=> 'form-control','placeholder'=>'Meta Description'])!!}

        <br>
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
