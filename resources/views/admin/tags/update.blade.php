@extends('admin.templates.master')

@section('title')
    Edit Tag
@endsection

@section('content')
<!-- BLOG BEGIN -->
<section id="blog">
<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
    <div class="panel-heading">Edit Tag</div>
        <div class="panel-body">
        {!! Form::open(array( 'route' => array('tags.update',$tag->id),'id'=>'category-form','method'=>'put')) !!}
            
            <div class="form-group">
                {!! Form::label('Name') !!}
                {!! Form::text( 'name', $tag->name, array( 'class'=>'form-control' ) ) !!}
            </div>
   
            {!! Form::token() !!}

            <div class="form-group">
                {!! Form::submit("Update",array('class'=>'btn btn-default') ) !!}
            </div>
        {!! Form::close() !!}
        </div>
    </div>
    </div>                
    </div>
</div>
</section>
<!-- BLOG END -->
@endsection

