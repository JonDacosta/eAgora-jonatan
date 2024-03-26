<div>
    <!-- -->

    <div class="container mx-auto py-6">
        <div class="overflow-x-auto">
            <div class="min-w-full overflow-hidden rounded-lg shadow-xs">
                <table class="min-w-full bg-white my-3 border-1">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Título</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tipo de Publicación
                            </th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Reservas</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Estado</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Creado</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Caducidad</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">

                        @forelse ($procedures as $procedure)
                            <tr class="my-2 py-2 border-b">
                                <td class="text-left  py-3 px-4"><b>{{ $procedure->title }}</b></td>
                                <td class="text-left text-gray-500 py-3 px-4">
                                    {{ \App\Enums\PublicationEnum::getStringValue($procedure->publication_type) }}
                                </td>
                                <td class="text-left text-gray-500 py-3 px-4">{{ $procedure->reservations }}
                                </td>
                                <td
                                    class="text-center rounded border-2 border-white border-spacing-y-0.5 p-2 font-medium @if ($procedure->status == \App\Enums\StatusEnum::PENDING) status-pending @elseif($procedure->status == \App\Enums\StatusEnum::IN_PROGRESS) status-in-progress @else status-done @endif">

                                    {{ \App\Enums\StatusEnum::getStringValue($procedure->status) }}</td>
                                <td class="text-left text-gray-500 py-3 px-4">
                                    {{ \Carbon\Carbon::parse($procedure->created_at)->format('Y-m-d') }}</td>
                                <td class="text-left text-gray-500 py-3 px-4">
                                    {{ \Carbon\Carbon::parse($procedure->expiration)->format('Y-m-d') }}</td>
                                <td class="text-left text-gray-500 py-3 px-4 flex justify-between items-center">
                                    <a href="{{ url('/edit/' . $procedure->id) }}">
                                        <button class=""><svg class="h-8 w-8 text-black" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                                <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                                <line x1="16" y1="5" x2="19" y2="8" />
                                            </svg></button>
                                    </a>
                                    <button wire:click="$dispatch('showAlert', {{ $procedure->id }})"
                                        class=""><svg class="h-8 w-8 text-black" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <line x1="4" y1="7" x2="20" y2="7" />
                                            <line x1="10" y1="11" x2="10" y2="17" />
                                            <line x1="14" y1="11" x2="14" y2="17" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg></button>
                                </td>
                            </tr>

                        @empty
                            <p class="text-sm p-3 text-center text-gray-600">No hay Procedimientos</p>
                        @endforelse

                    </tbody>
                </table>
                <div class="my-2">
                    {{ $procedures->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- -->
</div>

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('showAlert', procedureId => {
            Swal.fire({
                title: 'Eliminar Procedimiento?',
                text: "Un procedimiento borrado no podrá recuperarse!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, Eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('deleteProcedure', {procedure: procedureId })
                    Swal.fire(
                        'Se eliminó el procedimiento!',
                        'Eliminado!',
                        'success'
                    )
                }
            })
        })
    </script>
@endpush
