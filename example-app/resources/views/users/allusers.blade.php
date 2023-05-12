@extends('layouts.main')

@section('title')
    <title>All Users</title>
@endsection

@section('content')


<div class="container">
       <h1 class="text-center">Olá, sou a lista de Utilizadores</h1>
       <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">password</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($allUsers as $item )


          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->password}}</td>
            <td><a href="{{route('show_user', $item->id)}}"><button class="btn btn-secondary">Ver</button></a>

                <a href="{{route('delete_user', $item->id)}}"><button class="btn btn-danger">Delete</button></a>
             </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a href="{{route('adduser')}}" type="button" class="btn btn-secondary btn-lg ">Adicionar Usuarios</a>
      @if (session('message'))
            <div class="alert alert-light">{{ session('message') }}</div>
        @endif
    </div>
        @endsection
