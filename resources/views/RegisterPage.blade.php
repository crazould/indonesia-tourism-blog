@extends('Layout.Master')

@section('title', 'Login')

@section('content')


    <div class="container-fluid my-3" style="display: flex; justify-content: center; height: 80vh" >
        <div class="card my-5 " style="width: 25vw">
            <div class="card-body">
                <h2 class="card-title my-5" style="text-align: center"> <b>Sign Up</b> </h2>
                <form>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter your email here">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter your password here">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" placeholder="Enter your phone number here">
                    </div>
                    <button type="submit" class="btn btn-color-secondary btn-md mt-3 text-color-light w-100">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

@endsection
