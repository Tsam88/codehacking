@extends('layouts.admin')




@section('content')


    @if(Session::has('deleted_user'))
        <div class="row"><p class="alert alert-danger col-lg-12 ">{{session('deleted_user')}}</p></div>
    @elseif(Session::has('updated_user'))
        <div class="row"><p class="alert alert-success col-lg-12 ">{{session('updated_user')}}</p></div>
    @elseif(Session::has('created_user'))
        <div class="row"><p class="alert alert-success col-lg-12 ">{{session('created_user')}}</p></div>
    @endif


    <div class="row">
        <h1>Users</h1>
    </div>


    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)

                <tr>
                    <td>{{$user->id}}</td>
                    <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-rounded"></td>
                    <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    {{--If the user is active (is equal to 1) display 'Active'.--}}
                    {{--If is not (that is what the ":" says) then display 'Not Active'.--}}
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>








@stop






@section('footer')




@stop
