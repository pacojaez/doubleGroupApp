<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
            <form wire:submit="update">
                {{-- <input type="hidden" name="id" wire:model="id" autocomplete="given-name" value="{{ $trabajador->id }}"> --}}
                <!-- This is an example component -->
                <div
                    class="w-full pt-6 overflow-hidden text-3xl font-bold text-center text-black bg-gray-300 shadow h-14 sm:rounded-md ">
                    Formulario ACTUALIZAR TRABAJADOR
                </div>

                <section class="relative p-0 m-0 text-gray-600 body-font"></section>


                <div class="container mx-auto">
                    <div class="flex flex-col w-full mb-1 text-center">
                    </div>
                    <div class="mt-10 md:mt-0 md:col-span-2">
                        {{-- <form action="#" method="POST"> --}}
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="px-2 py-8 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="name"
                                            class="block text-sm font-medium text-gray-700">Nombre</label>
                                        <input type="text" name="name" placeholder="{{ $trabajador->name }}"
                                            value="{{ $trabajador->name }}" id="name" wire:model="name"
                                            {{-- value="{{ old('name', is_null($trabajador) ? '' : $trabajador->name) }}" --}} {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="surname"
                                            class="block text-sm font-medium text-gray-700">Apellidos</label>
                                        <input type="text" name="surname" placeholder="{{ $trabajador->surname }}"
                                            id="surname" wire:model="surname" {{-- autocomplete="given-name" --}}
                                            value="{{ $trabajador->surname }}" {{-- value="{{ old('surname', is_null($trabajador) ? '' : $trabajador->surname) }}" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="dni"
                                            class="block text-sm font-medium text-gray-700">DNI</label>
                                        <input type="text" name="dni" value="{{ $trabajador->dni }}"
                                            id="dni" wire:model="dni" {{-- autocomplete="given-name" --}} {{-- value="{{ old('dni', is_null($trabajador) ? '' : $trabajador->dni) }}" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="destiny"
                                            class="block text-sm font-medium text-gray-700">DESTINO</label>
                                        <input type="text" name="destiny" value="{{ $trabajador->destiny }}"
                                            id="destiny" wire:model="destiny" {{-- autocomplete="given-name" --}}
                                            {{-- value="{{ old('destiny', is_null($trabajador) ? '' : $trabajador->destiny) }}" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">EMAIL</label>
                                        <input type="email" name="email" value="{{ $trabajador->email }}"
                                            id="email" wire:model="email" {{-- autocomplete="given-name" --}}
                                            {{-- value="{{ old('email', is_null($trabajador) ? '' : $trabajador->email) }}" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tallaCamiseta" class="block text-sm font-medium text-gray-700">TALLA
                                            CAMISETA</label>
                                        <input type="text" name="tallaCamiseta"
                                            placeholder="{{ $trabajador->tallaCamiseta }}" wire:model="tallaCamiseta"
                                            value="{{ $trabajador->tallaCamiseta }}" id="tallaCamiseta"
                                            {{-- autocomplete="given-name" --}} {{-- value="{{ old('tallaCamiseta', is_null($trabajador) ? '' : $trabajador->tallaCamiseta) }}" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tallaPantalon" class="block text-sm font-medium text-gray-700">TALLA
                                            PANTALÓN</label>
                                        <input type="text" name="tallaPantalon"
                                            value="{{ $trabajador->tallaPantalon }}" id="tallaPantalon"
                                            wire:model="tallaPantalon" {{-- autocomplete="given-name" --}} {{-- value="{{ old('tallaPantalon', is_null($trabajador) ? '' : $trabajador->tallaPantalon) }}" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tallaCalzado" class="block text-sm font-medium text-gray-700">#
                                            CALZADO</label>
                                        <input type="text" name="tallaCalzado"
                                            value="{{ $trabajador->tallaCalzado }}"
                                            id="{{ $trabajador->tallaCalzado }}" wire:model="tallaCalzado"
                                            value="{{ $trabajador->tallaCalzado }}" {{-- value="{{ old('tallaCalzado', is_null($trabajador) ? '' : $trabajador->tallaCalzado) }}" --}}
                                            {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                                <div class="px-4 py-3 text-right bg-white sm:px-6">
                                    {{-- <button type="submit" wire:click="delete({{ $trabajador->id }})"
                                        class="inline-flex justify-center w-24 px-4 py-2 mr-4 text-sm font-medium text-white bg-gray-600 border border-transparent rounded-md shadow-sm ring ring-gray-500 ring-offset-4 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        BORRAR
                                    </button> --}}
                                    <td>
                                        {{-- <button
                                            wire:click="$dispatch('openModal', { component: 'delete-trabajador', arguments: { id: {{ $trabajador->id }} }})">BORRAR
                                            TRABAJADOR</button> --}}
                                        {{-- <button type="button" wire:click="deleteId({{ $trabajador->id }})"
                                            class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium bg-red-600 border border-transparent rounded-md shadow-sm ring ring-red-500 ring-offset-4 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500"
                                            data-toggle="modal" data-target="#exampleModal">DELETE</button> --}}
                                        {{-- <button onclick="Livewire.emit('openModal', 'delete-trabajador-modal')">Open
                                            Modal</button> --}}
                                        {{-- <button type="button" class="btn btn-danger btn-sm"
                                            x-on:click="return confirm('Are you sure?') ? @this.kill({{ $trabajador->id }}) : false">Delete</button> --}}
                                        {{-- @if ($confirming === $trabajador->id)
                                            <button wire:click="kill({{ $confirming }})"
                                                class="w-32 px-4 py-1 text-white bg-red-800 border rounded hover:bg-red-600">
                                                ¿Seguro?
                                            </button>
                                        @else
                                            <button wire:click="confirmDelete({{ $trabajador->id }})"
                                                class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-gray-600 border border-transparent rounded shadow-sm ring ring-indigo-500 ring-offset-4 hover:bg-red-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                BORRAR
                                            </button>
                                        @endif --}}
                                    </td>
                                    <button type="button" wire:click="update({{ $trabajador->id }})"
                                        class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium bg-indigo-600 border border-transparent rounded-md shadow-sm ring ring-indigo-500 ring-offset-4 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        ACTUALIZAR
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- </form> --}}
                    </div>
                    {{-- </section> --}}

                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-5">
                            <div class="">
                            </div>
                        </div>
                    </div>
            </form>

            <!-- Modal -->
            <x-confirmation-modal wire:model="confirmingUserDeletion">
                <x-slot name="title">
                    Delete Account
                </x-slot>

                <x-slot name="content">
                    Are you sure you want to delete your account? Once your account is deleted, all of its resources and
                    data will be permanently deleted.
                </x-slot>

                <x-slot name="footer">
                    <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                        Nevermind
                    </x-secondary-button>

                    <x-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                        Delete Account
                    </x-danger-button>
                </x-slot>
            </x-confirmation-modal>

        </div>
    </div>
</div>
