@extends('layout.app')

@section('content')
    

<div class="container">
   
    
    <div class="row mt-5">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-header ">
                <h3 class="card-title">Users</h3>
                <a href="{{route('user.create')}}">
                    <button class="btn btn-success d-block mx-auto">Add a user</button>
                </a>
                <a href="{{route('genre.index')}}">
                        <button class="btn btn-success d-block mx-auto mt-3">See Genres</button>
                    </a>
        
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-wrap">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Users's pseudo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Action</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->pseudo}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>
                                <p>{{$user->genre->genre}}</p>
                            </td>
                            <td class="d-flex">
                                <a href="{{route('user.edit', $user->id)}}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <form action="{{route('user.destroy',$user->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                        <button class="btn btn-danger">Delete</button>
                                </form>
                                {{-- <a href="{{route('user.show', $user->id)}}">
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
@endsection