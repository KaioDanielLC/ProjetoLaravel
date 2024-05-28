<x-app-layout>

    <h1 class="text-gray-200 text-3xl text-center">
        Criar Produto
    </h1>
    

    <div class="flex justify-center items-center ">
        <form action="{{route('servicos.store')}}" method="POST" class="grid grid-rows-4 gap-4 w-1/5">
            @csrf
            <input name="nome" placeholder="nome" required type="text" class="rounded-lg">
            <input name="preco" placeholder="preço" required type="number" class="rounded-lg ">
            <input name="tempo" placeholder="tempo" required type="number" class="rounded-lg">
            <div class="text-center">
                <input type="submit" value="Criar" class="focus:outline-none text-white focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-800 dark:hover:bg-green-700 dark:focus:ring-green-800 w-1/2">
            </div>
        </form>

    </div>

</x-app-layout>