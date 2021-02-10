<div>
    <!-- Department -->
    <div class="mt-4">
        <x-label for="department" :value="__('Department')" />
        <select wire:model="departamento" name="department" id="department" :value="old('department')" required class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option value="0" selected >seleccionar...</option>
            @forelse($departamentos as $departament)
            <option value="{{ $departament->id }}">{{ $departament->nombre }}</option>
            @empty

            @endforelse
        </select>
    </div>

    <!-- City -->
    <div class="mt-4">
        <x-label for="city" :value="__('City')" />
        @if($departamento != 0)
        <select name="city" id="city" :value="old('city')" required class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @forelse($pSearch as $ciudad)
            <option value="{{ $ciudad->id }}">{{ ucfirst(strtolower($ciudad->nombre))  }}</option>
            @empty
            <option value="">seleccionar...</option>
            @endforelse
        </select>
        @else
        <select disabled name="city" id="city" :value="old('city')" required class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option value="" selected>seleccionar...</option>
        </select>
        @endif
    </div>
</div>
