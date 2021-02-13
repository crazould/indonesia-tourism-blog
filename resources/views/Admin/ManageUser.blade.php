@extends('Layout.Master')

@section('title', 'Manage User')

@section('content')

    <div class="container my-5" style="min-height: 48vw">
        @if($users->count() != 0)
        <h1 class="display-4" style="font-weight: bolder">
            All users with role {{$users[0]->role}}
        </h1>
        <hr class="mb-5 pb-5">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    @if($users[0]->role == 'user')
                        <th scope="col">Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @if($users[0]->role == 'user')
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                <form action="{{url('users/'.$user->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        @else
            <div class="alert alert-danger">
                there are no users
            </div>
        @endif
        @isset($success)
            <div class="alert alert-success">
                {{$success}}
            </div>
        @endisset
    </div>

@endsection

