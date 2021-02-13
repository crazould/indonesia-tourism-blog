@extends('Layout.Master')

@section('title', 'Login')

@section('content')

    <div class="container-fluid my-3" style="display: flex; justify-content: center; height: 80vh" >
        <div class="card my-5 " style="width: 25vw">
            <div class="card-body">
                <h2 class="card-title my-5" style="text-align: center">
                    <b>
                        Login
                    </b>
                </h2>
                <form action="{{url('/login')}}" method="post">
                    {{@csrf_field()}}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter your email here" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password here" required>
                    </div>
                    <button type="submit" class="btn btn-color-secondary btn-md mt-4 mb-2 text-color-light w-100" >
                        Login
                    </button>
                </form>

                @isset($error)
                    <div class="alert alert-danger mt-4" style="font-size: small">
                        {{ $error }}
                    </div>
                @endisset

            </div>
        </div>
    </div>


@endsection
