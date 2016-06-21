@extends('admin.templates.master')

@section('title')
    Categories list
@endsection

@section('content')
<!-- BLOG BEGIN -->
<section id="blog">
<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
    <div class="panel-heading">Categories List</div>
        <div class="panel-body">
        <a href="{{route('categories.create')}}" class="btn btn-primary" title="">Add New</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Edit</th>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                        <?php $index = 1 ?>
                        @forelse($categories as $category)
                        <tr>
                            <td><a href="{{route('categories.edit',['id'=>$category->id])}}" title="">Edit</a></td>
                            <td>{{$index++}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                            {{ Form::open(array('route' => array('categories.destroy', $category->id), 'method' => 'delete')) }}
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

