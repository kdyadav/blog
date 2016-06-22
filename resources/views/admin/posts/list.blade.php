@extends('admin.templates.master')

@section('title')
    Post list
@endsection

@section('content')
<!-- BLOG BEGIN -->
<section id="blog">
<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
    <div class="panel-heading">Posts List</div>
        <div class="panel-body">
        <a href="{{route('posts.create')}}" class="btn btn-primary" title="">Add New</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Edit</th>
                        <th>Sr No.</th>
                        <th>Title</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                        <?php $index = 1 ?>
                        @forelse($posts as $post)
                        <tr>
                            <td><a href="{{route('posts.edit',['id'=>$post->id])}}" title="">Edit</a></td>
                            <td>{{$index++}}</td>
                            <td>{{$post->title}}</td>
                            <td>
                            {{ Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'delete')) }}
                                    <button type="submit" >Delete</button>
                            {{ Form::close() }}

                            </td>
                        </tr>
                        @empty
                            <td colspan="4">{{"No Record Found"}}</td>
                        @endforelse
                </tbody>
            </table>
        </div>
    </div>
    </div>                
    </div>
</div>
</section>
<!-- BLOG END -->

@endsection

