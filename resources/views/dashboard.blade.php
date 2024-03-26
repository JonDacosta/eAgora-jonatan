<x-layout>
    <div class='container-fluid '>
        <div class="container mx-auto border-3 border-x-neutral-500 border-gray-600">
            <div class="flex align-center justify-between">

                <h1 class="text-4xl mb-4">Dashboard</h1>
                <a class="" href="create" :active="request() - > routeIs('create')">
                    <button
                        class="group relative inline-flex h-12 items-center justify-center overflow-hidden rounded-md bg-green-700 px-6 font-medium text-neutral-200"><span>Nuevo
                            Procedimiento</span>
                        <div
                            class="absolute inset-0 flex h-full w-full justify-center [transform:skew(-12deg)_translateX(-100%)] group-hover:duration-1000 group-hover:[transform:skew(-12deg)_translateX(100%)]">
                            <div class="relative h-full w-8 bg-white/20"></div>
                        </div>
                    </button>
                </a>
            </div>
            <span class="mb-2 text-gray-500">Crea y gestiona inscripciones, entradas, bonos o pagos.</span>
            @if (session()->has('mensaje'))
                <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 marginy-3">
                    {{ session('mensaje')}}
                </div>
            @endif

            <!-- Procedures -->
            <livewire:show-procedures />

        </div>
    </div>
</x-layout>
