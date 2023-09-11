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
    @if (session('deletedWorker'))
        <div class="flex justify-center p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert"
            x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
            <svg class="inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="font-medium">Success alert!</span> {{ session('deletedWorker') }}
            </div>
        </div>
    @endif
    @if (session('updatedWorker'))
        <div class="flex justify-center p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert"
            x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
            <svg class="inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="font-medium">Success alert!</span> {{ session('updatedWorker') }}
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
                            <button type="submit"
                                class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                BUSCAR
                            </button>
                        </form>

                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="flex flex-row mb-5 items-between">
                            <form wire:submit="listAll">
                                <button type="submit"
                                    class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                    LISTAR TODOS LOS TRABAJADORES BORRADOS
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="container p-6 mx-auto font-mono justify-items-center">
            <div class="w-full p-6 mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <form wire:submit="listAll">
                        {{-- <input type="text" wire:model="listAll">
                        <button type="submit"
                            class="p-6 m-2 text-2xl uppercase duration-200 border border-black rounded-lg rounded-tr-none rounded-bl-none shadow-lg outline-none hover:shadow-xl hover:rounded-none">
                            LISTAR TODOS LOS TRABAJADORES</button>
                    </form>
                </div>
            </div>
        </section> --}}
    {{-- </div> --}}

    <section class="container p-6 mx-auto font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="font-semibold tracking-wide text-left text-gray-900 uppercase bg-gray-100 border-b border-gray-600 text-md">
                            <th class="px-4 py-3">NOMBRE y APELLIDOS</th>
                            <th class="px-4 py-3">DNI</th>
                            <th class="px-4 py-3">EMAIL</th>
                            <th class="px-4 py-3">DESTINO</th>
                            <th class="px-4 py-3">TALLA CAMISETA</th>
                            <th class="px-4 py-3">TALLA PANTALÓN</th>
                            <th class="px-4 py-3"># CALZADO</th>
                            <th class="px-4 py-3">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($trabajadors as $trabajador)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 border">
                                    <details class="group">
                                        <summary
                                            class="flex items-center justify-between font-medium list-none cursor-pointer">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                                    {{-- <img class="object-cover w-full h-full rounded-full"
                                                src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                                alt="" loading="lazy" /> --}}
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true">
                                                    </div>
                                                </div>
                                                <div>

                                                    <p class="font-semibold text-black">{{ $trabajador->name }}</p>
                                                    <p class="font-semibold text-black">{{ $trabajador->surname }}</p>

                                                    <svg fill="none" height="24"
                                                        shape-rendering="geometricPrecision" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                                        <path d="M6 9l6 6 6-6"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </summary>
                                        <h3 class="p-2 m-auto">ÚLTIMAS 3 UNIFORMIDADES ENTREGADAS</h3>
                                        <table class="w-full">
                                            <thead>
                                                <tr
                                                    class="font-semibold tracking-wide text-left text-gray-900 uppercase bg-gray-100 border-b border-gray-600 text-md">
                                                    <th class="px-4 py-3">UNIFORMIDAD</th>
                                                    <th class="px-4 py-3">FECHA ENTREGA</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($trabajador->uniformidads->take(3) as $uniformidad)
                                                    <tr class="text-gray-700">
                                                        <td class="px-4 py-3 font-semibold border text-ms">
                                                            {{ $uniformidad->type }} - {{ $uniformidad->talla }}
                                                            -{{ $uniformidad->color }}
                                                        </td>
                                                        <td class="px-4 py-3 font-semibold border text-ms">
                                                            {{ $uniformidad->pivot->created_at }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </details>
                                </td>
                                <td class="px-4 py-3 font-semibold border text-ms">{{ $trabajador->dni }}</td>
                                <td class="px-4 py-3 text-xs border">
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                        {{ $trabajador->email }} </span>
                                </td>
                                <td class="px-4 py-3 font-semibold border text-ms">{{ $trabajador->destiny }}</td>
                                <td class="px-4 py-3 font-semibold border text-ms">{{ $trabajador->tallaCamiseta }}
                                </td>
                                <td class="px-4 py-3 font-semibold border text-ms">{{ $trabajador->tallaPantalon }}
                                </td>
                                <td class="px-4 py-3 font-semibold border text-ms">{{ $trabajador->tallaCalzado }}
                                </td>
                                <td class="px-4 py-3 font-semibold border text-ms">

                                    <button type="button" wire:click="restore({{ $trabajador->id }})"
                                        class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm ring ring-indigo-200 ring-offset-2 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        RESTAURAR
                                    </button>

                                    <button type="button" wire:click="forceDelete({{ $trabajador->id }})"
                                        class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm ring ring-red-200 ring-offset-2 hover:bg-red-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        ELIMINAR
                                    </button>
                                    {{-- <button type="submit"
                                        class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium bg-red-600 border border-transparent rounded-md shadow-sm ring ring-red-200 ring-offset-2 hover:bg-red-800 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        BORRAR
                                    </button> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    {{-- {{ $trabajadors->links() }} --}}
</div>
