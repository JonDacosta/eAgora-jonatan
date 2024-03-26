<div class="w-100">
    <form wire:submit.prevent="editProcedure" class="md:w-1/2 space-y-5 justify-center">
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Título:</label>
            <input wire:model="title" type="text" id="title" name="title"
                class="p-1 form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            @error('title')
                <livewire:show-alert :message="$message" />
            @enderror
        </div>
        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-bold mb-2">Estado:</label>
            <select wire:model="status" id="status" name="status"
                class="p-1 form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                <option value="">Seleccionar una opción</option>
                @foreach ([\App\Enums\StatusEnum::PENDING, \App\Enums\StatusEnum::IN_PROGRESS, \App\Enums\StatusEnum::DONE] as $value)
                    <option value="{{ $value }}">{{ \App\Enums\StatusEnum::getStringValue($value) }}</option>
                @endforeach


            </select>
            @error('status')
                <livewire:show-alert :message="$message" />
            @enderror
        </div>
        <div class="mb-4">
            <label for="publication_type" class="block text-gray-700 font-bold mb-2">Tipo de Publicación:</label>
            <select wire:model="publication_type" id="publication_type" name="publication_type"
                class="p-1 form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                <option value="">Seleccionar una opción</option>
                @foreach ([\App\Enums\PublicationEnum::EVENT, \App\Enums\PublicationEnum::REGISTER, \App\Enums\PublicationEnum::VOUCHER, \App\Enums\PublicationEnum::PAYMENT] as $value)
                    <option value="{{ $value }}">{{ \App\Enums\PublicationEnum::getStringValue($value) }}
                    </option>
                @endforeach


            </select>
            @error('publication_type')
                <livewire:show-alert :message="$message" />
            @enderror
        </div>

        <div class="mb-4">
            <label for="id_person" class="block text-gray-700 font-bold mb-2">ID Persona</label>
            <input wire:model="id_person" type="number" id="id_person" name="id_person"
                class="p-1 form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            @error('id_person')
                <livewire:show-alert :message="$message" />
            @enderror
        </div>

        <div class="mb-4">
            <label for="reservations" class="block text-gray-700 font-bold mb-2">Reservas:</label>
            <input wire:model="reservations" type="number" id="reservations" name="reservations"
                class="p-1 form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            @error('reservations')
                <livewire:show-alert :message="$message" />
            @enderror
        </div>



        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar Cambios</button>
        </div>
    </form>
</div>
