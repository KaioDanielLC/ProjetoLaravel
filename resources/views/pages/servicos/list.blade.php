<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-300 leading-tight">
            {{ __('Serviços') }}
        </h2>
    </x-slot>

    @if (session()->has('message'))
    <div class="flex justify-center mt-10">
        <div id="alert-additional-content-3" class="flex justify-between p-4 mb-4 t border rounded-lg dark:bg-fundo dark:text-segundaria dark:border-segundaria w-1/5" role="alert">
            <div class="flex items-center">
                <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>

                <h3 class="text-lg font-medium">{{session()->get('message')}}</h3>
            </div>

        </div>
    </div>

    @endif



    <div class=" flex justify-center ">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10 w-5/6">
            <table class="w-full text-sm dark:text-gray-200  text-center ">
                <thead class="text-xs uppercase dark:bg-primaria dark:text-segundaria">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nome
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tempo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Preço
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acão
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($servicos as $servico )
                    <tr class=" odd:dark:bg-[#303030] even:dark:bg-primaria ">
                        <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                            {{$servico->nome}}
                        </th>
                        <td class="px-6 py-4">
                            {{$servico->tempo}} Horas
                        </td>
                        <td class="px-6 py-4">
                            ${{number_format($servico->preco ,2 , "," ,".")}}
                        </td>
                        <td class="px-6 py-4 ">
                            <a class="text-gray-100 hover:text-segundaria" href="{{route('servicos.edit', ['servico' => $servico->id])}}">Edit</a> | <a class="text-gray-100 hover:text-segundaria" href="{{route('servicos.show',[$servico->id])}}">Show</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <button class="focus:outline-none text-white focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-botao dark:hover:bg-botaoHover dark:focus:ring-segundaria ms-44 my-5">
        <a href="{{route('servicos.create')}}">
            criar
        </a>
    </button>


</x-app-layout>