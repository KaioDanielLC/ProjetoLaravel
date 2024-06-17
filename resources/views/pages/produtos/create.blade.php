<x-app-layout>
    <div class="flex justify-center items-center" style="min-height: 85vh;">
        <div class="bg-primaria shadow-2xl w-1/5 p-10 rounded-lg">
            <div class="text-gray-200 text-3xl text-center min-w-full mb-4">
                Criar Produtos
            </div>
            <form action="{{route('produtos.store')}}" method="POST" class="grid  gap-4">
                @csrf
                <div class="grid gap-4 ">
                    <div>
                        <label for="nome" class="block mb-2 text-sm font-medium dark:text-white">Nome</label>
                        <input name="nome" id="nome" required type="text" class="focus:border-segundaria focus:ring-segundaria rounded-lg min-w-full bg-primaria text-white  ">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium dark:text-white" for="categoria_id">Categoria </label>
                        <select name="categoria_id" id="categoria_id" class="focus:border-segundaria focus:ring-segundaria rounded-lg min-w-full bg-primaria text-white min-w-full" >
                            @foreach ($categoria as $categorias )
                            <option value="{{$categorias->id}}">
                                {{$categorias->nome}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input type="submit" value="Criar" class="focus:outline-none text-white focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-botao dark:hover:bg-botaoHover dark:focus:ring-botao">
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>