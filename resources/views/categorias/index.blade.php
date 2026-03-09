<x-layout class="category index">
    <x-slot:menuExtra>
        <li><a href="/productos">Productos</a></li>
        <li><a href="/inventarios">Inventarios</a></li>
    </x-slot:menuExtra>
    <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100 mt-10 w-1/2 mx-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Categoría</th>
                    <th colspan="2">Descripción</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categorias as $categoria)
                    <tr>
                        {{-- Usamos $loop->iteration para el número de fila automático --}}
                        <th>{{ $loop->iteration }}</th>
                        <td><a href="/categorias/{{ $categoria->uuid }}/edit">{{ $categoria->nombre }}</a></td>
                        <td><a href="/categorias/{{ $categoria->uuid }}/edit">{{ $categoria->descripcion }}</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No hay categorías registradas</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="flex justify-center mt-8">
        <a href="/categorias/create" class="btn btn-neutral w-1/4">Agregar Categoría</a>
    </div>
</x-layout>