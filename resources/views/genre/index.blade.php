@extends('layout.app')

@section('content')
    

<div class="container">
   
    
    <div class="row mt-5">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-header ">
                <h3 class="card-title">Genre</h3>
                <a href="{{route('genre.create')}}">
                    <button class="btn btn-success d-block mx-auto mt-3">Add a genre</button>
                </a>

                <a href="{{route('user.index')}}">
                    <button class="btn btn-success d-block mx-auto mt-3">See Users</button>
                </a>
        
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-wrap">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Users</th>
                        <th scope="col">Action</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($genres as $genre)
                        <tr>
                            <td>{{$genre->id}}</td>
                            <td>{{$genre->genre}}</td>
                            <td>
                                @foreach ($genre->users as $user)
                                    <p>{{$user->pseudo}}</p>
                                @endforeach
                            </td>
      
                            <td class="d-flex">
                                <a href="{{route('genre.edit', $genre->id)}}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <form action="{{route('genre.destroy',$genre->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                        <button class="btn btn-danger">Delete</button>
                                </form>
                                {{-- <a href="{{route('genre.show', $genre->id)}}">
                                    <button class="btn btn-info">Show</button>
                                </a> --}}
                            </td>
                        </tr>
                        
                    @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>