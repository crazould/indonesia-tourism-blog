@extends('Layout.Master')

@section('title', 'Profile')

@section('content')


    <div class="container my-5" style="height: 48vh">

        <h1 class="display-3" style="font-weight: bolder">Profile</h1>
        <hr class="mb-5">

        <form action="{{url('/users/'. \Illuminate\Support\Facades\Auth::id())}}" method="post">

        </form>

    </div>

@endsection
