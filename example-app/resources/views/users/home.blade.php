
@extends('layouts.main')


@section('title')
    <title>Home</title>

@endsection

@section('content')


<div class="container">
    <div class="d-flex justify-content-center">
    <img  class="img-fluid " src="{{asset('assets\img\home.svg')}}" alt="">
</div>
</div>
{{--
<h1>Olá, estou em casa</h1>
<h1>vamos testar a minha variavel</h1>

<h2>{{$aMinhaVariavel}}</h2>

<ul>
    <li> {{$contacts['name']}} </li>
    <li>{{$contacts['email']}}</li>
</ul>

<ul>
    <li> {{$novocontato['name']}}</li>
    <li> {{$novocontato['adress']}}</li>
    <li> {{$novocontato['email']}}</li>
</ul>

--}}

@endsection
