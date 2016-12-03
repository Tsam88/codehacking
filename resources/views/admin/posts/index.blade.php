@extends('layouts.admin')



@section('content')

    @if(Session::has('deleted_post'))
        <div class="row"><p class="alert alert-danger col-lg-12 ">{{session('deleted_post')}}</p></div>
    @elseif(Session::has('updated_post'))
        <div class="row"><p class="alert alert-success col-lg-12 ">{{session('updated_post')}}</p></div>
    @elseif(Session::has('created_post'))
        <div class="row"><p class="alert alert-success col-lg-12 ">{{session('created_post')}}</p></div>
    @endif


    <div class="row">
        <h1>Posts</h1>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Owner</th>
                <th>Category</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)

                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" src="{{$post->photo_id ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach

        @endif
        </tbody>
    </table>



@stop