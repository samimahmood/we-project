@extends('layouts.admin')

@section('page-header')

    Users

@stop


@section('content')

    @if(Session::has('deleted_user'))

        <p class="bg-danger">{{session('deleted_user')}}</p>

    @endif

    @if(Session::has('edited_user'))

        <p class="bg-success">{{session('edited_user')}}</p>

    @endif

    @if(Session::has('created_user'))

        <p class="bg-success">{{session('created_user')}}</p>

    @endif


    <table class="table table-hover">
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
               <td><img height="50" src="{{$user->photo ? $user->photo->file : '/images/placeholder.jpg'}}" alt=""></td>
               <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
               <td>{{$user->email}}</td>
               <td>{{$user->role->name}}</td>
               <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
               <td>{{$user->created_at->diffForHumans()}}</td>
               <td>{{$user->updated_at->diffForHumans()}}</td>


           </tr>

           @endforeach


        @endif


        </tbody>
    </table>



@stop