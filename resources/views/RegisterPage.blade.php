@extends('Layout.Master')

@section('title', 'Sign Up')

@section('content')


    <div class="container-fluid my-3" style="display: flex; justify-content: center;" >
        <div class="card my-5 " style="width: 28vw">
            <div class="card-body">
                <h2 class="card-title my-4" style="text-align: center"> <b>Sign Up</b> </h2>
                <form action="{{url('/register')}}" method="post">
                    {{@csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" name="name" class="form-control" placeholder="Enter your name here" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter your email here" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password here" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter your phone number here" required>
                    </div>
                    <button type="submit" class="btn btn-color-secondary btn-md my-4 text-color-light w-100">Sign Up</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @isset($success)
                    <div class="alert alert-success">
                        {{$success}}
                    </div>
                @endisset
            </div>
        </div>
    </div>

@endsection
