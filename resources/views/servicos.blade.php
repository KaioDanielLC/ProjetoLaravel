@extends('master')
@section('content')
    <h1>serviços</h1>
    <button >
        <a href="{{route('servicos.create')}}">
        criar
        </a>
    </button> 
    <ul>

        @foreach ($servicos as $servico )
        <li>
            {{$servico->nome}} | <a href="{{route('servicos.edit', ['servico' => $servico->id])}}">edit</a> | <a href="{{route('servicos.show',[$servico->id])}}">Show</a>
        </li>
    @endforeach
    </ul>
@endsection
<style>
    ul{
        list-style: none;
        margin: 0%;
        padding: 0%
    } 
    button{
        margin: 0 0 10px 0 
    }
</style>