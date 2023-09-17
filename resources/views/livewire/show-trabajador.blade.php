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
    <section class="container p-6 mx-auto font-mono">
        <div class="w-full mb-2 overflow-hidden bg-gray-400 rounded-lg shadow-lg">
            <div class="flex justify-center w-full overflow-x-auto">
                <h2 class="p-2 m-4 text-2xl font-bold">TRABAJADOR</h2>
            </div>
        </div>
    </section>
    <section class="container p-6 mx-auto font-mono bg-gray-400 rounded-lg shadow-lg">
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
                                                <p class="font-semibold text-black">{{ $trabajador->surname }}
                                                </p>
                                            </div>
                                        </div>
                                    </summary>
                                </details>
                            </td>
                            <td class="px-4 py-3 font-semibold border text-ms">{{ $trabajador->dni }}</td>
                            <td class="px-4 py-3 text-xs border">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                    {{ $trabajador->email }} </span>
                            </td>
                            <td class="px-4 py-3 font-semibold border text-ms">{{ $trabajador->destiny }}</td>
                            <td class="px-4 py-3 font-semibold border text-ms">{{ $trabajador->tallaCamiseta }}</td>
                            <td class="px-4 py-3 font-semibold border text-ms">{{ $trabajador->tallaPantalon }}
                            </td>
                            <td class="px-4 py-3 font-semibold border text-ms">{{ $trabajador->tallaCalzado }}</td>
                            <td class="px-4 py-3 font-semibold border text-ms">
                                <a href="{{ route('update-trabajador', ['id' => $trabajador->id]) }}">
                                    <button type="button"
                                        class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm ring ring-indigo-200 ring-offset-2 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        EDITAR
                                    </button>
                                </a>
                                <a href="{{ route('delete-trabajador', ['id' => $trabajador->id]) }}">
                                    <button type="button"
                                        class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm ring ring-red-200 ring-offset-2 hover:bg-red-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        BORRAR
                                    </button>
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="container p-6 mx-auto font-mono">
        <div class="w-full mb-2 overflow-hidden bg-gray-200 rounded-lg shadow-lg">
            <div class="flex justify-center w-full overflow-x-auto">
                <h2 class="p-2 m-4 text-2xl font-bold">UNIFORMIDADES ENTREGADAS AL TRABAJADOR</h2>
            </div>
        </div>
    </section>
    <section class="container p-6 mx-auto font-mono bg-gray-200 rounded-lg shadow-lg">
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
                            <th class="px-4 py-3">ENTREGADA</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($uniformidads as $uniformidad)
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
                                <td class="px-4 py-3 font-semibold border text-ms">
                                    {{ $uniformidad->pivot->created_at }}
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
