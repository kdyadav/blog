@extends('admin.templates.master')

@section('title')
    Create New Tag
@endsection

@section('content')
<!-- BLOG BEGIN -->
<section id="blog">
<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
    <div class="panel-heading">Create New Tag</div>
        <div class="panel-body">
        {!! Form::open(array( 'route' => 'tags.store','id'=>'category-form')) !!}
            
            <div class="form-group">
                {!! Form::label('Name') !!}
                {!! Form::text( 'name', null, array( 'class'=>'form-control' ) ) !!}
            </div>
   
            {!! Form::token() !!}

            <div class="form-group">
                {!! Form::submit("Create",array('class'=>'btn btn-default') ) !!}
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

