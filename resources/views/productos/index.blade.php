<x-layout class="products index">
    <x-slot:menuExtra>
        <li><a href="/categorias">Categorías</a></li>
        <li><a href="/inventarios">Inventarios</a></li>
    </x-slot:menuExtra>
    <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100 mt-10 w-1/2 mx-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Nombre</th>
                    <th>Precio de venta</th>
                    <th>Precio de compra</th>
                    <th>Unidad medida</th>
                    <th>Categoría</th>
                </tr>
            </thead>
            <tbody>
                @forelse($productos as $producto)
                    <tr>
                        {{-- Usamos $loop->iteration para el número de fila automático --}}
                        <th>{{ $loop->iteration }}</th>
                        <td><a href="/productos/{{ $producto->uuid }}/edit">{{ $producto->nombre }}</a></td>
                        <td><a href="/productos/{{ $producto->uuid }}/edit">{{ $producto->precio_venta }}</a></td>
                        <td><a href="/productos/{{ $producto->uuid }}/edit">{{ $producto->precio_compra }}</a></td>
                        <td><a href="/productos/{{ $producto->uuid }}/edit">{{ $producto->unidad_medida }}</a></td>
                        <td>@foreach ($categorias as $categoria)
                            <a href="/productos/{{ $producto->uuid }}/edit">{{ $categoria->nombre }}</a>
                        @endforeach</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No hay productos registrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="flex justify-center mt-8">
        <a href="/productos/create" class="btn btn-neutral w-1/4">Agregar Producto</a>
    </div>
</x-layout>