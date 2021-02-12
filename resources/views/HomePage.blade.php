@extends('Layout.Master')

@section('title', 'Home')

@section('content')

    <div id="carouselExampleSlidesOnly" class="carousel slide" style="" data-ride="carousel">

        <div style="" class="carousel-content text-color-light">
            <div class="display-3" style="text-align: center">
                Wonderful Indonesia Tourism
            </div>
            <p class="lead" style="font-style: oblique">
                Number One Indonesia Tourism Blog in the world!
            </p>

            <form action="">
                <button class="btn btn-color-secondary btn-lg text-color-light">
                    Join Now!
                </button>
            </form>
        </div>

        <div class="carousel-inner ">
            <div class="carousel-item active" style="height: 46vw; ">
                <img class="d-block img-fluid media-slide" src="{{asset('storage/images/borobudur-temple.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item" style="height: 46vw;">
                <img class="d-block img-fluid media-slide" src="{{asset('storage/images/mount-bromo.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item" style="height: 46vw; ">
                <img class="d-block img-fluid media-slide" src="{{asset('storage/images/nusa-islands.jpg')}}" alt="Third slide">
            </div>
        </div>
    </div>

    <div style="height: 30vw;">
        <h1>home</h1>
    </div>


@endsection

