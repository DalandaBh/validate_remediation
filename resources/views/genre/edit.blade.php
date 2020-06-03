@extends('layout.app')

@section('content')
    <h1 class="text-center mt-5">Edit a genre</h1>

    <form action="{{route('genre.update',$genre->id)}}" method="post">
            @csrf
            @method('put')
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" class="form-control @error('genre') is-invalid @enderror" id="" value="{{$genre->genre}}">
            @error('genre')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
     
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection