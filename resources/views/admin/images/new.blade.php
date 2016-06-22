@extends('admin.templates.master')

@section('title')
    Upload Image
@endsection

@section('content')
<!-- BLOG BEGIN -->
<section id="blog">
<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
    <div class="panel-heading">Upload New Image</div>
        <div class="panel-body">
        {!! Form::open(array( 'route' => 'images.store','id'=>'category-form')) !!}
            
            <div class="form-group">
                {!! Form::label('Title') !!}
                {!! Form::text( 'title', null, array( 'class'=>'form-control' ) ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('For POST') !!}
                <select name="post_id" class="form-control">
                    <option value="">SELECT</option>
                    @foreach ($posts as $post)
                    <option value="{{ $post->id }}">{{ $post->id }}. {{ $post->title }}</option>
                    @endforeach
                </select>
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

