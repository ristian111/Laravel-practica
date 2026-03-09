<x-layout class="product create">
    <x-slot:menuExtra>
        <li><a href="/productos">Productos</a></li>
    </x-slot:menuExtra>
    <div class="card card-border bg-base-300 w-96 h-auto mx-auto mt-15 mb-15 shadow-xl">
        <div class="card-body mx-auto w-75">

            <h2 class="card-title mx-auto mb-6">Editar producto</h2>

            <form action="/productos/{{ $producto->uuid }}" method="post" id="form_edit_product" class="space-y-4">
                @csrf
                @method('PATCH')
                <div class="flex flex-col">
                    <label for="nombre" class="label label-text pb-1">Nombre: </label>
                    <input type="text" name="nombre" id="nombre"
                        class="input input-bordered w-full @error('nombre') input-error @enderror"
                        placeholder="Nombre del producto" value="{{ old('nombre', $producto->nombre ?? '') }}">
                    <x-forms.validaciones field="nombre"></x-forms.validaciones>
                </div>

                <div class="flex flex-col">
                    <label for="precio_venta" class="label label-text pb-1">Precio de venta: </label>
                    <input type="text" name="precio_venta" id="precio_venta"
                        class="input input-bordered w-full @error('precio_venta') input-error @enderror"
                        placeholder="Precio de venta del producto" value="{{ old('precio_venta', $producto->precio_venta ?? '') }}">
                    <x-forms.validaciones field="precio_venta"></x-forms.validaciones>
                </div>

                <div class="flex flex-col">
                    <label for="precio_compra" class="label label-text pb-1">Precio de compra: </label>
                    <input type="text" name="precio_compra" id="precio_compra"
                        class="input input-bordered w-full @error('precio_compra') input-error @enderror"
                        placeholder="Precio pagado por el producto" value="{{ old('precio_compra', $producto->precio_compra ?? '') }}">
                    <x-forms.validaciones field="precio_compra"></x-forms.validaciones>
                </div>

                <div class="flex flex-col">
                    <label for="unidad_medida" class="label label-text pb-1">Unidad medida: </label>
                    <input type="text" name="unidad_medida" id="unidad_medida"
                        class="input input-bordered w-full @error('unidad_medida') input-error @enderror"
                        placeholder="Unidad de medida del producto" value="{{ old('unidad_medida', $producto->unidad_medida ?? '') }}">
                    <x-forms.validaciones field="unidad_medida"></x-forms.validaciones>
                </div>

                <div class="flex flex-col">
                    <label for="categoria_id" class="label label-text pb-1">Categoría: </label>
                    <select name="categoria_id" id="categoria_id"
                        class="select select-bordered w-full @error('categoria_id') select-error @enderror">
                        <option value="" disabled {{ old('categoria_id', $producto->categoria->uuid ?? '') == '' ? 'selected' : '' }}>Selecciona una categoría</option>

                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->uuid }}" {{ old('categoria_id', $producto->categoria->uuid ?? '') == $categoria->uuid ? 'selected' : '' }}>
                                {{ $categoria->nombre }}
                            </option>
                        @endforeach
                    </select>
                    <x-forms.validaciones field="categoria_id"></x-forms.validaciones>
                </div>
            </form>

            <form action="/productos/{{ $producto->uuid }}" method="post" id="delete_form_ctaegory">
                @csrf
                @method('DELETE')
            </form>

            <div class="card-actions flex flex-row justify-around gap-4 mt-3">
                <button class="btn btn-neutral flex-1" type="submit" form="form_edit_product">Actualizar</button>
                <button class="btn btn-error flex-1" type="submit" form="delete_form_ctaegory">Eliminar</button>
            </div>

            <a href="/productos" class="text-center my-auto text-xs text-base-content/50 mt-auto tracking-wider">Volver</a>
        </div>
    </div>

</x-layout>