@extends('layouts.admin')



@section('content')


    <h1>Edit Post</h1>

    <div class="row">


        <div class="col-sm-2">

            <img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

        </div>


        <div class="col-sm-10">


            {!! Form::model($post,['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}


            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', $categories, $post->category_id, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Description:') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>5]) !!}
            </div>

            <div class="form-group col-sm-6 col-md-2">
                {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}



            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}

            <div class="form-group col-sm-6 col-md-2">
                {!! Form::submit('Delete user', ['class'=>'btn btn-danger']) !!}
            </div>

            {!! Form::close() !!}


        </div>


    </div>


    <div class="row">

        @include('includes.form_error')

    </div>




@stop



@section('footer')




@stop







