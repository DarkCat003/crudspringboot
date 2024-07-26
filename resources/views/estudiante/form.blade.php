<div class="space-y-6">
    
    <div>
        <x-input-label for="nombres" :value="__('Nombres')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $estudiante['name'])" autocomplete="nombre" placeholder="Nombres"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="apellidos" :value="__('Apellidos')"/>
        <x-text-input id="apellido" name="apellido" type="text" class="mt-1 block w-full" :value="old('apellido', $estudiante['apellido'])" autocomplete="apellido" placeholder="Apellidos"/>
        <x-input-error class="mt-2" :messages="$errors->get('apellido')"/>
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $estudiante['email'])" autocomplete="email" placeholder="Email"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>
    <div>
        <x-input-label for="create_At" :value="__('Fecha de Creación')"/>
            <?php $fecha = $estudiante['createAt'];
                $fechaNueva = new DateTime($fecha);
            ?>
        <x-text-input id="create_At" name="createAt" type="date" class="mt-1 block w-full" :value="old('createAt', $fechaNueva->format('Y-m-d'))" placeholder="Createat"/>
        <x-input-error class="mt-2" :messages="$errors->get('createAt')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>