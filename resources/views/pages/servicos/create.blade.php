<x-app-layout>


    <div class="flex justify-center items-center" style="min-height: 85vh;">
        <div class="bg-primaria shadow-2xl w-3/6 p-10 rounded-lg">
            <div class="text-gray-200 text-3xl text-center min-w-full mb-4">
                Criar Serviços
            </div>
            <form action="{{route('servicos.store')}}" method="POST">
                @csrf
                <div class="grid gap-4 ">
                    <div>
                        <label for="nome" class="block mb-2 text-sm font-medium dark:text-white">Nome</label>
                        <input name="nome" id="nome" required type="text" class="focus:border-segundaria focus:ring-segundaria rounded-lg min-w-full bg-primaria text-white ">
                    </div>
                    <div> 
                        <label for="preco" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preço</label>
                        <input name="preco" id="preco" required type="number" class="focus:border-segundaria focus:ring-segundaria rounded-lg min-w-full bg-primaria text-white ">
                    </div>
                    <div>
                        <label for="tempo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempo</label>
                        <input name="tempo" id="tempo" type="number" required class="focus:border-segundaria focus:ring-segundaria rounded-lg min-w-full bg-primaria text-white ">
                    </div>
                    <div>
                        <input type="submit" value="Criar" required class="focus:outline-none text-white focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-botao dark:hover:bg-botaoHover dark:focus:ring-botao w-1/6">
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>