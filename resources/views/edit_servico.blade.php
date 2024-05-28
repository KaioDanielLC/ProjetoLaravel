









<x-app-layout>

    <h1 class="text-gray-200 text-3xl text-center">
        Atualizar Produto
    </h1>


    <div class="flex justify-center items-center ">
        <form action="{{route('servicos.update' , ['servico' => $servico->id])}}" method="post" class="grid grid-rows-4 gap-4 w-1/5">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input value="{{$servico->nome}}" name="nome" type="text" class="rounded-lg">
            <input value="{{$servico->tempo}}" name="tempo" type="number" class="rounded-lg">
            <input value="{{$servico->preco}}" name="preco" type="number" class="rounded-lg">
            <div class="text-center">
                <input type="submit" value="Criar" class="focus:outline-none text-white focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-800 dark:hover:bg-green-700 dark:focus:ring-green-800 w-1/2">
            </div>
        </form>

    </div>

</x-app-layout>