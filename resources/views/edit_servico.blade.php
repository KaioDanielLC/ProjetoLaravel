@extends('master')
@section('content')
    <h1>edit</h1>
    @if (session()->has('message'))
    <h1>{{session()->get('message')}}</h1>
        
    @endif 
    
    
    </button>
    

    <form action="{{route('servicos.update' , ['servico' => $servico->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT" >
        <input value="{{$servico->nome}}" name="nome" type="text">
        <input value="{{$servico->tempo}}" name="tempo" type="number">
        <input value="{{$servico->preco}}" name="preco" type="number">
        <button type="submit">atualizar</button>
    </form>
@endsection