<x-app-layout>
    <h1 class="text-center text-white text-3xl">
        Serviços - {{$servico->nome}}
    </h1>


    <form action="{{route('servicos.destroy', ['servico' =>$servico->id])}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="delete">
        <div class="text-center text-white text-xl mt-5">
            <a href="{{route('servicos.index')}}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-3 me-2 mb-2 dark:focus:ring-yellow-900">Cancelar</a>

            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-3 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                deletar
            </button>
        </div>



    </form>
</x-app-layout>