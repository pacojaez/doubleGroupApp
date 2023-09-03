<div>
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
                                                <a href="{{ route('show-trabajador', ['id' => $trabajador->id]) }} ">
                                                    <p class="font-semibold text-black">{{ $trabajador->name }}</p>
                                                    <p class="font-semibold text-black">{{ $trabajador->surname }}
                                                    </p>
                                                </a>
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
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="container p-6 mx-auto font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <h2>UNIFORMIDADES ENTREGADAS AL TRABAJADOR</h2>
            </div>
        </div>
    </section>


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
                            <th class="px-4 py-3">ENTREGADA</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($trabajador->uniformidads as $uniformidad)
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
                                <td class="px-4 py-3 font-semibold border text-ms">{{ $uniformidad->created_at }}</td>
                                {{-- <td class="px-4 py-3 font-semibold border text-ms">{{ $trabajador->tallaCalzado }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
