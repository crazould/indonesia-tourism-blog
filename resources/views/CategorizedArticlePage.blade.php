@extends('Layout.Master')

@section('title', $data['articles'][0]->category->name.' Category')

@section('content')


    <div style="" class="container my-5">

        <h1 class="display-3" style="font-weight: bolder"> {{$data['articles'][0]->category->name . ' Category' }}</h1>
        <hr class="mb-5">

        @foreach($data['articles'] as $key  => $article)
            @if(($key) % 3 == 0)
                <div style="display: flex; justify-content: center" class="mb-5 row">
                    @endif
                    <div class="col">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="{{asset('storage/'.$article->image)}}" height="230px" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: bold">{{$article->title}} </h5>
                                <p class="card-text" id="card-text">{{ substr($article->description, 0 ,100) . ' ...' }}</p>
                                <a href="{{url('/article/'.$article->id)}}" class="btn btn-color-secondary btn-md text-color-light">Read more</a>
                            </div>
                        </div>
                    </div>
                    @if(($key+1) % 3 == 0)
                </div>
            @endif
        @endforeach
    </div>
@endsection
