
@extends('layouts.main')


@section('title')
    <title>Todas as tarefas</title>
@endsection

@section('content')

<div class="container">
    <h1 class="text-center">Aqui podem ver tarefas</h1>
    <table class="table table-dark table-striped">
     <thead>
       <tr >
         <th scope="col"></th>
         <th scope="col">Name</th>
         <th scope="col">Descrição</th>
         <th scope="col">Status</th>


         <th scope="col">Pessoa Responsavel</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody class="table-group-divider">
         @foreach ($task as $item )


       <tr >
         <th scope="row">{{$item->id}}</th>
         <td>{{$item->name}}</td>
         <td>{{$item->description}}</td>
         <td>{{$item->status}}</td>
         <td>{{$item->usname}}</td>
         <td><a href="{{route('show_task', $item->id)}}"><button class="btn btn-secondary">Ver</button></a>

            <a href="{{route('delete_task', $item->id)}}"><button class="btn btn-danger">Delete</button></a>
         </td>
       </tr>
       @endforeach
     </tbody>
   </table>
 </div>

@endsection
