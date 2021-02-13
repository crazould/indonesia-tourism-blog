@extends('Layout.Master')

@section('title', 'Profile')

@section('content')


    <div class="container my-5" style="height: 48vw">

        <h1 class="display-3" style="font-weight: bolder">Profile</h1>
        <hr class="mb-5">

        <form action="{{url('/users/'. \Illuminate\Support\Facades\Auth::id())}}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" name="name" class="form-control" placeholder="Enter your name here" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter your email here" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter your phone number here" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" required>
            </div>
            <button type="submit" class="btn btn-color-secondary btn-md my-4 text-color-light w-100">Update</button>
            @isset($success)
                <div class="alert alert-success">
                    {{$success}}
                </div>
            @endisset
        </form>

    </div>

@endsection
