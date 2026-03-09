<x-layout class="category create">
    <x-slot:menuExtra>
        <li><a href="/categorias">Categorías</a></li>
    </x-slot:menuExtra>
    <div class="card card-border bg-base-300 w-96 h-auto mx-auto mt-15 mb-15 shadow-xl">
        <div class="card-body mx-auto w-75">

            <h2 class="card-title mx-auto mb-6">Editar categoría</h2>

            <form action="/categorias/{{ $categoria->uuid }}" method="post" id="form_edit_category" class="space-y-4">
                @csrf
                @method('PATCH')
                <div class="flex flex-col">
                    <label for="nombre" class="label label-text pb-1">Nombre: </label>
                    <input type="text" name="nombre" id="nombre"
                        class="input input-bordered w-full @error('nombre') input-error @enderror"
                        placeholder="Nombre de la categoría" value="{{ old('nombre', $categoria->nombre ?? '') }}">
                    <x-forms.validaciones field="nombre"></x-forms.validaciones>
                </div>

                <div class="flex flex-col">
                    <label for="descripcion" class="label label-text pb-1">Descripción: </label>
                    <textarea name="descripcion" id="descripcion" placeholder="Descripción de la categoría"
                        class="textarea textarea-sm h-24 @error('descripcion') textarea-error @enderror">{{ old('descripcion', $categoria->descripcion ?? '') }}</textarea>
                    <x-forms.validaciones field="descripcion"></x-forms.validaciones>
                </div>

            </form>

            <form action="/categorias/{{ $categoria->uuid }}" method="post" id="delete_form_ctaegory">
                @csrf
                @method('DELETE')
            </form>

            <div class="card-actions flex flex-row justify-around gap-4 mt-3">
                <button class="btn btn-neutral flex-1" type="submit" form="form_edit_category">Actualizar</button>
                <button class="btn btn-error flex-1" type="submit" form="delete_form_ctaegory">Eliminar</button>
            </div>

            <a href="/categorias" class="text-center my-auto text-xs text-base-content/50 mt-auto tracking-wider">Volver</a>
        </div>
    </div>

</x-layout>