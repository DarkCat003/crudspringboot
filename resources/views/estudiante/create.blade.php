<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }} Estudiante
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Create') }} Estudiante</h1>
                            <p class="mt-2 text-sm text-gray-700">Add a new {{ __('Estudiante') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('estudiantes.index') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="max-w-xl py-2 align-middle">
                                <form method="POST" action="{{ route('estudiantes.store') }}"  role="form" enctype="multipart/form-data">
                                    @csrf

                                    <div class="space-y-6">
    
                                        <div>
                                            <x-input-label for="nombres" :value="__('Nombres')"/>
                                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"  autocomplete="nombre" placeholder="Nombres"/>
                                            <x-input-error class="mt-2" :messages="$errors->get('name')"/>
                                        </div>
                                        <div>
                                            <x-input-label for="apellidos" :value="__('Apellidos')"/>
                                            <x-text-input id="apellido" name="apellido" type="text" class="mt-1 block w-full" autocomplete="apellido" placeholder="Apellidos"/>
                                            <x-input-error class="mt-2" :messages="$errors->get('apellido')"/>
                                        </div>
                                        <div>
                                            <x-input-label for="email" :value="__('Email')"/>
                                            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" autocomplete="email" placeholder="Email"/>
                                            <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                                        </div>
                                        <div>
                                            <x-input-label for="create_At" :value="__('Fecha de Creación')"/>
                                            <x-text-input id="create_At" name="createAt" type="date" class="mt-1 block w-full" autocomplete="createAt" placeholder="Createat"/>
                                            <x-input-error class="mt-2" :messages="$errors->get('createAt')"/>
                                        </div>
                                    
                                        <div class="flex items-center gap-4">
                                            <x-primary-button>Submit</x-primary-button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
