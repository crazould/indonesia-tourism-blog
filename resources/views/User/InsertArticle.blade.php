@extends('Layout.Master')

@section('title', 'Create Article')

@section('content')

    <div class="container my-5" style="height: 48vw">
        <h1 class="display-4" style="font-weight: bolder">Create Article</h1>
        <hr class="mb-5">

        <form action="{{url('/article')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter article title here" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="categories" id="category" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="photo" name="image" required>
                <label for="photo" class="custom-file-label">Photo</label>
            </div>
            <div class="form-group">
                <label for="story">Story</label>
                <textarea class="form-control" name="description" id="story" required rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-color-secondary btn-md my-4 text-color-light w-100">Create</button>
            @isset($success)
                <div class="alert alert-success">
                    {{$success}}
                </div>
            @endisset
        </form>
    </div>

@endsection
