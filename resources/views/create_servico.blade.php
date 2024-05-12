@extends('master')
@section('content')

<h1>
    Criar Produto
</h1>
@if (session()->has('message'))
    <h1>{{session()->get('message')}}</h1>
        
 @endif 

<form action="{{route('servicos.store')}}" method="POST">
    @csrf
    <input name="nome" placeholder="nome" type="text">
    <input name="preco" placeholder="preço" type="number">
    <input name="tempo" placeholder="tempo" type="number">
    <input type="submit" value="Criar">
</form>


@endsection