@extends('master')
@section('content')

<h1>
    Serviços - {{$servico->nome}}
</h1>


<form action="{{route('servicos.destroy', ['servico' =>$servico->id])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="delete" >
    <button type="submit">
        deletar
    </button>
    
    
</form>


@endsection