@extends('admin.templates.master')

@section('title')
    Update image
@endsection

@section('content')
<!-- BLOG BEGIN -->
<section id="blog">
<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
    <div class="panel-heading">Update Image</div>
        <div class="panel-body">
        {!! Form::open(array( 'route' => array('images.update',$image->id),'id'=>'category-form','method'=>'put')) !!}
            
            <div class="form-group">
                {!! Form::label('Title') !!}
                {!! Form::text( 'title', $image->title, array( 'class'=>'form-control' ) ) !!}
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

