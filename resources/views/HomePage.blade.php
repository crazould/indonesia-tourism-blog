@extends('Layout.Master')

@section('title', 'Home')

@section('content')

    <div id="carouselExampleSlidesOnly" class="carousel slide" style="" data-ride="carousel">

        <div style="" class="carousel-content text-color-light">
            <div class="display-4" style="text-align: center">
                WONDERFUL INDONESIA TOURISM
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

        <div class="carousel-inner">
            @foreach($data['articles'] as $key  => $article)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}" style="height: 46vw; ">
                    <img class="d-block img-fluid media-slide" src="{{asset('storage/'.$article->image)}}" alt="First slide">
                </div>
            @endforeach
        </div>

    </div>

    <div style="" class="container my-5">
            @foreach($data['articles'] as $key  => $article)
                @if(($key) % 3 == 0)
                    <div style="display: flex; justify-content: center" class="mb-5 row">
                @endif
                        <div class="col">
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top" src="{{asset('storage/'.$article->image)}}" height="230px" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-weight: bold">{{$article->title . ' ' . $key}} </h5>
                                    <p class="card-text" id="card-text">{{ substr($article->description, 0 ,100) . ' ...' }}</p>
                                    <a href="#" class="btn btn-color-secondary btn-md text-color-light">Read more</a>
                                </div>
                            </div>
                        </div>
                @if(($key+1) % 3 == 0)
                    </div>
                @endif
            @endforeach
    </div>

@endsection

