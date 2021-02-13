@extends('Layout.Master')

@section('title', 'Manage Article')

@section('content')

    <div class="container my-5" style="height: 46vw">
            <h1 class="display-4" style="font-weight: bolder">
                Manage Article
            </h1>
            <hr class="mb-5">

        @if($data['articles']->count() != 0)
            <form action="{{url('/article')}}" method="get" class="mb-3">
                <button class="btn btn-color-secondary text-color-light" type="submit" >
                    + Create Blog
                </button>
            </form>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data['articles'] as $article)
                        <tr>
                            <td>
                                <a href="{{url('article/'. $article->id)}}" class="link-color-secondary">
                                    {{$article->title}}
                                </a>
                            </td>
                            <td>
                                <form action="{{url('article/'.$article->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-danger">
                there are no articles
            </div>
        @endif
        @isset($success)
            <div class="alert alert-success">
                {{$success}}
            </div>
        @endisset
    </div>

@endsection

