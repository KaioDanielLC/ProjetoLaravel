<x-app-layout>
    <h1 class="text-gray-400 text-3xl bg-gray-800 h-16  flex items-center justify-center">serviços</h1>

    @if (session()->has('message'))
    <div class="flex justify-center mt-10">
        <div id="alert-additional-content-3" class="flex justify-between p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800 w-1/5" role="alert">
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
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 text-center ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$servico->nome}}
                        </th>
                        <td class="px-6 py-4">
                            {{$servico->tempo}} Horas
                        </td>
                        <td class="px-6 py-4">
                            ${{$servico->preco}}
                        </td>
                        <td class="px-6 py-4 ">
                            <a class="text-green-700 hover:text-green-500" href="{{route('servicos.edit', ['servico' => $servico->id])}}">Edit</a> | <a class="text-green-700 hover:text-green-500" href="{{route('servicos.show',[$servico->id])}}">Show</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <button class="focus:outline-none text-white focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-green-800 dark:hover:bg-green-700 dark:focus:ring-green-800 ms-44 my-5">
        <a href="{{route('servicos.create')}}">
            criar
        </a>
    </button>


</x-app-layout>


