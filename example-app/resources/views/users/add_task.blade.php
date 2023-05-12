@extends('layouts.main')

@section('title')
    <title>Adicionar Task</title>
@endsection

@section('content')

<div class="container" style=" margin-top: 30px;
    background-color:#3D3D3D;

    ">
        <h1 class="text-center">Adicionar Tarefa</h1>
        <form method="POST" action="{{ route('create_user') }}">
            @csrf

         <div class="mb-3">
                <label for="exampleInputName1" class="form-label text-white">Nome:
                </label>
                <input name="name" type="text" value="" class="form-control" id="exampleInputName1"
                    aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label text-white">Descrição:</label>
                <input name="descricao" value="" type="text" class="form-control" id="descricao">
            </div>

            <div class="col-3 mb-3">
                <label for="formGroupExampleInput" class="form-label text-white">Responsavel:</label>
                <select class="custom-select" name="user_id">
                    <option value="" selected>Todos os contatos</option>
                    @foreach ($allUsers as $item )
                        <option value="{{$item->id}}">
                        {{$item->name}}
                        </option>


                    @endforeach
                </select>
              </div>




            <button type="submit" class="btn btn-secondary mb-3" >Submit</button>
            <button type="reset" class="btn btn-danger mb-3" >Clear</button>

        </form>

    </div>

@endsection
