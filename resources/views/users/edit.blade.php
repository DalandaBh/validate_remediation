@extends('layout.app')

@section('content')
    <h1 class="text-center mt-5">Edit a user</h1>

    <form action="{{route('user.update',$user->id)}}" method="post">
            @csrf
            @method('put')
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" class="form-control @error('pseudo') is-invalid @enderror" id="" value="{{$user->pseudo}}">
            @error('pseudo')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="" value="{{$user->email}}">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="" value="{{$user->password}}">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
      
        <div class="form-group">
            <label for="genre_id">Genre</label>
            <select class="form-control" name="genre_id">
                @foreach ($genres as $genre)
                    <option value="{{$genre->id}}">{{$genre->genre}}</option>
                @endforeach
            </select>
        </div>
   
     
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection