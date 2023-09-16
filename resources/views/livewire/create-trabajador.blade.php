<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
            <form wire:submit="save">
                <!-- This is an example component -->
                <div
                    class="w-full pt-6 overflow-hidden text-3xl font-bold text-center text-black bg-gray-300 shadow h-14 sm:rounded-md ">
                    Formulario Añadir Trabajadores
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
                                        <input type="text" name="name" placeholder="Nombre del Trabajador"
                                            id="name" wire:model="name" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="surname"
                                            class="block text-sm font-medium text-gray-700">Apellidos</label>
                                        <input type="text" name="surname" placeholder="Apellidos del trabajador"
                                            id="surname" wire:model="surname" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="dni"
                                            class="block text-sm font-medium text-gray-700">DNI</label>
                                        <input type="text" name="dni" placeholder="000000000-X" id="dni"
                                            required wire:model="dni" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="destiny"
                                            class="block text-sm font-medium text-gray-700">DESTINO</label>
                                        <input type="text" name="destiny" placeholder="Destino del trabajador"
                                            id="destiny" wire:model="destiny" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">EMAIL</label>
                                        <input type="email" name="email" placeholder="xxx@xxx.com" id="email"
                                            wire:model="email" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tallaCamiseta" class="block text-sm font-medium text-gray-700">TALLA
                                            CAMISETA</label>
                                        <input type="text" name="tallaCamiseta" placeholder="XXXL-XXL-XL-L-M-S"
                                            wire:model="tallaCamiseta" id="tallaCamiseta" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tallaPantalon" class="block text-sm font-medium text-gray-700">TALLA
                                            PANTALÓN</label>
                                        <input type="text" name="tallaPantalon" placeholder="38-60"
                                            id="tallaPantalon" wire:model="tallaPantalon" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tallaCalzado" class="block text-sm font-medium text-gray-700">#
                                            CALZADO</label>
                                        <input type="text" name="tallaCalzado" placeholder="38-60" id="tallaCalzado"
                                            wire:model="tallaCalzado" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>


                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Requisition
                                        date</label>
                                    <input type="text" name="last-name" placeholder="09/02/2021" id="last-name"
                                        autocomplete="family-name"
                                        class="block w-full mt-1 text-gray-300 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                </div> --}}
                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Required
                                        date</label>
                                    <input type="text" name="last-name" placeholder="09/02/2021" id="last-name"
                                        autocomplete="family-name"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div> --}}




                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">
                                        Designation</label>
                                    <input type="text" name="last-name" placeholder="Gate Pass Officer"
                                        id="last-name" autocomplete="family-name"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div> --}}



                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">
                                        Location</label>
                                    <select id="country" name="country" autocomplete="country"
                                        class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>Head office</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div> --}}
                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">
                                        project</label>
                                    <select id="country" name="country" autocomplete="country"
                                        class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>construction Road</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div> --}}



                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">
                                        Gender</label>
                                    <select id="country" name="country" autocomplete="country"
                                        class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>Male</option>
                                        <option>female</option>
                                        <option>other</option>
                                    </select>
                                </div> --}}
                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">
                                        Age</label>
                                    <input type="text" name="last-name" placeholder="above 18" id="last-name"
                                        autocomplete="family-name"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div> --}}


                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">
                                        No of Vacanices</label>
                                    <select id="country" name="country" autocomplete="country"
                                        class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div> --}}
                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">
                                        Job Lavel</label>
                                    <input type="text" name="last-name" id="last-name"
                                        placeholder="internee officer" autocomplete="family-name"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div> --}}



                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">
                                        Department</label>
                                    <select id="country" name="country" autocomplete="country"
                                        class="block w-full px-3 py-2 mt-3 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option class="mt-2">HR</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div> --}}
                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">
                                        Section</label>
                                    <input type="text" name="last-name" placeholder="gate managment"
                                        id="last-name" autocomplete="family-name"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div> --}}



                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">
                                        Academic Qualification</label>
                                    <input type="text" name="last-name" placeholder="BBA" id="last-name"
                                        autocomplete="family-name"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div> --}}
                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">
                                        Required experience</label>
                                    <input type="text" name="last-name" placeholder="2 years or above"
                                        id="last-name" autocomplete="family-name"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div> --}}

                                    {{-- <div class="col-span-6 sm:col-span-6">
                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                        description</label>
                                    <input type="text" name="email-address"
                                        placeholder="1- 334343434 It should be an editor to fill the job description of around 5 to 10 Lines ."
                                        id="email-address" autocomplete="email"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div> --}}


                                    {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">
                                        No. of meetings/interviews</label>
                                    <input type="text" name="last-name" placeholder="3" id="last-name"
                                        autocomplete="family-name"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div> --}}


                                </div>
                                {{-- <fieldset class="mt-8 ">
                                <legend class=" text-base  text-1.5xl font-medium text-gray-900">Job Skill</legend>
                                <div class="mt-2 space-y-4">
                                    <div class="flex place-items-center">
                                        <div class="flex items-center h-5">
                                            <input id="comments" name="comments" type="checkbox"
                                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="comments" class="text-gray-700 font-regular">Accounting</label>

                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="comments" name="comments" type="checkbox"
                                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="comments"
                                                class="text-gray-700 font-regular">Bookkeeping</label>

                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="comments" name="comments" type="checkbox"
                                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="comments" class="text-gray-700 font-regular">Auditing</label>

                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="comments" name="comments" type="checkbox"
                                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="comments" class="text-gray-700 font-regular">written
                                                communication</label>

                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="comments" name="comments" type="checkbox"
                                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="comments" class="text-gray-700 font-regular">Team
                                                Managment</label>

                                        </div>
                                    </div>
                                    <legend class=" text-base  text-1.5xl font-medium text-gray-900">
                                        Interview/type
                                    </legend>
                                    <div class="mt-2 space-y-4">
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="comments" name="comments" type="checkbox"
                                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="comments"
                                                    class="text-gray-700 font-mediuregular">Technical</label>

                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="comments" name="comments" type="checkbox"
                                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="comments"
                                                    class="text-gray-700 font-mediuregular">HR</label>

                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="comments" name="comments" type="checkbox"
                                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="comments"
                                                    class="text-gray-700 font-mediuregular">Final</label>

                                            </div>
                                        </div>

                                        <legend class=" text-base  text-1.5xl font-medium text-gray-900">
                                            Competencies
                                        </legend>
                                        <div class="space-y-4 ">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="comments" name="comments" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="text-sm ">
                                                    <label for="comments"
                                                        class="ml-3 text-gray-700 font-mediuregular">Analysis</label>

                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="comments" name="comments" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="comments" class="text-gray-700 font-mediuregular">R &
                                                        D</label>

                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="comments" name="comments" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="comments"
                                                        class="text-gray-700 font-mediuregular">Bookkeeping</label>

                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="comments" name="comments" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="comments"
                                                        class="text-gray-700 font-mediuregular">Quick
                                                        Larner</label>

                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="comments" name="comments" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="comments" class="text-gray-700 font-mediuregular">Team
                                                        Managment</label>

                                                </div>
                                            </div>


                                        </div>
                            </fieldset> --}}

                            </div>
                            <div class="px-4 py-3 text-right bg-blue sm:px-6">
                                {{-- <button type="submit"
                                    class="inline-flex justify-center w-24 px-4 py-2 mr-4 text-sm font-medium text-white bg-gray-600 border border-transparent rounded-md shadow-sm ring ring-gray-500 ring-offset-4 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    New
                                </button> --}}
                                {{-- <button type="submit"
                                    class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium bg-indigo-600 border border-transparent rounded-md shadow-sm ring ring-indigo-500 ring-offset-4 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    Save
                                </button> --}}
                                <div class="flex flex-col w-full h-full mt-5">
                                    <button type="submit"
                                        class="px-5 py-3 mb-3 text-base font-medium text-white transition duration-200 bg-blue-500 rounded-full hover:bg-blue-600 active:bg-blue-700">
                                        AÑADIR TRABAJADOR
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
                {{-- </section> --}}

                <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                        <div class=""></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
