@extends('Layout.Master')

@section('title', 'About Us')

@section('content')

    <div class="container my-5" style="min-height: 48vw">
        <h1 class="display-4" style="font-weight: bolder">
            About Us
        </h1>
        <hr class="mb-5 ">

        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <img class="image-fluid w-25 mb-4" src="{{asset('storage/images/profile.jpg')}}" alt="">
            <h5 class="" style="text-align: center">
                <i>
                    This website created by <br>
                    <b>Name: Muhammad At Thariq Filardi</b>  <br>
                    <b>NIM: 2201829035</b>
                </i>
            </h5>
        </div>

    </div>

@endsection
