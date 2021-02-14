@extends('Layout.Master')

@section('title', $data['article']->title)

@section('content')

    <div style="background-image: url('{{asset('storage/'.$data['article']->image)}}');
        height: 36vw;
        background-size: cover;
        background-position: bottom;
        background-attachment: fixed;
        ">
    </div>

    <div class="container" style="height: 800px;" >

        <h1 class="display-3 mt-5 pt-5 "
            style="font-weight: bolder; text-align: left;">
            {{$data['article']->title}}
        </h1>
        <hr class="mb-5">
        <p style="text-align: left">
            {{$data['article']->description}}
        </p>

        <button class="btn btn-color-secondary text-color-light btn-md" type="button" onclick="window.history.back();">
            <svg width="1rem" height="1rem" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
            </svg>
            Back
        </button>
    </div>


@endsection

