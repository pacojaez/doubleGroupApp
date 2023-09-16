<div>
    @if (session('uniformidadAddedToWorker'))
        <div class="flex justify-center p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert"
            x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
            <svg class="inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="font-medium">Success alert!</span> {{ session('uniformidadAddedToWorker') }}
            </div>
        </div>
    @endif
    @if (session('updatedUniformidad'))
        <div class="flex justify-center p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert"
            x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
            <svg class="inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="font-medium">Success alert!</span> {{ session('updatedUniformidad') }}
            </div>
        </div>
    @endif
    <section class="container p-2 mx-auto font-mono justify-items-center">
        <div class="flex items-center justify-center p-12">
            <div class="mx-auto w-full max-w-[800px]">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3 sm:w-1/2">
                        <form wire:submit="search" class="flex flex-row mb-5 items-between">
                            <input type="text" wire:model="query" name="fName" id="fName"
                                placeholder="Búsqueda por nombre"
                                class="w-full rounded-md m-4 border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <div class="flex flex-col w-full h-full mt-5">
                                <button type="submit"
                                    class="px-5 py-3 mb-3 text-base font-medium text-white transition duration-200 bg-blue-500 rounded-full hover:bg-blue-600 active:bg-blue-700">
                                    BUSCAR
                                </button>
                            </div>
                        </form>

                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="flex flex-row mb-5 items-between">
                            <form wire:submit="listAll">

                                <div type="submit" class="flex flex-col w-full h-full mt-5">
                                    <button type="submit"
                                        class="px-5 py-3 mb-3 text-base font-medium text-white transition duration-200 bg-blue-500 rounded-full hover:bg-blue-600 active:bg-blue-700">
                                        LISTAR TODAS LAS UNIFORMIDADES
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="relative flex items-center justify-center w-full h-20 px-8 mx-auto mt-10 bg-black ">
        <section class="container p-6 mx-auto font-mono justify-items-center">
            <div class="w-full p-6 mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <form wire:submit="search">
                        <input type="text" wire:model="query" placeholder="Busqueda por NOMBRE">
                        <button
                            class="p-6 m-2 text-2xl uppercase duration-200 border border-black rounded-lg rounded-tr-none rounded-bl-none shadow-lg outline-none hover:shadow-xl hover:rounded-none">
                            BUSCAR</button>
                    </form>
                </div>
            </div>
        </section>
        <section class="container p-6 mx-auto font-mono justify-items-center">
            <div class="w-full p-6 mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <form wire:submit="listAll">
                        {{-- <input type="text" wire:model="listAll">
                        <button type="submit"
                            class="p-6 m-2 text-2xl uppercase duration-200 border border-black rounded-lg rounded-tr-none rounded-bl-none shadow-lg outline-none hover:shadow-xl hover:rounded-none">
                            LISTAR TODAS LAS UNIFORMIDADES</button>
                    </form>
                </div>
            </div>
        </section>
    </div> --}}
    <section class="container p-6 mx-auto font-mono">

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="font-semibold tracking-wide text-left text-gray-900 uppercase bg-gray-100 border-b border-gray-600 text-md">
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">TIPO</th>
                            <th class="px-4 py-3">DESCRIPCIÓN</th>
                            <th class="px-4 py-3">COLOR</th>
                            <th class="px-4 py-3">TALLA</th>
                            <th class="px-4 py-3">STOCK</th>
                            <th class="px-4 py-3">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($uniformidads as $uniformidad)
                            <tr @class([
                                'p-4',
                                // 'font-bold' => $uniformidad->stock > 5,
                                'font-semibold' => $uniformidad->stock > 0,
                                'italic' => $uniformidad->stock > 5,
                                'text-gray-500' => $uniformidad->stock == 0,
                                'bg-red-300' => $uniformidad->stock == 0,
                            ])>
                                <td class="px-4 py-3 border">
                                    <details class="group">
                                        <summary
                                            class="flex items-center justify-between font-medium list-none cursor-pointer">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold text-black">{{ $uniformidad->name }}</p>
                                                    {{-- <svg fill="none" height="24"
                                                        shape-rendering="geometricPrecision" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                                        <path d="M6 9l6 6 6-6"></path>
                                                    </svg> --}}
                                                </div>
                                            </div>
                                        </summary>
                                        {{-- @foreach ($uniformidads as $uniformidad)
                                            <p class="mt-3 text-neutral-600 group-open:animate-fadeIn">
                                                {{ $uniformidad->type }} - {{ $uniformidad->created_at }}
                                            </p>
                                        @endforeach --}}
                                    </details>
                                </td>
                                <td class="px-4 py-3 font-semibold border text-ms">{{ $uniformidad->type }}</td>
                                {{-- <td class="px-4 py-3 text-xs border">
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                        {{ $trabajador->email }} </span>
                                </td> --}}
                                <td class="px-4 py-3 font-semibold border text-ms">{{ $uniformidad->description }}</td>
                                <td class="px-4 py-3 font-semibold border text-ms">{{ $uniformidad->color }}</td>
                                <td class="px-4 py-3 font-semibold border text-ms">{{ $uniformidad->talla }}</td>
                                <td class="px-4 py-3 font-semibold border text-ms">{{ $uniformidad->stock }}</td>
                                <td class="px-4 py-3 font-semibold border text-ms">
                                    <a href="{{ route('update-uniformidad', ['id' => $uniformidad->id]) }}">
                                        <button type="button"
                                            class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm ring ring-indigo-200 ring-offset-2 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                                            EDITAR
                                        </button>
                                    </a>
                                    {{-- <button type="submit"
                                        class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium bg-red-600 border border-transparent rounded-md shadow-sm ring ring-red-200 ring-offset-2 hover:bg-red-800 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        BORRAR
                                    </button> --}}
                                </td>
                                {{-- <td class="px-4 py-3 font-semibold border text-ms">{{ $trabajador->tallaCalzado }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
