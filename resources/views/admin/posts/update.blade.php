@extends('admin.templates.master')

@section('title')
    - Blog Home
@endsection

@section('content')
<!-- BLOG BEGIN -->
<section id="blog">
<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
    <div class="panel-heading">Create New Post</div>
        <div class="panel-body">
        {!! Form::open(array( 'route' => array('posts.update',$post->id),'id'=>'post-form','method'=>'put')) !!}
            
            <div class="form-group">
                {!! Form::label('title') !!}
                {!! Form::text( 'title', $post->title, array( 'class'=>'form-control' ) ) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category') !!}
                <select name="category" class="form-control">
                    <option value="">SELECT</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->name }}" {{$category->name==$post->category?"Selected":""}}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                {!! Form::label('Tags') !!}
                {!! Form::text( 'tags', $post->tags , array( 'class'=>'form-control','id'=>'myTags' ) ) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Body') !!}
                {!! Form::textarea('body',$post->body, array('class'=>'form-control','size'=>'50x3')) !!}
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

